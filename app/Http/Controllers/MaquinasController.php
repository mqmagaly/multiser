<?php

namespace App\Http\Controllers;

use App\Models\Maquina;
use Illuminate\Http\Request;
use Symfony\Component\HttpKernel\Event\RequestEvent;
use App\Http\Requests\ValidationTest;
use Illuminate\Pagination\Paginator;

class MaquinasController extends Controller
{

    public function listaMaquinas(ValidationTest $request = null)
    {

        $maquinas = Maquina::paginate(1);

        if ($this->existeId($request)){
            $maquinas = [Maquina::find($request["id"])];
        }

        return view('maquinas.listaMaquinas', ['maquinas' => $maquinas]);
    }

    public function excluirMaquina(Request $request)
    {
        
        if($this->existeId($request)){
            $maquina = Maquina::find($request["id"]);
            $maquina->delete();

            return redirect(route('listaMaquinas'));
            }
    }

    public function formularioMaquinas()
    {
        return view('maquinas.formularioMaquinas');
    }

    public function criarMaquina(ValidationTest $request)
    {
        Maquina::create($request->all());

        return redirect(route('listaMaquinas'));
    }

    public function formularioMaquinasEditar(Request $request)
    {
        if($this->existeId($request)){
            $maquinas = Maquina::find($request['id']);
            return view('maquinas.formularioMaquinasEditar', ['maquinas' => $maquinas]);
        }

    }

    public function editarMaquina(ValidationTest $request)
    {
        if($this->existeId($request)){
            $maquinas = Maquina::find($request['id']);
            $maquinas->maquina = $request['maquina'];
            $maquinas->marca = $request['marca'];
            $maquinas->modelo = $request['modelo'];
            $maquinas->ano = $request['ano'];
            $maquinas->chasis = $request['chasis'];
            $maquinas->titular = $request['titular'];

            $maquinas->save();

            return redirect(route('listaMaquinas'));
        }
    }

    public function existeId($request)
    {
        return $request !== null && isset($request["id"]) && $request["id"];
    }
}
