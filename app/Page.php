<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Page extends Model {

    public $timestamps = false;

    public function seo() {
        return $this->morphOne(Seo::class, 'seoable');
    }

    public static function boot() {
        parent::boot();
        
        static::created(function ($page) {
            $page->seo()->create();
        });
        
        static::deleting(function ($page) {
            $page->seo()->delete();
        });
    }
    
    public function menu(){
        return $this->hasOne(Menu::class);
    }

}
