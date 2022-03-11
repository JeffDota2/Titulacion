<?php

namespace App\Http\Requests\Admin\Cv;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Gate;
use Illuminate\Validation\Rule;

class StoreCv extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize(): bool
    {
        return Gate::allows('admin.cv.create');
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules(): array
    {
        return [
            'cedula' => ['required', 'integer'],
            'nombreuno' => ['required', 'string'],
            'nombredos' => ['required', 'string'],
            'apellidouno' => ['required', 'string'],
            'apellidos' => ['required', 'string'],
            'direccion' => ['required', 'string'],
            'telefono' => ['required', 'integer'],
            'correo' => ['required', 'string'],
            'colegio' => ['required', 'string'],
            'fechaingreso' => ['required', 'integer'],
            'fechafin' => ['required', 'integer'],
            'uni' => ['required', 'string'],
            'fechainicio' => ['required', 'integer'],
            'fechafinal' => ['required', 'integer'],
            'curso' => ['required', 'string'],
            'fechaini' => ['required', 'integer'],
            'fechafi' => ['required', 'integer'],
            'empresa' => ['required', 'string'],
            'cargo' => ['required', 'string'],
            'descripcion' => ['required', 'string'],
            'periodouno' => ['required', 'integer'],
            'periododos' => ['required', 'integer'],
            'empresados' => ['required', 'string'],
            'cargodos' => ['required', 'string'],
            'descripciondos' => ['required', 'string'],
            'periodou' => ['required', 'integer'],
            'periodod' => ['required', 'integer'],
            'idioma' => ['required', 'string'],
            'nivel' => ['required', 'string'],
            'idiomados' => ['required', 'string'],
            'niveldos' => ['required', 'string'],
            'areau' => ['required', 'string'],
            'conocimientou' => ['required', 'string'],
            'nivelu' => ['required', 'string'],
            'aread' => ['required', 'string'],
            'conocimientod' => ['required', 'string'],
            'niveld' => ['required', 'string'],
            'areat' => ['required', 'string'],
            'conocimientot' => ['required', 'string'],
            'niveltr' => ['required', 'string'],
            'nom' => ['required', 'string'],
            'relacion' => ['required', 'string'],
            'contacto' => ['required', 'string'],
            'nomu' => ['required', 'string'],
            'relaciond' => ['required', 'string'],
            'contactod' => ['required', 'string'],
            
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
