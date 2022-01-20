<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class KhoaPhongSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('department')->delete();
        DB::table('department')->insert([
            [
                'idKhoaPhong' => 'Khoa Ngoại Chỉnh Hình',
                'TenKhoaPhong' => 'Khoa Ngoại Chỉnh Hình',
                'TruongKhoa' => 'Huy1',
                'SoDienThoai' => '1212111212',
                'DiaChi' => 'HN'
            ],
            [
                'idKhoaPhong' => 'Khoa Xét Nghiệm',
                'TenKhoaPhong' => 'Khoa Xét Nghiệm',
                'TruongKhoa' => 'Huy2',
                'SoDienThoai' => '1212123333',
                'DiaChi' => 'TPHCM'
            ],
            [
                'idKhoaPhong' => 'Khoa Y học cổ truyền',
                'TenKhoaPhong' => 'Khoa Y học cổ truyền',
                'TruongKhoa' => 'Huy3',
                'SoDienThoai' => '3508777',
                'DiaChi' => 'VN'
            ],
            [
                'idKhoaPhong' => 'Khoa Cấp Cứu Tổng Hợp',
                'TenKhoaPhong' => 'Khoa Cấp Cứu Tổng Hợp',
                'TruongKhoa' => 'Huy4',
                'SoDienThoai' => '123123123456',
                'DiaChi' => 'HN'
            ],
            [
                'idKhoaPhong' => 'Khoa Ngoại Thần Kinh',
                'TenKhoaPhong' => 'Khoa Ngoại Thần Kinh',
                'TruongKhoa' => 'Huy5',
                'SoDienThoai' => '78945642',
                'DiaChi' => 'HCM'
            ],
            [
                'idKhoaPhong' => 'Khoa chẩn đoán hình ảnh',
                'TenKhoaPhong' => 'Khoa chẩn đoán hình ảnh',
                'TruongKhoa' => 'huy6',
                'SoDienThoai' => '7987461',
                'DiaChi' => 'HN'
            ],
        ]);
    }
}
