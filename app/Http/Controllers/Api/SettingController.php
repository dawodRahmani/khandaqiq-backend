<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Setting;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class SettingController extends Controller
{
    public function index()
    {
        $settings = Setting::all()->mapWithKeys(function ($setting) {
            $value = $setting->value;

            // Convert storage path to full URL for image types
            if ($setting->type === 'image' && $value && !filter_var($value, FILTER_VALIDATE_URL)) {
                $value = url(Storage::url($value));
            }

            return [$setting->key => [
                'value' => $value,
                'type' => $setting->type,
            ]];
        });

        return response()->json([
            'success' => true,
            'data' => $settings,
        ]);
    }
}
