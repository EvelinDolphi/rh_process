<?php

use Illuminate\Database\Seeder;
use App\Employee;
use App\Address;
use App\Emergency;
use App\Status;
use App\Hire;
use App\Salary;
use App\Place;
use App\Civil;
use App\Department;
use App\Boss;
use App\Bank;
use App\User;
use App\Role;

class ExampleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

      //Creación de una dirección
      $address = new Address();
      $address->avenue = 'san miguel regla';
      $address->lote = '2';
      $address->manzana = '5';
      $address->number = '235';
      $address->street = 'regla';
      $address->colonia = 'Torres del pedregal';
      $address->municipality = 'tizayuca';
      $address->state = 'hidalgo';
      $address->codigo_postal = '43800';
      $address->save();

      //Recuperando la dirección recientemente guardada
      $address = Address::find(1);

      //Creación de un empleado
      $employee = new Employee();
      $employee->numero_empleado='12';
      $employee->name='Emeris';
      $employee->first_lastname= 'Hernandez';
      $employee->second_lastname= 'Ortiz';
      $employee->fecha_alta= new Datetime();
      $employee->antiguedad= new Datetime();
      $employee->sexo= 'Hombre';
      $employee->birthdate=new Datetime();
      $employee->numero_seguro= '21321313';
      $employee->curp= 'HASHDSAD12';
      $employee->rfc='ASDASDA1312';
      $employee->address()->associate($address);
      $employee->save();

      $employee = Employee::where('name', 'Emeris')->first();

      //Creación de un contacto de emergencia
      $emergency = new Emergency();
      $emergency->nombre = 'Francisca Davis';
      $emergency->telefono = '1212131313';
      $emergency->address()->associate($address);
      $emergency->employee()->associate($employee);
      $emergency->save();

      //Creación de un estatus
      $status = new Status();
      $status->alta = 'SI';
      $status->baja = 'SI';
      $status->voluntaria = 'SI';
      $status->resicion = 'SI';
      $status->demanda = 'SI';
      $status->penal = 'SI';
      //Asignación de un estatus a un empleado
      $status->employee()->associate($employee);
      $status->save();

      //Creación de un estado civil
      $civil_status = new Civil();
      $civil_status->soltero = 'SI';
      $civil_status->casado = 'NO';
      $civil_status->viudo = 'NO';
      $civil_status->divorciado = 'NO';
      $civil_status->separado = 'NO';
      $civil_status->numero_hijos = '0';
      $civil_status->employee()->associate($employee);
      $civil_status->save();

      //Creación de un banco
      $bank = new Bank();
      $bank->name_bank = 'Santander';
      $bank->clabe_interbancaria = '12131';
      $bank->numero_cuenta = '101012030';
      $bank->employee()->associate($employee);
      $bank->save();

      //Creación de una contratación
      $hire = new Hire();
      $hire->description = 'Contratación del 2019.';
      $hire->employee()->associate($employee);
      $hire->save();

      $hire = Hire::where('description', 'Contratación del 2019.')->first();

      //Asignacion de un salario a una contratación
      $salary = new Salary();
      $salary->salario_base = 1500.00;
      $salary->salario_cotizacion = 1400.00;
      $salary->sueldo_contratacion = 1250.50;
      $salary->hire()->associate($hire);
      $salary->save();

      //Creación de un nuevo departamento
      $department = new Department();
      $department->nombre = 'Departamento de Tecnologia';
      $department->save();

      $department = Department::where('nombre', 'Departamento de Tecnologia')->first();

      //Creación de un jefe y asignación de departamento que esta encargado
      $boss = new Boss();
      $boss->nombre = 'M. Evelin Castro Pineda';
      $boss->department()->associate($department);
      $boss->save();

      $boss = Boss::find(1);

      //Asignación de un puesto a una contratación
      $place = new Place();
      $place->area = 'Sistemas Computacionales';
      $place->delegacion = 'Gerente';
      $place->hire()->associate($hire);
      $place->department()->associate($boss);
      $place->save();
