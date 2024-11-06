<?php

namespace App\Http\Controllers;

use App\Models\Materi;
use Illuminate\Http\Request;
Use App\Models\Category;

class CategoryController extends Controller
{
    public function categoryIndex($name)
{
    $category = Category::where('name', $name)->firstOrFail();

    $materi = Materi::where('category_id', $category->id)->get();

    return view('category.category', compact('category', 'materi'));
}
}
