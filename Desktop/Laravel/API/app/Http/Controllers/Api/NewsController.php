<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\CategoryResource;
use App\Http\Resources\newsByCategory;
use App\Http\Resources\NewsResource;
use App\Models\Category;
use App\Models\News;

class NewsController extends Controller
{
    public function newsByCategory($categoryId)
    {
        $category = Category::findOrFail($categoryId);
        $news = $category->news()->paginate(10);
        return newsByCategory::collection($news);
    }

    public function show($newsId)
    {
        $newsItem = News::findOrFail($newsId);
        return new NewsResource($newsItem);
    }

}


