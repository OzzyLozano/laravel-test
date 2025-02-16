<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class PostController extends Controller {
  public function index() {
    $posts = Post::all();
    return view('blogs.posts', compact('posts'));
  }

  public function create() {
    return view('blogs.create');
  }

  public function show($id) {
    $post = Post::findOrFail($id);
    return view('blogs.show', compact('post'));
  }

  public function store(Request $request) {
    $post = new Post();
    $post->title = $request->title;
    $post->content = $request->content;
    $post->save();

    return redirect()->route('posts.index');
  }

  public function edit($id) {
    $post = Post::findOrFail($id);
    return view('blogs.edit', compact('post'));
  }

  public function update(Request $request, $id) {
    $post = Post::findOrFail($id);
    $post->title = $request->title;
    $post->content = $request->content;
    $post->save();

    return redirect()->route('posts.index');
  }

  public function destroy($id) {
    $post = Post::findOrFail($id);
    $post->delete();

    return redirect()->route('posts.index');
  }

}
