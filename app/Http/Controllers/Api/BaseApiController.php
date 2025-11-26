<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Database\Eloquent\Model;

class BaseApiController extends Controller
{
    /**
     * The Eloquent model class this controller manages.
     * Example: protected $model = \App\Models\Products::class;
     *
     * @var string
     */
    protected $model;

    public function index(Request $request)
    {
        $model = $this->model;
        $instance = new $model;

        $query = $model::query();

        // If the model defines a language relation, allow filtering by language
        if (method_exists($instance, 'language')) {
            // eager-load language for convenience
            $query->with('language');

            if ($request->filled('language')) {
                $lang = $request->input('language');

                if (is_numeric($lang)) {
                    $query->where('language_id', (int) $lang);
                } else {
                    // allow filtering by language code or name
                    $query->whereHas('language', function ($q) use ($lang) {
                        $q->where('code', $lang)
                          ->orWhere('name', $lang);
                    });
                }
            }
        }

        $perPage = (int) $request->input('per_page', 15);

        if ($request->boolean('all')) {
            return $query->get();
        }

        return $query->paginate($perPage);
    }

    public function show($id)
    {
        $model = $this->model;
        $instance = new $model;

        $query = $model::query();

        // If the model defines a language relation, eager-load it
        if (method_exists($instance, 'language')) {
            $query->with('language');
        }

        return $query->findOrFail($id);
    }

    public function store(Request $request)
    {
        $model = $this->model;
        $instance = new $model;
        $data = $request->only($instance->getFillable());
        $item = $model::create($data);
        return response($item, Response::HTTP_CREATED);
    }

    public function update(Request $request, $id)
    {
        $model = $this->model;
        $instance = $model::findOrFail($id);
        $data = $request->only($instance->getFillable());
        $instance->update($data);
        return $instance;
    }

    public function destroy($id)
    {
        $model = $this->model;
        $instance = $model::findOrFail($id);
        $instance->delete();
        return response(null, Response::HTTP_NO_CONTENT);
    }
}
