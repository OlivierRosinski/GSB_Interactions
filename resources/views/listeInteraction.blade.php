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
                <td><center>{{$uneInteraction ->  medicamentA }} réagis avec {{$uneInteraction ->  medicamentB }}</center></td>
    <td><center> <a href="{{url('/getFormInteraction/'.$uneInteraction ->  idA . '/' . $uneInteraction ->  idB )}}"><i class="fa fa-pencil-square-o fa-2x" aria-hidden="true"></i></a> <a href="{{url('')}}"><i class="fa fa-trash fa-2x" aria-hidden="true"></i></a></center></td>                    
        </tr>
        @endforeach
        </tbody>
    </table>   
</div>
@stop