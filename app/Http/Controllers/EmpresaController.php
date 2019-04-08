<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Validator;
use App\Boss;
use App\Department;
use App\Salary;
use App\Status;
use App\Place;
use App\Bank;
use App\Employee;
use App\Hire;

class EmpresaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($type, Request $request)
    {
      $query = $request->busqueda;
        if ($type == 'selected') {
          $employees =Employee::where('numero_empleado', $query)
          ->orWhere('name','like',$query.'%')
          ->orWhere('first_lastname','like', $query.'%')
          ->orWhere('second_lastname','like', $query.'%')
          ->orderBy('numero_empleado', 'desc')->get();
        }else{
          $employees = Employee::all();
        }

      return view('listaempleados')->with('employees', $employees);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function createBoss(array $data)
    {
      $boss = new Boss();
      $boss->nombre = $data['JefeIm'];

      return $boss;
    }

    public function createDepartment(array $data)
    {
      $department = new Department();
      $department->nombre = $data['Departa'];

      return $department;
    }

    public function createPlace(array $data)
    {
      $place = new Place();
      $place->area = $data['Area'];
      $place->delegacion = $data['Delega'];

      return $place;
    }

    public function createSalary(array $data)
    {
      $salary = new Salary();
      $salary->salario_base = $data['SalarioB'];
      $salary->salario_cotizacion = $data['SalarioC'];
      $salary->sueldo_contratacion = $data['SalarioCo'];

      return $salary;
    }

    public function createStatus(array $data)
    {
      $status = new Status();
      $status->alta = $data['Status'];
      $status->baja = $data['Status'];
      $status->voluntaria = $data['Status'];
      $status->resicion = $data['Status'];
      $status->demanda = $data['Status'];
      $status->penal = $data['Status'];
      $status->employee_id = $data['employeeId'];

      return $status;
    }

    public function createBank(array $data)
    {
      $bank = new Bank();
      $bank->clabe_interbancaria = $data['NumeroC'];
      $bank->numero_cuenta = $data['ClabeIn'];
      $bank->employee_id = $data['employeeId'];

      return $bank;
    }

    public function createHire(array $data)
    {
      $hire = new Hire();
      $hire->description = $data['descripcion'];
      $hire->employee_id = $data['employeeId'];

      return $hire;
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
         'JefeIm' => 'required',
         'Departa' => 'required',
         'Area' => 'required',
         'Delega' => 'required',
         'SalarioB' => 'required',
         'SalarioC' => 'required',
         'SalarioCo' => 'required',
         'NumeroC' => 'required',
         'ClabeIn' => 'required',
         'descripcion' => 'required',

         ]);
       }


    public function store(Request $request)
    {
      $validator = $this->validator($request->all());
      $errors = $validator->errors();
      $validator->validate();

      if($employee =Employee::findOrFail($request->employeeId)){
        $status = $this->createStatus($request->all());
        $status->save();
        $bank = $this->createBank($request->all());
        $bank->save();
        $hire = $this->createHire($request->all());
        $hire->save();
        $salary = $this->createSalary($request->all());
        $salary->hire()->associate($hire);
        $salary->save();
        $department = $this->createDepartment($request->all());
        $department->save();
        $boss = $this->createBoss($request->all());
        $boss->department()->associate($department);
        $boss->save();
        $place = $this->createPlace($request->all());
        $place->hire()->associate($hire);
        $place->department()->associate($boss);
        $place->save();
        return redirect()->route('listaempleados','todos');
      }else{
        abort(404);
      }
      // dd($employee);


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
