<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Student extends Model
{
    use HasFactory;
    protected $table = 'student';
    protected $primaryKey = 'studentID';
    public $timestamps = false;
    protected $casts = [
        'studentID' => 'integer',
    ];
}
