<?php

namespace App\Http\Controllers;
use App\Models\post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function _construct(Post $post)
    {
        $this->model = $post;

    }
    public function view()
    {

    }
    public function create()
    {
        return view('posts.create');
    }
    public function store(Request $request)
    {
        $request->validate([
            'title'->'required',
            'title'->'required',
        ]);
        $this ->model->create([
            'title'->$request->title,
            'description'->$request->description,
        ]);
        return redirect()->route('posts.view');
    }
}
