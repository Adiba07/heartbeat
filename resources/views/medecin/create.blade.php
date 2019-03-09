@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <form action="{{url('medecins')}}" method="post" >
                   <!--generer les tokens, pour les cles publiques pour passer les données-->
                    {{csrf_field()}}
                    <div class="form-group">
                        <label for="">Nom</label>
                        <input type="text" name="nom" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="">Prenom</label>
                        <input type="text" name="prenom" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="">Grade</label>
                        <input type="text" name="grade" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="">Specialite</label>
                        <input type="text" name="specialite" class="form-control">
                    </div>
                    <div class="form-group">

                        <input type="submit" value="Enregister" class="form-control btn btn-primary">
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection