<?php

namespace App\Http\Controllers;

use App\Models\Posts;
use App\Models\Profiles;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Input;
class PostController extends Controller
{
    public function index()
    {

    }

    public function store()
    {
        $profile = Profiles::find(Auth::id());
        Posts::create([
            'profiles_id' => $profile->id,
            'content' => Input::get('content')
        ]);

        return redirect()->to(route('timeLine'));
    }

    public function edit()
    {

    }

    public function  update()
    {

    }

    public function destroy()
    {

    }
}
