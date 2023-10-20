<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Book;
use App\Models\Author;
class BookController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $books = Book::paginate(7);

        return view('books.index', compact('books'))->with('i',(request()->input('page',1)-1)*7);
    }

    /**
     * Show the form for creating a new resource.
     */
        public function create()
    {   
        $author = Author::all();
        
        return view('books.create', ['authors'=>$author]) ->with('success','Them sach thanh cong');


    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // $request->validate([
        //     'author_id'=>'required',
        //     'title'=>'required',

        // ]);
        Book::create($request->all());
        return redirect()->route('books.index');
    
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
    public function edit($id)
    {
        $book = Book::find($id);
        $author = Author::all();
    
        return view('books.edit', compact('book', 'author'));
        
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request,Book $book)
    {
        // $request->validate([
        //     'author_id'=>'required',
        //     'title'=>'required',

        // ]);
        $book->update($request->all());
        return redirect()->route('books.index')->with('success','chinh sua thong tin thanh cong');;
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Book $book)
    {
        
        $book->delete(); 
        return redirect()->route('books.index')->with('success','xoa thanh thanh cong'); ;
    }
}
