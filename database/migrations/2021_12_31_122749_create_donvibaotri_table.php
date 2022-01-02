<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDonvibaotriTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('donvibaotri', function (Blueprint $table) {
            $table->id();
            $table->string('idDonViBaoTri')->unique();
            $table->string('TenDonViBaoTri');
            $table->string('DiaChi');
            $table->string('NguoiDaiDien');
            $table->string('SoDienThoai')->unique();
            $table->string('Email')->unique();
            $table->string('MaSoThue')->nullable();
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
        Schema::dropIfExists('donvibaotri');
    }
}
