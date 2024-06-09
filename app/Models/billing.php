<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class billing extends Model
{
    use HasFactory;
    protected $table = 'billings';
    protected $primaryKey = 'id';
    public $incrementing = true;
    protected $fillable = [
        'nama',
        'tanggal',
        'jenis_pajak',
        'jenis_pembayaran',
        'no_tlpn',
        'total'
    ];
    public $timestamps = false;
}
