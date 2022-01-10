<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\note;
use Illuminate\Support\Facades\Auth;
class noteController extends Controller
{
    
    public function create()
    {
        return view('note.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        note::create([
            'content'=>$request->content,
            'user_id'=>Auth::user()->id
        ]);
        return redirect(route('home'));
    }

    
}
