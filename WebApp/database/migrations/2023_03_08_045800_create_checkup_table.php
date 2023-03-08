<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCheckupTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('checkup', function (Blueprint $table) {
            $table->id();
            $table->string('tinggi_badan');
            $table->string('berat_badan');
            $table->string('mata_kanan');
            $table->string('mata_kiri');
            $table->text('gigi_mulut');
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
        Schema::dropIfExists('checkup');
    }
}
