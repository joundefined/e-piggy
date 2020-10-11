<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateObprovidersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('obproviders', function (Blueprint $table) {
            $table->engine = 'InnoDB';

            $table->id();
            $table->string('logo')->nullable();
            $table->text('bic');
            $table->text('provider');
            $table->text('consent')->nullable();
            $table->longText('health')->nullable();
            $table->longText('info')->nullable();

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
        Schema::dropIfExists('obproviders');
    }
}
