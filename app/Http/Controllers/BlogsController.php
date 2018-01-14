<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Blog;

class BlogsController extends Controller {

  public function createBlog() {
    return view('new-blog');
  }

  public function newBlog(Request $request) {
    $this->validate($request, [
      'title' => 'required',
      'body' => 'required'
    ]);
    $blog = new Blog();
    $blog->title = $request->input('title');
    $blog->body = $request->input('body');
    $blog->save();

    return redirect('/')->with('success', 'Blog saved !!');
  }

  public function showBlog($id) {
    $blog = Blog::find($id);

    return view('blog')->with('blog', $blog);
  }

  public function allBlogs() {
    $blogs = Blog::all();

    return view('blogs')->with('blogs', $blogs);
  }
}
