<?php

namespace App\Http\Controllers;

use App\Models\Posts;
use Illuminate\Http\Request;

class TimeLineController extends Controller
{
    public function index()
    {
        $posts = Posts::orderBy('created_at', 'desc')->with('profile')->simplePaginate(50);

        return view('app.timeline.index', compact('posts'));
    }
}
