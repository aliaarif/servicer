<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Category;

class CategoryController extends Controller
{
	public function index()
	{
		$categories = Category::where('parent_id',0)->get();
		return view('categories.category_browse',[
			'categories' => $categories
		]);
	}

	public function getCategoryJobs($id)
	{
		$category = Category::find($id);
		//dd($category);
		$jobs = $category->jobs()->paginate(10);
		return view('categories.category_jobs',[
			'jobs' => $jobs,
			'category' => $category
		]);	
	}
}
