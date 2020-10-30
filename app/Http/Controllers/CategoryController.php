<?php


namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function __invoke($slug)
    {
        $category = Category::query()
            ->where('slug', $slug)
            ->firstOrFail();

        $posts = $category->posts()
            ->where('is_published',true)
            ->orderBy('id','desc')
            ->get();

        $categories = Category::all();

        $recent_posts = Post::query()
            ->where('is_published',true)
            ->orderBy('created_at','desc')
            ->take(5)
            ->get();

        return view('category', [

            'category' => $category,
            'posts' => $posts,
            'categories' => $categories,
            'recent_posts' => $recent_posts
        ]);
    }
}
