<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use TCG\Voyager\Traits\Translatable;


class Exampledocument extends Model
{
//    use HasFactory;
//    protected $fillable = ['title', 'link'];
    use HasFactory, Translatable;
    protected $translatable = ['title'];
    public static function findBySlug($slug)
    {
        return static::withTranslations(Session::get('locale'))->first();
    }
}
