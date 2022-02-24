<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class LoaiVatTuSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('loaivattu')->delete();
        DB::table('loaivattu')->insert([
        [ 
            'idLoaiVatTu' => 'Vật tư thay thế',
        ],
        [
            'idLoaiVatTu' => 'Vật tư tiêu hao',
        ],
        [
            'idLoaiVatTu' => 'Phụ kiện kèo theo'
        ],
        [
            'idLoaiVatTu' => 'Thành phần cấu thành',
        ],
        [
            'idLoaiVatTu' => 'Vật tư tái sử dụng',
        ]
        ]);
    }
}
