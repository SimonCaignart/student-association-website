@extends('layouts.app')

@section('content')
<div class = cadre>
    <h1>Evenement du mois</h1>
    @if (count($manifestations) > 0)
        @foreach ($manifestations as $manifestation)
            <h3><a href="/manifestations/{{$manifestation->id}}">{{$manifestation->nom}}</a></h3>
<<<<<<< HEAD
          
            <small>Créer à {{$manifestation->created_at}}</small>
            {!! Form::open(['action' => 'CommentsController@store', 'method' => 'POST'])!!}
           <div class="form-group">
               {{Form::text('Comments','',['class'=> 'form-control','placeholder'=>'text'])}}
=======
            <small>Créer le {{$manifestation->created_at}}</small>
>>>>>>> DevSacha

            </div>

          
            {{Form::submit('Ajouter commentaire',['class' => 'btn btn-warning'])}}
            {!! Form::close()!!}

          
        @endforeach
    @else
        <p>Pas d'activité d'organisées</p>
    @endif
  
</div>

@endsection
