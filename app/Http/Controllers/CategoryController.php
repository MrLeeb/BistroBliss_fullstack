<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Http\Requests\StoreCategoryRequest;
use App\Http\Requests\UpdateCategoryRequest;
use Illuminate\Http\Request;
class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $categories =Category::all();
        $context =[
            'categories'=> $categories
        ];
        return view('./adminscontrol/category', $context);
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('./adminscontrol/Category/category-add');
        
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreCategoryRequest $request)
    {
        
        $category = Category::create([
            'name'=>$request->category,
            'icon'=>$request->caticon
        ]);
        // dd($category);
        $category->save();
        return redirect(route('admincontrol'));
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Category $category)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit()
    {
        //
        $categories =Category::all();
        $context =[
            'categories'=> $categories
        ];
        return view('./adminscontrol/Category/category-edit', $context);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request)
    {
    //    dd($request);
        $category = Category::find($request->categoryedited);
        //  dd($category);
        $category->name=$request->newcategory;
        $category->save();

        
    }

    /**
     * Remove the specified resource from storage.
     */
    public function delete(){
        $categories =Category::all();
        $context =[
            'categories'=> $categories
        ];
        return view('./adminscontrol/Category/category-remove', $context);   
    }
    public function api(){
        $categories =Category::all();
        $context =[
            'categories'=> $categories
        ];
        // return view('./adminscontrol/Category/category-api', $context);   
        return response()->json($context);
    }

    public function destroy(Request $category )
    {
        $category1 = Category::find($category);
        // $cat= new Category();
        // dd($category1);
        $category1->each->delete();
        return redirect(route('admincontrol'))->with('success', 'Category deleted!');
        //
    }
    public function test ($request){
return $request;
}
}

