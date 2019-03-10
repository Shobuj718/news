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
            str_replace("world","Peter","Hello world!");
            $data['slug'] = str_replace(' ', '-', $request->category_name);
            //$data['slug'] = Str::slug($request->category_name, '-');
            Category::create($data);  

    		Session::Flash('success', 'Category Successfully Added ');
    		return redirect()->back();

    		
    	} catch (\Exception $e) {
    		Session::Flash('error', 'Something went wrong. '.$e->getMessage());
    		return redirect()->back();
    	}

    }

    public function parentCategoryEdit($id)
    {
        
        $category = Category::where('id', $id)->first();
        return view('BackEnd.pages.category.edit', compact('category'));
    }


    public function edit($id, $parentID)
    {
        $category = Category::where('id', $id)->where('parent_category_id', $parentID)->first();
        $categories = Category::with('sub_categories')->where('parent_category_id',null)->get();
        return view('BackEnd.pages.category.edit', compact('category', 'categories'));
    }

    public function update($id, Request $request)
    {

        if($request->status == 'delete'){
            $data = Category::where('id', $id)->first();

            if($data->parent_category_id == NULL){
                Category::where('id', $id)->delete();
                Category::where('parent_category_id', $id)->delete();

                Session::Flash('success', 'Category Deleted Success !!!');
                return redirect()->route('category.create');

            }
            else{
                Category::where('id', $id)->delete();

                Session::Flash('success', 'Category Deleted Success !!!');
                return redirect()->route('category.create');
            }

        }
        else{
            
            $data = Category::where('id', $id)->first();

            $this->validate($request, [
                'category_name' => 'required',
            ]);

            try {
                    
                $data->update($request->all());

                Session::Flash('success', 'Category Successfully Updated ');
                return redirect()->route('category.create');

                
            } catch (\Exception $e) {
                Session::Flash('error', 'Something went wrong. '.$e->getMessage());
                return redirect()->back();
            }

        }
    }
    

    

    public function validation(Request $data)
    {
    	$this->validate($data, [
    		'category_name' => 'required|unique:categories',
    	]);
    }
}
