<?php

namespace App\Http\Controllers;

use App\Models\Vehiculo;
use Illuminate\Http\Request;
use Symfony\Component\HttpKernel\Event\RequestEvent;
use App\Http\Requests\ValidationVehiculos;


class VehiculosController extends Controller
{

    public function listaVehiculos(ValidationVehiculos $request = null)
    {
        $vehiculos = Vehiculo::all();

        if ($this->existeId($request)){
            $vehiculos = [Vehiculo::find($request["id"])];
        }

        return view('vehiculos.listaVehiculos', ['vehiculos' => $vehiculos]);
    }

    public function excluirVehiculo(Request $request)
    {
        
        if($this->existeId($request)){
            $vehiculo = Vehiculo::find($request["id"]);
            $vehiculo->delete();

            return redirect(route('listaVehiculos'));
            }


    }

    public function formularioVehiculos()
    {
        return view('vehiculos.formularioVehiculos');
    }

    public function criarVehiculo(Request $request)
    {
        Vehiculo::create($request->all());

        return redirect(route('listaVehiculos'));
    }

    public function formularioVehiculosEditar(Request $request)
    {
        if($this->existeId($request)){
            $vehiculos = Vehiculo::find($request['id']);
            return view('vehiculos.formularioVehiculosEditar', ['vehiculos' => $vehiculos]);
        }

    }

    public function editarVehiculo(Request $request)
    {
        if($this->existeId($request)){
            $vehiculos = Vehiculo::find($request['id']);
            $vehiculos->placa = $request['placa'];
            $vehiculos->marca = $request['marca'];
            $vehiculos->modelo = $request['modelo'];
            $vehiculos->ano = $request['ano'];
            $vehiculos->chasis = $request['chasis'];
            $vehiculos->aseguradora = $request['aseguradora'];
            $vehiculos->num_seguro = $request['num_seguro'];
            $vehiculos->seguro_vencimiento = $request['seguro_vencimiento'];
            $vehiculos->rev_tecnica = $request['rev_tecnica'];
            $vehiculos->rev_vencimiento = $request['rev_vencimiento'];

            $vehiculos->save();

            return redirect(route('listaVehiculos'));
        }
    }

    public function existeId($request)
    {
        return $request !== null && isset($request["id"]) && $request["id"];
    }
}
