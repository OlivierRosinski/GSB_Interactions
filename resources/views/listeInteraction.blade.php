@extends('layouts.master')
@section('content')

<br><br> <br><br> 
<h1>Liste des interactions du médicament</h1>
<div class="col-md-offset-1 col-md-10">
    <table class="table table-striped listeFiltree">
        <thead>
        <tr>
                <td><center> Interactions entre les médicaments </center></td>
        <td><center> Option </center></td>
        </tr>
        </thead>
        <tbody>
            @foreach($lesInteractions as $uneInteraction)
            <tr>
                <td></td>
                <td></td>
            </tr>
            <tr height='20'>
                <td><center>{{$uneInteraction -> id_medicament -> nom_commercial }} réagis avec {{$uneInteraction -> med_id_medicament -> nom_commercial }}</center></td>
        <td><center> </center></td>                    
        </tr>
        @endforeach
        </tbody>
    </table>   
</div>

@stop