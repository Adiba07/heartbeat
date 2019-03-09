@extends('layouts.app')
@section('content')

    <div class="container">
        <div class="row">
            <div class="col-md-12">


                <h1>La liste des Patients</h1>
                <div class="pull-right">
                    <a href="{{url('patients/create')}}" class="btn btn-success">Nouveau Patient</a>
                </div>
                <br>
                <table class="table table-bordered table-responsive ">
                    <head>
                        <tr>
                            <th>NSEC</th>
                            <th>Nom</th>
                            <th>Prenom</th>
                            <th>Date de Naissance</th>
                            <th>Groupe Sanguin</th>
                            <th>Sexe</th>
                            <th>Poids</th>
                            <th>Taille</th>
                            <th>Prochain RDV</th>
                        </tr>
                    </head>
                    <body>
                    @foreach($patients as $patient)
                        <tr>
                            <td>{{$patient->nsec}}</td>
                            <td>{{$patient->nsec}}</td>
                            <td>{{$patient->prenom}}</td>
                            <td>{{$patient->date_naissance}}</td>
                            <td>{{$patient->groupe_sanguin}}</td>
                            <td>{{$patient->sexe}}</td>
                            <td>{{$patient->poids}}</td>
                            <td>{{$patient->taille}}</td>
                            <td>{{$patient->date_prochain_rdv}}</td>
                            <td>

                                <form action="{{url('patients/'.$patient->id)}}" method="post">
                                    {{ csrf_field() }}
                                    {{ method_field('DELETE') }}
                                    <a href="" class="btn btn-primary">Details</a>
                                    <a href="{{url('patients/'.$patient->id.'/edit')}}" class="btn btn-default">Editer</a>
                                    <button type="submit" class="btn btn-danger">Supprimer</button>
                                </form>

                            </td>
                        </tr>
                    @endforeach
                    </body>

                </table>
                <div class= "text-center clearfix col-md-12">
                    {{ $patients->links() }}
                </div>
            </div>
        </div>
    </div>
@endsection