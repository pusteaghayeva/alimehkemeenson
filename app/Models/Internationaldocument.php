<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Internationaldocument extends Model
{
    use HasFactory;
    protected $fillable= ['title', 'pdf'];
}
