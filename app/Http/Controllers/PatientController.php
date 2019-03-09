<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Patient;
use Auth;

class PatientController extends Controller
{
    //middle ware construct
    public function __construct()
    {
         $this->middleware('auth');
    }

    //lister les medecins
    public function index(){
        $listpatient = DB::table('patients')->simplePaginate(3);
        return view('patient.index',['patients' => $listpatient]);
    }

    //afficher le formulaire de creation des patients
    public function create(){
        return view('patient.create');
    }

    //enregister un patient
    public function store(Request $request){
        $patient = new Patient();
        $patient->nsec = $request->input('nsec');
        $patient->medecin_id = $request->input('medecin_id');
        $patient->user_id = Auth::user()->id;
		$patient->nom = $request->input('nom');
        $patient->prenom = $request->input('prenom');
        $patient->date_naissance = $request->input('date_naissance');
        $patient->groupe_sanguin = $request->input('groupe_sanguin');
        $patient->sexe = $request->input('sexe');
        $patient->poids = $request->input('poids');
        $patient->taille = $request->input('taille');
        $patient->date_prochain_rdv = $request->input('date_prochain_rdv');

        //persister dans la BDD
        $patient->save();
        //afficher un message flash de type session
        session()->flash('success', 'le patient a été bien enregistré');
        //redirection vers la liste des patients
        return redirect('patients');
    }

    //recuperer un patient et le mettre dans le forumalaire
    public function edit($id){
        //recupere le patient de la BDD
        $patient = Patient::find($id);

        //on ne peut editer que le patient qui appartient au user
        $this->authorize('update', $patient);
        return view('patient.edit', ['patient' => $patient]);
    }

    //persister la modificatio d'un patient dans la BDD
    public function update(Request $request, $id){

        //recupere patient de la BDD à partir du model Patient
        $patient = Patient::find($id);
        $this->authorize('update', $patient);

        $patient->nsec = $request->input('nsec');
        $patient->user_id = $request->input('user_id');
        $patient->medecin_id = $request->input('medecin_id');
		$patient->nom = $request->input('nom');
        $patient->prenom = $request->input('prenom');
        $patient->date_naissance = $request->input('date_naissance');
        $patient->groupe_sanguin = $request->input('groupe_sanguin');
        $patient->sexe = $request->input('sexe');
        $patient->poids = $request->input('poids');
        $patient->taille = $request->input('taille');
        $patient->date_prochain_rdv = $request->input('date_prochain_rdv');
        $patient->save();
        return redirect('patients');

    }
    public function show($id){
        return "hello world !";
    }
    //supprimer un patient
    public function destroy(Request $request, $id){
        $patient = Patient::find($id);
        $this->authorize('delete', $patient);
        $patient->delete();
        return redirect('patients');
    }
}
