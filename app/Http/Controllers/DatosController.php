<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Validator;
use App\Employee;
use App\Emergency;
use App\Address;
use App\Civil;

class DatosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function createEmployee(array $data)
    {
      $employee = new Employee();
      $employee->numero_empleado = $data['EmployeeNumber'];
      $employee->name = $data['EmployeeName'];
      $employee->first_lastname = $data['EmployeeSurnameF'];
      $employee->second_lastname = $data['EmployeeSurnameS'];
      $employee->fecha_alta = $data['Date'];
      $employee->antiguedad = $data['Antiguedad'];
      $employee->sexo = $data['Sexo'];
      $employee->birthdate = $data['Birthdate'];
      $employee->numero_seguro = $data['SocialNumber'];
      $employee->curp = $data['Curp'];
      $employee->rfc = $data['RFC'];


      return $employee;
    }

    public function createEmergency(array $data)
    {
      $emergency = new Emergency();
      $emergency->nombre = $data['EmergencyName'];
      $emergency->telefono = $data['EmergencyPhone'];

      return $emergency;

    }

    public function createEmergencyAddress(array $data)
    {
      $Address = new Address();
      $Address->avenue = $data['AvenueContact'];
      $Address->lote = $data['LoteContact'];
      $Address->manzana = $data['ManzanaContact'];
      $Address->number = $data['NumberContact'];
      $Address->street = $data['StreetContact'];
      $Address->colonia = $data['ColoniaContact'];
      $Address->municipality = $data['MunicipalityContact'];
      $Address->state = $data['StateContact'];
      $Address->codigo_postal= $data['CodigoPContact'];

      return $Address;

    }

    public function createAddress(array $data)
    {
      $address = new Address();
      $address->avenue = $data['ContactAvenue'];
      $address->lote = $data['ContactLote'];
      $address->manzana = $data['ContactManzana'];
      $address->number = $data['ContactNumber'];
      $address->street = $data['ContactStreet'];
      $address->colonia = $data['ContactColonia'];
      $address->municipality = $data['ContactMunicipality'];
      $address->state = $data['ContactState'];
      $address->codigo_postal= $data['ContactCodigoP'];

      return $address;

    }

    public function createCivil(array $data)
    {

      $civil = new Civil();
      $civil->soltero = $data['Civil'];
      $civil->casado = $data['Civil'];
      $civil->divorciado = $data['Civil'];
      $civil->viudo = $data['Civil'];
      $civil->separado = $data['Civil'];
      $civil->numero_hijos = $data['NHijos'];

      return $civil;

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
         'EmployeeNumber' => 'required',
         'EmployeeName' => 'required',
         'EmployeeSurnameF' => 'required',
         'EmployeeSurnameS' => 'required',
         'SocialNumber' => 'string|max:15',
         'Date' => 'date',
         'Antiguedad' => 'date',
         'Birthdate' => 'date',
         'Curp' => 'string',
         'RFC' => 'string',
         'NHijos' => 'string',
         'ContactAvenue' => 'required',
         'ContactLote' => 'required',
         'ContactManzana' => 'required',
         'ContactNumber' => 'required',
         'ContactStreet' => 'required',
         'ContactColonia' => 'required',
         'ContactMunicipality' => 'required',
         'ContactState' => 'required',
         'ContactCodigoP' => 'required',
         'EmergencyName' => 'string',
         'EmergencyPhone' => 'string',
         'AvenueContact' => 'required',
         'LoteContact' => 'required',
         'ManzanaContact' => 'required',
         'NumberContact' => 'required',
         'StreetContact' => 'required',
         'ColoniaContact' => 'required',
         'MunicipalityContact' => 'required',
         'StateContact' => 'required',
         'CodigoPContact' => 'required',
       ]);
     }

    public function store(Request $request)
    {

      $validator = $this->validator($request->all());
      $errors = $validator->errors();
      $validator->validate();

      $employeeAddress = $this->createAddress($request->all());
      $employeeAddress->save();
      $employee = $this->createEmployee($request->all());
      $employee->address()->associate($employeeAddress);

      $employee->save();

      $emerAddress = $this->createEmergencyAddress($request->all());
      $emerAddress->save();
      $emergency = $this->createEmergency($request->all());
      $emergency->address()->associate($emerAddress);
      $emergency->employee()->associate($employee);

      $emergency->save();

      $employeeCivil = $this->createEmployee($request->all());
      $employeeCivil->save();
      $civil_status = $this->createCivil($request->all());
      $civil_status->employee()->associate($employeeCivil);

      $civil_status->save();

      return view('datosempresa')->with('employee', $employee);

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

    }

    public function deleteEmployee(Request $request){
      $id = $request->id;
      $employee= Employee::findOrFail($id);
      if($employee->active == true){
        $employee->active = false;
      }else{
        $employee->active = true;
      }
      $employee->save();
      return redirect()->route('listaempleados', 'Todos');
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
