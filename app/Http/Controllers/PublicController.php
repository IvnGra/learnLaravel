<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;

class PublicController extends Controller
{
    public function index(){
        // Use simplePaginate for simple Previous/Next pagination
        $posts = Post::simplePaginate(16);
        
        // Or use paginate for numbered pagination:
        // $posts = Post::paginate(16);
        
        return view('welcome', compact('posts'));
    }

    public function post(Post $post) {
        return view('post', compact('post'));
    }
}