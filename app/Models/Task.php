<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'description',
        'status',
    ];

    public static function getAllTasks()
    {
        return static::select('id', 'name', 'description', 'status', 'created_at')->orderBy('id', 'DESC')->get();
    }
}
