@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <form action="{{url('medecins/'.$medecin->id)}}" method="post" >
                    <input type="hidden" name="_method" value="PUT">
                    <!--generer les tokens, pour les cles publiques pour passer les données-->
                    {{csrf_field()}}
                    <div class="form-group">
                        <label for="">Nom</label>
                        <!--value : pour l'auto remplissage car ici on modifie le contenu-->
                        <input type="text" name="nom" class="form-control" value="{{ $medecin->nom }}">
                    </div>
                    <div class="form-group">
                        <label for="">Prenom</label>
                        <input type="text" name="prenom" class="form-control" value="{{ $medecin->prenom }}">
                    </div>
                    <div class="form-group">
                        <label for="">Grade</label>
                        <input type="text" name="grade" class="form-control"value="{{$medecin->grade }}">
                    </div>
                    <div class="form-group">
                        <label for="">Specialite</label>
                        <input type="text" name="specialite" class="form-control"value="{{ $medecin->specialite }}">
                    </div>
                    <div class="form-group">

                        <input type="submit" value="Modifier" class="form-control btn btn-danger">
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection