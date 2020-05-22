<?php namespace App\Http\Controllers\Api;

use App\Model\Projecte;
use App\Classes\Utilitats;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Database\QueryException;
use App\Http\Resources\ProjecteResource;

class ProjecteController extends Controller {

    public function index() {
        $projectes = Projecte::with('asignatura')->get();
        return ProjecteResource::collection($projectes);
    }

    public function store(Request $request) {

        $projecte = new Projecte();

        // $projecte->id = $request->input('id');
        $projecte->nom = $request->input('nom');
        $projecte->descripcio = $request->input('descripcio');
        $projecte->foto = $request->input('foto');
        $projecte->lenguatges = $request->input('lenguatges');

        try
        {
            $projecte->save();
            $respuesta = (new RecursResource($projecte))->response()->setStatusCode(201);
        }
        catch (QueryException $e)
        {
            $mensaje = Utilitats::errorMessage($e);
            $respuesta = response()->json(['error'=>$mensaje], 400);
        }

        return $respuesta;
    }

    public function show(Projecte $projecte) {
        //
    }

    public function update(Request $request, Projecte $projecte) {
        //
    }

    public function destroy(Projecte $projecte) {
        //
    }
}