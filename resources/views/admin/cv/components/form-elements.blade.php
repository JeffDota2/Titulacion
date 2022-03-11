<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
            <div align="center">
                <img src="http://userscontent2.emaze.com/images/33c58489-cf42-4a76-9ca4-94bb149cfa8d/Slide7_Pic3_636408719339374930.png" 
                alt="logo" style="inline-size:auto;"
                width="500px" height="150px"> 
</div>
&nbsp;
&nbsp;
<div class="row g-3">
    <div class="col-6 ">
        <h3>Datos Personales:</h3>
        <div class="form-group row align-items-center" :class="{'has-danger': errors.has('cedula'), 'has-success': fields.cedula && fields.cedula.valid }">
            <label for="cedula" class="col-form-label text-md-right" :class="isFormLocalized ? 'col-md-4' : 'col-md-2'">{{ trans('admin.cv.columns.cedula') }}</label>
                <div :class="isFormLocalized ? 'col-md-4' : 'col-md-9 col-xl-8'">
                <input type="text" v-model="form.cedula" v-validate="'required|integer'" @input="validate($event)" class="form-control" :class="{'form-control-danger': errors.has('cedula'), 'form-control-success': fields.cedula && fields.cedula.valid}" id="cedula" name="cedula" placeholder="{{ trans('admin.cv.columns.cedula') }}">
                <div v-if="errors.has('cedula')" class="form-control-feedback form-text" v-cloak>@{{ errors.first('cedula') }}</div>
            </div>
        </div>
    </div>
</div>

<div class="form-group row align-items-center" :class="{'has-danger': errors.has('nombreuno'), 'has-success': fields.nombreuno && fields.nombreuno.valid }">
    <label for="nombreuno" class="col-form-label text-md-right" :class="isFormLocalized ? 'col-md-4' : 'col-md-2'">{{ trans('admin.cv.columns.nombreuno') }}</label>
        <div :class="isFormLocalized ? 'col-md-4' : 'col-md-9 col-xl-8'">
        <input type="text" v-model="form.nombreuno" v-validate="'required'" @input="validate($event)" class="form-control" :class="{'form-control-danger': errors.has('nombreuno'), 'form-control-success': fields.nombreuno && fields.nombreuno.valid}" id="nombreuno" name="nombreuno" placeholder="{{ trans('admin.cv.columns.nombreuno') }}">
        <div v-if="errors.has('nombreuno')" class="form-control-feedback form-text" v-cloak>@{{ errors.first('nombreuno') }}</div>
    </div>
</div>

<div class="form-group row align-items-center" :class="{'has-danger': errors.has('nombredos'), 'has-success': fields.nombredos && fields.nombredos.valid }">
    <label for="nombredos" class="col-form-label text-md-right" :class="isFormLocalized ? 'col-md-4' : 'col-md-2'">{{ trans('admin.cv.columns.nombredos') }}</label>
        <div :class="isFormLocalized ? 'col-md-4' : 'col-md-9 col-xl-8'">
        <input type="text" v-model="form.nombredos" v-validate="'required'" @input="validate($event)" class="form-control" :class="{'form-control-danger': errors.has('nombredos'), 'form-control-success': fields.nombredos && fields.nombredos.valid}" id="nombredos" name="nombredos" placeholder="{{ trans('admin.cv.columns.nombredos') }}">
        <div v-if="errors.has('nombredos')" class="form-control-feedback form-text" v-cloak>@{{ errors.first('nombredos') }}</div>
    </div>
</div>

<div class="form-group row align-items-center" :class="{'has-danger': errors.has('apellidouno'), 'has-success': fields.apellidouno && fields.apellidouno.valid }">
    <label for="apellidouno" class="col-form-label text-md-right" :class="isFormLocalized ? 'col-md-4' : 'col-md-2'">{{ trans('admin.cv.columns.apellidouno') }}</label>
        <div :class="isFormLocalized ? 'col-md-4' : 'col-md-9 col-xl-8'">
        <input type="text" v-model="form.apellidouno" v-validate="'required'" @input="validate($event)" class="form-control" :class="{'form-control-danger': errors.has('apellidouno'), 'form-control-success': fields.apellidouno && fields.apellidouno.valid}" id="apellidouno" name="apellidouno" placeholder="{{ trans('admin.cv.columns.apellidouno') }}">
        <div v-if="errors.has('apellidouno')" class="form-control-feedback form-text" v-cloak>@{{ errors.first('apellidouno') }}</div>
    </div>
</div>

<div class="form-group row align-items-center" :class="{'has-danger': errors.has('apellidos'), 'has-success': fields.apellidos && fields.apellidos.valid }">
    <label for="apellidos" class="col-form-label text-md-right" :class="isFormLocalized ? 'col-md-4' : 'col-md-2'">{{ trans('admin.cv.columns.apellidos') }}</label>
        <div :class="isFormLocalized ? 'col-md-4' : 'col-md-9 col-xl-8'">
        <input type="text" v-model="form.apellidos" v-validate="'required'" @input="validate($event)" class="form-control" :class="{'form-control-danger': errors.has('apellidos'), 'form-control-success': fields.apellidos && fields.apellidos.valid}" id="apellidos" name="apellidos" placeholder="{{ trans('admin.cv.columns.apellidos') }}">
        <div v-if="errors.has('apellidos')" class="form-control-feedback form-text" v-cloak>@{{ errors.first('apellidos') }}</div>
    </div>
