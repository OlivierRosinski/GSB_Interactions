@extends('layouts.master')
@section('content')
<!doctype html>
<html lang="fr">
    <br><br> <br><br> 
        <div>
            @if(Session::get('id') == 0)
            <center>
            <h1>Bienvenue sur l'outil GSB Intégrations.</h1>
            </center>
            @endif
            @if(Session::get('id') > 0)
            <center>
            <h1>Bienvenue {{Session::get('prenom')}} {{Session::get('nom')}} .</h1>
            </center>
            @endif
        </div>
</html>
@stop