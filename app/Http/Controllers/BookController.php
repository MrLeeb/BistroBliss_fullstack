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
    public function index(Request $request)
    {
        $bookings =Book::where('status','=','PENDING')->get();
        $context =[
            'bookings'=> $bookings
        ];
        // return view('./adminscontrol/Category/category-api', $context);   
        // return response()->json($context);
        return view('./adminscontrol/Bookings/books', $context);
        //
    }
    public function indexg(Request $request)
    {
        $user = $request->user();
        // return $user;
        $bookings =Book::where('userId', $user['id'])->get();
        // return typeOf($bookings);
        $context =[
            'bookings'=> $bookings
        ];
        // return view('./adminscontrol/Category/category-api', $context);   
        // return response()->json($context);
        return $context;
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
// dd($request);
$user=$request->user();

$id=$user->id;
// return response()->json($id);
// return $request->user();
$booking = Book::create([
    'date'=>$request->date,
    'time'=>$request->time,
    'name'=>$request->name,
    'phone'=>$request->phone,
    'persons'=>$request->persons1,
    'userId'=>$id
]);
// dd($category);
$booking->save();
// return redirect(route('admincontrol'));
// return $request;
    }

public function handleresponse (Request $request){
// dd($request);    
    $book = Book::find($request->b);
    if($request->res == 'acc'){
        $book->status= 'ACCEPTED';
        $book->save();
    }
    else if($request->res == 'rej'){
        $book->status= 'REJECTED';
        $book->save();
    }
    return redirect()->back();
// dd($book);

//  $book->status= 'ACCEPTED';
}


    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Book $book)
    {
        //
    }
}
