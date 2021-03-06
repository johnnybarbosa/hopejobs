<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFormacoesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('formacoes', function (Blueprint $table){
            $table->id();
            $table->string('nivel'); // graduação, técnico, mestrado ...
            $table->string('instituicao');
            $table->string('turno')->nullable();
            $table->string('curso');
            $table->string('campus')->nullable();
            $table->string('status'); // cursando / trancado/ concluído
            $table->date('inicio');
            $table->date('previsao_fim')->nullable();
            $table->foreignId('curriculo_id')->constrained();
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
        Schema::dropIfExists('formacoes');
    }
}
