<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RiwayatLaboratorium extends Model
{
    use HasFactory;

    protected $table = 'riwayat_laboratorium';

    protected $fillable = [
        'id_riwayat',
        // 'id_laboratorium',
        'volume',
        'jumlah',
        'waktu',
        'prioritas',
        'diagnosis',
        'permintaan',
        'metode',
        'sumber',
        'lokasi',
        'cara',
        'kondisi',
        'tanggal_pengambilan',
        'tanggal_fiksasi',
        'cairan',
        'interpretasi',
    ];
}