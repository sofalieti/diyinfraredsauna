<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\Sluggable;

class Seo extends Model {

    use Sluggable;

    public $timestamps = false;

    public function seoable() {
        return $this->morphTo();
    }

    public function sluggable() {
        return [
            'slug' => [
                'source' => 'seoable.name'
            ]
        ];
    }

}
