<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Books;
use Session;
use Validator;

class BooksController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       $books = Books::all();
       return view('books.index', compact('books'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('books.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $errors = Validator::make($request->all(), 
        [
            'title'     => 'required|unique:books,title',
            'author'    => 'required',
            'content'   => 'required',
        ]);

        if ($errors->fails()) 
        {
            return redirect()->back()->withErrors($errors->errors());            
        }

        $book = new Books();
        $book->title    = $request->title;
        $book->author   = $request->author;
        $book->content  = $request->content;
        $book->save();

        session::flash('massage', 'Successfully inserted book!');
        return redirect()->route('books.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $book = Books::find($id);
        return view('books.show', compact('book'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $book = Books::find($id);
        return view('books.edit', compact('book'));
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
        $errors = Validator::make($request->all(), 
        [
            'title'     => 'required',
            'author'    => 'required',
            'content'   => 'required',
        ]);
        
        if ($errors->fails()) 
        {
            return redirect()->back()->withErrors($errors->errors());            
        }

        $book           = Books::find($id);
        $book->title    = $request->title;
        $book->author   = $request->author;
        $book->content  = $request->content;
        $book->save();
        return redirect()->route('books.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $book = Books::findOrFail($id);
        $book->delete();
        return redirect()->route('books.index');
    }
}
