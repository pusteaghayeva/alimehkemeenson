<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use TCG\Voyager\Traits\Translatable;

class News extends Model
{
//    use HasFactory;
//    protected $fillable=['image', 'title', 'content', 'slug', 'read_more'];

    use HasFactory, Translatable;
    protected $fillable=['image','slug'];

    protected $translatable = ['title', 'content', 'read_more'];

    public static function findBySlug($slug)
    {
        return static::withTranslations(Session::get('locale'))->first();
    }
}