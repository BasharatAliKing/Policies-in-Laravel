<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;

class BookController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
     
        $books=Book::all();
        return view('books',compact('books'));
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
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Book $book)
    {
    //    Gate::authorize('view',$book);
        if(Gate::allows('view',$book)){
            return view('viewbook',compact('book'));
        }else{
            return redirect()->route('book.index');
        }
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Book $book)
    {
        if(Gate::allows('update',$book)){
            return view('updatebook',compact('book'));
        }else{
            return redirect()->route('book.index');
        }
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Book $book)
    {
        
        $request->validate([
            'title'=>'required',
            'price'=>'required',
        ]);
        $book->title=$request->title;
        $book->price=$request->price;
        $book->save();
        return redirect()->route('book.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Book $book)
    {
        Gate::authorize('delete',$book);
        $book->delete();
        return redirect()->route('book.index');
    }
}
