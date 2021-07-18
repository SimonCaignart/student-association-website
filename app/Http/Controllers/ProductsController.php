<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Product;
Use App\Basket;
Use App\Order;
use Auth;
use Session;

class ProductsController extends Controller
{
 /**
     * Create a new controller instance.
     *
     * @return void
     */
    // public function __construct()
    // {
    //     $this->middleware('auth', ['except' => ['index', 'show' ]]);
    // }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = Product::orderBy('price', 'desc')->paginate(5);
       return view('Pages.Boutique.index')->with('products', $products);
    }


public function getAddToCart(Request $request, $id)
    {
        $product = Product::find($id);
        $cart = Session::has('cart') ? Session::get('cart') : null;
        if(!$cart)
        {
            $cart = new Basket($cart);
        }
        $cart->add($product, $product->id);
        Session::put('cart', $cart);
        // dd($request->session()->get('cart'));
        return redirect()->route('products.index');
    }

    public function deleteProduct()
    {
        Session::flush(); // removes all session data
        return redirect()->route('products.index');
    }

public function getCart()
{
        if (!Session::has('cart')){
            return view('pages.Boutique.shopping-cart');
        }
        $oldCart = Session::get('cart');
        $cart = new Basket($oldCart);
        return view('pages.Boutique.shopping-cart', ['products' => $cart->items, 'totalPrice' => $cart->totalPrice ]);
}

public function postCheckout(Request $request)
{
        if (!Session::has('cart')){
            return view('pages.Boutique.shopping-cart');
        }
        $oldCart = Session::get('cart');
        $cart = new Basket($oldCart);

        $order = new Order();
        $order->cart = serialize($cart);
        $order->User_id = Auth::user()->id;

        Auth::user()->orders()->save($order);

        Session::forget('cart');
        return redirect('/products')->with('success', 'Commande passée avec succès ! Merci');
}


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pages.boutique.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this ->validate($request, [
            'name' => 'required',
            'description' => 'required',
            'price' => 'required'
        ]);

        // Create Post
        $product = new Product;
        $product->name = $request->input('name');
        $product->description = $request->input('description');
        $product->price = $request->input('price');
        $product->save();

        return redirect('/products')->with('success', 'Produit Ajouté');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
      $product = Product::find($id);
        return view('pages.boutique.show')->with('product', $product);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $product = Product::find($id);
        return view('pages.boutique.edit')->with('product', $product);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this ->validate($request, [
            'name' => 'required',
            'description' => 'required',
            'price' => 'required'
        ]);


        // Update Post
        $product = Product::find($id);
        $product->name = $request->input('name');
        $product->description = $request->input('description');
        $product->price = $request->input('price');
        $product->save();

        return redirect('/products')->with('success', 'Produit Mis A Jour');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $product = Product::find($id);
        $product->delete();

        return redirect('/products')->with('success', 'Produit supprimé');
    }
}
