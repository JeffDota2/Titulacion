<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Empresarial extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('empresariales', function (Blueprint $table) {
            $table->bigIncrements('id');
            /** Encabezado*/
            $table->string('nom_estudiante');
            $table->string('carrera');
            $table->string('nivel');
            $table->string('pe_lectivo');
            $table->string('ent_formadora');
            $table->integer('hr_practicas');
            /** Estructura*/
            $table->string('tit_proyecto');
            $table->string('analisis');
            $table->string('obj_proyecto');
            $table->string('des_proyecto');
            $table->string('indicador');
            $table->string('meta');
            $table->string('presupuesto');
            $table->string('medicion');
            $table->string('fuente');
            $table->string('beneficios');
            $table->string('comentarios');
            /** Firmas*/
            $table->string('cor_carrera');
            $table->string('tut_empresa');
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
