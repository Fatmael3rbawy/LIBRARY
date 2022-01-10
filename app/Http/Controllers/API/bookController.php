<?php

namespace App\Http\Controllers\API;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\book;

class bookController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       $books= book::get();
       return response()->json($books);
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       
        $validator = Validator::make($request->all(), [
           
            'titel'=> 'required|string',
            'author'=> 'required|string',
            'publisher'=> 'required|string',
            'description'=>'required|string',
            'img'=>'required|image',
            //validate on 'category_ids' array
            'category_ids'=>'required',
             //check on each category_id in the array ,while it exists or not
            'category_ids.*'=>'exists:categories,id'
        ]);

        if ($validator->fails()) {
            $errors = $validator->errors();
            return response()->json($errors);
        }

        
        $image= $request->file('img');
        $ext =$image->getClientOriginalExtension();
        $name=  "ApiBook" . uniqid() .".$ext" ;
        $image->move(public_path('books_images'),$name);

        $book=book::create([
            'titel'=>$request->titel,
            'description'=>$request->description,
            'author'=>$request->author,
            'publisher'=>$request->publisher,
            'image'=>$name
        ]);
        $book->categories()->sync($request->category_ids);

        $success ="Book created successfully";
        return response()->json($success);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $book=book:: with('categories')->find($id);
        return response()->json($book);
    }
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $validator = Validator::make($request->all(), [
           
            'titel'=> 'required|string',
            'author'=> 'required|string',
            'publisher'=> 'required|string',
            'description'=>'required|string',
            'img'=>'required|image',
            //validate on 'category_ids' array
            'category_ids'=>'required',
             //check on each category_id in the array ,while it exists or not
            'category_ids.*'=>'exists:categories,id'
        ]);

        if ($validator->fails()) {
            $errors = $validator->errors();
            return response()->json($errors);
        }

        $book = book::findorfail($id);

        $name = $book->image;
        if ($request->hasFile('img')) {
            if ($name !== null) {
                unlink(public_path('books_images/'). $name);
            }
            $image = $request->img;
            $ext = $image->getClientOriginalExtension();
            $name = "book" . uniqid() . ".$ext";
            $image->move(public_path('books_images'), $name);
        }

        $book->update([
            'titel'=>$request->titel,
            'description'=>$request->description,
            'author'=>$request->author,
            'publisher'=>$request->publisher,
            'image'=>$name
        ]);
        $book->categories()->sync($request->category_ids);
        $msg="Book updated successfuly";
        return response()->json($msg);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $book=book::findorfail($id);
        // check if the book has image 
        $img= $book->image;
        if ($img !== null) {
             //to delete the book image from books folder
            unlink(public_path('books_images/' .$img));
        }
        $book->categories()->sync([]);
        $book->delete();

        $msg="Book deleted successfuly";
        return response()->json($msg);

    }
}
