<?php

namespace App\Http\Controllers;


use App\Models\Empleado;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Empleado as ControllersEmpleado;
use Illuminate\Auth\Events\Validated;
use Illuminate\Contracts\Pagination\Paginator;
use Spatie\Permission\Models\Role;


class HomeController extends Controller
{

    function __construct()
    {
        $this->middleware('auth');

    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $texto = trim($request->get('texto'));

        $empleados = DB::table('empleados')->select('id', 'cedula', 'fecha_exp', 'fecha_nacimiento', 'primer_nombre', 'segundo_nombre', 'primer_apellido', 'segundo_apellido', 'cargo', 'proceso', 'correo_electronico', 'numero_contacto')
            ->where('cedula', '=' , $texto)

            ->paginate(1);;
        return view('home', compact('texto', 'empleados'));
    }



    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Empleado  $empleado
     * @return \Illuminate\Http\Response
     */
    public function edit(Empleado $empleado)
    {
        return view('/home', compact('empleado'));
    }


}
