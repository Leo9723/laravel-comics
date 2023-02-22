<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Comic;

class ComicController extends Controller
{
    public function index(){

        $comics = Comic::all();

        return view('fumetti', compact('comics'));
    }
    public function show($id){

        $comic = Comic::find($id);


        //con lo slug, in quel caso dovrei passare $slug alla funzione show:

        // $comic = Comic::where('slug', $slug)->get();
        
        //ricerca composta da piu parametri:
        // $comic = Comic::where('tipo', 'avventura')->where('prezzo', '3,99')->get();

        $data = [
            'single' => $comic
        ];

        return view('detail_comic', $data);
    }
}
