<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
    use HasFactory;

    protected $fillable = [
        'CompanyName',
        'Website',
        'Description',
        'user_id',
    ];

    public function jobs()
    {
        return $this->hasMany(Job::class, 'CompanyID');
    }
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
