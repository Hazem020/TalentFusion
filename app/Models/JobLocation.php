<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class JobLocation extends Model
{
    use HasFactory;

    protected $fillable = [
        'City',
        'State',
        'Country',
    ];

    public function jobs()
    {
        return $this->hasMany(Job::class);
    }
}
