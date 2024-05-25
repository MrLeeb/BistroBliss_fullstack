<?php

namespace App\Http\Controllers;

use App\Models\Book;
use App\Http\Requests\StoreBookRequest;
use App\Http\Requests\UpdateBookRequest;
use Illuminate\Http\Request;
class BookController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $bookings =Book::all();
        $context =[
            'bookings'=> $bookings
        ];
        // return view('./adminscontrol/Category/category-api', $context);   
        // return response()->json($context);
        return view('./adminscontrol/Bookings/books', $context);
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreBookRequest $request)
    {

        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Book $book)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Book $book)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateBookRequest $request, Book $book)
    {
        //
    }

    public function post(Request $request){
dd($request);
$booking = Book::create([
    'date'=>$request->date,
    'time'=>$request->time,
    'name'=>$request->name,
    'phone'=>$request->phone,
    'persons'=>$request->persons1
]);
// dd($category);
$booking->save();
// return redirect(route('admincontrol'));
// return $request;
    }
    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Book $book)
    {
        //
    }
}
