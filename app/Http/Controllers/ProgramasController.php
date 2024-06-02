<?php
/**
 * - Para crear un controlado desde la terminal tenemos 3 opciones:
 * 
 * Comando 1 (El cual crea consigo los 7 metodos del controlador): 
 * php artisan make:controller ProgramasController --resource
 * 
 * Comando 2(El cual crea el controlador pero sin ningun metodo):
 * php artisan make:controller ProgramasController
 * 
 *  * Comando 3(El cual crea el controlador con todos sus métodos a excepción de los metodos create() y edit() ):
 * php artisan make:controller ProgramasController --api
 * 
 * 
 * - Adicional a esto, si queremos listar las rutas existentes desde la terminal, para luego ver los controladores usamos:
 * 
 * php artisan route:list
 * 
 */
namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProgramasController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $programas=[
            ['nombre'=>'Danza'],
            ['nombre'=>'Baile'],
            ['nombre'=>'Oratoria'],
            ['nombre'=>'Liderazgo']
        ];

        return view('programas',compact('programas'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
