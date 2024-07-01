<?php

namespace App\Http\Controllers;

use App\Models\Emploi;
use App\Models\Formateur;
use App\Models\Groupe;
use App\Models\Module;
use App\Models\Salle;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class EmploitController extends Controller
{
    public function index($id)
    {

    }
    public function create($id)
    {
        $groupe = Groupe::get();
        $grp = Groupe::find($id);//bach n3awed nsifto frequest bach n9ad bih redirect
        $formateur = Formateur::get();
        $salles = Salle::get();
        $modules = Module::get();
        $id_groupe = Groupe::find($id);
        $emplois = Emploi::where('groupe',$id_groupe->Id_Groupe)->get();

        $startDate = Carbon::now();
        $daysOfWeek = collect([
            'Lundi', 'Mardi', 'Mercredi', 'Jeudi', 'Vendredi', 'Samedi'
        ])->map(function($day, $index) use ($startDate) {
            return [
                'day' => $day,
                'date' => $startDate->copy()->addDays($index)->format('d/m/Y')
            ];
        });
        return view('emploi.index',compact('daysOfWeek','groupe','formateur','salles','modules','emplois','grp'));
    }
    public function store(Request $request)
    {
        Emploi::create($request->all());
        return redirect()->route('create',$request->grp_id);
    }
    public function show(string $id)
    {
        /* $groupe = Groupe::find($id);
        /* $formateur = DB::table('formateurs')
        ->join('group_formateurs' , 'group_formateurs.id_formateur' , '=', 'formateurs.id')
        ->where('group_formateurs.groupe_id',$id)
        ->get([
            'Nom_Prenom'=> 'formateurs.Nom_Prenom',
        ]);

        $formateur = Formateur::get();

        /* $salles = DB::table('salles')
        ->join('formateur_salles' , 'formateur_salles.id_salle' , '=', 'salles.id')
        ->where('formateur_salles.id_formateur',$groupe->id)
        ->get([
            'numero_salle'=> 'salles.numero_salle',
        ]);

        $salles = Salle::get();

        $modules = DB::table('modules')->select('Libelle')
        ->where('modules.Annee',$groupe->Annee)
        ->get();

        $emplois = Emploi::get();
        return view('emploi.create',compact('groupe','formateur','salles','modules','emplois')); */

        $groupe = Groupe::find($id);
        $formateur = Formateur::get();
        $salles = Salle::get();
        $modules = Module::get();
        $emplois = Emploi::where('emplois.groupe',$groupe->Id_Groupe)->get();

        $startDate = Carbon::now();
        $daysOfWeek = collect([
            'Lundi', 'Mardi', 'Mercredi', 'Jeudi', 'Vendredi', 'Samedi'
        ])->map(function($day, $index) use ($startDate) {
            return [
                'day' => $day,
                'date' => $startDate->copy()->addDays($index)->format('d/m/Y')
            ];
        });
        return view('emploi.show',compact('daysOfWeek','emplois',"groupe","formateur","salles","modules"));
    }
    public function edit(string $id)
    {
        $emploi = Emploi::find($id);
        $formateur = Formateur::get();
        $salles = Salle::get();
        $modules = Module::get();
        return view('emploi.update',compact("emploi","formateur","salles","modules"));
    }
    public function update(Request $request, string $id)
    {

    }
    public function destroy(string $id)
    {
        //
    }
}