</div>
<div class="form-group row align-items-center" :class="{'has-danger': errors.has('direccion'), 'has-success': fields.direccion && fields.direccion.valid }">
    <label for="direccion" class="col-form-label text-md-right" :class="isFormLocalized ? 'col-md-4' : 'col-md-2'">{{ trans('admin.cv.columns.direccion') }}</label>
        <div :class="isFormLocalized ? 'col-md-4' : 'col-md-9 col-xl-8'">
        <input type="text" v-model="form.direccion" v-validate="'required'" @input="validate($event)" class="form-control" :class="{'form-control-danger': errors.has('direccion'), 'form-control-success': fields.direccion && fields.direccion.valid}" id="direccion" name="direccion" placeholder="{{ trans('admin.cv.columns.direccion') }}">
        <div v-if="errors.has('direccion')" class="form-control-feedback form-text" v-cloak>@{{ errors.first('direccion') }}</div>
    </div>
</div>

<div class="form-group row align-items-center" :class="{'has-danger': errors.has('telefono'), 'has-success': fields.telefono && fields.telefono.valid }">
    <label for="telefono" class="col-form-label text-md-right" :class="isFormLocalized ? 'col-md-4' : 'col-md-2'">{{ trans('admin.cv.columns.telefono') }}</label>
        <div :class="isFormLocalized ? 'col-md-4' : 'col-md-9 col-xl-8'">
        <input type="text" v-model="form.telefono" v-validate="'required|integer'" @input="validate($event)" class="form-control" :class="{'form-control-danger': errors.has('telefono'), 'form-control-success': fields.telefono && fields.telefono.valid}" id="telefono" name="telefono" placeholder="{{ trans('admin.cv.columns.telefono') }}">
        <div v-if="errors.has('telefono')" class="form-control-feedback form-text" v-cloak>@{{ errors.first('telefono') }}</div>
    </div>
</div>

<div class="form-group row align-items-center" :class="{'has-danger': errors.has('correo'), 'has-success': fields.correo && fields.correo.valid }">
    <label for="correo" class="col-form-label text-md-right" :class="isFormLocalized ? 'col-md-4' : 'col-md-2'">{{ trans('admin.cv.columns.correo') }}</label>
        <div :class="isFormLocalized ? 'col-md-4' : 'col-md-9 col-xl-8'">
        <input type="text" v-model="form.correo" v-validate="'required'" @input="validate($event)" class="form-control" :class="{'form-control-danger': errors.has('correo'), 'form-control-success': fields.correo && fields.correo.valid}" id="correo" name="correo" placeholder="{{ trans('admin.cv.columns.correo') }}">
        <div v-if="errors.has('correo')" class="form-control-feedback form-text" v-cloak>@{{ errors.first('correo') }}</div>
    </div>
