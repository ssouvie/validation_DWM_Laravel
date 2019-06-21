<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Piano;

class PianoController extends Controller
{
    // Check if auth is connected
    public function __construct()
    {
        $this->middleware('auth');
    }


    public function getAllPianos()
    {
        $pianos = Piano::All();

        return view('pianos.get_all_pianos', compact('pianos'));
    }

    public function createPiano() 
    {
        return view('pianos.create_piano');
    }

    public function storePiano(Request $request) //"Request $request" dès qu'il y a des données en post à récupérer-------------------------- 
    {
        $piano = new Piano([  //Création d'un nouvel objet "Piano" en utlisant un array--------------------------------------------------------
            'name' => $request->get('name'), 
            'brand' => $request->get('brand'),
            'fabrication' => $request->get('fabrication'),
            'description' => $request->get('description'),
            'price' => $request->get('price'),
        ]);

        $piano->save();  

        return redirect('/pianos')->with('success', 'Votre piano a bien été ajouté');
    }


    public function editPiano($id) 
    {
        $piano = Piano::find($id);

        return view('pianos.edit_piano', compact('piano'));
    }

    public function updatePiano($id, Request $request) 
    {
        $piano = Piano::find($id);
        
        $piano->name = $request->get('name');  
        $piano->brand = $request->get('brand');
        $piano->fabrication = $request->get('fabrication');
        $piano->description = $request->get('description');
        $piano->price = $request->get('price');

        $piano->save();

        return redirect('/pianos')->with('success', 'Piano modifié avec succès');
    }

    public function deletePiano($id)
    {
        $piano = Piano::find($id);

        $piano->delete();

        return redirect('/pianos')->with('success', 'Piano supprimé avec succès');
    }
}
