<?php

namespace App\Http\Controllers;

<<<<<<< HEAD
use App\Models\Titulacion;
=======
use App\Models\Titulaciones;
>>>>>>> 1f12e9d397c5bc6da41e148a08dcaed57bdc64e0
use Illuminate\Http\Request;

class TitulacionesController extends Controller
{
    /**
     * Mostrar todas las titulaciones.
     */
    public function index()
    {
<<<<<<< HEAD
        $titulaciones = Titulacion::orderBy('fecha_expedicion_titulo', 'desc')->get();
=======
        $titulaciones = Titulaciones::orderBy('fecha_expedicion_titulo', 'desc')->get();
>>>>>>> 1f12e9d397c5bc6da41e148a08dcaed57bdc64e0
        return view('titulaciones.index', compact('titulaciones'));
    }

    /**
     * Mostrar el formulario para crear una nueva titulación.
     */
    public function create()
    {
        return view('titulaciones.create');
    }

    /**
     * Guardar una nueva titulación.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
<<<<<<< HEAD
            'no_de_control' => 'required|string|max:50',
            'periodo' => 'required|string|max:100',
            'opcion_titulacion' => 'required|string|max:255',
            'fecha_solicitud_titulacion' => 'nullable|date',
            'nombre_documento_sustento' => 'required|string|max:255',
            'estatus_titulacion' => 'nullable|string|max:100',
=======
            'no_de_control' => 'required|string|max:255',
            'periodo' => 'required|string|max:255',
            'opcion_titulacion' => 'nullable|string|max:255',
            'fecha_solicitud_titulacion' => 'nullable|date',
            'nombre_documento_sustento' => 'nullable|string|max:255',
            'estatus_titulacion' => 'nullable|string|max:255',
>>>>>>> 1f12e9d397c5bc6da41e148a08dcaed57bdc64e0
            'jurado_presidente' => 'nullable|string|max:255',
            'jurado_secretario' => 'nullable|string|max:255',
            'jurado_vocal' => 'nullable|string|max:255',
            'jurado_suplente' => 'nullable|string|max:255',
            'fecha_titulaciones' => 'nullable|date',
<<<<<<< HEAD
            'cedula_profecional' => 'nullable|string|max:50',
            'numero_libro_tit' => 'nullable|string|max:50',
            'numero_cons_tit' => 'nullable|string|max:50',
            'numero_foja_tit' => 'nullable|string|max:50',
            'hora_inicio_recepcion' => 'nullable|date_format:H:i',
            'hora_final_recepcion' => 'nullable|date_format:H:i',
            'observaciones' => 'nullable|string',
            'numero_libro_ac' => 'nullable|string|max:255',
            'numero_foja_ac' => 'nullable|string|max:255',
            'tema' => 'nullable|string|max:255',
            'fecha_expedicion_titulo' => 'nullable|date',
            'numero_titulo' => 'nullable|string|max:255',
            'fecha_recepcion_dgest' => 'nullable|date',
            'fecha_registro_tit' => 'nullable|date',
            'periodo_ingreso_prepa' => 'nullable|string|max:50',
            'periodo_egresa_prepa' => 'nullable|string|max:50',
            'titulo_entrega' => 'nullable|string|max:255',
            'clave' => 'nullable|string|max:50',
            'antecedentes' => 'nullable|string|max:100',
            'tipo_cedula' => 'nullable|string|max:50',
            'tipo_registro' => 'nullable|string|max:50',
            'fecha_registro_d_ac' => 'nullable|date',
            'opcion_titulacion_letra' => 'nullable|string|max:10',
            'pais' => 'nullable|string|max:100',
        ]);

        try {
            // Convertir horas a formato datetime si existen
            if ($request->filled('hora_inicio_recepcion')) {
                $validatedData['hora_inicio_recepcion'] = date('Y-m-d') . ' ' . $request->hora_inicio_recepcion . ':00';
            }
            
            if ($request->filled('hora_final_recepcion')) {
                $validatedData['hora_final_recepcion'] = date('Y-m-d') . ' ' . $request->hora_final_recepcion . ':00';
            }

            Titulacion::create($validatedData);
=======
            'cedula_profecional' => 'nullable|string|max:255',
            'numero_libro_tit' => 'nullable|string|max:255',
            'numero_cons_tit' => 'nullable|string|max:255',
            'numero_foja_tit' => 'nullable|string|max:255',
            'hora_inicio_recepcion' => 'nullable|date_format:H:i',
            'hora_final_recepcion' => 'nullable|date_format:H:i',
            'observaciones' => 'nullable|string',
            'numero_libro_ac' => 'required|string|max:255',
            'numero_foja_ac' => 'required|string|max:255',
            'tema' => 'required|string',
            'fecha_expedicion_titulo' => 'required|date',
            'numero_titulo' => 'required|string|max:255',
            'fecha_recepcion_dgest' => 'nullable|date',
            'fecha_registro_tit' => 'nullable|date',
            'periodo_ingreso_prepa' => 'nullable|string|max:255',
            'periodo_egresa_prepa' => 'nullable|string|max:255',
            'titulo_entrega' => 'nullable|string|max:255',
            'clave' => 'nullable|string|max:255',
            'antecedentes' => 'nullable|string',
            'tipo_cedula' => 'nullable|string|max:255',
            'tipo_registro' => 'nullable|string|max:255',
            'fecha_registro_d_ac' => 'nullable|date',
            'opcion_titulacion_letra' => 'nullable|string|max:255',
            'pais' => 'nullable|string|max:255',
        ]);

        try {
            Titulaciones::create($validatedData);
>>>>>>> 1f12e9d397c5bc6da41e148a08dcaed57bdc64e0

            return redirect()
                ->route('titulaciones.index')
                ->with('success', 'Titulación creada exitosamente.');
        } catch (\Exception $e) {
            return redirect()
                ->back()
                ->withInput()
                ->with('error', 'Error al crear la titulación: ' . $e->getMessage());
        }
    }

    /**
     * Mostrar una titulación específica.
     */
    public function show($id)
    {
<<<<<<< HEAD
        $titulacion = Titulacion::findOrFail($id);
=======
        $titulacion = Titulaciones::findOrFail($id);
>>>>>>> 1f12e9d397c5bc6da41e148a08dcaed57bdc64e0
        return view('titulaciones.show', compact('titulacion'));
    }

