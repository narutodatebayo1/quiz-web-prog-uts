<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Subject;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function categoryPage($id) {
        $category = Category::find($id);
        $subjectList = Subject::with('post')->where('category_id', $id)->get();
        return view('category', ['category' => $category, 'subjectList' => $subjectList]);
    }
}
