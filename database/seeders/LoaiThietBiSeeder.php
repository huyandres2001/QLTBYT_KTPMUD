<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class LoaiThietBiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('loaithietbi')->delete();
        DB::table('loaithietbi')->insert([
            [
                'TenLoaiThietBi' => 'Thiết bị phụ trợ chẩn đoán hình ảnh',
                'idNhomThietBi' => 'N1'
            ],
            [
                'TenLoaiThietBi' => 'Máy X Quang',
                'idNhomThietBi' => 'N1'
            ],
            [
                'TenLoaiThietBi' => 'Máy siêu âm',
                'idNhomThietBi' => 'N1'
            ],
            [
                'TenLoaiThietBi' => 'Hệ thống chụp mạch số hóa xóa nền (DSA)',
                'idNhomThietBi' => 'N1'
            ],
            [
                'TenLoaiThietBi' => 'Hệ thống chụp Cộng hưởng từ',
                'idNhomThietBi' => 'N1'
            ],
            [
                'TenLoaiThietBi' => 'Hệ thống CT - Scanner',
                'idNhomThietBi' => 'N1'
            ],
            
            [
                'TenLoaiThietBi' => 'Hệ thống/ Thiết bị hồi sức khác',
                'idNhomThietBi' => 'N2'
            ],
            [
                 
                'TenLoaiThietBi' => 'Máy hút dịch',
                'idNhomThietBi' => 'N2'
            ],
            [
                 
                'TenLoaiThietBi' => 'Máy thở',
                'idNhomThietBi' => 'N2'
            ],
            [
                 
                'TenLoaiThietBi' => 'Máy khí dung',
                'idNhomThietBi' => 'N2'
            ],
            [
                 
                'TenLoaiThietBi' => 'Máy theo dõi bệnh nhân',
                'idNhomThietBi' => 'N2'
            ],
            [
                 
                'TenLoaiThietBi' => 'Máy phá rung tim',
                'idNhomThietBi' => 'N2'
            ],
            [
                 
                'TenLoaiThietBi' => 'Bơm tiêm điện',
                'idNhomThietBi' => 'N2'
            ],
            [
                 
                'TenLoaiThietBi' => 'Giường cấp cứu hồi sức',
                'idNhomThietBi' => 'N2'
            ],
           
            [
                 
                'TenLoaiThietBi' => 'Hệ thống tuần hoàn ngoài cơ thể ECMO',
                'idNhomThietBi' => 'N3'
            ],[
                 
                'TenLoaiThietBi' => 'Máy lọc màng bụng',
                'idNhomThietBi' => 'N3'
            ],
            [
                 
                'TenLoaiThietBi' => 'Máy lọc HDF online',
                'idNhomThietBi' => 'N3'
            ],
            [
                 
                'TenLoaiThietBi' => 'Máy siêu lọc máu liên tục',
                'idNhomThietBi' => 'N3'
            ],
            [
                 
                'TenLoaiThietBi' => 'Máy thận nhân tạo',
                'idNhomThietBi' => 'N3'
            ],
            
            [
                 
                'TenLoaiThietBi' => 'Thiết bị phụ trợ',
                'idNhomThietBi' => 'N7'
            ],
            [
                 
                'TenLoaiThietBi' => 'Hệ thống/ Thiết bị khác',
                'idNhomThietBi' => 'N7'
            ],
            [
                 
                'TenLoaiThietBi' => 'Máy sắc ký',
                'idNhomThietBi' => 'N7'
            ],
            [
                 
                'TenLoaiThietBi' => 'Kính hiển vi',
                'idNhomThietBi' => 'N7'
            ],
            [
                 
                'TenLoaiThietBi' => 'Máy quang phổ',
                'idNhomThietBi' => 'N7'
            ],
            [
                 
                'TenLoaiThietBi' => 'Thiết bị hỗ trợ sinh sản + Bảo quản mô',
                'idNhomThietBi' => 'N7'
            ],
            [
                 
                'TenLoaiThietBi' => 'Máy xét nghiệm huyết học',
                'idNhomThietBi' => 'N7'
            ],
            [
                 
                'TenLoaiThietBi' => 'Thiết bị xét nghiệm vi sinh + sinh học phân tử + di truyền',
                'idNhomThietBi' => 'N7'
            ],
            [
                 
                'TenLoaiThietBi' => 'Máy ly tâm',
                'idNhomThietBi' => 'N7'
            ],
            [
                 
                'TenLoaiThietBi' => 'Hệ thống Elisa',
                'idNhomThietBi' => 'N7'
            ],
            [
                 
                'TenLoaiThietBi' => 'Máy điện di',
                'idNhomThietBi' => 'N7'
            ],
            [
                 
                'TenLoaiThietBi' => 'Máy bảo quản lạnh',
                'idNhomThietBi' => 'N7'
            ],
            [
                 
                'TenLoaiThietBi' => 'Máy xét nghiệm sinh hóa, miễn dịch',
                'idNhomThietBi' => 'N7'
            ],
            [
                 
                'TenLoaiThietBi' => 'Giải phẫu bệnh',
                'idNhomThietBi' => 'N7'
            ],
            
            
        ]);
    }
}
