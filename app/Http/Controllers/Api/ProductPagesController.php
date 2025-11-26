<?php

namespace App\Http\Controllers\Api;

use App\Models\Productpage;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ProductPagesController extends BaseApiController
{
    protected $model = Productpage::class;

    public function index(Request $request)
    {
        $data = parent::index($request);

        // Convert image paths to full URLs
        $collection = is_a($data, 'Illuminate\Pagination\LengthAwarePaginator')
            ? $data->getCollection()
            : $data;

        $collection->transform(function ($item) {
            $imageFields = ['slide_image_1', 'slide_image_2', 'slide_image_3'];

            foreach ($imageFields as $field) {
                if (!empty($item->$field) && !filter_var($item->$field, FILTER_VALIDATE_URL)) {
                    $item->$field = url(Storage::url($item->$field));
                }
            }

            return $item;
        });

        return $data;
    }

    public function show($id)
    {
        $item = parent::show($id);

        // Convert image paths to full URLs
        $imageFields = ['slide_image_1', 'slide_image_2', 'slide_image_3'];

        foreach ($imageFields as $field) {
            if (!empty($item->$field) && !filter_var($item->$field, FILTER_VALIDATE_URL)) {
                $item->$field = url(Storage::url($item->$field));
            }
        }

        return $item;
    }
}
