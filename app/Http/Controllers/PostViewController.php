<?php

namespace App\Http\Controllers;

use App\Models\Post;

class PostViewController extends Controller {
  public function index() {
    $posts = Post::all();
    return view('blogs.posts', compact('posts'));
  }

  public function show($id) {
    $post = Post::findOrFail($id);
    return view('blogs.post', compact('post'));
  }
}
