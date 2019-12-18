<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Response, Validator,Redirect;
use App\models\Materia;


class MateriasController extends Controller
{
    public function index()
    {
    $materias = Materia::paginate(3);
    return view('materias', ['materias' => $materias]);
    //$alumnos=Alumno::all();    consulta para la lista de alumnos
    //dd($alumnos); // VISTA EN ARRAYS
    }

    public function destroy($id)
    {
       $materia = Materia::find($id)->delete();
        return redirect('materias');
    }

    public function update(Request $request, $id)
    {
        $materia = Materia::find($id);

        $materia->nombre = $request['nombre'];
        $materia->save();
        return redirect ('materias');
    }

}