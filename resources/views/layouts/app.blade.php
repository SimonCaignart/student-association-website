<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="{{ asset('js/app.js') }}"></script>
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.1.0/css/all.css">

    <title>BDE Cesi La Rochelle</title>
</head>

<body>

@include('inc.navbar')
@include('cookieConsent::index')
@yield('content')

<div class="container">
    @include('inc.messages')
</div>

<footer>
    <a href="mentions">Mentions Légales</a>
    <span>-</span>
    <a href="confidentialité">Politique de Confidentialité</a>
</footer>

@include('inc.logReg')
<button onclick='window.scrollTo({top: 0, behavior: "smooth"});' id="BoutonTop" title="Retour en Haut">&#8593<br>Top</button>
</body>

</html>

{{-- Script for responsive top nav --}}
<script>
    function expandLinks() {
        var x = document.getElementById("myTopnav");
        if (x.className === "top-nav") {
            x.className += " responsive";
        } else {
            x.className = "top-nav";
        }
    }
</script>

 <!-- Script du Bouton top -->

 <script>
    // When the user scrolls down 70px from the top of the document, show the button
    window.onscroll = function() {
        scrollFunction()
    };

    function scrollFunction() {
        if (document.body.scrollTop > 100 || document.documentElement.scrollTop > 200) {
            document.getElementById("BoutonTop").style.display = "block";
        } else {
            document.getElementById("BoutonTop").style.display = "none";
        }
    }
</script>
