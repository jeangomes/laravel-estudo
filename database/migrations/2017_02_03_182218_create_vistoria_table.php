<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateVistoriaTable extends Migration {

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up() {
        Schema::create('vistoria', function (Blueprint $table) {
            $table->increments('id');

            $table->integer('cliente_id')->unsigned();
            //$table->string('amount', 10);
            $table->decimal('amount', 5, 2);
            $table->string('description');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down() {
        Schema::dropIfExists('vistoria');
    }

}
