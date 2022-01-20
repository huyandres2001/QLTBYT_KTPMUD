<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class NhaCungCapSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('nhacungcap')->delete();
        DB::table('nhacungcap')->insert([
            [
                'idNhaCungCap' => 'Công ty A',
                'TenNhaCungCap' => 'Công ty A',
                'NguoiDaiDien' => 'Nguyễn Văn A',
                'DiaChi' => 'Trái đất',
                'GhiChu' => 'blabla',
                'Email' => 'congtyA@gmail.com',
                'SoDienThoai' => '123123123',
                'MaSoThue' => '123123123',
            ],
            [
                'idNhaCungCap' => 'Công ty B',
                'TenNhaCungCap' => 'Công ty B',
                'NguoiDaiDien' => 'Nguyễn Văn B',
                'DiaChi' => 'HN',
                'GhiChu' => 'abc',
                'Email' => 'congtyB@gmail.com',
                'SoDienThoai' => '222222',
                'MaSoThue' => '222222',
            ],
            [
                'idNhaCungCap' => 'Công ty C',
                'TenNhaCungCap' => 'Công ty C',
                'NguoiDaiDien' => 'Nguyễn Văn C',
                'DiaChi' => 'HCM',
                'GhiChu' => 'blabla',
                'Email' => 'congtyC@gmail.com',
                'SoDienThoai' => '333333',
                'MaSoThue' => '333333',
            ],
            [
                'idNhaCungCap' => 'Công ty D',
                'TenNhaCungCap' => 'Công ty D',
                'NguoiDaiDien' => 'Nguyễn Văn D',
                'DiaChi' => 'VN',
                'GhiChu' => 'blabla',
                'Email' => 'congtyD@gmail.com',
                'SoDienThoai' => '555555',
                'MaSoThue' => '555555',
            ]
        ]);
    }
}
