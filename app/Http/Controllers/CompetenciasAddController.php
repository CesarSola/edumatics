<?php

namespace App\Http\Controllers;

use App\Models\Documentos;
use App\Models\DocumentosNec;
use App\Models\Estandares;
use Illuminate\Http\Request;

class CompetenciasAddController extends Controller
{
    public function index()
    {
        $competencias = Estandares::all();
        $documentosnec = DocumentosNec::all();
        return view('lista_competencias.index', compact('competencias', 'documentosnec'));
    }

    public function create()
    {
        $documentosnec = DocumentosNec::all();
        return view('lista_competencias.create', compact('documentosnec'));
    }

    public function store(Request $request)
    {
        // Validación de datos
        $request->validate([
            'numero' => 'nullable|string|max:200',
            'name' => 'required|string|max:255',
            'tipo' => 'required|string',
            'documentosnec_id' => 'required|array',
            'documentosnec_id.*' => 'exists:documentosnec,id',
        ]);

        // Crear una nueva competencia
        $competencia = Estandares::create([
            'numero' => $request->input('numero'),
            'name' => $request->input('name'),
            'tipo' => $request->input('tipo'),
        ]);

        // Asignar los documentos necesarios
        $competencia->documentosnec()->sync($request->input('documentosnec_id'));

        // Redirigir a la misma página con un mensaje de éxito
        return back()->with('success', 'Competencia creada exitosamente');
    }

    public function show(string $id)
    {
        $competencias = Estandares::findOrFail($id);
        $documentos = Documentos::all();
        return view('lista_competencias.show', compact('competencias', 'documentos'));
    }

    public function edit(string $id)
    {
        $competencia = Estandares::findOrFail($id);
        $documentosnec = DocumentosNec::all();
        return view('lista_competencias.edit', compact('competencia', 'documentosnec'));
    }

    public function update(Request $request, string $id)
    {
        // Validación de datos
        $request->validate([
            'numero' => 'nullable|string|max:200',
            'name' => 'required|string|max:255',
            'tipo' => 'required|string',
            'documentosnec_id' => 'required|array',
            'documentosnec_id.*' => 'exists:documentosnec,id',
        ]);

        // Buscar la competencia por su ID
        $competencia = Estandares::findOrFail($id);

        $competencia->update([
            'numero' => $request->input('numero'),
            'name' => $request->input('name'),
            'tipo' => $request->input('tipo'),
        ]);

        // Actualizar los documentos necesarios
        $competencia->documentosnec()->sync($request->input('documentosnec_id'));

        return back()->with('success', 'Competencia actualizada exitosamente');
    }

    public function destroy(string $id)
    {
        $competencia = Estandares::findOrFail($id);
        $competencia->delete();

        return back()->with('success', 'Competencia eliminada exitosamente');
    }
}
