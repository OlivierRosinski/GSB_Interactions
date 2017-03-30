@extends('layouts.master')
@section('content')

<br><br> <br><br> 
@if(isset($message))
<div class="alert alert-info alert-dismissable fade in">
    <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
    <p>{{$message}}</p>
</div>
@endif
<h1 class='text-center'>Liste des interactions du médicament {{$nomMedicament->nom_commercial}}</h1>
@if($lesInteractions != null)
<div class="col-md-offset-1 col-md-10">
    <table class="table table-striped listeMedicament">
        <thead>
            <tr>
                <td> Interactions entre les médicaments </td>
        <td> Option </td>
        </tr>
        </thead>
        <tbody>
            @foreach($lesInteractions as $uneInteraction)
            <tr>
                <td></td>
                <td></td>
            </tr>
            <tr height='20'>
                <td>{{$uneInteraction ->  medicamentA }} réagis avec {{$uneInteraction ->  medicamentB }}</td>
        <td> <a href="{{url('/modifierInteraction/'.$uneInteraction ->  idA . '/' . $uneInteraction ->  idB )}}"><i class="fa fa-pencil-square-o fa-2x" aria-hidden="true"></i></a> <a href="{{url('/supprimerInteraction/'.$uneInteraction ->  idA . '/' . $uneInteraction ->  idB )}}"><i class="fa fa-trash fa-2x" aria-hidden="true"></i></a></td>                    
        </tr>
        @endforeach
        </tbody>
    </table>   
</div>
@endif
@stop