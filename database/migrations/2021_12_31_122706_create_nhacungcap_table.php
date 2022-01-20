<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateNhacungcapTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('nhacungcap', function (Blueprint $table) {
            $table->id();
            $table->string('idNhaCungCap')->unique();
            $table->string('TenNhaCungCap');
            $table->string('NguoiDaiDien');
            $table->string('DiaChi');
            $table->string('GhiChu')->nullable();
            $table->string('Email')->unique();
            $table->string('SoDienThoai')->unique();
            $table->string('MaSoThue')->nullable();
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
        Schema::dropIfExists('nhacungcap');
    }
}
