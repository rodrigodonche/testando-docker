<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Soma extends Model
{
    protected $fillable = [
        'numero1',
        'numero1',
        'soma'
    ];

    protected $guarded = [
        'id',
        'created_at',
        'update_at'
    ];

    protected $table = 'somas';
}
