<?php

namespace App\Http\Controllers;

use App\Models\Item;
use App\Http\Requests\StoreItemRequest;
use App\Http\Requests\UpdateItemRequest;
use App\Models\Category;
use Illuminate\Http\Request;


class ItemController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $items =Item::all();
        $context =[
            'item'=> $items
        ];
        return view('./adminscontrol/menu', $context);
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $categories =Category::all();
        $context =[
            'categories'=> $categories
        ];
        return view('./adminscontrol/Item/item-add',$context);
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreItemRequest $request)
    {
        dd($request);
        $category = Category::find($request->itemCategory);
        $category1=$category->id;
        // dd($category1);
        $item = Item::create([
            'title'=>$request->itemName,
            'price'=>$request->itemPrice,
            'image'=>$request->itemImage,
            'description'=>$request->itemDescription,
            'image'=>$request->itemImage,
            'category'=>$category1,
            

        ]);
        // dd($item);
        $item->save();
        return redirect(route('admincontrol'));
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Item $item)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Item $item)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateItemRequest $request, Item $item)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */

     public function delete(){
        $items =Item::all();
        $context =[
            'items'=> $items
        ];
        return view('./adminscontrol/Item/item-remove', $context);   
    }

    public function api(){
        $items =Item::all();
        $context =[
            'items'=> $items
        ];
        return response()->json($context);
    }

    public function destroy(Request $item)
    {
        $item1 = Item::find($item);
        $item1->each->delete();
        return redirect(route('admincontrol'))->with('success', 'Item deleted!');
        //
    }
}
