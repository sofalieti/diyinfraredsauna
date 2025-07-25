<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Review extends Model
{
    
    public static $types = [
        'default' => 'Default',
        'trustpilot' => 'Trustpilot',
        'yelp' => 'Yelp',
        'yellow-pages' => 'Yellow Pages'
    ];
    
    public static $type_images = [
        'trustpilot' => '/images/trustpilot.png',
        'yelp' => '/images/yelp.png',
        'yellow_pages' => '/images/yellow_pages.png'
    ];
    
    public $timestamps = false;
    
    public function getImageSrcAttribute(){
        if(is_null($this->image) || empty($this->image))
            return '/uploads/empty.png';
        else
            return '/uploads/'.$this->image;
    }
    
    public function getTypeImageSrcAttribute(){
        return self::$type_images[$this->type];
    }
    public function getTypeNameAttribute(){
        return self::$types[$this->type];
    }
}
