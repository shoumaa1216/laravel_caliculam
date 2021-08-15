<?php

namespace App\Http\Controllers;


use App\Category;

use Illuminate\Http\Request;

use App\Post;


class PostController extends Controller
{
public function index(Post $post)
{
    return view('index')->with(['posts' => $post->getPaginate()]);
}

public function show(Post $post)
{
    return view('show')->with(['post' => $post]);
}


public function create()
{
    return view('create');
}

public function store(Request $request, Post $post)
{
    $input = $request['post'];
    $post->fill($input)->save();
    return redirect('/posts/' . $post->id);
}

}
