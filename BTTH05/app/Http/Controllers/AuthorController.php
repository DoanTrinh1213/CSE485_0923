<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Author;
class AuthorController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $authors = Author::paginate(7);

        return view('authors.index', compact('authors'))->with('i',(request()->input('page',1)-1)*7);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('authors.create'); 
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name'=>'required',

        ]);
        Author::create($request->all());
        return redirect()->route('authors.index');
    
    }

    /**
     * Display the specified resource.
     */
    public function show(Author $author)
    {
       // return view('authors.show', compact('author'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit( Author $author)
    {
        return view('authors.edit', compact('author')); 
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Author $author )
    {
        $request->validate([ 
            'name' => 'required', 
            
        ]); 
     
        $author->update($request->all()); 
        return redirect()->route('authors.index'); 
                         
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Author $author)
    {
        $author->delete(); 
        return redirect()->route('authors.index'); 
    }
}
