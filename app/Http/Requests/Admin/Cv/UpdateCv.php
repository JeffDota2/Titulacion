<?php

namespace App\Http\Requests\Admin\Cv;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Gate;
use Illuminate\Validation\Rule;

class UpdateCv extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize(): bool
    {
        return Gate::allows('admin.cv.edit', $this->cv);
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules(): array
    {
        return [
            'cedula' => ['sometimes', 'integer'],
            'nombreuno' => ['sometimes', 'string'],
            'nombredos' => ['sometimes', 'string'],
            'apellidouno' => ['sometimes', 'string'],
            'apellidos' => ['sometimes', 'string'],
            'direccion' => ['sometimes', 'string'],
            'telefono' => ['sometimes', 'integer'],
            'correo' => ['sometimes', 'string'],
            'colegio' => ['sometimes', 'string'],
            'fechaingreso' => ['sometimes', 'integer'],
            'fechafin' => ['sometimes', 'integer'],
            'uni' => ['sometimes', 'string'],
            'fechainicio' => ['sometimes', 'integer'],
            'fechafinal' => ['sometimes', 'integer'],
            'curso' => ['sometimes', 'string'],
            'fechaini' => ['sometimes', 'integer'],
            'fechafi' => ['sometimes', 'integer'],
            'empresa' => ['sometimes', 'string'],
            'cargo' => ['sometimes', 'string'],
            'descripcion' => ['sometimes', 'string'],
            'periodouno' => ['sometimes', 'integer'],
            'periododos' => ['sometimes', 'integer'],
            'empresados' => ['sometimes', 'string'],
            'cargodos' => ['sometimes', 'string'],
            'descripciondos' => ['sometimes', 'string'],
            'periodou' => ['sometimes', 'integer'],
            'periodod' => ['sometimes', 'integer'],
            'idioma' => ['sometimes', 'string'],
            'nivel' => ['sometimes', 'string'],
            'idiomados' => ['sometimes', 'string'],
            'niveldos' => ['sometimes', 'string'],
            'areau' => ['sometimes', 'string'],
            'conocimientou' => ['sometimes', 'string'],
            'nivelu' => ['sometimes', 'string'],
            'aread' => ['sometimes', 'string'],
            'conocimientod' => ['sometimes', 'string'],
            'niveld' => ['sometimes', 'string'],
            'areat' => ['sometimes', 'string'],
            'conocimientot' => ['sometimes', 'string'],
            'niveltr' => ['sometimes', 'string'],
            'nom' => ['sometimes', 'string'],
            'relacion' => ['sometimes', 'string'],
            'contacto' => ['sometimes', 'string'],
            'nomu' => ['sometimes', 'string'],
            'relaciond' => ['sometimes', 'string'],
            'contactod' => ['sometimes', 'string'],
            
        ];
    }

    /**
     * Modify input data
     *
     * @return array
     */
    public function getSanitized(): array
    {
        $sanitized = $this->validated();


        //Add your code for manipulation with request data here

        return $sanitized;
    }
}
