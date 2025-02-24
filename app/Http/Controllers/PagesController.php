<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;

class PagesController extends Controller
{
    /**
     * @return View
     */
    public function showBlog(): View
    {
        return view('blog');
    }

    /**
     * @param $id
     * @return View
     */
    public function showBlogPage($id): View
    {
        if ($id > 0 && $id < 6) {
            return view('blogPosts', ['id' => $id]);
        } else {
            abort(404);
        }
    }

    /**
     * @return View
     */
    public function showDashboard(): View
    {
        return view('dashboard');
    }

    /**
     * @return View
     */
    public function showIndex(): View
    {
        return view('index');
    }

    /**
     * @return View
     */
    public function showProfile(): View
    {
        return view('profile');
    }
}
