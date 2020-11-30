<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;
use Astrotomic\Translatable\Translatable;
use Astrotomic\Translatable\Contracts\Translatable as TranslatableContract;

class Article extends Model implements TranslatableContract
{
	use Translatable;

    public $translatedAttributes = ['title', 'text'];

    protected $fillable = [
        'user_id','image','author','file'
    ];
    public function scopeTitle($query, $title){
	    return $query->whereTranslationLike('title', '%'.$title.'%');
	}

	protected $dates = ['created_at'];
}