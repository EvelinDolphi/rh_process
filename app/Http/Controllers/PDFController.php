<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Elibyy\TCPDF\Facades\TCPDF;
use App\Employee;

class PDFController extends Controller
{
    public function index(Request $request)
    {
      $formato = $request->formato;
      $employeeId= (int)$request->employee;
      $employee= Employee::find($employeeId);
      $html= $this->selectView($formato, $employee);

        // $view = \View::make('bancomer');
        // $html = $view->render();

        $pdf = new TCPDF();
        $pdf::SetTitle('Formato');
        $pdf::AddPage();
        $pdf::writeHTML($html, true, false, true, false, '');
        $pdf::Output('Formato.pdf');
    }

    public function selectView($formato, Employee $employee)
    {
        switch ($formato) {
          case 'bancomer':
            $fecha = date("F j, Y");
            $address = $employee->address;
            $view = \View::make('bancomer', [
              'date' => $this->traducirFecha($fecha),
              'name' => strtoupper("C. ".$employee->name." ".$employee->first_lastname." ".$employee->second_lastname),
              'rfc' => strtoupper($employee->rfc),
              'address' => strtoupper("CALLE ".$address->street." # ".$address->number." MZN. ".$address->manzana." LT. ".$address->lote." COLONIA ".$address
              ->colonia." , ".$address->municipality." , ".$address->state." ".$address->codigo_postal),
            ]);
            return $view->render();
            break;
            case 'soriana':
            $fecha = date("F j, Y");
            $viewS = \View::make('soriana', [
              'dates' => $this->traducirFecha($fecha),
              'names' => strtoupper("C. ".$employee->name." ".$employee->first_lastname." ".$employee->second_lastname),
            ]);
            return $viewS->render();

              break;
              case 'cityfresko':
              $fecha = date("F j, Y");
              $viewF = \View::make('cityfresko', [
                'datesp' => $this->traducirFecha($fecha),
                'namesp' => strtoupper("C. ".$employee->name." ".$employee->first_lastname." ".$employee->second_lastname),
                'rfcp' => strtoupper($employee->rfc),
                'segurop' => strtoupper($employee->numero_seguro),

              ]);
              return $viewF->render();
                break;
                case 'cartapatronal':
                $fecha = date("F j, Y");
                $place = $employee->hire->place;
                $viewPA = \View::make('cartapatronal', [
                  'datespa' => $this->traducirFecha($fecha),
                  'namespa' => strtoupper("C. ".$employee->name." ".$employee->first_lastname." ".$employee->second_lastname),
                  'rfcpa' => strtoupper($employee->rfc),
                  'seguropa' => strtoupper($employee->numero_seguro),
                  'curp' => strtoupper($employee->curp),
                  'fecha_alta' => strtoupper($employee->fecha_alta),
                  'puesto' => strtoupper($place->area),

                ]);
                return $viewPA->render();
                  break;
                  case 'expediente':
                  $address = $employee->address;
                  $place = $employee->hire->place;
                  $fecha = date("F j, Y");
                  $viewE = \View::make('expediente', [
                    'dateE' => $this->traducirFecha($fecha),
                    'nameE' => strtoupper("C. ".$employee->name." ".$employee->first_lastname." ".$employee->second_lastname),
                    'rfcE' => strtoupper($employee->rfc),
                    'seguroE' => strtoupper($employee->numero_seguro),
                    'curpE' => strtoupper($employee->curp),
                    'fecha_altaE' => strtoupper($employee->fecha_alta),
                    'cumpleaños' => strtoupper($employee->birthdate),
                    'antiguedad' => strtoupper($employee->antiguedad),
                    'address' => strtoupper("CALLE ".$address->street." # ".$address->number." MZN. ".$address->manzana." LT. ".$address->lote." COLONIA ".$address
                    ->colonia." , ".$address->municipality." , ".$address->state." ".$address->codigo_postal),
                  ]);
                  return $viewE->render();
                    break;
                    case 'waltmart':
                    $fecha = date("F j, Y");
                    $viewF = \View::make('waltmart', [
                      'dateW' => $this->traducirFecha($fecha),
                      'nameW' => strtoupper("C. ".$employee->name." ".$employee->first_lastname." ".$employee->second_lastname),
                      'rfcW' => strtoupper($employee->rfc),
                      'seguroW' => strtoupper($employee->numero_seguro),

                    ]);
                    return $viewF->render();
          default:
            // code...
            break;
        }

    }

    public function traducirFecha ($fecha)
     {
        $fecha = substr($fecha, 0, 10);
        $numeroDia = date('d', strtotime($fecha));
        $dia = date('l', strtotime($fecha));
        $mes = date('F', strtotime($fecha));
        $anio = date('Y', strtotime($fecha));
        $dias_ES = array("Lunes", "Martes", "Miércoles", "Jueves", "Viernes", "Sábado", "Domingo");
        $dias_EN = array("Monday", "Tuesday", "Wednesday", "Thursday", "Friday", "Saturday", "Sunday");
        $nombredia = str_replace($dias_EN, $dias_ES, $dia);
        $meses_ES = array("Enero", "Febrero", "Marzo", "Abril", "Mayo", "Junio", "Julio", "Agosto", "Septiembre", "Octubre", "Noviembre", "Diciembre");
        $meses_EN = array("January", "February", "March", "April", "May", "June", "July", "August", "September", "October", "November", "December");
        $nombreMes = str_replace($meses_EN, $meses_ES, $mes);
        return " ".$numeroDia." de ".$nombreMes." de ".$anio;
      }
}
