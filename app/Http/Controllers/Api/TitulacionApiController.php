<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Titulacion;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

/**
 * Controlador API para la gestión de Titulaciones.
 *
 * Este controlador maneja todas las operaciones CRUD para el recurso Titulaciones
 * a través de endpoints RESTful, retornando respuestas en formato JSON.
 *
 * @package App\Http\Controllers\Api
 */
class TitulacionApiController extends Controller
{
    /**
     * Obtiene el listado completo de titulaciones.
     *
     * @return JsonResponse Colección de titulaciones en formato JSON
     */
    public function index(): JsonResponse
    {
        $titulaciones = Titulacion::all();
        return response()->json($titulaciones);
    }

    /**
     * Almacena una nueva titulación en la base de datos.
     *
     * @param Request $request Datos de la petición HTTP
     * @return JsonResponse Titulación creada con código 201
     * @throws \Illuminate\Validation\ValidationException Si la validación falla
     */
    public function store(Request $request): JsonResponse
    {
        $request->validate([
            'observaciones' => 'nullable|string',
            'numero_libro_ac' => 'nullable|string|max:255',
            'numero_foja_ac' => 'nullable|string|max:255',
            'tema' => 'nullable|string',
            'fecha_expedicion_titulo' => 'nullable|date',
            'numero_titulo' => 'nullable|string|max:255',
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

        $titulacion = Titulacion::create($request->all());
        return response()->json($titulacion, 201);
    }

    /**
     * Muestra los detalles de una titulación específica.
     *
     * @param int $id Identificador único de la titulación
     * @return JsonResponse Datos de la titulación o mensaje de error
     */
    public function show(int $id): JsonResponse
    {
        try {
            $titulacion = Titulacion::findOrFail($id);
            return response()->json($titulacion);
        } catch (ModelNotFoundException $e) {
            return response()->json(['error' => 'Titulación no encontrada'], 404);
        }
    }

    /**
     * Actualiza los datos de una titulación existente.
     *
     * @param Request $request Datos de la petición HTTP
     * @param int $id Identificador único de la titulación
     * @return JsonResponse Titulación actualizada
     */
    public function update(Request $request, int $id): JsonResponse
    {
        $request->validate([
            'no_de_control' => 'sometimes|required|string|max:255',
            'periodo' => 'nullable|string|max:255',
            'opcion_titulacion' => 'nullable|string|max:255',
            'fecha_solicitud_titulacion' => 'nullable|date',
            'nombre_documento_sustento' => 'nullable|string|max:255',
            'estatus_titulacion' => 'nullable|string|max:255',
            'jurado_presidente' => 'nullable|string|max:255',
            'jurado_secretario' => 'nullable|string|max:255',
            'jurado_vocal' => 'nullable|string|max:255',
            'jurado_suplente' => 'nullable|string|max:255',
            'fecha_titulaciones' => 'nullable|date',
            'cedula_profecional' => 'nullable|string|max:255',
            'numero_libro_tit' => 'nullable|string|max:255',
            'numero_cons_tit' => 'nullable|string|max:255',
            'numero_foja_tit' => 'nullable|string|max:255',
            'hora_inicio_recepcion' => 'nullable|date_format:Y-m-d H:i:s',
            'hora_final_recepcion' => 'nullable|date_format:Y-m-d H:i:s',
            'observaciones' => 'nullable|string',
            'numero_libro_ac' => 'nullable|string|max:255',
            'numero_foja_ac' => 'nullable|string|max:255',
            'tema' => 'nullable|string',
            'fecha_expedicion_titulo' => 'nullable|date',
            'numero_titulo' => 'nullable|string|max:255',
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

        $titulacion = Titulacion::findOrFail($id);
        $titulacion->update($request->all());
        return response()->json($titulacion);
    }

    /**
     * Elimina una titulación del sistema.
     *
     * @param int $id Identificador único de la titulación
     * @return JsonResponse Respuesta vacía con código 204
     */
    public function destroy(int $id): JsonResponse
    {
        Titulacion::findOrFail($id)->delete();
        return response()->json(null, 204);
    }
}