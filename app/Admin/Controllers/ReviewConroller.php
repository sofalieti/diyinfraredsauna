<?php

namespace App\Admin\Controllers;

use App\Review;
use Encore\Admin\Controllers\AdminController;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Show;

class ReviewConroller extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = 'Review';

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new Review());

        $grid->column('id', __('Id'));
        $grid->column('image', __('Image'))->display(function ($image){
            if(is_null($image) || empty($image)){
                return "empty.png";
            }
            return $image;
        })->image(null, 80, 80);
        $grid->column('date', __('Date'));
        $grid->column('name', __('Name'));
        $grid->column('type', __('Type'))->display(function($value){
            return Review::$types[$value];
        });
        $grid->column('rating', __('Rating'))->style('text-align: center;');
        $grid->column('active', __('Active'))->bool()->style('text-align: center;');

        return $grid;
    }

    /**
     * Make a show builder.
     *
     * @param mixed $id
     * @return Show
     */
    protected function detail($id)
    {
        $show = new Show(Review::findOrFail($id));

        $show->field('id', __('Id'));
        $show->field('date', __('Date'));
        $show->field('name', __('Name'));
        $show->field('review', __('Review'));
        $show->field('rating', __('Rating'));
        $show->field('type', __('Type'));
        $show->field('image', __('Image'));
        $show->field('active', __('Active'));

        return $show;
    }

    /**
     * Make a form builder.
     *
     * @return Form
     */
    protected function form()
    {
        $form = new Form(new Review());

        $form->date('date', __('Date'))->default(date('Y-m-d'))->required();
        $form->text('name', __('Name'))->required();
        $form->select('type', __('Type'))->options(Review::$types)->default('default')->required();
        $form->text('link', __('Linl'))->required();
        $form->redactor('review', __('Review'))->required();
        $form->select('rating', __('Rating'))->options([1=> 1, 2 => 2, 3 => 3, 4 => 4, 5 => 5])->value(5)->required();
        $form->image('image', __('Image'));
        $form->switch('active', __('Active'))->default(true);

        return $form;
    }
}
