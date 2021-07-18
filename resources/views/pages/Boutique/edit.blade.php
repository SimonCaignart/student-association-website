@extends('layouts.app')

@section('content')

<div class="cadre "class="container">

<h1>Modifier le produit : {{$product->name}}</h1>

{!! Form::open(['action' => ['ProductsController@update', $product->id], 'method' => 'POST']) !!}
    
<div class="form-group">
    {{Form::label('name', 'Nom du produit')}}
    {{Form::text('name', $product->name, ['class' => 'form-control', 'placeholder' => 'Nom du Produit'])}}
</div>

<div class="form-group">
    {{Form::label('description', 'Description du produit')}}
    {{Form::textarea('description', $product->description, ['class' => 'form-control', 'placeholder' => 'Description du Produit'])}}
</div>

<div class="form-group">
    {{Form::label('price', 'Prix du produit')}}
    {{Form::text('price', $product->price, ['class' => 'form-control', 'placeholder' => 'Prix du Produit'])}}
</div>

{{Form::hidden('_method', 'PUT')}}

{{Form::submit('Modifier le produit', ['class' => 'btn btn-warning'])}}


{!! Form::close() !!}


</div>



@endsection