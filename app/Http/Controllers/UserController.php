<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function writersPage() {
        $userList = User::get();
        return view('writers', ['userList' => $userList]);
    }

    public function writersDetailPage($id) {
        $user = User::find($id);
        $postList = Post::where('user_id', $id)->with('subject')->get();
        return view('writersDetail', ['user' => $user, 'postList' => $postList]);
    }
}
