<?php

namespace App;

use Encore\Admin\Traits\AdminBuilder;
use Encore\Admin\Traits\ModelTree;
use Illuminate\Database\Eloquent\Model;

class Menu extends Model {

    use ModelTree, AdminBuilder;

    protected $table = 'menus';
    public $timestamps = false;

    public function __construct(array $attributes = []) {
        parent::__construct($attributes);

        $this->setParentColumn('parent_id');
        $this->setOrderColumn('position');
        $this->setTitleColumn('name');
    }
    
    public function menu_tree_for_options($parent_id = 0, $i = 0, $exclude_id = 0){
        static $data = [0 => '---'];
        $menus = self::whereParentId($parent_id)->get();
        
        if($menus){
            foreach($menus as $menu){
                if($exclude_id != $menu->id){
                    $data [$menu->id]= str_repeat('-', $i)." ".$menu->name;
                    $this->menu_tree_for_options($menu->id, $i+1, $exclude_id);
                }
            }
        }
        return $data;
    }
    
    public function page(){
        return $this->belongsTo(Page::class);
    }
    
    public function childs(){
        return $this->hasMany(self::class, 'parent_id')->whereActive(true)->orderBy('position');
    }
    
    
    public function getHrefAttribute(){
        if($this->page){
            if($this->page->is_home)
                return "/";
            else
                return route('pages.show', $this->page->seo->slug);
        }elseif(!empty($this->link)){
            return $this->link;
        }
        return "#";
    }

}
