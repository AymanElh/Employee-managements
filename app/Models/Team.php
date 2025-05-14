<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Testing\Fluent\Concerns\Has;

class Team extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'slug'
    ];

    // Define a one-to-many relationship with the Employee model
    public function employees(): HasMany
    {
        return $this->hasMany(Employee::class);
    }

    // Define a many-to-many relationship with the User model
    public function members(): BelongsToMany
    {
        return $this->belongsToMany(User::class);
    }

    public function departments(): HasMany
    {
        return $this->hasMany(Department::class);
    }
}
