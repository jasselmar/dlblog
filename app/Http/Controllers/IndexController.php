<?php


namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\Category;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function __invoke()
    {

        $posts = Post::query()
            ->where('is_published',true)
            ->orderBy('id','desc')
            ->get();

        $featured_posts = Post::query()
            ->where('is_published',true)
            ->orderBy('id','desc')
            ->take(5)
            ->get();

        $categories = Category::all();


        $recent_posts = Post::query()
            ->where('is_published',true)
            ->orderBy('created_at','desc')
            ->take(5)
            ->get();

        return view('home', [
            'posts' => $posts,
            'categories' => $categories,
            'recent_posts' => $recent_posts
        ]);
    }
}
