<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\Subject;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function homePage() {
        $postList = Post::with('subject')->get();
        return view('home', ['postList' => $postList]);
    }

    public function postDetailPage($id) {
        $post = Post::find($id);
        $subject = Post::find($id)->subject;
        $user = Post::find($id)->user;
        return view('postDetail', ['post' => $post, 'subject' => $subject, 'user' => $user]);
    }

    public function popularPage() {
        $postList = Post::with('subject')->paginate(3);
        return view('popular', ['postList' => $postList]);
    }
}
