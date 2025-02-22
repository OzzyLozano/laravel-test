<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class PostController extends Controller {
  public function index() {
    $posts = Post::all();
    return view('admin.blogs.posts', compact('posts'));
  }

  public function create() {
    return view('admin.blogs.create');
  }

  public function show($id) {
    $post = Post::findOrFail($id);
    return view('admin.blogs.show', compact('post'));
  }

  public function store(Request $request) {
    $post = new Post();
    $post->title = $request->title;
    $post->description = $request->description;
    $post->content = $request->content;
    $post->save();

    return redirect()->route('blogs.index');
  }

  public function edit($id) {
    $post = Post::findOrFail($id);
    return view('admin.blogs.edit', compact('post'));
  }

  public function update(Request $request, $id) {
    $post = Post::findOrFail($id);
    $post->title = $request->title;
    $post->description = $request->description;
    $post->content = $request->content;
    $post->save();

    return redirect()->route('blogs.index');
  }

  public function destroy($id) {
    $post = Post::findOrFail($id);
    $post->delete();

    return redirect()->route('blogs.index');
  }
}
