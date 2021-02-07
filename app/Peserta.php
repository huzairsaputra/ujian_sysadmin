<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Peserta extends Model
{
    public $timestamps = false;

    protected $fillable = ['nama'];
}
