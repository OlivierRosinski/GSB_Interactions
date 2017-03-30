@extends('layouts.master')
@section('content')

<br><br> <br><br> 
<div class="col-md-offset-1 col-md-10">
    <table class="table table-striped text-center">
        <thead>
            <tr>
                <td> Dépot Légal </td>
        <td> Nom commercial </td>
        <td> Effets </td>
        <td> Contre indications</td>
        <td> Prix</td>
        <td> Interactions</td>
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
                <td>{{$unMedicament -> depot_legal}}</td>
        <td>{{$unMedicament -> nom_commercial}} </td>               
        <td>{{$unMedicament -> effets}}</td>
        <td>{{$unMedicament -> contre_indication}}</td>
        <td style="width:5%;">{{$unMedicament -> prix_echantillon}} €</td>
        <td><a href="{{url('getListeInteraction/'.$unMedicament -> id_medicament)}}"><i class="fa fa-list fa-2x" aria-hidden="true"></i></a></td>
        </tr>
        @endforeach
        </tbody>
    </table>   
</div>

@stop