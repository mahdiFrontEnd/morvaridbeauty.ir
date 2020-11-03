<?php

namespace App\Http\Controllers\Application\V1;

use App\Model\Category;
use App\Model\Comment;
use App\Model\News;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Cache;

class NewsController extends Controller
{
    public function categories()
    {

        $categories = Cache::remember("APPLICATION_CATEGORIES_NEWS_", 600, function ()  {

          return Category::where('user_id', "=", 11)
                ->with(['news' => function ($q) {
                    return $q->select('id', 'category_id', 'image_path', 'image_path as thumbnail', 'image_path as app_resize_image', 'title', 'description as very_short_description')->orderBy("id", "DESC");
                }])
                ->whereHas('news')
                ->paginate(111);
        });

        return response()->json(['status' => 200, 'data' => $categories], 200);

    }

    public function get_news_data(Request $request, $news_id)
    {
        $news = Cache::remember("APPLICATION_NEWS_get_news11_data" . $news_id, 600, function () use ($news_id) {
            return News::select("id","title","description","image_path","image_path as app_resize_image","created_at as published_at")->find($news_id);

        });

        return response()->json($news);
    }
}
