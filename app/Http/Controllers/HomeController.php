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
    public function datosempresa()
    {
        return view('datosempresa');
    }
    public function datospersonales()
    {
        return view('datospersonales');
    }
    public function ingresarvigencias()
    {
        return view('ingresarvigencias');
    }
    public function listavigencias()
    {
        return view('listavigencias');
    }
    public function register()
    {
        return view('register');
    }
    public function ayuda()
    {
        return view('ayuda');
    }
    public function listaempleados()
    {
        return view('listaempleados');
    }
}
