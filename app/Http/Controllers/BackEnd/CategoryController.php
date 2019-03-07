<?php

namespace App\Http\Controllers\BackEnd;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\BackEnd\Category;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Str;

class CategoryController extends Controller
{


    public function create()
    {
    	$categories = Category::with('sub_categories')->where('parent_category_id',null)->get();
    	return view('BackEnd.pages.category.create', compact('categories'));
    }

    public function store(Request $request)
    {

    	$this->validation($request);

    	try {
    		$data = $request->all();
            $data['slug'] = Str::slug($request->category_name, '-');
            Category::create($data);  

    		Session::Flash('success', 'Category Successfully Added ');
    		return redirect()->back();

    		
    	} catch (\Exception $e) {
    		Session::Flash('error', 'Something went wrong. '.$e->getMessage());
    		return redirect()->back();
    	}

    }

    public function validation(Request $data)
    {
    	$this->validate($data, [
    		'category_name' => 'required|unique:categories',
    	]);
    }
}
