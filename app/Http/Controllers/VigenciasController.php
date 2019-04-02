<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Validator;
use App\Client;

class VigenciasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $vigencias = Client::all();
      return view('listavigencias')->with('vigencias', $vigencias);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function createClient(array $data)
    {
      $client = new Client();
      $client->name = $data['Name'];
      $client->rfc = $data['RFC'];
      $client->numero_seguro = $data['NumeroSocial'];

      return $client;
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
     public function validator(array $data)
     {
       return Validator::make($data,[
         'Name' => 'required',
         'RFC' => 'required',
         'NumeroSocial' => 'required',
       ]);
     }

    public function store(Request $request)
    {

      $validator = $this->validator($request->all());
      $errors = $validator->errors();
      $validator->validate();

      $client = $this->createClient($request->all());
      $client->save();


      return redirect()->route('listavigencias');

        // dd($request->all());
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
