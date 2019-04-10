<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Elibyy\TCPDF\Facades\TCPDF;

class PDFController extends Controller
{
    public function index(){
      $html = '<h1>Puratos S.A. de. C.V. </h1><br>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed
              do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut
               enim ad minim veniam, quis nostrud exercitation ullamco laboris
               nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor
               in reprehenderit in voluptate velit esse cillum dolore eu fugiat
               nulla pariatur. Excepteur sint occaecat cupidatat non proident,
               sunt in culpa qui officia deserunt mollit anim id est laborum.';
      $pdf = new TCPDF();
      $pdf::SetTitle('Puratos S.A. de C.V.');
      $pdf::AddPage();
      $pdf::writeHTML($html, true, false, true, false, '');
      $pdf::Output('hello_world.pdf');
    }
}
