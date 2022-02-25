<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pemesanan extends Model
{
    use HasFactory;
    protected $table = 'pemesanan';
    protected $fillable = ['nama_pemesan', 'email', 'np_hp', 'nama_tamu', 'tipe_kamar'];
}
