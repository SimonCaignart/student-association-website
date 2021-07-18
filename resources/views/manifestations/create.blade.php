@extends('layouts.app')

@section('content')
<div class = "cadre">
    <h1>Créer une manifestation</h1>
    {!! Form::open(['action' => 'ManifestationsController@store', 'method' => 'MANIFESTATION', 'enctype' => 'multipart/form-data']) !!}
    <div class="form-group">
        {{Form::label('nom','Nom')}}
        {{Form::text('nom', '', ['class' => 'form-control', 'placeholder' => 'Nom'])}}
    </div>
    <div class="form-group">
        {{Form::label('description','Description')}}
        {{Form::textarea('description', '', ['class' => 'form-control', 'placeholder' => 'Description'])}}
    </div>
    <div class="form-group">
        {{Form::label('date','Date')}}
        {{Form::date('date', '', ['class' => 'form-control'])}}
    </div>
    <div class="form-group">
        {{Form::label('recurent','Recurent')}}
        {{Form::select('recurent', ['Cette évenement est ponctuel' => 'Ponctuel', 'Cette évenement aura lieu une fois par semaine' => 'Une fois par semaine', 'Cette évenement aura lieu fois toutes les deux semaines' => 'Une fois toutes les deux semaines', 'Cette évenement aura lieu fois par mois' => 'Une fois par mois'], 'Ponctuel')}}
    </div>
    <div class="form-group">
        {{Form::label('prix','Prix')}}
        {{Form::number('prix', '0', ['class' => 'form-control', 'placeholder' => 'Prix'])}}
    </div>
    <div class="form-group">
        {{Form::label('image','Image')}}
        {{Form::file('image')}}
    </div>


    {{ Form::submit('Poster', ['class' => 'btn btn-primary'])}}
    {!! Form::close() !!}
</div>


@endsection
