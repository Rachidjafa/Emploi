<?php

namespace App\Http\Controllers;

use App\Models\Groupe;
use Illuminate\Http\Request;

class GroupeController extends Controller
{
    public function index()
    {
        $groupes =Groupe::paginate(6);
        return view('groupe.index', compact('groupes'));
    }
    public function create()
    {
        return view('groupe.create');
    }
    public function store(Request $request)
    {
        $request->validate([
            'Id_Groupe'=>'required',
            'Libelle' => 'required',
            'Secteur' => 'required',
            'Specialite' => 'required',
            'Niveau' => 'required',
            'Annee' => 'required'
        ]);
        Groupe::create($request->all());
        return redirect()->route('groupes.index');

    }
    public function show(string $id)
    {

    }
    public function edit(string $id)
    {

    }
    public function update(Request $request, string $id)
    {

    }
    public function destroy(string $id)
    {

    }
}
