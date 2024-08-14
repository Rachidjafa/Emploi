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
    public function create($id)
    {
        $groupe = Groupe::get();
        $grp = Groupe::find($id);//bach n3awed nsifto frequest bach n9ad bih redirect
        $formateur = Formateur::get();
        $salles = Salle::get();
        $modules = Module::get();
        $id_groupe = Groupe::find($id);
        $emplois = Emploi::where('groupe',$id_groupe->Id_Groupe)->get();
        $emploi = Emploi::find($id);

        $startDate = Carbon::now();
        $daysOfWeek = collect([
            'Lundi', 'Mardi', 'Mercredi', 'Jeudi', 'Vendredi', 'Samedi'
        ])->map(function($day, $index) use ($startDate) {
            return [
                'day' => $day,
                'date' => $startDate->copy()->addDays($index)->format('d/m/Y')
            ];
        });
        return view('emploi.index',compact('daysOfWeek','groupe','formateur','salles','modules','emplois','grp','emploi'));
    }
    public function store(Request $request)
    {
        Emploi::create($request->all());
        return redirect()->route('create',$request->grp_id);
    }
    public function edit(Request $request, string $id)
    {
        Emploi::find($id)->update($request->all());
        return redirect()->route('create',$request->grp_id);
    }
    public function destroy($id)
    {
        $emploi = Emploi::findOrFail($id);
        $emploi->delete();
        return redirect()->back()->with('success', 'Emploi supprimé avec succès');
    }
}
