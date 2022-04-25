<?php

namespace App\Http\Controllers;

use App\Comic;
use Illuminate\Contracts\Validation\Rule as ValidationRule;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redis;
use Illuminate\Validation\Rule;

class ComicController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
        $comics = Comic::all();

        return view('comics', compact('comics'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {   

        // $request->validate(
        //     [
        //         'title' => 'required|min:5',
        //         'thumb' => 'required|url',
        //         'description' => 'required|min:20',
        //         'series' => ['required', Rule::in(['comic_book', 'graphic_novel'])],
        //         'price' => 

        //     ]
        // );

        $data = $request->all();
        $comic = new Comic();
        // $comic->title = $data['title'];
        // $comic->thumb = $data['thumb'];
        // $comic->description = $data['description'];
        // $comic->series = $data['series'];
        // $comic->price = $data['price'];
        // $comic->sale_date = $data['sale_date'];
        // $comic->type = $data['type'];
        $comic->fill($data);
        $comic->save();

        return redirect()->route('comic.show', ['comic' => $comic->id]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Comic $comic)
    {

        return view('show', compact('comic'));

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Comic $comic)
    {

        return view('edit', compact('comic'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Comic $comic)
    {
        
        $data = $request->all();


        $comic->title = $data['title'];
        $comic->thumb = $data['thumb'];
        $comic->description = $data['description'];
        $comic->series = $data['series'];
        $comic->price = $data['price'];
        $comic->sale_date = $data['sale_date'];
        $comic->type = $data['type'];

        $comic->update($data);

        $comic->save();

        return redirect()->route('comic.show', $comic->id);

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Comic $comic)
    {

        $comic->delete();

        return redirect()->route('comic.index');
    }
}
