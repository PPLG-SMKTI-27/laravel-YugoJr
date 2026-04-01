<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PortofolioProfile extends Model
{
    protected $table = 'portofolio_profiles';

    protected $fillable = [
        'nama',
        'profesi',
        'tentang',
        'email',
        'skills'

    ];
}
