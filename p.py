import re

migration_file = "2025_11_17_153253_create_all_page_tables.php"
output_folder = "models/"

# تبدیل نوع ستون به cast
def map_cast(column_type):
    if "boolean" in column_type:
        return "boolean"
    elif "integer" in column_type or "id" in column_type:
        return "integer"
    elif "date" in column_type:
        return "date"
    elif "enum" in column_type:
        return "string"
    else:
        return None

with open(migration_file, "r", encoding="utf-8") as f:
    content = f.read()

# پیدا کردن تمام جدول‌ها
tables = re.findall(r"Schema::create\('(\w+)', function \(Blueprint \$table\) {(.*?)}\);", content, re.DOTALL)

for table_name, body in tables:
    columns = re.findall(r"\$table->(\w+)\(['\"]?(\w+)['\"]?\)(->nullable\(\))?", body)
    
    fillable = []
    casts = {}
    foreigns = []

    for col_type, col_name, nullable in columns:
        if col_name == "id" or col_name in ["created_at", "updated_at"]:
            continue
        fillable.append(f"'{col_name}'")
        cast_type = map_cast(col_type)
        if cast_type:
            casts[col_name] = cast_type
        if col_type == "foreignId":
            foreigns.append((col_name, col_name.replace("_id","").title()))
    
    model_name = "".join([w.title() for w in table_name.split("_")])
    
    model_content = f"""<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class {model_name} extends Model
{{
    use HasFactory;

    protected $table = '{table_name}';

    protected $fillable = [{', '.join(fillable)}];

"""
    if casts:
        model_content += "    protected $casts = [\n"
        for k, v in casts.items():
            model_content += f"        '{k}' => '{v}',\n"
        model_content += "    ];\n\n"

    for fk, rel in foreigns:
        model_content += f"    public function {rel.lower()}()\n"
        model_content += f"    {{\n"
        model_content += f"        return $this->belongsTo({rel}::class);\n"
        model_content += f"    }}\n\n"

    model_content += "}\n"

    with open(f"{output_folder}{model_name}.php", "w", encoding="utf-8") as f:
        f.write(model_content)

print("Done! Models generated.")
