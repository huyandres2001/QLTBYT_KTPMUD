<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSuachuaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('suachua', function (Blueprint $table) {
            $table->id();
            $table->string('idThietBiHong');
            $table->date('NgaySuaChua');
            $table->date('NgaySuaXong');
            $table->string('TrangThaiTruocKhiSua');
            $table->string('TrangThaiSauKhiSua');
            $table->string('ChiPhi');
            $table->string('GhiChu');
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
        Schema::dropIfExists('suachua');
    }
}