// --------------------------------------------------------------
      $address = new Address();
      $address->avenue = 'cda vergel';
      $address->lote = '89';
      $address->manzana = '56';
      $address->number = '234';
      $address->street = 'solar';
      $address->colonia = 'Don antonio';
      $address->municipality = 'tizayuca';
      $address->state = 'hidalgo';
      $address->codigo_postal = '43800';
      $address->save();

      //Recuperando la dirección recientemente guardada
      $address = Address::find(1);

      //Creación de un empleado
      $employee = new Employee();
      $employee->numero_empleado='12';
      $employee->name='Victor';
      $employee->first_lastname= 'Gaspar';
      $employee->second_lastname= 'Gutierrez';
      $employee->fecha_alta= new Datetime();
      $employee->antiguedad= new Datetime();
      $employee->sexo= 'Hombre';
      $employee->birthdate=new Datetime();
      $employee->numero_seguro= '31321313';
      $employee->curp= 'ZASHDSAD12';
      $employee->rfc='BSDASDA1312';
      $employee->address()->associate($address);
      $employee->save();

      $employee = Employee::where('name', 'Victor')->first();

      //Creación de un contacto de emergencia
      $emergency = new Emergency();
      $emergency->nombre = 'Mario Beltran';
      $emergency->telefono = '7212131313';
      $emergency->address()->associate($address);
      $emergency->employee()->associate($employee);
      $emergency->save();

      //Creación de un estatus
      $status = new Status();
      $status->alta = 'SI';
      $status->baja = 'SI';
      $status->voluntaria = 'SI';
      $status->resicion = 'SI';
      $status->demanda = 'SI';
      $status->penal = 'NO';
      //Asignación de un estatus a un empleado
      $status->employee()->associate($employee);
      $status->save();

      //Creación de un estado civil
      $civil_status = new Civil();
      $civil_status->soltero = 'SI';
      $civil_status->casado = 'NO';
      $civil_status->viudo = 'NO';
      $civil_status->divorciado = 'NO';
      $civil_status->separado = 'NO';
      $civil_status->numero_hijos = '0';
      $civil_status->employee()->associate($employee);
      $civil_status->save();

      //Creación de un banco
      $bank = new Bank();
      $bank->name_bank = 'Banamex';
      $bank->clabe_interbancaria = '72131';
      $bank->numero_cuenta = '201012030';
      $bank->employee()->associate($employee);
      $bank->save();

      //Creación de una contratación
      $hire = new Hire();
      $hire->description = 'Contratación.';
      $hire->employee()->associate($employee);
      $hire->save();

      $hire = Hire::where('description', 'Contratación.')->first();

      //Asignacion de un salario a una contratación
      $salary = new Salary();
      $salary->salario_base = 1700.00;
      $salary->salario_cotizacion = 1800.00;
      $salary->sueldo_contratacion = 1550.50;
      $salary->hire()->associate($hire);
      $salary->save();

      //Creación de un nuevo departamento
      $department = new Department();
      $department->nombre = 'Tecnologia';
      $department->save();

      $department = Department::where('nombre', 'Tecnologia')->first();

      //Creación de un jefe y asignación de departamento que esta encargado
      $boss = new Boss();
      $boss->nombre = 'Guadalupe Mora';
      $boss->department()->associate($department);
      $boss->save();

      $boss = Boss::find(1);

      //Asignación de un puesto a una contratación
      $place = new Place();
      $place->area = 'Recursos Humanos';
      $place->delegacion = 'Gerente';
      $place->hire()->associate($hire);
      $place->department()->associate($boss);
      $place->save();
