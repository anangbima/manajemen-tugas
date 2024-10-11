<?php

namespace App\Models;

use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    use HasFactory, Sluggable;

    protected $fillable = [
        'name', 
        'slug', 
        'description', 
    ];

    // Manage slug projects
    public function sluggable(): array
    {
        return [
            'slug'  => [
                'source'    => 'name',
                'onUpdate'  => true
            ]
        ];
    }

    // Relasi dengan tabel task
    public function task () {
        return $this->hasMany(Task::class);
    }

    // Relasi dengan tabel member
    public function member () {
        return $this->hasMany(Member::class);
    }
}
