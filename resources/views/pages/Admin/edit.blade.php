@extends('layouts.app')

@section('content')

<div class="cadre "class="container">

<h1>Modifier  : {{$administration->firstname}} {{$administration->name}}</h1>

{!! Form::open(['action' => ['AdministrationsController@update', $administration->id], 'method' => 'POST']) !!}
    
<div class="form-group">
    {{Form::label('firstname', 'Prénom')}}
    {{Form::text('firstname', $administration->firstname, ['class' => 'form-control', 'placeholder' => 'Prénom'])}}
</div>

<div class="form-group">
    {{Form::label('name', 'Nom')}}
    {{Form::text('name', $administration->name, ['class' => 'form-control', 'placeholder' => 'Nom'])}}
</div>

<div class="form-group">
    {{Form::label('email', 'Email')}}
    {{Form::textarea('email', $administration->email, ['class' => 'form-control', 'placeholder' => 'Email'])}}
</div>

<div class="form-group">
    {{Form::label('Role_id', 'Rôle')}}
    {{Form::text('Role_id', $administration->Role_id, ['class' => 'form-control', 'placeholder' => 'Role_id'])}}
</div>

<div class="form-group">
    {{Form::label('Cesi_id', 'Centre Cesi')}}
    {{Form::text('Cesi_id', $administration->Cesi_id, ['class' => 'form-control', 'placeholder' => 'Cesi_id'])}}
</div>

{{Form::hidden('_method', 'PUT')}}

{{Form::submit('Modifier les informations', ['class' => 'btn btn-warning'])}}

{!! Form::close() !!}


</div>

@endsection