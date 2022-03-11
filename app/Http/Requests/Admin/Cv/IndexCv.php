<?php

namespace App\Http\Requests\Admin\Cv;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Gate;

class IndexCv extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize(): bool
    {
        return Gate::allows('admin.cv.index');
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules(): array
    {
        return [
            'orderBy' => 'in:id,cedula,nombreuno,nombredos,apellidouno,apellidos,direccion,telefono,correo,colegio,fechaingreso,fechafin,uni,fechainicio,fechafinal,curso,fechaini,fechafi,empresa,cargo,descripcion,periodouno,periododos,empresados,cargodos,descripciondos,periodou,periodod,idioma,nivel,idiomados,niveldos,areau,conocimientou,nivelu,aread,conocimientod,niveld,areat,conocimientot,niveltr,nom,relacion,contacto,nomu,relaciond,contactod|nullable',
            'orderDirection' => 'in:asc,desc|nullable',
            'search' => 'string|nullable',
            'page' => 'integer|nullable',
            'per_page' => 'integer|nullable',

        ];
    }
}
