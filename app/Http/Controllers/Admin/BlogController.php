<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\BlogCategory;
use App\Models\BlogPost;
use Illuminate\Http\Request;
use Inertia\Inertia;

class BlogController extends Controller
{
    public function index()
    {
        $posts = BlogPost::with('category')
            ->orderBy('created_at', 'desc')
            ->paginate(20);

        return Inertia::render('Admin/Blog/Index', [
            'posts' => $posts
        ]);
    }

    public function create()
    {
        $categories = BlogCategory::orderBy('name')->get();

        return Inertia::render('Admin/Blog/Create', [
            'categories' => $categories
        ]);
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'content' => 'required|string',
            'excerpt' => 'required|string|max:500',
            'category_id' => 'required|exists:blog_categories,id',
            'author' => 'string|max:255',
            'published_at' => 'nullable|date',
            'meta_title' => 'nullable|string|max:255',
            'meta_description' => 'nullable|string|max:255',
        ]);

        // Set default author if not provided
        if (empty($validated['author'])) {
            $validated['author'] = 'Anne Ruusmann';
        }

        // Auto-fill published_at with today if not provided and not explicitly null
        if (!isset($validated['published_at'])) {
            $validated['published_at'] = now();
        }

        $post = BlogPost::create($validated);

        return redirect()->route('admin.blog.index')
            ->with('success', 'Blog post created successfully!');
    }

    public function edit(BlogPost $post)
    {
        $categories = BlogCategory::orderBy('name')->get();

        return Inertia::render('Admin/Blog/Edit', [
            'post' => $post,
            'categories' => $categories
        ]);
    }

    public function update(Request $request, BlogPost $post)
    {
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'content' => 'required|string',
            'excerpt' => 'required|string|max:500',
            'category_id' => 'required|exists:blog_categories,id',
            'author' => 'string|max:255',
            'published_at' => 'nullable|date',
            'meta_title' => 'nullable|string|max:255',
            'meta_description' => 'nullable|string|max:255',
        ]);

        $post->update($validated);

        return redirect()->route('admin.blog.index')
            ->with('success', 'Blog post updated successfully!');
    }

    public function destroy(BlogPost $post)
    {
        $post->delete();

        return redirect()->route('admin.blog.index')
            ->with('success', 'Blog post deleted successfully!');
    }
}
