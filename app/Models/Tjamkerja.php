<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tjamkerja extends Model
{
    use HasFactory;

    protected $table = 't_jamkerja';

    protected $guarded = [];

    public $timestamps = false;

}
