@extends('layouts.app')

@section('content')
<div class="cadre">
    <div class="container text-center">
        <h1>Acceuil du site du BDE</h1>
        <iframe class="heading-center" width="560" height="315" src="https://www.youtube.com/embed/dGeXSqA2seM" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe></div>
    </div>
</div>
<div class="cadre">
    <div class="container text-center">

        <div class="bd-example">
            <div id="carouselAccueil" class="carousel slide" data-ride="carousel">
                <ol class="carousel-indicators">
                <li data-target="#carouselAccueil" data-slide-to="0" class="active"></li>
                <li data-target="#carouselAccueil" data-slide-to="1"></li>
                <li data-target="#carouselAccueil" data-slide-to="2"></li>
                </ol>
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <a href="/manifestations">
                        <img class="heading-center" width="615" height="429" src="{{asset('images/evenement.jpg')}}" class="d-block w-100" alt="Image événement">
                        <div class="carousel-caption d-none d-md-block">
                            <h3 style="color:black; background-color:gainsboro;" >Evénement</h3>
                        </div>
                    </div>
                    <div class="carousel-item">
                    <a href="/activites">
                        <img class="heading-center" width="615" height="429" src="{{asset('images/activite.jpeg')}}" class="d-block w-100" alt="Image activité">
                        <div class="carousel-caption d-none d-md-block">
                            <h3 style="color:black; background-color:gainsboro;">Activités</h3>
                        </div>
                    </div>
                    <div class="carousel-item">
                    <a href="/products">
                        <img class="heading-center" width="615" height="429" src="{{asset('images/boutique.jpg')}}" class="d-block w-100" alt="Image boutique">
                        <div class="carousel-caption d-none d-md-block">
                            <h3 style="color:black; background-color:gainsboro;">Boutique</h3>
                        </div>
                    </div>
                </div>
                <a class="carousel-control-prev" href="#carouselAccueil" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carouselAccueil" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
                </a>
            </div>
        </div>
    </div>
</div>
@endsection