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
    public function 
}
