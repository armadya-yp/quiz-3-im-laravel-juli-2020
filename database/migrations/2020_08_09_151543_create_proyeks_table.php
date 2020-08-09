<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProyeksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('proyeks', function (Blueprint $table) {
            $table->bigIncrements('idproyek');
            $table->string[45]('proyeknama');
            $table->string[100]('proyekdesc');
            $table->date('proyekmulai');
            $table->date('proyekdeadline');
            $table->tiny('proyekstatus');
            $table->unsignedBigIngteger('proyekman');
            $table->foreign('proyekman')->reference('idkaryawan')->on('karyawans');
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
        Schema::dropIfExists('proyeks');
    }
}