</div>
        <hr/>
        &nbsp;
        &nbsp;
        <h3>Formación Aacadémica</h3>
        <hr/>

        <div class="form-group row align-items-center" :class="{'has-danger': errors.has('colegio'), 'has-success': fields.colegio && fields.colegio.valid }">
            <label for="colegio" class="col-form-label text-md-right" :class="isFormLocalized ? 'col-md-4' : 'col-md-2'">{{ trans('admin.cv.columns.colegio') }}</label>
                <div :class="isFormLocalized ? 'col-md-4' : 'col-md-9 col-xl-8'">
                <input type="text" v-model="form.colegio" v-validate="'required'" @input="validate($event)" class="form-control" :class="{'form-control-danger': errors.has('colegio'), 'form-control-success': fields.colegio && fields.colegio.valid}" id="colegio" name="colegio" placeholder="{{ trans('admin.cv.columns.colegio') }}">
                <div v-if="errors.has('colegio')" class="form-control-feedback form-text" v-cloak>@{{ errors.first('colegio') }}</div>
            </div>
        </div>
        
        <div class="form-group row align-items-center" :class="{'has-danger': errors.has('fechaingreso'), 'has-success': fields.fechaingreso && fields.fechaingreso.valid }">
            <label for="fechaingreso" class="col-form-label text-md-right" :class="isFormLocalized ? 'col-md-4' : 'col-md-2'">{{ trans('admin.cv.columns.fechaingreso') }}</label>
                <div :class="isFormLocalized ? 'col-md-4' : 'col-md-9 col-xl-8'">
                <input type="text" v-model="form.fechaingreso" v-validate="'required|integer'" @input="validate($event)" class="form-control" :class="{'form-control-danger': errors.has('fechaingreso'), 'form-control-success': fields.fechaingreso && fields.fechaingreso.valid}" id="fechaingreso" name="fechaingreso" placeholder="{{ trans('admin.cv.columns.fechaingreso') }}">
                <div v-if="errors.has('fechaingreso')" class="form-control-feedback form-text" v-cloak>@{{ errors.first('fechaingreso') }}</div>
            </div>
        </div>
        
        <div class="form-group row align-items-center" :class="{'has-danger': errors.has('fechafin'), 'has-success': fields.fechafin && fields.fechafin.valid }">
            <label for="fechafin" class="col-form-label text-md-right" :class="isFormLocalized ? 'col-md-4' : 'col-md-2'">{{ trans('admin.cv.columns.fechafin') }}</label>
                <div :class="isFormLocalized ? 'col-md-4' : 'col-md-9 col-xl-8'">
                <input type="text" v-model="form.fechafin" v-validate="'required|integer'" @input="validate($event)" class="form-control" :class="{'form-control-danger': errors.has('fechafin'), 'form-control-success': fields.fechafin && fields.fechafin.valid}" id="fechafin" name="fechafin" placeholder="{{ trans('admin.cv.columns.fechafin') }}">
                <div v-if="errors.has('fechafin')" class="form-control-feedback form-text" v-cloak>@{{ errors.first('fechafin') }}</div>
            </div>
        </div>
        <div class="form-group row align-items-center" :class="{'has-danger': errors.has('uni'), 'has-success': fields.uni && fields.uni.valid }">
            <label for="uni" class="col-form-label text-md-right" :class="isFormLocalized ? 'col-md-4' : 'col-md-2'">{{ trans('admin.cv.columns.uni') }}</label>
                <div :class="isFormLocalized ? 'col-md-4' : 'col-md-9 col-xl-8'">
                <input type="text" v-model="form.uni" v-validate="'required'" @input="validate($event)" class="form-control" :class="{'form-control-danger': errors.has('uni'), 'form-control-success': fields.uni && fields.uni.valid}" id="uni" name="uni" placeholder="{{ trans('admin.cv.columns.uni') }}">
                <div v-if="errors.has('uni')" class="form-control-feedback form-text" v-cloak>@{{ errors.first('uni') }}</div>
            </div>
        </div>
        
        <div class="form-group row align-items-center" :class="{'has-danger': errors.has('fechainicio'), 'has-success': fields.fechainicio && fields.fechainicio.valid }">
            <label for="fechainicio" class="col-form-label text-md-right" :class="isFormLocalized ? 'col-md-4' : 'col-md-2'">{{ trans('admin.cv.columns.fechainicio') }}</label>
                <div :class="isFormLocalized ? 'col-md-4' : 'col-md-9 col-xl-8'">
                <input type="text" v-model="form.fechainicio" v-validate="'required|integer'" @input="validate($event)" class="form-control" :class="{'form-control-danger': errors.has('fechainicio'), 'form-control-success': fields.fechainicio && fields.fechainicio.valid}" id="fechainicio" name="fechainicio" placeholder="{{ trans('admin.cv.columns.fechainicio') }}">
                <div v-if="errors.has('fechainicio')" class="form-control-feedback form-text" v-cloak>@{{ errors.first('fechainicio') }}</div>
            </div>
        </div>
        <div class="form-group row align-items-center" :class="{'has-danger': errors.has('fechafinal'), 'has-success': fields.fechafinal && fields.fechafinal.valid }">
            <label for="fechafinal" class="col-form-label text-md-right" :class="isFormLocalized ? 'col-md-4' : 'col-md-2'">{{ trans('admin.cv.columns.fechafinal') }}</label>
                <div :class="isFormLocalized ? 'col-md-4' : 'col-md-9 col-xl-8'">
                <input type="text" v-model="form.fechafinal" v-validate="'required|integer'" @input="validate($event)" class="form-control" :class="{'form-control-danger': errors.has('fechafinal'), 'form-control-success': fields.fechafinal && fields.fechafinal.valid}" id="fechafinal" name="fechafinal" placeholder="{{ trans('admin.cv.columns.fechafinal') }}">
                <div v-if="errors.has('fechafinal')" class="form-control-feedback form-text" v-cloak>@{{ errors.first('fechafinal') }}</div>
            </div>
        </div>
        <div class="form-group row align-items-center" :class="{'has-danger': errors.has('curso'), 'has-success': fields.curso && fields.curso.valid }">
            <label for="curso" class="col-form-label text-md-right" :class="isFormLocalized ? 'col-md-4' : 'col-md-2'">{{ trans('admin.cv.columns.curso') }}</label>
                <div :class="isFormLocalized ? 'col-md-4' : 'col-md-9 col-xl-8'">
                <input type="text" v-model="form.curso" v-validate="'required'" @input="validate($event)" class="form-control" :class="{'form-control-danger': errors.has('curso'), 'form-control-success': fields.curso && fields.curso.valid}" id="curso" name="curso" placeholder="{{ trans('admin.cv.columns.curso') }}">
                <div v-if="errors.has('curso')" class="form-control-feedback form-text" v-cloak>@{{ errors.first('curso') }}</div>
            </div>
        </div>
        
        <div class="form-group row align-items-center" :class="{'has-danger': errors.has('fechaini'), 'has-success': fields.fechaini && fields.fechaini.valid }">
            <label for="fechaini" class="col-form-label text-md-right" :class="isFormLocalized ? 'col-md-4' : 'col-md-2'">{{ trans('admin.cv.columns.fechaini') }}</label>
                <div :class="isFormLocalized ? 'col-md-4' : 'col-md-9 col-xl-8'">
                <input type="text" v-model="form.fechaini" v-validate="'required|integer'" @input="validate($event)" class="form-control" :class="{'form-control-danger': errors.has('fechaini'), 'form-control-success': fields.fechaini && fields.fechaini.valid}" id="fechaini" name="fechaini" placeholder="{{ trans('admin.cv.columns.fechaini') }}">
                <div v-if="errors.has('fechaini')" class="form-control-feedback form-text" v-cloak>@{{ errors.first('fechaini') }}</div>
            </div>
        </div>
        
        <div class="form-group row align-items-center" :class="{'has-danger': errors.has('fechafi'), 'has-success': fields.fechafi && fields.fechafi.valid }">
            <label for="fechafi" class="col-form-label text-md-right" :class="isFormLocalized ? 'col-md-4' : 'col-md-2'">{{ trans('admin.cv.columns.fechafi') }}</label>
                <div :class="isFormLocalized ? 'col-md-4' : 'col-md-9 col-xl-8'">
                <input type="text" v-model="form.fechafi" v-validate="'required|integer'" @input="validate($event)" class="form-control" :class="{'form-control-danger': errors.has('fechafi'), 'form-control-success': fields.fechafi && fields.fechafi.valid}" id="fechafi" name="fechafi" placeholder="{{ trans('admin.cv.columns.fechafi') }}">
                <div v-if="errors.has('fechafi')" class="form-control-feedback form-text" v-cloak>@{{ errors.first('fechafi') }}</div>
            </div>
        </div>
        <hr />
        &nbsp;
        &nbsp;
        <h3>Experiencia Laboral</h3>
        <hr/>

        <div class="form-group row align-items-center" :class="{'has-danger': errors.has('empresa'), 'has-success': fields.empresa && fields.empresa.valid }">
            <label for="empresa" class="col-form-label text-md-right" :class="isFormLocalized ? 'col-md-4' : 'col-md-2'">{{ trans('admin.cv.columns.empresa') }}</label>
                <div :class="isFormLocalized ? 'col-md-4' : 'col-md-9 col-xl-8'">
                <input type="text" v-model="form.empresa" v-validate="'required'" @input="validate($event)" class="form-control" :class="{'form-control-danger': errors.has('empresa'), 'form-control-success': fields.empresa && fields.empresa.valid}" id="empresa" name="empresa" placeholder="{{ trans('admin.cv.columns.empresa') }}">
                <div v-if="errors.has('empresa')" class="form-control-feedback form-text" v-cloak>@{{ errors.first('empresa') }}</div>
            </div>
        </div>
        
        <div class="form-group row align-items-center" :class="{'has-danger': errors.has('cargo'), 'has-success': fields.cargo && fields.cargo.valid }">
            <label for="cargo" class="col-form-label text-md-right" :class="isFormLocalized ? 'col-md-4' : 'col-md-2'">{{ trans('admin.cv.columns.cargo') }}</label>
                <div :class="isFormLocalized ? 'col-md-4' : 'col-md-9 col-xl-8'">
                <input type="text" v-model="form.cargo" v-validate="'required'" @input="validate($event)" class="form-control" :class="{'form-control-danger': errors.has('cargo'), 'form-control-success': fields.cargo && fields.cargo.valid}" id="cargo" name="cargo" placeholder="{{ trans('admin.cv.columns.cargo') }}">
                <div v-if="errors.has('cargo')" class="form-control-feedback form-text" v-cloak>@{{ errors.first('cargo') }}</div>
            </div>
        </div>
        
        <div class="form-group row align-items-center" :class="{'has-danger': errors.has('descripcion'), 'has-success': fields.descripcion && fields.descripcion.valid }">
            <label for="descripcion" class="col-form-label text-md-right" :class="isFormLocalized ? 'col-md-4' : 'col-md-2'">{{ trans('admin.cv.columns.descripcion') }}</label>
                <div :class="isFormLocalized ? 'col-md-4' : 'col-md-9 col-xl-8'">
                <input type="text" v-model="form.descripcion" v-validate="'required'" @input="validate($event)" class="form-control" :class="{'form-control-danger': errors.has('descripcion'), 'form-control-success': fields.descripcion && fields.descripcion.valid}" id="descripcion" name="descripcion" placeholder="{{ trans('admin.cv.columns.descripcion') }}">
                <div v-if="errors.has('descripcion')" class="form-control-feedback form-text" v-cloak>@{{ errors.first('descripcion') }}</div>
            </div>
        </div>
        <div class="form-group row align-items-center" :class="{'has-danger': errors.has('periodouno'), 'has-success': fields.periodouno && fields.periodouno.valid }">
            <label for="periodouno" class="col-form-label text-md-right" :class="isFormLocalized ? 'col-md-4' : 'col-md-2'">{{ trans('admin.cv.columns.periodouno') }}</label>
                <div :class="isFormLocalized ? 'col-md-4' : 'col-md-9 col-xl-8'">
                <input type="text" v-model="form.periodouno" v-validate="'required|integer'" @input="validate($event)" class="form-control" :class="{'form-control-danger': errors.has('periodouno'), 'form-control-success': fields.periodouno && fields.periodouno.valid}" id="periodouno" name="periodouno" placeholder="{{ trans('admin.cv.columns.periodouno') }}">
                <div v-if="errors.has('periodouno')" class="form-control-feedback form-text" v-cloak>@{{ errors.first('periodouno') }}</div>
            </div>
        </div>
        
        <div class="form-group row align-items-center" :class="{'has-danger': errors.has('periododos'), 'has-success': fields.periododos && fields.periododos.valid }">
            <label for="periododos" class="col-form-label text-md-right" :class="isFormLocalized ? 'col-md-4' : 'col-md-2'">{{ trans('admin.cv.columns.periododos') }}</label>
                <div :class="isFormLocalized ? 'col-md-4' : 'col-md-9 col-xl-8'">
                <input type="text" v-model="form.periododos" v-validate="'required|integer'" @input="validate($event)" class="form-control" :class="{'form-control-danger': errors.has('periododos'), 'form-control-success': fields.periododos && fields.periododos.valid}" id="periododos" name="periododos" placeholder="{{ trans('admin.cv.columns.periododos') }}">
                <div v-if="errors.has('periododos')" class="form-control-feedback form-text" v-cloak>@{{ errors.first('periododos') }}</div>
            </div>
        </div>
        <div class="form-group row align-items-center" :class="{'has-danger': errors.has('empresados'), 'has-success': fields.empresados && fields.empresados.valid }">
            <label for="empresados" class="col-form-label text-md-right" :class="isFormLocalized ? 'col-md-4' : 'col-md-2'">{{ trans('admin.cv.columns.empresados') }}</label>
                <div :class="isFormLocalized ? 'col-md-4' : 'col-md-9 col-xl-8'">
                <input type="text" v-model="form.empresados" v-validate="'required'" @input="validate($event)" class="form-control" :class="{'form-control-danger': errors.has('empresados'), 'form-control-success': fields.empresados && fields.empresados.valid}" id="empresados" name="empresados" placeholder="{{ trans('admin.cv.columns.empresados') }}">
                <div v-if="errors.has('empresados')" class="form-control-feedback form-text" v-cloak>@{{ errors.first('empresados') }}</div>
            </div>
        </div>
        <div class="form-group row align-items-center" :class="{'has-danger': errors.has('cargodos'), 'has-success': fields.cargodos && fields.cargodos.valid }">
            <label for="cargodos" class="col-form-label text-md-right" :class="isFormLocalized ? 'col-md-4' : 'col-md-2'">{{ trans('admin.cv.columns.cargodos') }}</label>
                <div :class="isFormLocalized ? 'col-md-4' : 'col-md-9 col-xl-8'">
                <input type="text" v-model="form.cargodos" v-validate="'required'" @input="validate($event)" class="form-control" :class="{'form-control-danger': errors.has('cargodos'), 'form-control-success': fields.cargodos && fields.cargodos.valid}" id="cargodos" name="cargodos" placeholder="{{ trans('admin.cv.columns.cargodos') }}">
                <div v-if="errors.has('cargodos')" class="form-control-feedback form-text" v-cloak>@{{ errors.first('cargodos') }}</div>
            </div>
        </div>
        <div class="form-group row align-items-center" :class="{'has-danger': errors.has('descripciondos'), 'has-success': fields.descripciondos && fields.descripciondos.valid }">
            <label for="descripciondos" class="col-form-label text-md-right" :class="isFormLocalized ? 'col-md-4' : 'col-md-2'">{{ trans('admin.cv.columns.descripciondos') }}</label>
                <div :class="isFormLocalized ? 'col-md-4' : 'col-md-9 col-xl-8'">
                <input type="text" v-model="form.descripciondos" v-validate="'required'" @input="validate($event)" class="form-control" :class="{'form-control-danger': errors.has('descripciondos'), 'form-control-success': fields.descripciondos && fields.descripciondos.valid}" id="descripciondos" name="descripciondos" placeholder="{{ trans('admin.cv.columns.descripciondos') }}">
                <div v-if="errors.has('descripciondos')" class="form-control-feedback form-text" v-cloak>@{{ errors.first('descripciondos') }}</div>
            </div>
        </div>
        <div class="form-group row align-items-center" :class="{'has-danger': errors.has('periodou'), 'has-success': fields.periodou && fields.periodou.valid }">
            <label for="periodou" class="col-form-label text-md-right" :class="isFormLocalized ? 'col-md-4' : 'col-md-2'">{{ trans('admin.cv.columns.periodou') }}</label>
                <div :class="isFormLocalized ? 'col-md-4' : 'col-md-9 col-xl-8'">
                <input type="text" v-model="form.periodou" v-validate="'required|integer'" @input="validate($event)" class="form-control" :class="{'form-control-danger': errors.has('periodou'), 'form-control-success': fields.periodou && fields.periodou.valid}" id="periodou" name="periodou" placeholder="{{ trans('admin.cv.columns.periodou') }}">
                <div v-if="errors.has('periodou')" class="form-control-feedback form-text" v-cloak>@{{ errors.first('periodou') }}</div>
            </div>
        </div>

        <div class="form-group row align-items-center" :class="{'has-danger': errors.has('periodod'), 'has-success': fields.periodod && fields.periodod.valid }">
            <label for="periodod" class="col-form-label text-md-right" :class="isFormLocalized ? 'col-md-4' : 'col-md-2'">{{ trans('admin.cv.columns.periodod') }}</label>
                <div :class="isFormLocalized ? 'col-md-4' : 'col-md-9 col-xl-8'">
                <input type="text" v-model="form.periodod" v-validate="'required|integer'" @input="validate($event)" class="form-control" :class="{'form-control-danger': errors.has('periodod'), 'form-control-success': fields.periodod && fields.periodod.valid}" id="periodod" name="periodod" placeholder="{{ trans('admin.cv.columns.periodod') }}">
                <div v-if="errors.has('periodod')" class="form-control-feedback form-text" v-cloak>@{{ errors.first('periodod') }}</div>
            </div>
        </div>
                <hr />
                &nbsp;
                &nbsp;
                <h3>Idiomas</h3>
                <hr />
                <div class="form-group row align-items-center" :class="{'has-danger': errors.has('idioma'), 'has-success': fields.idioma && fields.idioma.valid }">
                    <label for="idioma" class="col-form-label text-md-right" :class="isFormLocalized ? 'col-md-4' : 'col-md-2'">{{ trans('admin.cv.columns.idioma') }}</label>
                        <div :class="isFormLocalized ? 'col-md-4' : 'col-md-9 col-xl-8'">
                        <input type="text" v-model="form.idioma" v-validate="'required'" @input="validate($event)" class="form-control" :class="{'form-control-danger': errors.has('idioma'), 'form-control-success': fields.idioma && fields.idioma.valid}" id="idioma" name="idioma" placeholder="{{ trans('admin.cv.columns.idioma') }}">
                        <div v-if="errors.has('idioma')" class="form-control-feedback form-text" v-cloak>@{{ errors.first('idioma') }}</div>
                    </div>
                </div>
                
                <div class="form-group row align-items-center" :class="{'has-danger': errors.has('nivel'), 'has-success': fields.nivel && fields.nivel.valid }">
                    <label for="nivel" class="col-form-label text-md-right" :class="isFormLocalized ? 'col-md-4' : 'col-md-2'">{{ trans('admin.cv.columns.nivel') }}</label>
                        <div :class="isFormLocalized ? 'col-md-4' : 'col-md-9 col-xl-8'">
                        <input type="text" v-model="form.nivel" v-validate="'required'" @input="validate($event)" class="form-control" :class="{'form-control-danger': errors.has('nivel'), 'form-control-success': fields.nivel && fields.nivel.valid}" id="nivel" name="nivel" placeholder="{{ trans('admin.cv.columns.nivel') }}">
                        <div v-if="errors.has('nivel')" class="form-control-feedback form-text" v-cloak>@{{ errors.first('nivel') }}</div>
                    </div>
                </div>
                <div class="form-group row align-items-center" :class="{'has-danger': errors.has('idiomados'), 'has-success': fields.idiomados && fields.idiomados.valid }">
                    <label for="idiomados" class="col-form-label text-md-right" :class="isFormLocalized ? 'col-md-4' : 'col-md-2'">{{ trans('admin.cv.columns.idiomados') }}</label>
                        <div :class="isFormLocalized ? 'col-md-4' : 'col-md-9 col-xl-8'">
                        <input type="text" v-model="form.idiomados" v-validate="'required'" @input="validate($event)" class="form-control" :class="{'form-control-danger': errors.has('idiomados'), 'form-control-success': fields.idiomados && fields.idiomados.valid}" id="idiomados" name="idiomados" placeholder="{{ trans('admin.cv.columns.idiomados') }}">
                        <div v-if="errors.has('idiomados')" class="form-control-feedback form-text" v-cloak>@{{ errors.first('idiomados') }}</div>
                    </div>
                </div>
                
                <div class="form-group row align-items-center" :class="{'has-danger': errors.has('niveldos'), 'has-success': fields.niveldos && fields.niveldos.valid }">
                    <label for="niveldos" class="col-form-label text-md-right" :class="isFormLocalized ? 'col-md-4' : 'col-md-2'">{{ trans('admin.cv.columns.niveldos') }}</label>
                        <div :class="isFormLocalized ? 'col-md-4' : 'col-md-9 col-xl-8'">
                        <input type="text" v-model="form.niveldos" v-validate="'required'" @input="validate($event)" class="form-control" :class="{'form-control-danger': errors.has('niveldos'), 'form-control-success': fields.niveldos && fields.niveldos.valid}" id="niveldos" name="niveldos" placeholder="{{ trans('admin.cv.columns.niveldos') }}">
                        <div v-if="errors.has('niveldos')" class="form-control-feedback form-text" v-cloak>@{{ errors.first('niveldos') }}</div>
                    </div>
                </div>
                <hr />
                &nbsp;
                &nbsp;
                <h3>Areas de Conocimiento</h3>
                <hr />


                <div class="form-group row align-items-center" :class="{'has-danger': errors.has('areau'), 'has-success': fields.areau && fields.areau.valid }">
                    <label for="areau" class="col-form-label text-md-right" :class="isFormLocalized ? 'col-md-4' : 'col-md-2'">{{ trans('admin.cv.columns.areau') }}</label>
                        <div :class="isFormLocalized ? 'col-md-4' : 'col-md-9 col-xl-8'">
                        <input type="text" v-model="form.areau" v-validate="'required'" @input="validate($event)" class="form-control" :class="{'form-control-danger': errors.has('areau'), 'form-control-success': fields.areau && fields.areau.valid}" id="areau" name="areau" placeholder="{{ trans('admin.cv.columns.areau') }}">
                        <div v-if="errors.has('areau')" class="form-control-feedback form-text" v-cloak>@{{ errors.first('areau') }}</div>
                    </div>
                </div>
                
                <div class="form-group row align-items-center" :class="{'has-danger': errors.has('conocimientou'), 'has-success': fields.conocimientou && fields.conocimientou.valid }">
                    <label for="conocimientou" class="col-form-label text-md-right" :class="isFormLocalized ? 'col-md-4' : 'col-md-2'">{{ trans('admin.cv.columns.conocimientou') }}</label>
                        <div :class="isFormLocalized ? 'col-md-4' : 'col-md-9 col-xl-8'">
                        <input type="text" v-model="form.conocimientou" v-validate="'required'" @input="validate($event)" class="form-control" :class="{'form-control-danger': errors.has('conocimientou'), 'form-control-success': fields.conocimientou && fields.conocimientou.valid}" id="conocimientou" name="conocimientou" placeholder="{{ trans('admin.cv.columns.conocimientou') }}">
                        <div v-if="errors.has('conocimientou')" class="form-control-feedback form-text" v-cloak>@{{ errors.first('conocimientou') }}</div>
                    </div>
                </div>
                
                <div class="form-group row align-items-center" :class="{'has-danger': errors.has('nivelu'), 'has-success': fields.nivelu && fields.nivelu.valid }">
                    <label for="nivelu" class="col-form-label text-md-right" :class="isFormLocalized ? 'col-md-4' : 'col-md-2'">{{ trans('admin.cv.columns.nivelu') }}</label>
                        <div :class="isFormLocalized ? 'col-md-4' : 'col-md-9 col-xl-8'">
                        <input type="text" v-model="form.nivelu" v-validate="'required'" @input="validate($event)" class="form-control" :class="{'form-control-danger': errors.has('nivelu'), 'form-control-success': fields.nivelu && fields.nivelu.valid}" id="nivelu" name="nivelu" placeholder="{{ trans('admin.cv.columns.nivelu') }}">
                        <div v-if="errors.has('nivelu')" class="form-control-feedback form-text" v-cloak>@{{ errors.first('nivelu') }}</div>
                    </div>
                </div>
            
            <div class="form-group row align-items-center" :class="{'has-danger': errors.has('aread'), 'has-success': fields.aread && fields.aread.valid }">
                <label for="aread" class="col-form-label text-md-right" :class="isFormLocalized ? 'col-md-4' : 'col-md-2'">{{ trans('admin.cv.columns.aread') }}</label>
                    <div :class="isFormLocalized ? 'col-md-4' : 'col-md-9 col-xl-8'">
                    <input type="text" v-model="form.aread" v-validate="'required'" @input="validate($event)" class="form-control" :class="{'form-control-danger': errors.has('aread'), 'form-control-success': fields.aread && fields.aread.valid}" id="aread" name="aread" placeholder="{{ trans('admin.cv.columns.aread') }}">
                    <div v-if="errors.has('aread')" class="form-control-feedback form-text" v-cloak>@{{ errors.first('aread') }}</div>
                </div>
            </div>
            <div class="form-group row align-items-center" :class="{'has-danger': errors.has('conocimientod'), 'has-success': fields.conocimientod && fields.conocimientod.valid }">
                <label for="conocimientod" class="col-form-label text-md-right" :class="isFormLocalized ? 'col-md-4' : 'col-md-2'">{{ trans('admin.cv.columns.conocimientod') }}</label>
                    <div :class="isFormLocalized ? 'col-md-4' : 'col-md-9 col-xl-8'">
                    <input type="text" v-model="form.conocimientod" v-validate="'required'" @input="validate($event)" class="form-control" :class="{'form-control-danger': errors.has('conocimientod'), 'form-control-success': fields.conocimientod && fields.conocimientod.valid}" id="conocimientod" name="conocimientod" placeholder="{{ trans('admin.cv.columns.conocimientod') }}">
                    <div v-if="errors.has('conocimientod')" class="form-control-feedback form-text" v-cloak>@{{ errors.first('conocimientod') }}</div>
                </div>
            </div>

            <div class="form-group row align-items-center" :class="{'has-danger': errors.has('niveld'), 'has-success': fields.niveld && fields.niveld.valid }">
                <label for="niveld" class="col-form-label text-md-right" :class="isFormLocalized ? 'col-md-4' : 'col-md-2'">{{ trans('admin.cv.columns.niveld') }}</label>
                    <div :class="isFormLocalized ? 'col-md-4' : 'col-md-9 col-xl-8'">
                    <input type="text" v-model="form.niveld" v-validate="'required'" @input="validate($event)" class="form-control" :class="{'form-control-danger': errors.has('niveld'), 'form-control-success': fields.niveld && fields.niveld.valid}" id="niveld" name="niveld" placeholder="{{ trans('admin.cv.columns.niveld') }}">
                    <div v-if="errors.has('niveld')" class="form-control-feedback form-text" v-cloak>@{{ errors.first('niveld') }}</div>
                </div>
            </div>

            <div class="form-group row align-items-center" :class="{'has-danger': errors.has('areat'), 'has-success': fields.areat && fields.areat.valid }">
                <label for="areat" class="col-form-label text-md-right" :class="isFormLocalized ? 'col-md-4' : 'col-md-2'">{{ trans('admin.cv.columns.areat') }}</label>
                    <div :class="isFormLocalized ? 'col-md-4' : 'col-md-9 col-xl-8'">
                    <input type="text" v-model="form.areat" v-validate="'required'" @input="validate($event)" class="form-control" :class="{'form-control-danger': errors.has('areat'), 'form-control-success': fields.areat && fields.areat.valid}" id="areat" name="areat" placeholder="{{ trans('admin.cv.columns.areat') }}">
                    <div v-if="errors.has('areat')" class="form-control-feedback form-text" v-cloak>@{{ errors.first('areat') }}</div>
                </div>
            </div>
            
            <div class="form-group row align-items-center" :class="{'has-danger': errors.has('conocimientot'), 'has-success': fields.conocimientot && fields.conocimientot.valid }">
                <label for="conocimientot" class="col-form-label text-md-right" :class="isFormLocalized ? 'col-md-4' : 'col-md-2'">{{ trans('admin.cv.columns.conocimientot') }}</label>
                    <div :class="isFormLocalized ? 'col-md-4' : 'col-md-9 col-xl-8'">
                    <input type="text" v-model="form.conocimientot" v-validate="'required'" @input="validate($event)" class="form-control" :class="{'form-control-danger': errors.has('conocimientot'), 'form-control-success': fields.conocimientot && fields.conocimientot.valid}" id="conocimientot" name="conocimientot" placeholder="{{ trans('admin.cv.columns.conocimientot') }}">
                    <div v-if="errors.has('conocimientot')" class="form-control-feedback form-text" v-cloak>@{{ errors.first('conocimientot') }}</div>
                </div>
            </div>
            
            <div class="form-group row align-items-center" :class="{'has-danger': errors.has('niveltr'), 'has-success': fields.niveltr && fields.niveltr.valid }">
                <label for="niveltr" class="col-form-label text-md-right" :class="isFormLocalized ? 'col-md-4' : 'col-md-2'">{{ trans('admin.cv.columns.niveltr') }}</label>
                    <div :class="isFormLocalized ? 'col-md-4' : 'col-md-9 col-xl-8'">
                    <input type="text" v-model="form.niveltr" v-validate="'required'" @input="validate($event)" class="form-control" :class="{'form-control-danger': errors.has('niveltr'), 'form-control-success': fields.niveltr && fields.niveltr.valid}" id="niveltr" name="niveltr" placeholder="{{ trans('admin.cv.columns.niveltr') }}">
                    <div v-if="errors.has('niveltr')" class="form-control-feedback form-text" v-cloak>@{{ errors.first('niveltr') }}</div>
                </div>
            </div>
            <hr />
            &nbsp;
            &nbsp;
            <h3>Referencias Personales</h3>
            <hr />




