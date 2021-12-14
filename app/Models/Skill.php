<?php

namespace App\Models;

use App\Enums\SkillLevel;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Skill extends Model
{
    use HasFactory;

    protected $casts = [
        'level' => SkillLevel::class,
    ];

    protected $fillable = [
        'name',
        'level',
    ];

}
