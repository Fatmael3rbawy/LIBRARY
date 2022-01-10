<?php

namespace App\Http\Controllers;

use App\book;
use App\category;
use Illuminate\Http\Request;

class bookController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $books = book::all();
        return view('book.index',compact('books'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {   $categories= category::select('category_name','id')->get();
        return view('book.create' ,compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'title'=> 'required|string',
            'auther'=> 'required|string',
            'publisher'=> 'required|string',
            'description'=>'required|string',
            'img'=>'required|image',
            //validate on 'category_ids' array
            'category_ids'=>'required',
             //check on each category_id in the array ,while it exists or not
            'category_ids.*'=>'exists:categories,id'
        ]);

        $image = $request->file('img');
        $ext = $image->getClientOriginalExtension();
        $name= "book". uniqid() .".$ext" ;
        $image->move(public_path('books_images'),$name);

        $book=book::create([
            'titel'=>$request->titel,
            'description'=>$request->desc,
            'author'=>$request->author,
            'publisher'=>$request->pub,
            'image'=>$name,
            
        ]);
        
        //to add the categories in book_category table
        $book->categories()->sync($request->category_ids);

        return redirect(route('book.index'))->with('success','Book is added successfully');

    }

   
}
