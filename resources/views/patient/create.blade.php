@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <form action="{{url('patients')}}" method="post" >
                    <!--generer les tokens, pour les cles publiques pour passer les données-->
                    {{csrf_field()}}
                    <div class="form-group">
                        <label for="">NSEC</label>
                        <input type="text" name="nsec" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="">Medecin</label>
                        <input type="text" name="medecin_id" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="">Utilisateur</label>
                        <input type="text" name="user_id" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="">Nom</label>
                        <input type="text" name="nom" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="">Prenom</label>
                        <input type="text" name="prenom" class="form-control">
                    </div>


                    <div class="form-group">
                        <label for="">Date de Naissance</label>
                        <input type="datetime" name="date_naissance" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="">Groupe Sanguin</label>
                        <input type="text" name="groupe_sanguin" class="form-control">
                    </div>

                    <div class="form-group">
                        <label for="">Sexe</label>
                        <input type="text" name="sexe" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="">Poids</label>
                        <input type="text" name="poids" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="">Taille</label>
                        <input type="text" name="taille" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="">Date prochain rdv</label>
                        <input type="datetime" name="date_prochain_rdv" class="form-control">
                    </div>
                    <div class="form-group">

                        <input type="submit" value="Enregister" class="form-control btn btn-primary">
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection