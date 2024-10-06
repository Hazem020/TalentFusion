<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Job extends Model
{
    use HasFactory;

    protected $fillable = [
        'CompanyID',
        'JobTitle',
        'JobDescription',
        'JobType',
        'CategoryID',
        'LocationID',
        'Salary',
    ];

    public function company()
    {
        return $this->belongsTo(Company::class, 'CompanyID');
    }

    public function category()
    {
        return $this->belongsTo(JobCategory::class);
    }

    public function location()
    {
        return $this->belongsTo(JobLocation::class, 'LocationID');
    }

    public function applications()
    {
        return $this->hasMany(Application::class);
    }

    public function savedByUsers()
    {
        return $this->belongsToMany(User::class, 'saved_jobs');
    }
}
