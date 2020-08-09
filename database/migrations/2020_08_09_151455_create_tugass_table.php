<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTugassTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tugass', function (Blueprint $table) {
            $table->>unsignedBigIngteger('idkaryawan');
            $table->foreign('idkaryawan')->reference('idkaryawan')->on('karyawans');
            $table->>unsignedBigIngteger('idmanager');
            $table->foreign('idmanager')->reference('idkaryawan')->on('karyawans');
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
        Schema::dropIfExists('tugass');
    }
}
