<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Medecin;
class MedecinController extends Controller
{
    //lister les medecins
    public function index(){
       //pour afficher toute la table //$listmedecin = Medecin::all();
        //pour afficher 5 par 5 mais sans boutton previous next(check view under table tag)
        $listmedecin = DB::table('medecins')->simplePaginate(3);



        //mdecins de blade, on l'affecte la liste des medecins


        return view('medecin.index',['medecins'=>$listmedecin]);
    }

    //afficher le formulaire de creation des medecins
    public function create(){
        return view('medecin.create');
    }

    //enregister un medecin
    public function store(Request $request){
        $medecin = new Medecin();
        $medecin->nom = $request->input('nom');
        $medecin->prenom = $request->input('prenom');
        $medecin->grade = $request->input('grade');
        $medecin->specialite = $request->input('specialite');

        //persister dans la BDD
        $medecin->save();
        //afficher un message flash de type session
        session()->flash('success', 'le medecin a été bien enregistré');
        //redirection vers la liste des medecins
        return redirect('medecins');
    }

    //recuperer un medecin et le mettre dans le forumalaire
    public function edit($id){
        //recupere le medecin de la BDD
        $medecin = Medecin::find($id);
        return view('medecin.edit', ['medecin' => $medecin]);
    }

    //persister la modificatio d'un medecin dans la BDD
    public function update(Request $request, $id){
   //recupere medecin de la BDD à partir du model Medecin
        $medecin = Medecin::find($id);
        $medecin->nom = $request->input('nom');
        $medecin->prenom = $request->input('prenom');
        $medecin->grade = $request->input('grade');
        $medecin->specialite = $request->input('specialite');
        $medecin->save();
        return redirect('medecins');
    }

    //supprimer un medecin
    public function destroy(Request $request, $id){
        $medecin = Medecin::find($id);
        $medecin->delete();
        return redirect('medecins');
    }
}
