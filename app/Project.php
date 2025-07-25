<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\Sluggable;

class Project extends Model
{
    use Sluggable;
    use \Encore\Admin\Traits\Resizable;
    
    public function sluggable() {
        return [
            'slug' => [
                'source' => 'name'
            ]
        ];
    }
    
    public function project_images(){
        return $this->hasMany(ProjectImage::class)->orderBy('position', 'asc');
    }
}
