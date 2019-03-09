@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2 text-center" >
                <h2>Cette action n'est pas autorisée</h2>
                <a href={{url('patients')}}>retour</a>
            </div>
        </div>
    </div>
@endsection