<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class UserFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = User::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
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
            'password' => bcrypt('111111111'), // password
            'remember_token' => Str::random(10),
        ];
    } 
}
