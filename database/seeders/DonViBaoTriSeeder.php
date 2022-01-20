<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class DonViBaoTriSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('donvibaotri')->delete();
        DB::table('donvibaotri')->insert([
            [
                'idDonViBaoTri' => 'Đơn vị bảo trì A',
                'TenDonViBaoTri' => 'Đơn vị bảo trì A',
                'NguoiDaiDien' => 'Nguyễn Văn A',
                'idNhaCungCap' => 'Công ty A',
                'DiaChi' => 'Trái đất',
                'GhiChu' => 'blabla',
                'Email' => 'congtyA@gmail.com',
                'SoDienThoai' => '123123123',
                'MaSoThue' => '123123123',
            ],
            [
                'idDonViBaoTri' => 'Đơn vị bảo trì B',
                'TenDonViBaoTri' => 'Đơn vị bảo trì B',
                'NguoiDaiDien' => 'Nguyễn Văn B',
                'idNhaCungCap' => 'Công ty B',
                'DiaChi' => 'HN',
                'GhiChu' => 'abc',
                'Email' => 'congtyB@gmail.com',
                'SoDienThoai' => '222222',
                'MaSoThue' => '222222',
            ],
            [
                'idDonViBaoTri' => 'Đơn vị bảo trì C',
                'TenDonViBaoTri' => 'Đơn vị bảo trì C',
                'NguoiDaiDien' => 'Nguyễn Văn C',
                'idNhaCungCap' => 'Công ty C',
                'DiaChi' => 'HCM',
                'GhiChu' => 'blabla',
                'Email' => 'congtyC@gmail.com',
                'SoDienThoai' => '333333',
                'MaSoThue' => '333333',
            ],
            [
                'idDonViBaoTri' => 'Đơn vị bảo trì D',
                'TenDonViBaoTri' => 'Đơn vị bảo trì D',
                'NguoiDaiDien' => 'Nguyễn Văn D',
                'idNhaCungCap' => 'Công ty D',
                'DiaChi' => 'VN',
                'GhiChu' => 'blabla',
                'Email' => 'congtyD@gmail.com',
                'SoDienThoai' => '555555',
                'MaSoThue' => '555555',
            ],
            [
                'idDonViBaoTri' => 'Đơn vị bảo trì E',
                'TenDonViBaoTri' => 'Đơn vị bảo trì E',
                'NguoiDaiDien' => 'Nguyễn Văn E',
                'idNhaCungCap' => '',
                'DiaChi' => 'VN',
                'GhiChu' => 'blabla',
                'Email' => 'congtyE@gmail.com',
                'SoDienThoai' => '666666',
                'MaSoThue' => '666666',
            ]
        ]);
    }
}
