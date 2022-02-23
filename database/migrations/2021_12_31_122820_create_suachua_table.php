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
            $table->string('SerialThietBiHong');
            $table->date('NgaySuaChua');
            $table->date('NgaySuaXong')->nullable();
            $table->string('TinhTrangSauKhiSua')->nullable();
            $table->string('ChiPhi')->nullable();
            $table->string('GhiChu')->nullable();
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
