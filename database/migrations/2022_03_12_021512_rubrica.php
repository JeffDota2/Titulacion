<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Rubrica extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('rubricas', function (Blueprint $table) {
            $table->bigIncrements('id');
            /** Encabezado*/
            $table->string('nom_estudiante');
            $table->string('nivel');
            $table->string('pe_lectivo');
            $table->string('ent_formadora');
            $table->string('tut_empresa');
            $table->string('tut_instituto');
            $table->date('fecha_evaluacion');
            $table->integer('hr_practica');
            $table->date('desde');
            $table->date('hasta');
            /** Califiacion Instituto*/
            $table->integer('ent_documento');
            $table->integer('pres_proyecto');
            $table->integer('ad_conocimiento');
            $table->integer('ap_conocimiento');
            $table->integer('sum_uno');
            $table->integer('pro_uno');
            /** Calificacion Empresa*/
            $table->integer('prom_evaluacion');
            $table->integer('pre_proyecto');
            $table->integer('cum_objetivo');
            $table->integer('actitud');
            $table->integer('sum_dos');
            $table->integer('pro_dos');
            /** Consolidados Notas*/
            $table->integer('cal_instituto');
            $table->integer('cal_empresa');
            $table->integer('cal_final');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
