<?php

namespace App\Http\Controllers;
use App\Models\Artwork;
use Illuminate\Http\Request;

class ArtworkController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $artworks = Artwork::paginate(7);

        return view('artworks.index', compact('artworks'))->with('i',(request()->input('page',1)-1)*7);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('artworks.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'artist_name'=>'required',
            'description'=>'required',
            'media_link'=>'required',
            'cover_image'=>'required',
        ]);
        //dd($request->all());
        // if($request->has('image')){
        //     $file= $request->picture;
        //     $ext= $request->picture->extension();
        //     $file_name = time().'-'.'.'.$ext;
        //     $file_name= $file->getClientoriginalName();
        // }
        // $file->move(public_path('upload'),$file_name);
        // $request->merge(['picture'=>$file_name]);
        Artwork::create($request->all());
        return redirect()->route('artworks.index')->with('success','Create successfully');
    
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
    public function edit(Artwork $artwork)
    {
        return view('artworks.edit',compact('artwork'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Artwork $artwork)
    {
        $request->validate([
            'artist_name'=>'required',
            'description'=>'required',
            //'media_link'=>'required',
            'cover_image'=>'required',
        ]);
        $artwork->update($request->all()); 
        return redirect()->route('artworks.index')->with('success','Update successfully');; 
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy( Artwork $artwork)
    {
        $artwork->delete(); 
        return redirect()->route('artworks.index')->with('success','Deleted successfully');
    }
}
