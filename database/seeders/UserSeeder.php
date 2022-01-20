<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('users')->delete();
        DB::table('users')->insert([
            [
                'HoVaTen' => 'Huy',
                'Email' => 'huy.nv28122001@gmail.com',
                'PhanQuyen' => 'Admin',
                'idNguoiDung' => '20192914',
                'idKhoaPhong' => 'Admin',
                'NgaySinh' => '28/12/2001',
                'DiaChi' => 'HaTay',
                'GioiTinh' => 'Nam',
                'SoDienThoai' => '0886152192',
                'email_verified_at' => now(),
                'password' => Hash::make('111111111'), // password
                'remember_token' => Str::random(10),
            ],
            [
                'HoVaTen' => 'Người dùng test',
                'Email' => 'test@gmail.com',
                'PhanQuyen' => 'Cán bộ khoa phòng',
                'idNguoiDung' => '20192914',
                'idKhoaPhong' => 'Admin',
                'NgaySinh' => '28/12/2001',
                'DiaChi' => 'HaTay',
                'GioiTinh' => 'Nam',
                'SoDienThoai' => '0123456789',
                'email_verified_at' => now(),
                'password' => Hash::make('111111111'), // password
                'remember_token' => Str::random(10),
            ],
        ]);
    }
}
