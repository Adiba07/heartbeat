@extends('layouts.app')
@section('content')

    <div class="container">
        <div class="row">
            <div class="col-md-12">


                <h1>La liste des Medecins</h1>
                <div class="pull-right">
                    <a href="{{url('medecins/create')}}" class="btn btn-success">Nouveau Medecin</a>
                </div>
                <br>
                <table class="table table-bordered table-responsive ">
                    <head>
                        <tr>
                            <th>Nom</th>
                            <th>Prenom</th>
                            <th>Grade</th>
                            <th>Spécialité</th>
                            <th>Date de creation</th>
                            <th>Options</th>
                        </tr>
                    </head>
                    <body>
                    @foreach($medecins as $medecin)
                    <tr>
                        <td>{{$medecin->nom}}</td>
                        <td>{{$medecin->prenom}}</td>
                        <td>{{$medecin->grade}}</td>
                        <td>{{$medecin->specialite}}</td>
                        <td>{{$medecin->created_at}}</td>
                        <td>

                            <form action="{{url('medecins/'.$medecin->id)}}" method="post">
                                {{ csrf_field() }}
                                {{ method_field('DELETE') }}
                                <a href="" class="btn btn-primary">Details</a>
                                <a href="{{url('medecins/'.$medecin->id.'/edit')}}" class="btn btn-default">Editer</a>
                                <button type="submit" class="btn btn-danger">Supprimer</button>
                            </form>

                        </td>
                    </tr>
                    @endforeach
                    </body>

                </table>
                <div class= "text-center clearfix col-md-12">
                    {{ $medecins->links() }}
                </div>
            </div>
         </div>
    </div>
@endsection