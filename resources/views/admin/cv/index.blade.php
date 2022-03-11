@extends('brackets/admin-ui::admin.layout.default')

@section('title', trans('admin.cv.actions.index'))

@section('body')

    <cv-listing
        :data="{{ $data->toJson() }}"
        :url="'{{ url('admin/cvs') }}'"
        inline-template>

        <div class="row">
            <div class="col">
                <div class="card">
                    <div class="card-header">
                        <i class="fa fa-align-justify"></i> {{ trans('admin.cv.actions.index') }}
                        <a class="btn btn-primary btn-spinner btn-sm pull-right m-b-0" href="{{ url('admin/cvs/create') }}" role="button"><i class="fa fa-plus"></i>&nbsp; {{ trans('admin.cv.actions.create') }}</a>
                    </div>
                    <div class="card-body" v-cloak>
                        <div class="card-block">
                            <form @submit.prevent="">
                                <div class="row justify-content-md-between">
                                    <div class="col col-lg-7 col-xl-5 form-group">
                                        <div class="input-group">
                                            <input class="form-control" placeholder="{{ trans('brackets/admin-ui::admin.placeholder.search') }}" v-model="search" @keyup.enter="filter('search', $event.target.value)" />
                                            <span class="input-group-append">
                                                <button type="button" class="btn btn-primary" @click="filter('search', search)"><i class="fa fa-search"></i>&nbsp; {{ trans('brackets/admin-ui::admin.btn.search') }}</button>
                                            </span>
                                        </div>
                                    </div>
                                    <div class="col-sm-auto form-group ">
                                        <select class="form-control" v-model="pagination.state.per_page">
                                            
                                            <option value="10">10</option>
                                            <option value="25">25</option>
                                            <option value="100">100</option>
                                        </select>
                                    </div>
                                </div>
                            </form>

                            <table class="table table-hover table-listing">
                                <thead>
                                    <tr>
                                        <th class="bulk-checkbox">
                                            <input class="form-check-input" id="enabled" type="checkbox" v-model="isClickedAll" v-validate="''" data-vv-name="enabled"  name="enabled_fake_element" @click="onBulkItemsClickedAllWithPagination()">
                                            <label class="form-check-label" for="enabled">
                                                #
                                            </label>
                                        </th>

                                        <th is='sortable' :column="'id'">{{ trans('admin.cv.columns.id') }}</th>
                                        <th is='sortable' :column="'cedula'">{{ trans('admin.cv.columns.cedula') }}</th>
                                        <th is='sortable' :column="'nombreuno'">{{ trans('admin.cv.columns.nombreuno') }}</th>
                                        <th is='sortable' :column="'nombredos'">{{ trans('admin.cv.columns.nombredos') }}</th>
                                        <th is='sortable' :column="'apellidouno'">{{ trans('admin.cv.columns.apellidouno') }}</th>
                                        <th is='sortable' :column="'apellidos'">{{ trans('admin.cv.columns.apellidos') }}</th>
                                        <th is='sortable' :column="'direccion'">{{ trans('admin.cv.columns.direccion') }}</th>
                                        <th is='sortable' :column="'telefono'">{{ trans('admin.cv.columns.telefono') }}</th>
                                        <th is='sortable' :column="'correo'">{{ trans('admin.cv.columns.correo') }}</th>
                                        <th is='sortable' :column="'colegio'">{{ trans('admin.cv.columns.colegio') }}</th>
                                        <th is='sortable' :column="'fechaingreso'">{{ trans('admin.cv.columns.fechaingreso') }}</th>
                                        <th is='sortable' :column="'fechafin'">{{ trans('admin.cv.columns.fechafin') }}</th>
                                        <th is='sortable' :column="'uni'">{{ trans('admin.cv.columns.uni') }}</th>
                                        <th is='sortable' :column="'fechainicio'">{{ trans('admin.cv.columns.fechainicio') }}</th>
                                        <th is='sortable' :column="'fechafinal'">{{ trans('admin.cv.columns.fechafinal') }}</th>
                                        <th is='sortable' :column="'curso'">{{ trans('admin.cv.columns.curso') }}</th>
                                        <th is='sortable' :column="'fechaini'">{{ trans('admin.cv.columns.fechaini') }}</th>
                                        <th is='sortable' :column="'fechafi'">{{ trans('admin.cv.columns.fechafi') }}</th>
                                        <th is='sortable' :column="'empresa'">{{ trans('admin.cv.columns.empresa') }}</th>
                                        <th is='sortable' :column="'cargo'">{{ trans('admin.cv.columns.cargo') }}</th>
                                        <th is='sortable' :column="'descripcion'">{{ trans('admin.cv.columns.descripcion') }}</th>
                                        <th is='sortable' :column="'periodouno'">{{ trans('admin.cv.columns.periodouno') }}</th>
                                        <th is='sortable' :column="'periododos'">{{ trans('admin.cv.columns.periododos') }}</th>
                                        <th is='sortable' :column="'empresados'">{{ trans('admin.cv.columns.empresados') }}</th>
                                        <th is='sortable' :column="'cargodos'">{{ trans('admin.cv.columns.cargodos') }}</th>
                                        <th is='sortable' :column="'descripciondos'">{{ trans('admin.cv.columns.descripciondos') }}</th>
                                        <th is='sortable' :column="'periodou'">{{ trans('admin.cv.columns.periodou') }}</th>
                                        <th is='sortable' :column="'periodod'">{{ trans('admin.cv.columns.periodod') }}</th>
                                        <th is='sortable' :column="'idioma'">{{ trans('admin.cv.columns.idioma') }}</th>
                                        <th is='sortable' :column="'nivel'">{{ trans('admin.cv.columns.nivel') }}</th>
                                        <th is='sortable' :column="'idiomados'">{{ trans('admin.cv.columns.idiomados') }}</th>
                                        <th is='sortable' :column="'niveldos'">{{ trans('admin.cv.columns.niveldos') }}</th>
                                        <th is='sortable' :column="'areau'">{{ trans('admin.cv.columns.areau') }}</th>
                                        <th is='sortable' :column="'conocimientou'">{{ trans('admin.cv.columns.conocimientou') }}</th>
                                        <th is='sortable' :column="'nivelu'">{{ trans('admin.cv.columns.nivelu') }}</th>
                                        <th is='sortable' :column="'aread'">{{ trans('admin.cv.columns.aread') }}</th>
                                        <th is='sortable' :column="'conocimientod'">{{ trans('admin.cv.columns.conocimientod') }}</th>
                                        <th is='sortable' :column="'niveld'">{{ trans('admin.cv.columns.niveld') }}</th>
                                        <th is='sortable' :column="'areat'">{{ trans('admin.cv.columns.areat') }}</th>
                                        <th is='sortable' :column="'conocimientot'">{{ trans('admin.cv.columns.conocimientot') }}</th>
                                        <th is='sortable' :column="'niveltr'">{{ trans('admin.cv.columns.niveltr') }}</th>
                                        <th is='sortable' :column="'nom'">{{ trans('admin.cv.columns.nom') }}</th>
                                        <th is='sortable' :column="'relacion'">{{ trans('admin.cv.columns.relacion') }}</th>
                                        <th is='sortable' :column="'contacto'">{{ trans('admin.cv.columns.contacto') }}</th>
                                        <th is='sortable' :column="'nomu'">{{ trans('admin.cv.columns.nomu') }}</th>
                                        <th is='sortable' :column="'relaciond'">{{ trans('admin.cv.columns.relaciond') }}</th>
                                        <th is='sortable' :column="'contactod'">{{ trans('admin.cv.columns.contactod') }}</th>

                                        <th></th>
                                    </tr>
                                    <tr v-show="(clickedBulkItemsCount > 0) || isClickedAll">
                                        <td class="bg-bulk-info d-table-cell text-center" colspan="49">
                                            <span class="align-middle font-weight-light text-dark">{{ trans('brackets/admin-ui::admin.listing.selected_items') }} @{{ clickedBulkItemsCount }}.  <a href="#" class="text-primary" @click="onBulkItemsClickedAll('/admin/cvs')" v-if="(clickedBulkItemsCount < pagination.state.total)"> <i class="fa" :class="bulkCheckingAllLoader ? 'fa-spinner' : ''"></i> {{ trans('brackets/admin-ui::admin.listing.check_all_items') }} @{{ pagination.state.total }}</a> <span class="text-primary">|</span> <a
                                                        href="#" class="text-primary" @click="onBulkItemsClickedAllUncheck()">{{ trans('brackets/admin-ui::admin.listing.uncheck_all_items') }}</a>  </span>

                                            <span class="pull-right pr-2">
                                                <button class="btn btn-sm btn-danger pr-3 pl-3" @click="bulkDelete('/admin/cvs/bulk-destroy')">{{ trans('brackets/admin-ui::admin.btn.delete') }}</button>
                                            </span>

                                        </td>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr v-for="(item, index) in collection" :key="item.id" :class="bulkItems[item.id] ? 'bg-bulk' : ''">
                                        <td class="bulk-checkbox">
                                            <input class="form-check-input" :id="'enabled' + item.id" type="checkbox" v-model="bulkItems[item.id]" v-validate="''" :data-vv-name="'enabled' + item.id"  :name="'enabled' + item.id + '_fake_element'" @click="onBulkItemClicked(item.id)" :disabled="bulkCheckingAllLoader">
                                            <label class="form-check-label" :for="'enabled' + item.id">
                                            </label>
                                        </td>

                                    <td>@{{ item.id }}</td>
                                        <td>@{{ item.cedula }}</td>
                                        <td>@{{ item.nombreuno }}</td>
                                        <td>@{{ item.nombredos }}</td>
                                        <td>@{{ item.apellidouno }}</td>
                                        <td>@{{ item.apellidos }}</td>
                                        <td>@{{ item.direccion }}</td>
                                        <td>@{{ item.telefono }}</td>
                                        <td>@{{ item.correo }}</td>
                                        <td>@{{ item.colegio }}</td>
                                        <td>@{{ item.fechaingreso }}</td>
                                        <td>@{{ item.fechafin }}</td>
                                        <td>@{{ item.uni }}</td>
                                        <td>@{{ item.fechainicio }}</td>
                                        <td>@{{ item.fechafinal }}</td>
                                        <td>@{{ item.curso }}</td>
                                        <td>@{{ item.fechaini }}</td>
                                        <td>@{{ item.fechafi }}</td>
                                        <td>@{{ item.empresa }}</td>
                                        <td>@{{ item.cargo }}</td>
                                        <td>@{{ item.descripcion }}</td>
                                        <td>@{{ item.periodouno }}</td>
                                        <td>@{{ item.periododos }}</td>
                                        <td>@{{ item.empresados }}</td>
                                        <td>@{{ item.cargodos }}</td>
                                        <td>@{{ item.descripciondos }}</td>
                                        <td>@{{ item.periodou }}</td>
                                        <td>@{{ item.periodod }}</td>
                                        <td>@{{ item.idioma }}</td>
                                        <td>@{{ item.nivel }}</td>
                                        <td>@{{ item.idiomados }}</td>
                                        <td>@{{ item.niveldos }}</td>
                                        <td>@{{ item.areau }}</td>
                                        <td>@{{ item.conocimientou }}</td>
                                        <td>@{{ item.nivelu }}</td>
                                        <td>@{{ item.aread }}</td>
                                        <td>@{{ item.conocimientod }}</td>
                                        <td>@{{ item.niveld }}</td>
                                        <td>@{{ item.areat }}</td>
                                        <td>@{{ item.conocimientot }}</td>
                                        <td>@{{ item.niveltr }}</td>
                                        <td>@{{ item.nom }}</td>
                                        <td>@{{ item.relacion }}</td>
                                        <td>@{{ item.contacto }}</td>
                                        <td>@{{ item.nomu }}</td>
                                        <td>@{{ item.relaciond }}</td>
                                        <td>@{{ item.contactod }}</td>
                                        
                                        <td>
                                            <div class="row no-gutters">
                                                <div class="col-auto">
                                                    <a class="btn btn-sm btn-spinner btn-info" :href="item.resource_url + '/edit'" title="{{ trans('brackets/admin-ui::admin.btn.edit') }}" role="button"><i class="fa fa-edit"></i></a>
                                                </div>
                                                <form class="col" @submit.prevent="deleteItem(item.resource_url)">
                                                    <button type="submit" class="btn btn-sm btn-danger" title="{{ trans('brackets/admin-ui::admin.btn.delete') }}"><i class="fa fa-trash-o"></i></button>
                                                </form>
                                            </div>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>

                            <div class="row" v-if="pagination.state.total > 0">
                                <div class="col-sm">
                                    <span class="pagination-caption">{{ trans('brackets/admin-ui::admin.pagination.overview') }}</span>
                                </div>
                                <div class="col-sm-auto">
                                    <pagination></pagination>
                                </div>
                            </div>

                            <div class="no-items-found" v-if="!collection.length > 0">
                                <i class="icon-magnifier"></i>
                                <h3>{{ trans('brackets/admin-ui::admin.index.no_items') }}</h3>
                                <p>{{ trans('brackets/admin-ui::admin.index.try_changing_items') }}</p>
                                <a class="btn btn-primary btn-spinner" href="{{ url('admin/cvs/create') }}" role="button"><i class="fa fa-plus"></i>&nbsp; {{ trans('admin.cv.actions.create') }}</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </cv-listing>

@endsection