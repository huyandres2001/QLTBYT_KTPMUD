<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

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
            ['TinhTrang' => 'Mới, Chưa bàn giao'],
            ['TinhTrang' => 'Đang sử dụng'],
            ['TinhTrang' => 'Đang báo hỏng'],
            ['TinhTrang' => 'Đang sửa chữa'],
            ['TinhTrang' => 'Ngừng sử Dụng'],
        ]);
    }
}
