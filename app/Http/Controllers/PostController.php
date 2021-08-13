<?php

namespace App\Http\Controllers;

dev_basis03
use App\Category;
use App\Post;
use Illuminate\Http\Request;
use App\Http\Requests\PostRequest;

class PostController extends Controller
{
public function index(Post $post)
{
    return view('index')->with(['posts' => $post->getPaginateByLimit(5)]);
}

public function show(Post $post)
{
    return view('show')->with(['post' => $post]);
}

use App\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
 dev_basis02
     public function index(Post $post)
    {
        return view('index')->with(['posts' => $post->get()]);  

    public function index(Post $post)
    {
    return $post->get();
 master
    }
 master
}
