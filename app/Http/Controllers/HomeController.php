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
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('presentacion');
    }

    public function listaEmpleados()
    {
        return View::make('HomeController.listaEmpleados');
    }

    public function datospersonales()
    {
        return view('datos.create');
    }
}
