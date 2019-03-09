@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <form action="{{url('patients/'.$patient->id)}}" method="post" >
                    <input type="hidden" name="_method" value="PUT">
                    <!--generer les tokens, pour les cles publiques pour passer les données-->
                    {{csrf_field()}}
                    <div class="form-group">
                        <label for="">NSEC</label>
                        <!--value : pour l'auto remplissage car ici on modifie le contenu-->
                        <input type="text" name="nsec" class="form-control" value="{{ $patient->nsec }}">
                    </div>
					<div class="form-group">
                        <label for="">Medecin</label>
                        <!--value : pour l'auto remplissage car ici on modifie le contenu-->
                        <input type="text" name="medecin_id" class="form-control" value="{{ $patient->medecin_id }}">
                    </div>
                    <div class="form-group">
                        <label for="">Utilisateur</label>
                        <input type="text" name="user_id" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="">Nom</label>
                        <!--value : pour l'auto remplissage car ici on modifie le contenu-->
                        <input type="text" name="nom" class="form-control" value="{{ $patient->nom }}">
                    </div>
                    <div class="form-group">
                        <label for="">Prenom</label>
                        <input type="text" name="prenom" class="form-control" value="{{ $patient->prenom }}">
                    </div>
                    <div class="form-group">
                        <label for="">Date_naissance</label>
                        <input type="datetime" name="date_naissance" class="form-control"value="{{$patient->date_naissance }}">
                    </div>
                    <div class="form-group">
                        <label for="">groupe sanguin</label>
                        <input type="text" name="groupe_sanguin" class="form-control"value="{{ $patient->groupe_sanguin }}">
                    </div>
                    <div class="form-group">
                        <label for="">Sexe</label>
                        <input type="text" name="sexe" class="form-control"value="{{ $patient->sexe }}">
                    </div>
                    <div class="form-group">
                        <label for="">poids</label>
                        <input type="text" name="poids" class="form-control"value="{{ $patient->poids }}">
                    </div>
                    <div class="form-group">
                        <label for="">taille</label>
                        <input type="text" name="taille" class="form-control"value="{{ $patient->taille }}">
                    </div>
                    <div class="form-group">
                        <label for=""> Date prochain rdv</label>
                        <input type="text" name="date_prochain_rdv" class="form-control"value="{{ $patient->date_prochain_rdv }}">
                    </div>
                    <div class="form-group">

                        <input type="submit" value="Modifier" class="form-control btn btn-danger">
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection