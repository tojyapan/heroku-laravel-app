<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use App\Category;
use App\User;

class BlogController extends Controller
{
    protected $limit = 10;

    public function index()
    {
        $posts = Post::with('author')
            ->latestFirst()
            ->published()
            ->simplePaginate($this->limit);

        $categories = $this->getCategories();

        return view('blog.index', compact('posts', 'categories'));
    }

    public function show(Post $post)
    {
        $post->increment('view_count');
        $categories = $this->getCategories();

        return view("blog.show", compact('post', 'categories'));
    }

    public function category(Category $category)
    {
        $categoryName = $category->title;
        $categories = $this->getCategories();

        $posts = $category->posts()
                        ->with('author')
                        ->latestFirst()
                        ->published()
                        ->simplePaginate($this->limit);

        return view('blog.index', compact('posts', 'categoryName', 'categories'));
    }

    public function author(User $author)
    {
        $authorName = $author->name;
        $categories = $this->getCategories();

        $posts = $author->posts()
                        ->with('category')
                        ->latestFirst()
                        ->published()
                        ->simplePaginate($this->limit);

        return view('blog.index', compact('posts', 'authorName', 'categories'));

    }

    public function about()
    {
        $categories = $this->getCategories();

        return view('blog.about', compact('categories'));
    }

    private function getCategories()
    {
        $categories = Category::all();
        return $categories;
    }

}
