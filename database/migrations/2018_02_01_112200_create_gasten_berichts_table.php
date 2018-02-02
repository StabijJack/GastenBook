<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateGastenBerichtsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('gasten_berichts', function (Blueprint $table) {
            $table->increments('id');
            
            $table->string('name');
            $table->text('bericht');
            $table->string('email');
            $table->string('telefoonnummer')->nullable();
            $table->string('foto')->nullable();
            $table->boolean('mailsubscriber')->default(0);

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
        Schema::dropIfExists('gasten_berichts');
    }
}
