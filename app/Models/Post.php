<?php

namespace App\Models;

use Astrotomic\Translatable\Contracts\Translatable as TranslatableContract;
use Astrotomic\Translatable\Translatable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model implements TranslatableContract
{
    use Translatable,HasFactory;

    public $translatedAttributes = ['title', 'content'];
    protected $fillable = ['author'];

    public function emp(){
        return $this->hasOne('App\Models\Employees','id','employees_id');
    }


    public function trans(){
        return $this
            ->hasOne('App\Models\PostTranslation','post_id','id')
            //->where()
            ;
    }


}
