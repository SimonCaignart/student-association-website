@extends('layouts.app')


@section('content')
<div class = cadre>
<<<<<<< HEAD
   <a href="/manifestations/{{$manifestation->id}}" class= "btn btn-default">retour</a>
        <h1>{{$manifestation->nom}}</h1>
        <div>
            {{$manifestation->description}} <br>
            <img src="{{$manifestation->image}}" alt="">
            {{$manifestation->frequence}}<br>
            {{$manifestation->date}}<br>
            {{$manifestation->prix}}<br>
            <input type="text"><textarea name="comment" id="" cols="30" rows="10"></textarea>
            <input envoyer commentaire>
            
            <button><img class = 'like' src="{{asset('images/like.png')}}"alt="like"></button>
            <button>S'incrire à l'événement</button>

        // recup id utilisateur et id activité
=======
    <h1 class = "titre1">{{$manifestation->nom}}</h1>
    <div>
        <p><b>Description :</b> {{$manifestation->description}}</p>
        <p><b>Date de l'évenement (début si renouvelable) : </b>{{$manifestation->date}}</p>
        <p><b>Prix d'inscription :</b> {{$manifestation->prix}}€</p>
        <p><b>Renouvellement :</b> {{$manifestation->recurent}}</p>
        <?php $test=$manifestation->image ?>
        <p><img class='image1' src="{{asset('storage/images/'.$test)}}" alt="pomme" ></p>
    </div>

    </div>
    <div class = 'cadre2'>

        {!! Form::open(['action' => 'ParticipatesController@store', 'method' => 'MANIFESTATION', 'enctype' => 'multipart/form-data']) !!}
        {!! Form::token() !!}

        <?php $Activity_id = $manifestation->id ?>
        {!! Form::hidden('Activity_id', $Activity_id) !!}

        <?php $Participant_id = Auth::user()->id ?>
        {!! Form::hidden('Participant_id', $Participant_id) !!}

        <?php $Participant_firstname = Auth::user()->firstname ?>
        {!! Form::hidden('Participant_firstname', $Participant_firstname) !!}

        <?php $Participant_name = Auth::user()->name ?>
        {!! Form::hidden('Participant_name', $Participant_name) !!}

        <br>
        <a class="btn btn-warning" href="{{ route('export') }}">Export User Data</a>
        <?php $inscription = 0?>

        @foreach ($participates as $participate)
        @if(Auth::user()->id == $participate->Participant_id )
            <?php $inscription = 1 ?>
        @endif
        @endforeach
        @if ($inscription == 1)
            <button class="btn btn-primary" disabled>Vous êtes inscrit</button>
        @else
            {{ Form::submit("M'inscrire", ['class' => 'btn btn-primary'])}}
        @endif

        {!! Form::close() !!}
    </div>
    <div class="cadre">
        @auth
        @if (Auth::user()->Role_id == 0 || Auth::user()->Role_id == 1)


        <div>
            {!! Form::open(['action' => 'CommentsController@store', 'method' => 'MANIFESTATION', 'enctype' => 'multipart/form-data']) !!}
            {!! Form::token() !!}

            {!! Form::textarea('text', '', ['class' => 'form-control', 'placeholder' => 'Votre Commentaire', 'rows' => 2, 'cols' => 50]) !!}

            <?php $Activity_id = $manifestation->id ?>
            {!! Form::hidden('Activity_id', $Activity_id) !!}

            <?php $user_id = Auth::user()->id ?>
            {!! Form::hidden('user_id', $user_id) !!}

            <div class="form-group">
                {{Form::label('comment_image','Photo')}}
                {{Form::file('comment_image')}}
            </div>

            <br>


>>>>>>> DevSacha
        </div>
        @if ($inscription == 1)
            {{ Form::submit('Commenter', ['class' => 'btn btn-dark'])}}
        @else
            <button class = "btn btn-dark" disabled> Vous devez être inscrit à cette activité pour commenter</button>
        @endif
        {!! Form::close() !!}
        @endif
        @endauth
        <div>

            @foreach ($comments as $comment)
            @if ($manifestation->id == $comment->Activity_id)
            <div class = 'comment1'>
                <p><b>Commentaire : </b>{{$comment->text}}</p>
                <?php $photo=$comment->comment_image ?>
                @if ($photo != null)
                    <p><img class='image2' src="{{asset('storage/comment_image/'.$photo)}}" alt="Erreur de chargement de la photo" ></p>
                @endif

                <small>Modifié par {{$comment->user_id}} pour la dernière fois le {{$comment->updated_at}}</small>
            </div>
            @endif
            @endforeach
        </div>

        <small>Créer le {{$manifestation->created_at}}</small>
        <br>
        <a href="/manifestations" class= "btn btn-primary">retour</a>
    </div>

@endsection
 