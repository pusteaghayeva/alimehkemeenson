<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use TCG\Voyager\Traits\Translatable;

class Legalact extends Model
{
    use HasFactory, Translatable;
    protected $translatable = [ 'title', 'slug'];
    public static function findBySlug($slug){
        return static::withTranslations(Session::get('locale'))->first();
    }
}