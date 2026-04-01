<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class project extends Model
{
    protected $table = 'admins';

    protected $fillable = [
        'email',
        'password',
    ];

    protected $primaryKey = 'id';
    public $timestamps = true;
}
