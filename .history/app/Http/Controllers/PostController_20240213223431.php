<?php
namespace App\Http\Controllers;
use App\Models\post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function __construct(Post $post)
    { 
        $this->model = $post;
    }
    public function view()
    {
        
    }
    public function create()
    {
        die('asdasdasd');
        //return view('posts.create');  
    }
    public function store(Request $request)
    
        return redirect()->route('posts.view');
    }
}