<div class="form-group row align-items-center" :class="{'has-danger': errors.has('nom'), 'has-success': fields.nom && fields.nom.valid }">
    <label for="nom" class="col-form-label text-md-right" :class="isFormLocalized ? 'col-md-4' : 'col-md-2'">{{ trans('admin.cv.columns.nom') }}</label>
        <div :class="isFormLocalized ? 'col-md-4' : 'col-md-9 col-xl-8'">
        <input type="text" v-model="form.nom" v-validate="'required'" @input="validate($event)" class="form-control" :class="{'form-control-danger': errors.has('nom'), 'form-control-success': fields.nom && fields.nom.valid}" id="nom" name="nom" placeholder="{{ trans('admin.cv.columns.nom') }}">
        <div v-if="errors.has('nom')" class="form-control-feedback form-text" v-cloak>@{{ errors.first('nom') }}</div>
    </div>
</div>

<div class="form-group row align-items-center" :class="{'has-danger': errors.has('relacion'), 'has-success': fields.relacion && fields.relacion.valid }">
    <label for="relacion" class="col-form-label text-md-right" :class="isFormLocalized ? 'col-md-4' : 'col-md-2'">{{ trans('admin.cv.columns.relacion') }}</label>
        <div :class="isFormLocalized ? 'col-md-4' : 'col-md-9 col-xl-8'">
        <input type="text" v-model="form.relacion" v-validate="'required'" @input="validate($event)" class="form-control" :class="{'form-control-danger': errors.has('relacion'), 'form-control-success': fields.relacion && fields.relacion.valid}" id="relacion" name="relacion" placeholder="{{ trans('admin.cv.columns.relacion') }}">
        <div v-if="errors.has('relacion')" class="form-control-feedback form-text" v-cloak>@{{ errors.first('relacion') }}</div>
    </div>
