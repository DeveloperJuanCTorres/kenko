<?php

namespace App\Http\Controllers;

use App\Models\Banner;
use App\Models\Brand;
use App\Models\Contact;
use App\Models\Field;
use App\Models\Portfolio;
use App\Models\Product;
use App\Models\Security;
use App\Models\Subtaxonomy;
use App\Models\Taxonomy;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $contactanos = Contact::find(1);
        $banners = Banner::all();
        $productos = Product::all();
        $categorias = Taxonomy::all();
        $subcategorias = Subtaxonomy::all();
        $marcas = Brand::all();
        return view('home', compact('banners','contactanos','productos','categorias','marcas'));
    }

    public function about()
    {
        $contactanos = Contact::find(1);
        $nosotros = Field::find(1);
        return view('about', compact('nosotros','contactanos'));
    }

    public function contact()
    {
        $contactanos = Contact::find(1);
        return view('contact', compact('contactanos'));
    }

    public function portfolio()
    {
        $portafolio = Portfolio::find(1);
        $contactanos = Contact::find(1);
        return view('portfolio', compact('contactanos','portafolio'));
    }

    public function work()
    {
        $contactanos = Contact::find(1);
        return view('work', compact('contactanos'));
    }

    public function covid19()
    {
        $contactanos = Contact::find(1);
        $seguridad = Security::find(1);
        return view('covid19', compact('contactanos','seguridad'));
    }

    public function reclamaciones()
    {
        $contactanos = Contact::find(1);
        return view('libro-reclamaciones', compact('contactanos'));
    }
}
