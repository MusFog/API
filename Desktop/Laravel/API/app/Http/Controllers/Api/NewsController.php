<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\News;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class NewsController extends Controller
{
    public function newsByCategory($categoryId)
    {
        $news = News::where('category_id', $categoryId)
            ->select(['id', 'title', 'created_at', 'description', 'likes_count', 'image'])
            ->paginate(10);

        return response()->json($news);
    }

    public function show($newsId)
    {
        $newsItem = News::findOrFail($newsId);

        return response()->json($newsItem);
    }
}


