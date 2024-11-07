<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Post;
use App\Models\Subject;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function categoryPage($id) {
        $category = Category::find($id);

        $subjectList = Subject::where('category_id', $id)->get();
        $subjectIdList = $subjectList->map(function ($subject) {
            return $subject->id;
        });

        $postList = Post::with('subject', 'user')->whereIn('subject_id', $subjectIdList)->get();

        return view('category', ['category' => $category, 'postList' => $postList]);
    }
}