    /**
     * Mostrar el formulario para editar una titulación.
     */
    public function edit($id)
    {
<<<<<<< HEAD
        $titulacion = Titulacion::findOrFail($id);
=======
        $titulacion = Titulaciones::findOrFail($id);
>>>>>>> 1f12e9d397c5bc6da41e148a08dcaed57bdc64e0
        return view('titulaciones.edit', compact('titulacion'));
    }

    /**
     * Actualizar una titulación.
     */
    public function update(Request $request, $id)
    {
<<<<<<< HEAD
        $titulacion = Titulacion::findOrFail($id);

        $validatedData = $request->validate([
            'no_de_control' => 'required|string|max:50',
            'periodo' => 'required|string|max:100',
            'opcion_titulacion' => 'required|string|max:255',
            'fecha_solicitud_titulacion' => 'nullable|date',
            'nombre_documento_sustento' => 'required|string|max:255',
            'estatus_titulacion' => 'nullable|string|max:100',
=======
        $titulacion = Titulaciones::findOrFail($id);

        $validatedData = $request->validate([
            'no_de_control' => 'required|string|max:255',
            'periodo' => 'required|string|max:255',
            'opcion_titulacion' => 'nullable|string|max:255',
            'fecha_solicitud_titulacion' => 'nullable|date',
            'nombre_documento_sustento' => 'nullable|string|max:255',
            'estatus_titulacion' => 'nullable|string|max:255',
>>>>>>> 1f12e9d397c5bc6da41e148a08dcaed57bdc64e0
            'jurado_presidente' => 'nullable|string|max:255',
            'jurado_secretario' => 'nullable|string|max:255',
            'jurado_vocal' => 'nullable|string|max:255',
            'jurado_suplente' => 'nullable|string|max:255',
            'fecha_titulaciones' => 'nullable|date',
<<<<<<< HEAD
            'cedula_profecional' => 'nullable|string|max:50',
            'numero_libro_tit' => 'nullable|string|max:50',
            'numero_cons_tit' => 'nullable|string|max:50',
            'numero_foja_tit' => 'nullable|string|max:50',
            'hora_inicio_recepcion' => 'nullable|date_format:H:i',
            'hora_final_recepcion' => 'nullable|date_format:H:i',
            'observaciones' => 'nullable|string',
            'numero_libro_ac' => 'nullable|string|max:255',
            'numero_foja_ac' => 'nullable|string|max:255',
            'tema' => 'nullable|string|max:255',
            'fecha_expedicion_titulo' => 'nullable|date',
            'numero_titulo' => 'nullable|string|max:255',
            'fecha_recepcion_dgest' => 'nullable|date',
            'fecha_registro_tit' => 'nullable|date',
            'periodo_ingreso_prepa' => 'nullable|string|max:50',
            'periodo_egresa_prepa' => 'nullable|string|max:50',
            'titulo_entrega' => 'nullable|string|max:255',
            'clave' => 'nullable|string|max:50',
            'antecedentes' => 'nullable|string|max:100',
            'tipo_cedula' => 'nullable|string|max:50',
            'tipo_registro' => 'nullable|string|max:50',
            'fecha_registro_d_ac' => 'nullable|date',
            'opcion_titulacion_letra' => 'nullable|string|max:10',
            'pais' => 'nullable|string|max:100',
        ]);

        try {
            // Convertir horas a formato datetime si existen
            if ($request->filled('hora_inicio_recepcion')) {
                $validatedData['hora_inicio_recepcion'] = date('Y-m-d') . ' ' . $request->hora_inicio_recepcion . ':00';
            }
            
            if ($request->filled('hora_final_recepcion')) {
                $validatedData['hora_final_recepcion'] = date('Y-m-d') . ' ' . $request->hora_final_recepcion . ':00';
            }

=======
            'cedula_profecional' => 'nullable|string|max:255',
            'numero_libro_tit' => 'nullable|string|max:255',
            'numero_cons_tit' => 'nullable|string|max:255',
            'numero_foja_tit' => 'nullable|string|max:255',
            'hora_inicio_recepcion' => 'nullable|date_format:H:i',
            'hora_final_recepcion' => 'nullable|date_format:H:i',
            'observaciones' => 'nullable|string',
            'numero_libro_ac' => 'required|string|max:255',
            'numero_foja_ac' => 'required|string|max:255',
            'tema' => 'required|string',
            'fecha_expedicion_titulo' => 'required|date',
            'numero_titulo' => 'required|string|max:255',
            'fecha_recepcion_dgest' => 'nullable|date',
            'fecha_registro_tit' => 'nullable|date',
            'periodo_ingreso_prepa' => 'nullable|string|max:255',
            'periodo_egresa_prepa' => 'nullable|string|max:255',
            'titulo_entrega' => 'nullable|string|max:255',
            'clave' => 'nullable|string|max:255',
            'antecedentes' => 'nullable|string',
            'tipo_cedula' => 'nullable|string|max:255',
            'tipo_registro' => 'nullable|string|max:255',
            'fecha_registro_d_ac' => 'nullable|date',
            'opcion_titulacion_letra' => 'nullable|string|max:255',
            'pais' => 'nullable|string|max:255',
        ]);

        try {
>>>>>>> 1f12e9d397c5bc6da41e148a08dcaed57bdc64e0
            $titulacion->update($validatedData);

            return redirect()
                ->route('titulaciones.index')
                ->with('success', 'Titulación actualizada exitosamente.');
        } catch (\Exception $e) {
            return redirect()
                ->back()
                ->withInput()
                ->with('error', 'Error al actualizar la titulación: ' . $e->getMessage());
        }
    }

    /**
     * Eliminar una titulación.
     */
    public function destroy($id)
    {
        try {
<<<<<<< HEAD
            $titulacion = Titulacion::findOrFail($id);
=======
            $titulacion = Titulaciones::findOrFail($id);
>>>>>>> 1f12e9d397c5bc6da41e148a08dcaed57bdc64e0
            $titulacion->delete();

            return redirect()
                ->route('titulaciones.index')
                ->with('success', 'Titulación eliminada exitosamente.');
        } catch (\Exception $e) {
            return redirect()
                ->route('titulaciones.index')
                ->with('error', 'Error al eliminar la titulación: ' . $e->getMessage());
        }
    }
}