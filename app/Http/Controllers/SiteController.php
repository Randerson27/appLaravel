<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Projeto;
use App\Models\Produto;


class SiteController extends Controller
{
    public function index()
    {
        // return "index";
       $projetos = Projeto::all();

        return view('site/home', compact('projetos'));
        
    }

    public function details($slug){
        $produto = Produto::where('slug', $slug)->first();

        return view('site/details', compact('produto'));

    }
}
