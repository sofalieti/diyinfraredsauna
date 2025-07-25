<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class FormResult extends Model
{
    protected $fillable = [
        'form_name', 'data', 'link'
    ];
    public function form(){
        return $this->belongsTo(CustomForm::class);
    }
}
