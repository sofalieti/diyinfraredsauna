<?php

namespace App\Admin\Controllers;

use App\Project;
use Encore\Admin\Controllers\AdminController;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Show;

class ProjectController extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = 'Projects';

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new Project());

        $grid->column('id', __('Id'));
        $grid->column('name', __('Name'));
        $grid->column('position', __('Position'));
        $grid->column('image', __('Image'));
        $grid->column('created_at', __('Created at'));

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
        $show = new Show(Project::findOrFail($id));

        $show->field('id', __('Id'));
        $show->field('name', __('Name'));
        $show->field('slug', __('Slug'));
        $show->field('description', __('Description'));
        $show->field('position', __('Position'));
        $show->field('image', __('Image'));
        $show->field('page_title', __('Page title'));
        $show->field('meta_description', __('Meta description'));
        $show->field('meta_keywords', __('Meta keywords'));
        $show->field('created_at', __('Created at'));
        $show->field('updated_at', __('Updated at'));

        return $show;
    }

    /**
     * Make a form builder.
     *
     * @return Form
     */
    protected function form()
    {
        $form = new Form(new Project());

        $form->tab('General', function($form){
            $form->text('name', __('Name'))->rules('required')->required();
            $form->text('slug', __('Slug'))->help('If empty, generated from name');
            $form->redactor('description', __('Description'))->rules('required')->required();
            $form->number('position', __('Position'))->default(100);
            $form->image('image', __('Main Image'))
                ->thumbnail([
                    'small' => [400, null],
                    'medium' => [800, null],
                    'big' => [2000, null]
                ])
                ->rules('required')
                ->required()
                ->removable()
                ->uniqueName();
        })->tab('SEO', function($form){            
            $form->text('page_title', __('Page title'));
            $form->text('meta_description', __('Meta description'));
            $form->text('meta_keywords', __('Meta keywords'));
        })->tab('Images', function($form){
            $form->hasMany('project_images', function (Form\NestedForm $form) {
                $form->text('name');
                $form->number('position')->default(100);
                $form->image('image', __('Image'))
                    ->thumbnail([
                        'small' => [400, null],
                        'medium' => [800, null]
                    ])
                    ->required()
                    ->removable()
                    ->uniqueName();
            });

        });
        
        

        return $form;
    }
}
