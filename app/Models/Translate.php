<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use TCG\Voyager\Traits\Translatable;


class Translate extends Model
{
//    use HasFactory;
//    protected $fillable = ['key', 'text', 'status'];

    use HasFactory, Translatable;
    protected $translatable = ['text'];
    public static function findBySlug($slug){
        return static::withTranslations(Session::get('locale'))->first();
    }
}
