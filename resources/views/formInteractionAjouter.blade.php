@extends('layouts.master')
@section('content')

<div class='text-center'>
    <h1>Ajout d'une interaction</h1>&nbsp;
</div>
{!! Form::open(['url' => '/postAjouterInteraction']) !!}
<div class='col-md-12'>
    <div class='col-md-offset-3 col-md-3'>
        <h1>Médicament A :</h1>
    </div>
    <div class='col-md-3 cbMedicament'>
        <select  name='cbMedicamentA' onclick="checkSelected()" class="form-control">
            <option value="Sélectionnez un médicament" disabled selected required>Sélectionnez un médicament</option>
            @foreach($lesMedicaments as $unMedicament)
            <option value="{{$unMedicament->id_medicament}}">{{$unMedicament->nom_commercial}}</option>
            @endforeach
        </select>
    </div>  
</div>
<div class='text-center'>
    &nbsp;<h1>Intéragis avec</h1><br><br>
</div>
<div class='col-md-12'>
    <div class='col-md-offset-3 col-md-3'>
        <h1>Médicament B :</h1>
    </div>
    <div class='col-md-3 cbMedicament'>
        <select  name='cbMedicamentB' onclick="checkSelected()" class="form-control">
            <option value="Sélectionnez un médicament" disabled selected required>Sélectionnez un médicament</option>
            @foreach($lesMedicaments as $unMedicament)
            <option value="{{$unMedicament->id_medicament}}">{{$unMedicament->nom_commercial}}</option>
            @endforeach
        </select>
    </div>   
</div>
<div class='col-md-offset-1'>
    <button type="submit" class="btn btn-info col-md-1  col-md-offset-4">Ajouter</button>
    {!! Form::close() !!}
</div>
<div>
    <a href='{{url('/')}}'><button class="btn btn-info col-md-1  col-md-offset-1">Annuler</button></a>
</div>

@stop
