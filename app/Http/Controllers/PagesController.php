<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function Acceuil(){
        return view('pages.acceuil');
    }

    public function Boutique(){
        return view('pages.boutique');
    }

    public function Contact(){
        return view('pages.contact');
    }

    public function Evenements(){
        return view('pages.evenements');
    }

    public function Mentions(){
        return view('pages.mentions');
    }

    public function Confidentialité(){
        return view('pages.confidentialité');
    }

    public function Manifestations() {
        return view('pages.manifestations');
    }

}
