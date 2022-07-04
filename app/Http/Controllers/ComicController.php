<?php

namespace App\Http\Controllers;

use App\Comics;
use Illuminate\Http\Request;

class ComicController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $comics_list = Comics::all();
        return view('Comic.index', compact('comics_list'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // dd('creazione pasta');
        return view('comic.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        // <Controllo i dati 
         $request->validate($this->getvalidationRules());

        // Salvare i dati nel data base
        $data = $request->all();
        // dd($data);  
        $new_comic = new Comics(); 
        $new_comic->fill($data);
        // $new_comic->title = $data['title'];
        // $new_comic->thumb = $data['thumb'];
        // $new_comic->series = $data['series'];
        // $new_comic->price = $data['price'];
        // $new_comic->sale_date = $data['sale_date'];
        // $new_comic->description = $data['description'];
        $new_comic->save();
        // dd('pasta salvata');
         // Reindirizzo sulla rotta che mostra i dettagli di pasta salvata
         return redirect()->route('Comics.show', ['Comic' => $new_comic->id]);
    }

    /** 
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        // dd($id);
        $comics = Comics::find($id);
        // dd($selected_comics);
        return view('Comic.show', compact('comics'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $comic_to_update = Comics::findOrFail($id);
        // dd($comic_current);
        return view('comic.edit', compact('comic_to_update'));
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
        // Validazione dei dati
        $request->validate($this->getvalidationRules());

         //Salvataggio dei dati
        $data = $request->all();
        // dd($data);
        $comic_to_update = Comics::findOrFail($id); // comic_to_update essendo scope potrebbe essere anche comic
        $comic_to_update->update($data);

        // dd('comic_to_update');

        return redirect()->route('Comics.show', ['Comic'=> $comic_to_update->id] );
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        // dd('destroy');
        $comic = Comics::findOrFail($id);
        $comic->delete();
        // dd($comic);
        return redirect()->route('Comics.index');
    }

    //** 
    /* Return an array with validation rules
    @ return Array 
    */
    private function getvalidationRules(){
       return  [ 
        'title'=>'required|max:100|min:5',
        'description'=>'required',
        'thumb'=>'required',
        'price'=>'required',
        'series'=>'required|max:100|min:5',
        'sale_date'=>'required',
        'type'=>'required|max:100|min:5',
       ];
    }
}
