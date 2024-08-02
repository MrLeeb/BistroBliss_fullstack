<?php

namespace App\Http\Controllers;

use App\Models\Blogs;
use App\Models\Category;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Http\Testing\MimeType;
use Illuminate\Support\Facades\Storage;
use PHPUnit\Framework\Constraint\IsNull;
use Symfony\Component\Mime\MimeTypes;

use function PHPUnit\Framework\isNull;

// use Illuminate\Http\UploadedFile;
class BlogsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //

        return view('./adminscontrol/blogs');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('./adminscontrol/Blogs/blogs-add');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'blogImageTop' => 'required|mimes:jpg,bmp,png',
            'blogImageBottom' => 'mimes:jpg,bmp,png',
        ]);

        $img1 = $request->blogImageTop;
        $img2 = $request->blogImageBottom;

        $name1 = $img1->getClientOriginalName();
        $img1->storeAs('public/images', $name1);

        if (!is_null($img2)) {
            $name2 = $img2->getClientOriginalName();
            $img2->storeAs('public/images', $name2);
        } else {
            $name2 = null;
        }


        $date = Carbon::createFromFormat('Y-m-d', $request->blogdate)->format('F d, Y');

        $blog = Blogs::create([
            'date' => $date,
            'title' => $request->blogtitle,
            'imagetop' => $name1,
            'imagebottom' => $name2,
            'content' => $request->blogcontent,
        ]);
        $blog->save();
        $success = 'Item saved successfully!';
        return redirect()->back()->with('success', $success);



        //LINE BELOW RETURNS IMAGE
        //return response()->file(storage_path('app/public/images/'. $name1));

    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit()
    {
        $blogs =Blogs::all();
        $context =[
            'blogs'=> $blogs
        ];
        return view('./adminscontrol/Blogs/blogs-edit', $context);
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request)
    {
        // dd($request);
        $request->validate([
            'newblogimaget' => 'mimes:jpg,bmp,png',
            'newblogimageb' => 'mimes:jpg,bmp,png',
        ]);
        $blog = Blogs::find($request->blogedited);
        
        $img1 = $request->file('newblogimaget');
        if(!is_null($img1)){
            $name1 = $img1->getClientOriginalName();
            $img1->storeAs('public/images', $name1);

        $blog->imagetop=$name1;
        }
        $img2 = $request->file('newblogimageb');
        if(!is_null($img2)){
            $name2 = $img2->getClientOriginalName();
            $img2->storeAs('public/images', $name2);
        $blog->imagebottom=$name2;
        }
        
if(!is_null($request->newblogdate)){
        $date = Carbon::createFromFormat('Y-m-d', $request->newblogdate)->format('F d, Y');
$blog->date=$date;
}

$blog->title=$request->newblogtitle;
$blog->content=$request->newblog;
$blog->save();

$success = 'Blog edited successfully!';
        return redirect()->back()->with('success', $success);       
    }

    public function api(){
        $blogs =Blogs::all();
        $context =[
            'items'=> $blogs
        ];
        return response()->json($context);
    }
public function getRandomBlogs(Request $request){

    $randomBlogs = Blogs::where('id', '<>', $request->excludedId)->get()->random(4);
return $randomBlogs;
}


public function delete(){
    $blogs =Blogs::all();
    $context =[
        'blogs'=> $blogs
    ];
    return view('./adminscontrol/Blogs/blogs-remove', $context);   
}

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Request $request)
    {
        $blog = Blogs::find($request);
        $blog->each->delete();
        return redirect(route('admincontrol'))->with('success', 'Blog deleted!');
    }
}
