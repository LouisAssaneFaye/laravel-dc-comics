<?php

namespace App\Http\Controllers\Admin;
use App\Models\Comic;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class comicController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $comicList= Comic::all();
        return view('admin.comics.index', compact('comicList'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.comics.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data=$request->all();
        $newComic= new Comic();
        $newComic->title = $data['title'];
        $newComic->title = $data['description'];
        $newComic->title = $data['thumb'];
        $newComic->title = $data['price'];
        $newComic->title = $data['series'];
        $newComic->title = $data['sale_date'];
        $newComic->title = $data['type'];
        $newComic->title = $data['artists'];
        $newComic->title = $data['writers'];
        $newComic->save();

        return redirect()->route('admin.comics.show', $newComic->id);

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $comic = Comic::findOrFail($id);
        return view('admin.comics.show', compact('comic'));
    } 

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $comic= Comic::findOrFail($id);
        return view('admin.comics.edit', compact('comic'));
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
        $data = $request->all();
        $comic->title= $data["title"];
        $comic = Comic::findOrFail($id);
        $comic->title = $data['title'];
        $comic->title = $data['description'];
        $comic->title = $data['thumb'];
        $comic->title = $data['price'];
        $comic->title = $data['series'];
        $comic->title = $data['sale_date'];
        $comic->title = $data['type'];
        $comic->title = $data['artists'];
        $comic->title = $data['writers'];
        $comic->save();
        return redirect()->route('admin.comics.update', $comic->id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
