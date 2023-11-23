<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redis;

class IndexController extends Controller
{
    public function index()
    {
        $posts = Redis::get('blog_posts');
        $number = 1;

        // Eğer Redis'te veri yoksa, veritabanından al ve Redis'e kaydet
        if (!$posts) {
            $posts = Post::all();
            Redis::set('blog_posts', $posts->toJson());
            $feedback = "Cache Boş";
        } else {
            $posts = json_decode($posts);
            $feedback = "Redis'ten Geldi";
        }


        return view('blogs.index', compact('posts', 'feedback', 'number'));
    }

  
}
