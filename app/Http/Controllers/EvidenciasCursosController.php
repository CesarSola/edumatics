<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class EvidenciasCursosController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        // Obtener el ID del usuario desde la solicitud
        $userId = $request->query('user_id');

        // Verificar si se proporcionó un ID de usuario
        if ($userId) {
            // Buscar el usuario por ID
            $usuario = User::findOrFail($userId);
        } else {
            // Si no se proporciona un ID, obtener el usuario autenticado
            $usuario = auth()->user();
        }

        // Renderizar la vista de las evidencias de cursos con los datos del usuario
        return view('expedientes.expedientesAdmin.cursos.evidencias', compact('usuario'));
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