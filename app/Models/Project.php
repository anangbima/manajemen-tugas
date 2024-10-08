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
        'user_id'
    ];

    // Manage slug projects
    public function sluggable(): array
    {
        return [
            'slug'  => [
                'source'    => 'name'
            ]
        ];
    }

    // Relasi dengan tabel user
    public function user () {
        return $this->belongsTo(User::class);
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
