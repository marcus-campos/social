<?php

namespace App\Http\Controllers;

use App\Models\Posts;
use App\Models\Profiles;
use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function index($id)
    {
        $profile = Profiles::find($id);
        $posts = Posts::where('profiles_id', $id)->orderBy('created_at', 'desc')->simplePaginate(50);

        return view('app.profile.index', compact('profile', 'posts'));
    }

    /*public function store()
    {

    }*/

    public function  update()
    {

    }

    /*public function destroy()
    {

    }*/
}
