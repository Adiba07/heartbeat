
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Dashboard Infirmier </title>
    <!-- font awesome-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- Bootstrap -->
    <link href="{{asset('assets/css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{asset('assets/css/styleInfirmier.css')}}" rel="stylesheet">

</head>


<body>

        <!--sideBar-->
        <nav class="navbar navbar-inverse sidebar" role="navigation" id="nav">
            <div class="container-fluid">
                <!-- Brand and toggle get grouped for better mobile display -->
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-sidebar-navbar-collapse-1">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="#">Brand</a>
                </div>
                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse" id="bs-sidebar-navbar-collapse-1">
                    <ul class="nav navbar-nav">
                        <li class="active"><a href="#">Home<span style="font-size:16px;" class="pull-right hidden-xs showopacity glyphicon glyphicon-home"></span></a></li>
                        <li ><a href="#">Profile<span style="font-size:16px;" class="pull-right hidden-xs showopacity glyphicon glyphicon-user"></span></a></li>
                        <li ><a href="#">Messages<span style="font-size:16px;" class="pull-right hidden-xs showopacity glyphicon glyphicon-envelope"></span></a></li>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">Settings <span class="caret"></span><span style="font-size:16px;" class="pull-right hidden-xs showopacity glyphicon glyphicon-cog"></span></a>
                            <ul class="dropdown-menu forAnimate" role="menu">
                                <li><a href="#">Action</a></li>
                                <li><a href="#">Another action</a></li>
                                <li><a href="#">Something else here</a></li>
                                <li class="divider"></li>
                                <li><a href="#">Separated link</a></li>
                                <li class="divider"></li>
                                <li><a href="#">One more separated link</a></li>
                            </ul>
                        </li>
                        <li><a href="#">Home<span style="font-size:16px;" class="pull-right hidden-xs showopacity glyphicon glyphicon-home"></span></a></li>
                        <li ><a href="#">Profile<span style="font-size:16px;" class="pull-right hidden-xs showopacity glyphicon glyphicon-user"></span></a></li>
                        <li ><a href="#">Messages<span style="font-size:16px;" class="pull-right hidden-xs showopacity glyphicon glyphicon-envelope"></span></a></li>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">Settings <span class="caret"></span><span style="font-size:16px;" class="pull-right hidden-xs showopacity glyphicon glyphicon-cog"></span></a>
                            <ul class="dropdown-menu forAnimate" role="menu">
                                <li><a href="#">Action</a></li>
                                <li><a href="#">Another action</a></li>
                                <li><a href="#">Something else here</a></li>
                                <li class="divider"></li>
                                <li><a href="#">Separated link</a></li>
                                <li class="divider"></li>
                                <li><a href="#">One more separated link</a></li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
        <div class="main">
            <!-- Content Here -->
        </div>

            <div class="container-fluid">
                <div class="col-sm-8">
            <table class="table table-hover table-bordered table-responsive">

            <tr>
                <th>
                    Nom
                </th>
                <th>
                    Prenom
                </th>
                <th>
                    Date de Naissance
                </th>
                <th>
                    Grade
                </th>
                <th>
                    Spécialité
                </th>
                <th>
                    Modifier
                </th>
                <th>
                    Supprimer
                </th>
            </tr>
            <tr>
                <td>Mohamed</td><td>Mohamed</td><td>10-10-1990</td><td>Chirurgien</td><td>Pediatre</td><td><button type="button" class="btn btn-warning">Modifier</button></td><td> <button type="button" class="btn btn-danger">Supprimer</button></td>
            </tr>
            <tr>
                <td>Mohamed</td><td>Mohamed</td><td>10-10-1990</td> <td>Chirurgien</td><td>Pediatre</td><td><button type="button" class="btn btn-warning">Modifier</button></td><td> <button type="button" class="btn btn-danger">Supprimer</button></td>
            </tr>
            <tr>
                <td>Mohamed</td><td>Mohamed</td><td>10-10-1990</td> <td>Chirurgien</td><td>Pediatre</td><td><button type="button" class="btn btn-warning">Modifier</button></td><td> <button type="button" class="btn btn-danger">Supprimer</button></td>
            </tr>
            <tr>
                <td>Mohamed</td><td>Mohamed</td><td>10-10-1990</td><td>Chirurgien</td><td>Pediatre</td><td><button type="button" class="btn btn-warning">Modifier</button></td><td> <button type="button" class="btn btn-danger">Supprimer</button></td>
            </tr>
            <tr>
                <td>Mohamed</td><td>Mohamed</td><td>10-10-1990</td> <td>Chirurgien</td><td>Pediatre</td><td><button type="button" class="btn btn-warning">Modifier</button></td><td> <button type="button" class="btn btn-danger">Supprimer</button></td>
            </tr>
            <tr>
                <td>Mohamed</td><td>Mohamed</td><td>10-10-1990</td><td>Chirurgien</td><td>Pediatre</td><td> <button type="button" class="btn btn-warning">Modifier</button></td><td> <button type="button" class="btn btn-danger">Supprimer</button></td>
            </tr>
        </table>
                    <button type="button" id="ajouter"class="btn btn-primary">Ajouter</button></div>



</div>


</body>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->

<script src="{{asset('assets/js/jquery.min.js')}}"></script>
<script src="{{asset('assets/js/JSInfirmier.js')}}"></script>
<script src="{{asset('assets/js/bootsrap.min.js')}}"></script>
</html>
