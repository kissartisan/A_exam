<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Category;
use App\Http\Controllers\Controller;

class CategoriesController extends Controller
{
    public function getDashboard()
    {
    	$categories = Category::all();
    	$parent_name = Category::pluck('category_name', 'id');

    	return view('crud-dashboard')->with('parent_name', $parent_name)->with('categories', $categories);
    }

    public function postCreateCategory(Request $request)
    {
    	// Validate the inputs
    	$this->validate($request, [
    		// Create the rules in the table
    		'category_name' => 'required|max:120',
    	]);

    	// $branch_name = $request['branch_name'];

    	$category = new Category;
    	$category->category_name = $request->input('category_name');
    	$category->parent_id = $request->input('parent_name');

    	$category->save();

    	return redirect()->back()->with(['message' => 'Successfully added a new branch!']);
    }

    public function getDeleteCategory($category_id)
    {
    	$category = Category::where('id', $category_id)->first();

    	$category->delete();

    	return redirect()->route('crud-dashboard')->with(['message' => 'Successfully deleted a branch!']);
    }

    public function postEditCategory(Request $request)
    {
    	$this->validate($request, [
    		'category_name' => 'required|max:120'
    	]);

    	$post = Post::find($request['categoryId']);
    	$post->category_name = $request['edit_category_name'];
    	$post->update();

    	return response()->json(['new_category' => $post->category_name], 200);
    }
}
