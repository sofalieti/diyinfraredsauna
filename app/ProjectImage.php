<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProjectImage extends Model
{
    use \Encore\Admin\Traits\Resizable;
    
    public $timestamps = false;
    
    protected $fillable = ['name', 'position', 'image'];
}
