<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Apparats extends Model
{

    use HasFactory;
    protected $fillable=['title', 'slug', 'link', 'member','position', 'college', 'status'];

//    protected $translatable = ['title','member','position'];

    public static function findBySlug($slug)
    {
        return static::withTranslations(Session::get('locale'))->first();
    }
}
