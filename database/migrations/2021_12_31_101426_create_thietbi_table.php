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
            $table->string('idThietBi')->unique()->nullable();
            $table->string('TenThietBi');
            $table->string('Model');
            $table->string('Serial')->unique();
            $table->string('MucDoRuiRo')->nullable();
            $table->string('SoLuong');
            $table->string('GiaNhap')->nullable();
            $table->string('DonViTinh');
            $table->string('TinhTrang');
            $table->string('idNhomThietBi')->nullable();
            $table->string('idLoaiThietBi')->nullable();
            $table->string('idCanBoVatTuPhuTrach')->nullable();
            $table->string('idCanBoKhoaPhongPhuTrach')->nullable();
            $table->string('idKhoaPhongSuDung')->nullable();
            $table->string('idNhaCungCap')->nullable();
            $table->string('idDonViBaoTri')->nullable();
            $table->string('HangSanXuat')->nullable();
            $table->string('XuatXu')->nullable();
            $table->year('NamSanXuat')->nullable();
            $table->string('KiemDinhDinhKy')->nullable();
            $table->date('NgayKiemDinhGanNhat')->nullable();
            $table->date('NgayNhapKho')->nullable();
            $table->date('NgayHetHanBaoHanh')->nullable();
            $table->string('ThongSoKyThuat')->nullable();
            $table->string('CauHinhKyThuat')->nullable();
            $table->integer('GiaTriBanDau')->nullable();
            $table->integer('KhauHaoHangNam')->nullable();
            $table->integer('GiaTriHienTai')->nullable();
            $table->year('NamSuDung')->nullable();
            $table->text('AnhMinhHoa')->nullable();
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
