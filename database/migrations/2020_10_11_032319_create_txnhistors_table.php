<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTxnhistorsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('txnhistors', function (Blueprint $table) {
            $table->engine = 'InnoDB';

            $table->id();
            $table->date('txndate');
            $table->text('txntype');
            $table->text('beneficiary');
            $table->string('currency');
            $table->decimal('txnamount', 8, 2);

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
        Schema::dropIfExists('txnhistors');
    }
}
