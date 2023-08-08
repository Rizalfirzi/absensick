<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pegawai extends Model
{
    use HasFactory;
    protected $table = 't_pegawai';

    public function direktorat()
    {
        return $this->belongsTo(Direktorat::class, 'direktorat_id');
    }

    public function satker()
    {
        return $this->belongsTo(Satker::class, 'satker_id');
    }

    public function ppkSatker()
    {
        return $this->belongsTo(Satker::class, 'ppk_id');
    }

}
