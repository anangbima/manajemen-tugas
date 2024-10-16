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

    // Store data to table project
    public function store(array $data) {
        return $this->create([
            'name'          => $data['name'],
            'description'   => $data['description'],
        ]);
    }

    // Relasi dengan tabel task
    public function task () {
        return $this->hasMany(Task::class);
    }

    // Relasi dengan tabel member project
    public function member () {
        return $this->hasMany(MemberProject::class);
    }
}
