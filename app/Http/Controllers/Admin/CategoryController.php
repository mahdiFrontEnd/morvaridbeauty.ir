<?php

namespace App\Http\Controllers\Admin;

use App\Model\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CategoryController extends Controller
{
    public function index()

    {
        $data = Category::orderBy("id", "DESC")->paginate(12);
        return view('admin.category.list', compact('data'));
    }

    public function create(Request $request)
    {

    }

    public function modify(Request $request)
    {

    }

    public function delete(Request $request)
    {

    }
}
