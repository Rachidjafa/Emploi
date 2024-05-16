<?php

namespace App\Http\Controllers;

use App\Models\Emploi;
use App\Models\Formateur;
use App\Models\Groupe;
use App\Models\Module;
use App\Models\Salle;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class EmploiController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Emploi::create($request->all());
        return redirect()->route('emplois.show',$request->id_groupe);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $groupe = Groupe::find($id);
        $formateur = DB::table('formateurs')
        ->join('group_formateurs' , 'group_formateurs.id_formateur' , '=', 'formateurs.id')
        ->where('group_formateurs.groupe_id',$id)
        ->get([
            'Nom_Prenom'=> 'formateurs.Nom_Prenom',
        ]);

        /* $salles = DB::table('salles')
        ->join('formateur_salles' , 'formateur_salles.id_salle' , '=', 'salles.id')
        ->where('formateur_salles.id_formateur',$groupe->id)
        ->get([
            'numero_salle'=> 'salles.numero_salle',
        ]); */

        $salles = Salle::get();

        $modules = DB::table('modules')->select('Libelle')
        ->where('modules.Annee',$groupe->Annee)
        ->get();

        $emplois = Emploi::get();
        return view('emploi.create',compact('groupe','formateur','salles','modules','emplois'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
