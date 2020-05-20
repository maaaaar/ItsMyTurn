<?php namespace App\Http\Controllers\Api;

use App\Model\Projecte;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Resources\ProjecteResource;

class ProjecteController extends Controller {
    public function index() {
        $projectes=Projecte::with('asignatura')->get();
        return ProjecteResource::collection($projectes);
    }

    public function store(Request $request) {
        //
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