</div>

<div class="form-group row align-items-center" :class="{'has-danger': errors.has('contacto'), 'has-success': fields.contacto && fields.contacto.valid }">
    <label for="contacto" class="col-form-label text-md-right" :class="isFormLocalized ? 'col-md-4' : 'col-md-2'">{{ trans('admin.cv.columns.contacto') }}</label>
        <div :class="isFormLocalized ? 'col-md-4' : 'col-md-9 col-xl-8'">
        <input type="text" v-model="form.contacto" v-validate="'required'" @input="validate($event)" class="form-control" :class="{'form-control-danger': errors.has('contacto'), 'form-control-success': fields.contacto && fields.contacto.valid}" id="contacto" name="contacto" placeholder="{{ trans('admin.cv.columns.contacto') }}">
        <div v-if="errors.has('contacto')" class="form-control-feedback form-text" v-cloak>@{{ errors.first('contacto') }}</div>
    </div>
</div>

<div class="form-group row align-items-center" :class="{'has-danger': errors.has('nomu'), 'has-success': fields.nomu && fields.nomu.valid }">
    <label for="nomu" class="col-form-label text-md-right" :class="isFormLocalized ? 'col-md-4' : 'col-md-2'">{{ trans('admin.cv.columns.nomu') }}</label>
        <div :class="isFormLocalized ? 'col-md-4' : 'col-md-9 col-xl-8'">
        <input type="text" v-model="form.nomu" v-validate="'required'" @input="validate($event)" class="form-control" :class="{'form-control-danger': errors.has('nomu'), 'form-control-success': fields.nomu && fields.nomu.valid}" id="nomu" name="nomu" placeholder="{{ trans('admin.cv.columns.nomu') }}">
        <div v-if="errors.has('nomu')" class="form-control-feedback form-text" v-cloak>@{{ errors.first('nomu') }}</div>
    </div>
