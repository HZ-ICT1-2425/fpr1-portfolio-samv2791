<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;

class PagesController extends Controller
{
    public function showBlog(): View
    {
        return view('blog');
    }

    public function showBlogPage($id): View
    {
        if ($id > 0 && $id < 6) {
            return view('blogPosts', ['id' => $id]);
        } else {
            abort(404);
        }
    }

    public function showDashboard(): View
    {
        return view('dashboard');
    }

    public function showIndex(): View
    {
        return view('index');
    }

    public function showProfile(): View
    {
        return view('profile');
    }
}
