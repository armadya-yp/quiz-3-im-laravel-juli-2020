<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProyekdtlsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('proyekdtls', function (Blueprint $table) {
            $table->>unsignedBigIngteger('idproyek');
            $table->foreign('idproyek')->reference('idproyek')->on('proyeks');
            $table->>unsignedBigIngteger('idstass');
            $table->foreign('idstaff')->reference('idkaryawan')->on('karyawans');
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
        Schema::dropIfExists('proyekdtls');
    }
}
