<!doctype html>
<html lang="fr">
    <head>
        {!! Html::style('assets/css/bootstrap.css') !!}
        {!! Html::style('assets/css/integrations.css') !!}
        {!! Html::style('assets/css/bootstrap.css') !!}
        <meta name="description" content="CSS only mobile fisrt navigation"> <!-- Mise en page pour mobile -->
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1"/>
        <meta charset="utf-8"/>

    </head>
    <body class="body">
        <div class="container">
            <nav class="navbar navbar-default navbar-fixed-top" role="navigation"> <!-- a modifier pour la mettre en responsive -->
                <div class="container"> <!-- Bloc qui affiche la barre en haute -->
                    <br>
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle collapse" data-toggle="collapse" data-target="#navbar-collapse-1">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                    </div>
                    <div class="navbar-default navbar-static-top">
                        <ul class="topnav" id="myTopnav">
                            @if (Session::get('id') == 0)
                            <li><a href="{{url('/getLogin')}}">Connexion</a></li>
                            @endif
                            @if (Session::get('id')> 0)
                            <li><a href="{{url('/getLogout')}}">Se déconnecter</a></li>
                            @endif
                        </ul>
                    </div>
                </div>
            </nav>
        </div>

        <div class="container">
            @yield('content')
        </div>
    </body>
</html>
{!! Html::script('assets/js/bootstrap.min.js') !!}
{!! Html::script('assets/js/jquery-2.1.3.min.js')  !!}  
{!! Html::script('assets/js/ui-bootstrap-tpls.js')  !!}
{!! Html::script('assets/js/bootstrap.js')  !!}
