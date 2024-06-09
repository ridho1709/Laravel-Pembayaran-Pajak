<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class transaction extends Model
{
    use HasFactory;
    protected $table = 'transactions';
    protected $primaryKey = 'id';
    public $incrementing = true;
    protected $fillable = [
        'npwp',
        'nama',
        'jenis_usaha',
        'jenis_pajak',
        'alamat',
        'no_tlpn',
        'tanggal',
        'total'
    ];
    public $timestamps = false;
}
