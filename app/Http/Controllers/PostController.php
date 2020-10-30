<?php


namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\Category;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function show($slug)
    {
        $post = Post::query()
            ->where('is_published', true)
            ->where('slug', $slug)
            ->firstOrFail();

        $categories = Category::all();

        $recent_posts = Post::query()
            ->where('is_published', true)
            ->orderBy('created_at', 'desc')
            ->take(5)
            ->get();

        return view('post', [
            'post' => $post,
            'categories' => $categories,
            'recent_posts' => $recent_posts,
        ]);
    }

        public function search(Request $request)
    {
        $key = trim($request->get('q'));

        $posts = Post::query()
            ->where('title', 'like', "%{$key}%")
            ->orWhere('content', 'like', "%{$key}%")
            ->orderBy('created_at', 'desc')
            ->paginate(env('PAGE_NUMBER'));

        $categories = Category::all();

        $recent_posts = Post::query()
            ->where('is_published', true)
            ->orderBy('created_at', 'desc')
            ->take(5)
            ->get();

        return view('search', [
            'key' => $key,
            'posts' => $posts,
            'categories' => $categories,
            'recent_posts' => $recent_posts
        ]);
    }
}
