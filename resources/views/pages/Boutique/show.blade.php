@extends('layouts.app')

@section('content')

<div class="container" id="ProduitShow">
    <div class="row">
      <div class="col-md-4 product"><img src="{{$product->image}}" alt="t-shirt" class="img-fluid"></div>
      <div class="col-md-8 info">
        <div class="info-wrapper">
        <h2 >{{$product->name}}</h2>
          <p class="lead">
            {{$product->description}}
          </p>
          <ul class="product-info list-unstyled" >
            <li class="size">
              <select title="Choisi ta taille" class="selectpicker">
                <option value="small">Small</option>
                <option value="medium">Medium</option>
                <option value="large">Large</option>
                <option value="x-large">X-Large</option>
              </select>
            </li>
            <li class="Taille">
              <div class="product-quantity">
                <input type="text" placeholder="T'en veux combien frère ?" class="quantity">
              </div>
            </li>
            <li class="price">{{$product->price}} €</li>
            @auth
          @if(Auth::user()->Role_id == 2 || Auth::user()->Role_id == 3)
            <li class="boutonAdmin"><div><a href="/products/{{$product->id}}/edit" class="btn btn-success">Modifier le produit <i class="far fa-edit"></i></a></div></li>
            <li class="boutonAdmin">
              <div>
                       {!!Form::open(['action' => ['ProductsController@destroy', $product->id], 'method' => 'POST', 'class' => 'pull-right'])!!}
                      {{Form::hidden('_method', 'DELETE')}}
                      {{Form::submit('Supprimer', ['class' => 'btn btn-danger'])}}
                      {!!Form::close()!!}
            </div>
        </li>
          @endif
          @endauth
         
          </ul>
     
@auth 
        </div><a href="{{ route('product.addToCart' , ['id' => $product->id])}}" class="add-to-cart btn btn-primary">Ajouter au panier <i class="fas fa-shopping-cart"></i></a>
@endauth
@guest
<button href="" class="add-to-cart btn btn-primary" disabled>Ajouter au panier <i class="fas fa-shopping-cart"></i></button>
@endguest

    </div>
  </div>
  <div class="taille" class="col-md-4 product"><img src="{{asset('Images/guide-taille.png')}}" alt="guide des tailles"  class="img-fluid" ></div>
@endsection