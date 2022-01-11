<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class NhomThietBiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('nhomthietbi')->delete();
        DB::table('nhomthietbi')->insert([
            [
                'idNhomThietBi' => 'N1',
                'TenNhomThietBi' => 'Danh mục 1. Thiết bị chẩn đoán hình ảnh'
            ],
            [
                'idNhomThietBi' => 'N2',
                'TenNhomThietBi' => 'Danh mục 2. Thiết bị hồi sức cấp cứu'
            ],
            [
                'idNhomThietBi' => 'N3',
                'TenNhomThietBi' => 'Danh mục 3. Thiết bị lọc máu'
            ],
            [
                'idNhomThietBi' => 'N4',
                'TenNhomThietBi' => 'Danh mục 4. Thiết bị phòng mổ'
            ],
            [
                'idNhomThietBi' => 'N5',
                'TenNhomThietBi' => 'Danh mục 5. Thiết bị chuyên khoa ung bướu và y học hạt nhân'
            ],
            [
                'idNhomThietBi' => 'N6',
                'TenNhomThietBi' => 'Danh mục 6. Thiết bị chuyên khoa RHM-THM-Mắt'
            ],
            [
                'idNhomThietBi' => 'N7',
                'TenNhomThietBi' => 'Danh mục 7. Thiết bị chuyên khoa xét nghiệm'
            ],
            [
                'idNhomThietBi' => 'N8',
                'TenNhomThietBi' => 'Danh mục 8. Thiết bị kiểm soát nhiễm khuẩn'
            ],
            [
                'idNhomThietBi' => 'N9',
                'TenNhomThietBi' => 'Danh mục 9. Thiết bị chuyên khoa sản nhi'
            ],
            [
                'idNhomThietBi' => 'N10',
                'TenNhomThietBi' => 'Danh mục 10. Thiết bị thăm dò chức năng'
            ],
            [
                'idNhomThietBi' => 'N11',
                'TenNhomThietBi' => 'Danh mục 11. Thiết bị nội soi chẩn đoán'
            ],
            [
                'idNhomThietBi' => 'N12',
                'TenNhomThietBi' => 'Danh mục 12. Thiết bị phục hồi chức năng - Vật lý trị liệu'
            ],
            [
                'idNhomThietBi' => 'N13',
                'TenNhomThietBi' => 'Danh mục 13. Thiết bị dùng chung'
            ],
            [
                'idNhomThietBi' => 'N14',
                'TenNhomThietBi' => 'Danh mục 14. Thiết bị khám - điều trị khác'
            ],
        ]);
    }
}
