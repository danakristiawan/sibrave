<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Activity extends Model
{
    protected $fillable = [
        'nama', 'tglmulai', 'tglselesai', 'mak', 'petugas', 'target'
    ];
}
