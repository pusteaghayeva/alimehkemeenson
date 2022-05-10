<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use TCG\Voyager\Traits\Translatable;


class Usefullink extends Model
{
    use HasFactory;
    protected $fillable = ['image', 'link', 'status'];
}
