<?php
namespace Database\Seeders;
use Illuminate\Database\Seeder;
use Illuminate\PhpVnDataGenerator\VnBase;
use Illuminate\PhpVnDataGenerator\VnFullname;
use Illuminate\PhpVnDataGenerator\VnPersonalInfo;
use DataTime;
use Illuminate\Support\Facades\DB;
class SanphamTableSeeder extends Seeder {

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run() {
        $list = [];
        $uFN = new VnFullname();
        $uPI = new VnPersonalInfo();

        $photos = array('hoahong.jpg','hoalan.jpg','hoatuoi.jpg');

        for ($i=1; $i <= 30; $i++) {
            $today = new \DateTime();
            array_push($list, [
                'sp_ten'                  => "sp_ten $i",
                'sp_giaGoc'               => $i,
                'sp_giaBan'               => $i,
                'sp_hinh'                 => "hoa-$i.jpg",
                'sp_thongTin'             => "sp_thong $i",
                'sp_danhGia'              => "sp_danhGia $i",
                'sp_taoMoi'               => $today->format('Y-m-d H:i:s'),
                'sp_capNhat'              => $today->format('Y-m-d H:i:s'),
                'sp_trangThai'            => $i,
                'l_ma'                    => rand(1, 9)
            ]);
        }
        DB::table('cusc_sanpham')->insert($list);
    }
}
