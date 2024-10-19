<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    use HasFactory;

    // Specify the table associated with the model
    protected $table = 'tasks';

    // Define the fillable attributes
    protected $fillable = [
        'title',
        'description',
        'priority',
        'deadline',
        'status',
        'user_id', // Foreign key to the persons table
    ];
}