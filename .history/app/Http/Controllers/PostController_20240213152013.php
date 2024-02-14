<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostController extends Controller
{
    public function _construct(Post $post)
    {
        $this->model = $post;
        
    }
}
