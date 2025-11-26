<?php

namespace App\Http\Controllers\Api;

use App\Models\News;

class NewsController extends BaseApiController
{
    protected $model = News::class;
}
