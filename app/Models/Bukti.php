<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Bukti extends Model
{
    use HasFactory;
    protected $table = 'pemesanans';
    protected $fillable = ['nama_pemesan', 'email', 'no_hp', 'nama_tamu', 'tipe_kamar', 'jumlah_kamar', 'tgl_checkin', 'tgl_checkout'];
}
