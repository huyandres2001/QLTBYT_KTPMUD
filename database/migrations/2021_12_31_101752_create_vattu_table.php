<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVattuTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('vattu', function (Blueprint $table) {
            $table->id();
            $table->string('TenVatTu');
            $table->string('AnhMinhHoa')->nullable();
            $table->string('LoaiVatTu');
            $table->string('SoLuong');
            $table->string('DaDung')->nullable();
            $table->string('DonViTinh')->nullable();
            $table->string('TinhTrang')->nullable();
            $table->string('SerialThietBiTuongUng')->nullable();
            $table->string('GiaNhap')->nullable();
            $table->string('HangSanXuat')->nullable();
            $table->string('XuatXu')->nullable();
            $table->string('idNhaCungCap')->nullable();
            $table->string('Serial')->unique();
            $table->string('Model');
            $table->year('NamSanXuat')->nullable();
            $table->year('NamSuDung')->nullable();
            $table->date('NgayNhapKho')->nullable();
            $table->date('HanSuDung')->nullable();
            $table->string('ThongSoKyThuat')->nullable();
            $table->string('CauHinhKyThuat')->nullable();
            $table->string('QuyTrinhSuDung')->nullable();
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
        Schema::dropIfExists('vattu');
    }
}
