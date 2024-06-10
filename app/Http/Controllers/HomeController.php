<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function auxiliarHome()
    {
        return view('usuarios.auxiliar.index');
    }

    public function liderHome()
    {
        return view('usuarios.lider.index');
    }

    public function colaboradorHome()
    {
        return view('usuarios.colaborador.index');
    }

}