</div>

<div class="form-group row align-items-center" :class="{'has-danger': errors.has('relaciond'), 'has-success': fields.relaciond && fields.relaciond.valid }">
    <label for="relaciond" class="col-form-label text-md-right" :class="isFormLocalized ? 'col-md-4' : 'col-md-2'">{{ trans('admin.cv.columns.relaciond') }}</label>
        <div :class="isFormLocalized ? 'col-md-4' : 'col-md-9 col-xl-8'">
        <input type="text" v-model="form.relaciond" v-validate="'required'" @input="validate($event)" class="form-control" :class="{'form-control-danger': errors.has('relaciond'), 'form-control-success': fields.relaciond && fields.relaciond.valid}" id="relaciond" name="relaciond" placeholder="{{ trans('admin.cv.columns.relaciond') }}">
        <div v-if="errors.has('relaciond')" class="form-control-feedback form-text" v-cloak>@{{ errors.first('relaciond') }}</div>
    </div>
</div>



<div class="form-group row align-items-center" :class="{'has-danger': errors.has('contactod'), 'has-success': fields.contactod && fields.contactod.valid }">
    <label for="contactod" class="col-form-label text-md-right" :class="isFormLocalized ? 'col-md-4' : 'col-md-2'">{{ trans('admin.cv.columns.contactod') }}</label>
        <div :class="isFormLocalized ? 'col-md-4' : 'col-md-9 col-xl-8'">
        <input type="text" v-model="form.contactod" v-validate="'required'" @input="validate($event)" class="form-control" :class="{'form-control-danger': errors.has('contactod'), 'form-control-success': fields.contactod && fields.contactod.valid}" id="contactod" name="contactod" placeholder="{{ trans('admin.cv.columns.contactod') }}">
        <div v-if="errors.has('contactod')" class="form-control-feedback form-text" v-cloak>@{{ errors.first('contactod') }}</div>
    </div>
</div>


