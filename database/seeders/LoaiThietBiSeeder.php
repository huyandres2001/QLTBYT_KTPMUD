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
                'idLoaiThietBi' => 'Thiết bị phụ trợ chẩn đoán hình ảnh',
                'idNhomThietBi' => 'N1'
            ],
            [
                'idLoaiThietBi' => 'Máy X Quang',
                'idNhomThietBi' => 'N1'
            ],
            [
                'idLoaiThietBi' => 'Máy siêu âm',
                'idNhomThietBi' => 'N1'
            ],
            [
                'idLoaiThietBi' => 'Hệ thống chụp mạch số hóa xóa nền (DSA)',
                'idNhomThietBi' => 'N1'
            ],
            [
                'idLoaiThietBi' => 'Hệ thống chụp Cộng hưởng từ',
                'idNhomThietBi' => 'N1'
            ],
            [
                'idLoaiThietBi' => 'Hệ thống CT - Scanner',
                'idNhomThietBi' => 'N1'
            ],
            
            [
                'idLoaiThietBi' => 'Hệ thống/ Thiết bị hồi sức khác',
                'idNhomThietBi' => 'N2'
            ],
            [
                 
                'idLoaiThietBi' => 'Máy hút dịch',
                'idNhomThietBi' => 'N2'
            ],
            [
                 
                'idLoaiThietBi' => 'Máy thở',
                'idNhomThietBi' => 'N2'
            ],
            [
                 
                'idLoaiThietBi' => 'Máy khí dung',
                'idNhomThietBi' => 'N2'
            ],
            [
                 
                'idLoaiThietBi' => 'Máy theo dõi bệnh nhân',
                'idNhomThietBi' => 'N2'
            ],
            [
                 
                'idLoaiThietBi' => 'Máy phá rung tim',
                'idNhomThietBi' => 'N2'
            ],
            [
                 
                'idLoaiThietBi' => 'Bơm tiêm điện',
                'idNhomThietBi' => 'N2'
            ],
            [
                 
                'idLoaiThietBi' => 'Giường cấp cứu hồi sức',
                'idNhomThietBi' => 'N2'
            ],
           
            [
                 
                'idLoaiThietBi' => 'Hệ thống tuần hoàn ngoài cơ thể ECMO',
                'idNhomThietBi' => 'N3'
            ],[
                 
                'idLoaiThietBi' => 'Máy lọc màng bụng',
                'idNhomThietBi' => 'N3'
            ],
            [
                 
                'idLoaiThietBi' => 'Máy lọc HDF online',
                'idNhomThietBi' => 'N3'
            ],
            [
                 
                'idLoaiThietBi' => 'Máy siêu lọc máu liên tục',
                'idNhomThietBi' => 'N3'
            ],
            [
                 
                'idLoaiThietBi' => 'Máy thận nhân tạo',
                'idNhomThietBi' => 'N3'
            ],
            
            [
                 
                'idLoaiThietBi' => 'Thiết bị phụ trợ',
                'idNhomThietBi' => 'N7'
            ],
            [
                 
                'idLoaiThietBi' => 'Hệ thống/ Thiết bị khác',
                'idNhomThietBi' => 'N7'
            ],
            [
                 
                'idLoaiThietBi' => 'Máy sắc ký',
                'idNhomThietBi' => 'N7'
            ],
            [
                 
                'idLoaiThietBi' => 'Kính hiển vi',
                'idNhomThietBi' => 'N7'
            ],
            [
                 
                'idLoaiThietBi' => 'Máy quang phổ',
                'idNhomThietBi' => 'N7'
            ],
            [
                 
                'idLoaiThietBi' => 'Thiết bị hỗ trợ sinh sản + Bảo quản mô',
                'idNhomThietBi' => 'N7'
            ],
            [
                 
                'idLoaiThietBi' => 'Máy xét nghiệm huyết học',
                'idNhomThietBi' => 'N7'
            ],
            [
                 
                'idLoaiThietBi' => 'Thiết bị xét nghiệm vi sinh + sinh học phân tử + di truyền',
                'idNhomThietBi' => 'N7'
            ],
            [
                 
                'idLoaiThietBi' => 'Máy ly tâm',
                'idNhomThietBi' => 'N7'
            ],
            [
                 
                'idLoaiThietBi' => 'Hệ thống Elisa',
                'idNhomThietBi' => 'N7'
            ],
            [
                 
                'idLoaiThietBi' => 'Máy điện di',
                'idNhomThietBi' => 'N7'
            ],
            [
                 
                'idLoaiThietBi' => 'Máy bảo quản lạnh',
                'idNhomThietBi' => 'N7'
            ],
            [
                 
                'idLoaiThietBi' => 'Máy xét nghiệm sinh hóa, miễn dịch',
                'idNhomThietBi' => 'N7'
            ],
            [
                 
                'idLoaiThietBi' => 'Giải phẫu bệnh',
                'idNhomThietBi' => 'N7'
            ],
            
            
        ]);
    }
}
