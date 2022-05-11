<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use TCG\Voyager\Traits\Translatable;


class Applyonline extends Model
{
//    use HasFactory;
//    protected $fillable = ['title', 'slug', 'content', 'button'];
    use HasFactory, Translatable;
    protected $translatable = [ 'title', 'slug', 'content', 'button'];
    public static function findBySlug($slug){
        return static::withTranslations(Session::get('locale'))->first();
    }
}
