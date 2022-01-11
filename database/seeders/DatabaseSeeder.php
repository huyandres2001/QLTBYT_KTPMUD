<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        //\App\Models\User::factory()->create();
       $this->call(ThietBiSeeder::class);
        $this->call(UserSeeder::class);
       // $this->call(DonViBaoTriSeeder::class);
       // $this->call(KhoaPhongSeeder::class);
        $this->call(LoaiThietBiSeeder::class);
       // $this->call(NhaCungCapSeeder::class);
        $this->call(NhomThietBiSeeder::class);
        //$this->call(TinhTrangSeeder::class);
        //$this->call(VatTuSeeder::class);
    }
}
