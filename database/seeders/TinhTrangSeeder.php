<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TinhTrangSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('tinhtrang')->delete();
        DB::table('tinhtrang')->insert([
            ['TinhTrang' => 'Mới, chưa bàn giao'],
            ['TinhTrang' => 'Đang sử dụng'],
            ['TinhTrang' => 'Đang báo hỏng'],
            ['TinhTrang' => 'Đang sửa chữa'],
            ['TinhTrang' => 'Ngừng sử dụng'],
            ['TinhTrang' => 'Đã thanh lý'],
        ]);
    }
}
