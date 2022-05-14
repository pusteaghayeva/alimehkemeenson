<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use TCG\Voyager\Traits\Translatable;


class Apparatus extends Model
{

    use HasFactory, Translatable;
    protected $fillable = ['title', 'slug', 'link', 'college', 'status'];
    protected $translatable = ['title', 'slug',  'college', 'link'];

    public static function findBySlug($slug)
    {
        return static::withTranslations(Session::get('locale'))->first();
    }
}
