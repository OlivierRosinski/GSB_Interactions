@extends('layouts.master')
@section('content')

<br><br> <br><br> 
<div class="col-md-offset-1 col-md-10">
    <table class="table table-striped listeFiltree">
        <thead>
            <tr>
                <td><center> Dépot Légal </center></td>
        <td><center> Nom commercial </center></td>
        <td><center> Effets </center></td>
        <td><center> Contre indications</center></td>
        <td><center> Prix</center></td>
        <td><center> Interactions</center></td>
        </tr>
        </thead>
        <tbody>
            @foreach($lesMedicaments as $unMedicament)
            <tr>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
            </tr>
            <tr height='20'>
                <td><center>{{$unMedicament -> depot_legal}}</center></td>
        <td><center>{{$unMedicament -> nom_commercial}} </center></td>               
        <td><center>{{$unMedicament -> effets}}</center></td>
        <td><center>{{$unMedicament -> contre_indication}}</center></td>
        <td style="width:5%;"><center>{{$unMedicament -> prix_echantillon}} €</center></td>
        <td><center><a href="{{url('getListeInteraction/'.$unMedicament -> id_medicament)}}"><i class="fa fa-list fa-2x" aria-hidden="true"></i></a></center></td>
        </tr>
        @endforeach
        </tbody>
    </table>   
</div>

@stop