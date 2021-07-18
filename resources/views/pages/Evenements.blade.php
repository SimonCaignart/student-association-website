@extends('layouts.app')

@section('content')
<div class = "cadre">
    @auth
        @if (Auth::user()->Role_id == 1)
            <a href="/manifestations/create">
                <button class ='styleButton1' type="button">Créer une manifestation</button>
            </a>
        @endif

    @endauth
    <a href="/manifestations">
        <button class ='styleButton1' type="button">Evènement du mois</button>
    </a>

</div>

@endsection
