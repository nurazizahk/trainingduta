<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CrudModel extends Model
{
    protected $fillable = [
        'nama', 'kelas'
    ];
}
