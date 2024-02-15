<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\News;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, ValidatesRequests;


    public function ToNewsByCategory(Request $request)
    {
        $categoryId = $request->input('categoryId');
        return view('news-list', ['categoryId' => $categoryId]);
    }


    public function NewsDetails(Request $request)
    {
        $newsId = $request->input('newsId');
        return view('news-detail', ['newsId' => $newsId]);
    }
    public function showCategories()
    {
        return view('index');
    }
}
