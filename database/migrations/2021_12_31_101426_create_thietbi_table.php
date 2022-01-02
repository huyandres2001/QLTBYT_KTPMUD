<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateThietbiTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('thietbi', function (Blueprint $table) {
            $table->id();
            $table->string('idThietBi')->unique();
            $table->string('TenThietBi');
            $table->string('Model');
            $table->string('Serial')->unique();
            $table->string('MucDoRuiRo')->nullable();
            $table->string('SoLuong');
            $table->string('DonViTinh');
            $table->integer('TinhTrang');
            $table->integer('idNhomThietBi')->nullable();
            $table->integer('idLoaiThietBi')->nullable();
            $table->integer('idCanBoVatTuPhuTrach')->nullable();
            $table->integer('idCanBoKhoaPhongPhuTrach')->nullable();
            $table->integer('idKhoaPhongSuDung')->nullable();
            $table->integer('idNhaCungCap')->nullable();
            $table->integer('idDonViBaoTri')->nullable();
            $table->string('HangSanXuat')->nullable();
            $table->string('XuatXu')->nullable();
            $table->year('NamSanXuat')->nullable();
            $table->integer('KiemDinhDinhKy')->nullable();
            $table->date('NgayKiemDinhLanDau')->nullable();
            $table->date('NgayNhapKho')->nullable();
            $table->date('NgayHetHanBaoHanh')->nullable();
            $table->string('ThongSoKyThuat')->nullable();
            $table->string('CauHinhKyThuat')->nullable();
            $table->integer('GiaTriBanDau')->nullable();
            $table->integer('KhauHaoHangNam')->nullable();
            $table->integer('GiaTriHienTai')->nullable();
            $table->year('NamSuDung')->nullable();
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
        Schema::dropIfExists('thietbi');
    }
}
