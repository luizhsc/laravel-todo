<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableTarefas extends Migration {

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up() {
        Schema::create('tarefas', function (Blueprint $table) {
            $table->increments('id');

            $table->string('titulo');
            $table->string('descricao');

            $table->string('title');
            $table->string('description');
            $table->string('tag_name');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down() {
        Schema::dropIfExists('tarefas');
    }

}
