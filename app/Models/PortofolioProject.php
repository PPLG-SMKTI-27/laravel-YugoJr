<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PortofolioProject extends Model
{
    protected $table = 'portofolio_projects';

    protected $fillable = [
        'title',
        'description'
    ];
}
