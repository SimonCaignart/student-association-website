@extends('layouts.app')

@section('content')

@if(Session::has('cart'))

<section class="cadre">

<div class="row">
        <div class="col-sm-6 col-md-6">
            <ul class="list-group">
                    @foreach($products as $product)
                    <li class="list-group-item">
                            <strong>{{ $product ['item'] ['name']}}</strong>
                            <span class="label label-primary">{{ $product ['price']}} €</span>  <span class="badge badge-success">{{ $product ['qty']}}</span>
                    </li>
                    @endforeach
            </ul>
        </div>
</div>

<div class="row">
    <div class="col-sm-6 col-md-6 col-md-offset-3 col-sm-offset-3">
    <strong>Prix total : {{$totalPrice}} €</strong>
    </div>
</div>
<hr>
<div class="row">
    <div class="col-sm-6 col-md-6 col-md-offset-3 col-sm-offset-3"><a href="{{ route('Mails.sendemail')}}" class="btn btn-success btn-lg">Payer</a>

<a href="{{ route('product.deleteProduct')}}" class="btn btn-danger">Supprimer le panier</a>
    </div>
</div>

@else
<div class="cadre">
    <div class="col-sm-6 col-md-6 col-md-offset-3 col-sm-offset-3">
   <h2 style="text-align: center; padding-top:50px"> Aucun produit dans votre panier, rendez vous dans la <a href="/products">Boutique</a> pour trouver votre bonheur</h2>
    </div>
</div>
@endif

</section>


@endsection