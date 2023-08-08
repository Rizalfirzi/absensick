<?php

namespace App\Models;

use App\Models\Pegawai;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Satker extends Model
{
    use HasFactory;

    protected $table = 'satker';

    public function pegawai()
    {
        return $this->hasMany(Pegawai::class, 'satker_id');
    }

    public function pegawaiPpk()
    {
        return $this->hasMany(Pegawai::class, 'ppk_id');
    }
}
