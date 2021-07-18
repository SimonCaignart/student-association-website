@extends('layouts.app')

@section('content')

<form id="contactForm"action="action_page.php">

        <label for="fname">Nom</label>
        <input type="text" id="nom" name="nom" placeholder="Votre nom de famille..">
    
        <label for="prenom">Prénom</label>
        <input type="text" id="prenom" name="prenom" placeholder="Votre prénom..">
    
        <label for="centre_cesi">Centre CESI</label>
        @include('inc.centerSelect')
    
        <label for="sujet">Sujet du message</label>
        <textarea id="sujet" name="sujet" placeholder="Ecrivez votre message ici.." style="height:200px"></textarea>
    
        <input type="Envoyer" value="Envoyer">
    
      </form>
      
@endsection