<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Harilibur extends Model
{
    use HasFactory;
    
    protected $table = 'harilibur';
    protected $primaryKey = 'id';
    public $timestamps = false;

    // Tambahkan atribut fillable sesuai dengan kolom yang dapat diisi oleh form.
    protected $fillable = ['tanggal', 'keterangan'];
}
