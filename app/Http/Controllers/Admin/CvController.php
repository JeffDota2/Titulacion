<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Cv\BulkDestroyCv;
use App\Http\Requests\Admin\Cv\DestroyCv;
use App\Http\Requests\Admin\Cv\IndexCv;
use App\Http\Requests\Admin\Cv\StoreCv;
use App\Http\Requests\Admin\Cv\UpdateCv;
use App\Models\Cv;
use Brackets\AdminListing\Facades\AdminListing;
use Exception;
use Illuminate\Auth\Access\AuthorizationException;
use Illuminate\Contracts\Routing\ResponseFactory;
use Illuminate\Contracts\View\Factory;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Response;
use Illuminate\Routing\Redirector;
use Illuminate\Support\Facades\DB;
use Illuminate\View\View;

class CvController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @param IndexCv $request
     * @return array|Factory|View
     */
    public function index(IndexCv $request)
    {
        // create and AdminListing instance for a specific model and
        $data = AdminListing::create(Cv::class)->processRequestAndGet(
            // pass the request with params
            $request,

            // set columns to query
            ['id', 'cedula', 'nombreuno', 'nombredos', 'apellidouno', 'apellidos', 'direccion', 'telefono', 'correo', 'colegio', 'fechaingreso', 'fechafin', 'uni', 'fechainicio', 'fechafinal', 'curso', 'fechaini', 'fechafi', 'empresa', 'cargo', 'descripcion', 'periodouno', 'periododos', 'empresados', 'cargodos', 'descripciondos', 'periodou', 'periodod', 'idioma', 'nivel', 'idiomados', 'niveldos', 'areau', 'conocimientou', 'nivelu', 'aread', 'conocimientod', 'niveld', 'areat', 'conocimientot', 'niveltr', 'nom', 'relacion', 'contacto', 'nomu', 'relaciond', 'contactod'],

            // set columns to searchIn
            ['id', 'nombreuno', 'nombredos', 'apellidouno', 'apellidos', 'direccion', 'correo', 'colegio', 'uni', 'curso', 'empresa', 'cargo', 'descripcion', 'empresados', 'cargodos', 'descripciondos', 'idioma', 'nivel', 'idiomados', 'niveldos', 'areau', 'conocimientou', 'nivelu', 'aread', 'conocimientod', 'niveld', 'areat', 'conocimientot', 'niveltr', 'nom', 'relacion', 'contacto', 'nomu', 'relaciond', 'contactod']
        );

        if ($request->ajax()) {
            if ($request->has('bulk')) {
                return [
                    'bulkItems' => $data->pluck('id')
                ];
            }
            return ['data' => $data];
        }

        return view('admin.cv.index', ['data' => $data]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @throws AuthorizationException
     * @return Factory|View
     */
    public function create()
    {
        $this->authorize('admin.cv.create');

        return view('admin.cv.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param StoreCv $request
     * @return array|RedirectResponse|Redirector
     */
    public function store(StoreCv $request)
    {
        // Sanitize input
        $sanitized = $request->getSanitized();

        // Store the Cv
        $cv = Cv::create($sanitized);

        if ($request->ajax()) {
            return ['redirect' => url('admin/cvs'), 'message' => trans('brackets/admin-ui::admin.operation.succeeded')];
        }

        return redirect('admin/cvs');
    }

    /**
     * Display the specified resource.
     *
     * @param Cv $cv
     * @throws AuthorizationException
     * @return void
     */
    public function show(Cv $cv)
    {
        $this->authorize('admin.cv.show', $cv);

        // TODO your code goes here
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param Cv $cv
     * @throws AuthorizationException
     * @return Factory|View
     */
    public function edit(Cv $cv)
    {
        $this->authorize('admin.cv.edit', $cv);


        return view('admin.cv.edit', [
            'cv' => $cv,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param UpdateCv $request
     * @param Cv $cv
     * @return array|RedirectResponse|Redirector
     */
    public function update(UpdateCv $request, Cv $cv)
    {
        // Sanitize input
        $sanitized = $request->getSanitized();

        // Update changed values Cv
        $cv->update($sanitized);

        if ($request->ajax()) {
            return [
                'redirect' => url('admin/cvs'),
                'message' => trans('brackets/admin-ui::admin.operation.succeeded'),
            ];
        }

        return redirect('admin/cvs');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param DestroyCv $request
     * @param Cv $cv
     * @throws Exception
     * @return ResponseFactory|RedirectResponse|Response
     */
    public function destroy(DestroyCv $request, Cv $cv)
    {
        $cv->delete();

        if ($request->ajax()) {
            return response(['message' => trans('brackets/admin-ui::admin.operation.succeeded')]);
        }

        return redirect()->back();
    }

    /**
     * Remove the specified resources from storage.
     *
     * @param BulkDestroyCv $request
     * @throws Exception
     * @return Response|bool
     */
    public function bulkDestroy(BulkDestroyCv $request) : Response
    {
        DB::transaction(static function () use ($request) {
            collect($request->data['ids'])
                ->chunk(1000)
                ->each(static function ($bulkChunk) {
                    Cv::whereIn('id', $bulkChunk)->delete();

                    // TODO your code goes here
                });
        });

        return response(['message' => trans('brackets/admin-ui::admin.operation.succeeded')]);
    }
}