// --------------------------------
      $address = new Address();
      $address->avenue = 'san antonio';
      $address->lote = '56';
      $address->manzana = '23';
      $address->number = '178';
      $address->street = 'vergel';
      $address->colonia = 'Tepojaco';
      $address->municipality = 'tizayuca';
      $address->state = 'hidalgo';
      $address->codigo_postal = '43800';
      $address->save();

      //Recuperando la dirección recientemente guardada
      $address = Address::find(1);

      //Creación de un empleado
      $employee = new Employee();
      $employee->numero_empleado='19';
      $employee->name='Victoria';
      $employee->first_lastname= 'Ceron';
      $employee->second_lastname= 'Hernandez';
      $employee->fecha_alta= new Datetime();
      $employee->antiguedad= new Datetime();
      $employee->sexo= 'Mujer';
      $employee->birthdate=new Datetime();
      $employee->numero_seguro= '21321314';
      $employee->curp= 'HASHDSAD18';
      $employee->rfc='ASDASDA1313';
      $employee->address()->associate($address);
      $employee->save();

      $employee = Employee::where('name', 'Victoria')->first();

      //Creación de un contacto de emergencia
      $emergency = new Emergency();
      $emergency->nombre = 'Maria Gutierrez';
      $emergency->telefono = '1212131314';
      $emergency->address()->associate($address);
      $emergency->employee()->associate($employee);
      $emergency->save();

      //Creación de un estatus
      $status = new Status();
      $status->alta = 'NO';
      $status->baja = 'NO';
      $status->voluntaria = 'SI';
      $status->resicion = 'SI';
      $status->demanda = 'SI';
      $status->penal = 'SI';
      //Asignación de un estatus a un empleado
      $status->employee()->associate($employee);
      $status->save();

      //Creación de un estado civil
      $civil_status = new Civil();
      $civil_status->soltero = 'NO';
      $civil_status->casado = 'SI';
      $civil_status->viudo = 'NO';
      $civil_status->divorciado = 'NO';
      $civil_status->separado = 'NO';
      $civil_status->numero_hijos = '0';
      $civil_status->employee()->associate($employee);
      $civil_status->save();

      //Creación de un banco
      $bank = new Bank();
      $bank->name_bank = 'Bancomer';
      $bank->clabe_interbancaria = '12132';
      $bank->numero_cuenta = '101012038';
      $bank->employee()->associate($employee);
      $bank->save();

      //Creación de una contratación
      $hire = new Hire();
      $hire->description = 'Contratación del 2018.';
      $hire->employee()->associate($employee);
      $hire->save();

      $hire = Hire::where('description', 'Contratación del 2018.')->first();

      //Asignacion de un salario a una contratación
      $salary = new Salary();
      $salary->salario_base = 2500.00;
      $salary->salario_cotizacion = 2400.00;
      $salary->sueldo_contratacion = 2250.50;
      $salary->hire()->associate($hire);
      $salary->save();

      //Creación de un nuevo departamento
      $department = new Department();
      $department->nombre = 'Departamento de Diseño';
      $department->save();

      $department = Department::where('nombre', 'Departamento de Diseño')->first();

      //Creación de un jefe y asignación de departamento que esta encargado
      $boss = new Boss();
      $boss->nombre = 'Maria Castañeda';
      $boss->department()->associate($department);
      $boss->save();

      $boss = Boss::find(1);

      //Asignación de un puesto a una contratación
      $place = new Place();
      $place->area = 'Sistemas Computacionales';
      $place->delegacion = 'Supervisor';
      $place->hire()->associate($hire);
      $place->department()->associate($boss);
      $place->save();

      // ---------------------------------------------------------------------
      $address = new Address();
      $address->avenue = 'san miguel regla';
      $address->lote = '2';
      $address->manzana = '5';
      $address->number = '235';
      $address->street = 'regla';
      $address->colonia = 'Torres del pedregal';
      $address->municipality = 'tizayuca';
      $address->state = 'hidalgo';
      $address->codigo_postal = '43800';
      $address->save();

      //Recuperando la dirección recientemente guardada
      $address = Address::find(1);

      //Creación de un empleado
      $employee = new Employee();
      $employee->numero_empleado='45';
      $employee->name='Jacobo';
      $employee->first_lastname= 'Quintanilla';
      $employee->second_lastname= 'Pineda';
      $employee->fecha_alta= new Datetime();
      $employee->antiguedad= new Datetime();
      $employee->sexo= 'Hombre';
      $employee->birthdate=new Datetime();
      $employee->numero_seguro= '21321313';
      $employee->curp= 'HASHDSAD12';
      $employee->rfc='ASDASDA1312';
      $employee->address()->associate($address);
      $employee->save();

      $employee = Employee::where('name', 'Jacobo')->first();

      //Creación de un contacto de emergencia
      $emergency = new Emergency();
      $emergency->nombre = 'Itzayana Castro';
      $emergency->telefono = '1212131317';
      $emergency->address()->associate($address);
      $emergency->employee()->associate($employee);
      $emergency->save();

      //Creación de un estatus
      $status = new Status();
      $status->alta = 'SI';
      $status->baja = 'SI';
      $status->voluntaria = 'SI';
      $status->resicion = 'NO';
      $status->demanda = 'SI';
      $status->penal = 'SI';
      //Asignación de un estatus a un empleado
      $status->employee()->associate($employee);
      $status->save();

      //Creación de un estado civil
      $civil_status = new Civil();
      $civil_status->soltero = 'NO';
      $civil_status->casado = 'NO';
      $civil_status->viudo = 'SI';
      $civil_status->divorciado = 'NO';
      $civil_status->separado = 'NO';
      $civil_status->numero_hijos = '0';
      $civil_status->employee()->associate($employee);
      $civil_status->save();

      //Creación de un banco
      $bank = new Bank();
      $bank->name_bank = 'Santander';
      $bank->clabe_interbancaria = '12131';
      $bank->numero_cuenta = '101012070';
      $bank->employee()->associate($employee);
      $bank->save();

      //Creación de una contratación
      $hire = new Hire();
      $hire->description = 'Vigente';
      $hire->employee()->associate($employee);
      $hire->save();

      $hire = Hire::where('description', 'Vigente')->first();

      //Asignacion de un salario a una contratación
      $salary = new Salary();
      $salary->salario_base = 4500.00;
      $salary->salario_cotizacion = 4400.00;
      $salary->sueldo_contratacion = 4250.50;
      $salary->hire()->associate($hire);
      $salary->save();

      //Creación de un nuevo departamento
      $department = new Department();
      $department->nombre = 'Departamento de Sistemas';
      $department->save();

      $department = Department::where('nombre', 'Departamento de Sistemas')->first();

      //Creación de un jefe y asignación de departamento que esta encargado
      $boss = new Boss();
      $boss->nombre = 'Constanza Benitez';
      $boss->department()->associate($department);
      $boss->save();

      $boss = Boss::find(1);

      //Asignación de un puesto a una contratación
      $place = new Place();
      $place->area = 'Sistemas Computacionales';
      $place->delegacion = 'Gerente';
      $place->hire()->associate($hire);
      $place->department()->associate($boss);
      $place->save();

      //----------------------------------------------------------------------

      $address = new Address();
      $address->avenue = 'regla';
      $address->lote = '2';
      $address->manzana = '5';
      $address->number = '235';
      $address->street = 'regla';
      $address->colonia = 'Paseos del Pedregal';
      $address->municipality = 'tizayuca';
      $address->state = 'hidalgo';
      $address->codigo_postal = '43810';
      $address->save();

      //Recuperando la dirección recientemente guardada
      $address = Address::find(1);

      //Creación de un empleado
      $employee = new Employee();
      $employee->numero_empleado='12';
      $employee->name='Laura';
      $employee->first_lastname= 'Hernandez';
      $employee->second_lastname= 'Gutierrez';
      $employee->fecha_alta= new Datetime();
      $employee->antiguedad= new Datetime();
      $employee->sexo= 'Mujer';
      $employee->birthdate=new Datetime();
      $employee->numero_seguro= '21321313';
      $employee->curp= 'HASHDSAD12';
      $employee->rfc='ASDASDS1312';
      $employee->address()->associate($address);
      $employee->save();

      $employee = Employee::where('name', 'Laura')->first();

      //Creación de un contacto de emergencia
      $emergency = new Emergency();
      $emergency->nombre = 'Florentina Gutierrez';
      $emergency->telefono = '1212131313';
      $emergency->address()->associate($address);
      $emergency->employee()->associate($employee);
      $emergency->save();

      //Creación de un estatus
      $status = new Status();
      $status->alta = 'SI';
      $status->baja = 'SI';
      $status->voluntaria = 'SI';
      $status->resicion = 'NO';
      $status->demanda = 'SI';
      $status->penal = 'SI';
      //Asignación de un estatus a un empleado
      $status->employee()->associate($employee);
      $status->save();

      //Creación de un estado civil
      $civil_status = new Civil();
      $civil_status->soltero = 'SI';
      $civil_status->casado = 'NO';
      $civil_status->viudo = 'NO';
      $civil_status->divorciado = 'NO';
      $civil_status->separado = 'NO';
      $civil_status->numero_hijos = '0';
      $civil_status->employee()->associate($employee);
      $civil_status->save();

      //Creación de un banco
      $bank = new Bank();
      $bank->name_bank = 'Santander';
      $bank->clabe_interbancaria = '12131';
      $bank->numero_cuenta = '101012030';
      $bank->employee()->associate($employee);
      $bank->save();

      //Creación de una contratación
      $hire = new Hire();
      $hire->description = 'Contratación del 2019.';
      $hire->employee()->associate($employee);
      $hire->save();

      $hire = Hire::where('description', 'Contratación del 2019.')->first();

      //Asignacion de un salario a una contratación
      $salary = new Salary();
      $salary->salario_base = 1500.00;
      $salary->salario_cotizacion = 1400.00;
      $salary->sueldo_contratacion = 1250.50;
      $salary->hire()->associate($hire);
      $salary->save();

      //Creación de un nuevo departamento
      $department = new Department();
      $department->nombre = 'Departamento de Tecnologia';
      $department->save();

      $department = Department::where('nombre', 'Departamento de Tecnologia')->first();

      //Creación de un jefe y asignación de departamento que esta encargado
      $boss = new Boss();
      $boss->nombre = 'M. Evelin Castro Pineda';
      $boss->department()->associate($department);
      $boss->save();

      $boss = Boss::find(1);

      //Asignación de un puesto a una contratación
      $place = new Place();
      $place->area = 'Sistemas Computacionales';
      $place->delegacion = 'Gerente';
      $place->hire()->associate($hire);
      $place->department()->associate($boss);
      $place->save();
      // _________________________________________________________________________

      //Datos de la aplicación
      $role = new Role();
      $role->nombre = 'Administrador';
      $role->descripcion = 'Todos los permisos de la aplicación';
      $role->save();

      $role = new Role();
      $role->nombre = 'Usuario';
      $role->descripcion = 'Todos los permisos de la aplicación';
      $role->save();


      //Recuperando el rol No. 1 (Administrador)
      $administrador = Role::where('nombre','Administrador')->first();
      $usuario = Role::where('nombre', 'Usuario')->first();

      //Creando un usuario del sistema y asignandole el rol de ADM
      $user = new User();
      $user->name = 'Estefany';
      $user->email = 'stellezalarcon@puratos.com';
      $user->password = bcrypt('secret');
      $user->save();
      $user->roles()->attach($administrador);

      $user = new User();
      $user->name = 'Evelin';
      $user->email = 'evelincastro@gmail.com';
      $user->password = bcrypt('secret');
      $user->save();
      $user->roles()->attach($administrador);

      $user = new User();
      $user->name = 'Emeris';
      $user->email = 'emeris@gmail.com';
      $user->password = bcrypt('secret');
      $user->save();
      $user->roles()->attach($usuario);


    }
}
