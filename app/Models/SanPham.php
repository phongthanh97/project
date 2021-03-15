<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SanPham extends Model
{
    use HasFactory;
    const     CREATED_AT    = 'sp_taoMoi';
    const     UPDATED_AT    = 'sp_capNhat';

    protected $table        = 'cusc_sanpham';
    protected $fillable     = ['sp_ten', 'sp_giaGoc', 'sp_giaBan', 'sp_hinh', 'sp_thongTin', 'sp_danhGia', 'sp_taoMoi', 'sp_capNhat', 'sp_trangThai', 'l_ma'];
    protected $guarded      = ['sp_ma'];

    protected $primaryKey   = 'sp_ma';

    protected $dates        = ['sp_taoMoi', 'sp_capNhat'];
    protected $dateFormat   = 'Y-m-d H:i:s';
    public function loaisanpham()
{
    return $this->belongsTo('App\Models\Loai', 'l_ma', 'l_ma');
}
}
