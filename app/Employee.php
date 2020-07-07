<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    protected $fillable = [
        'nik', 'nama', 'tempatlhr', 'tgllhr', 'alamat', 'nohp', 'rekening', 'npwp'
    ];
}
