<?php

namespace App\Admin\Controllers;

use App\Page;
use Encore\Admin\Controllers\AdminController;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Show;

class PageController extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = 'Page';

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new Page());

        $grid->column('id', __('Id'));
        $grid->column('name', __('Name'));
        $grid->column('active', __('Active'))->bool()->style('text-align: center;');
        $grid->column('is_home', __('Is home'))->bool()->style('text-align: center;');

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
        $show = new Show(Page::findOrFail($id));

        $show->field('id', __('Id'));
        $show->field('name', __('Name'));
        $show->field('description', __('Description'));
        $show->field('meta_title', __('Meta title'));
        $show->field('meta_keywords', __('Meta keywords'));
        $show->field('meta_description', __('Meta description'));
        $show->field('active', __('Active'));
        $show->field('is_home', __('Is home'));
        $show->field('hide_breadcrumbs', __('Hide breadcrumbs'));
        $show->field('add_container_class', __('Add container class'));

        return $show;
    }

    /**
     * Make a form builder.
     *
     * @return Form
     */
    protected function form()
    {
        $form = new Form(new Page());

        $form->text('name', __('Name'))->required();
        $form->text('seo.slug', __('Slug'));
        $form->textarea('description', __('Description'))
            ->help('[reviews-all] [reviews-trustpilot] [reviews-yelp] [diy-calculator]'
                    . ' [reviews-yellow-pages] [main_projects] <br/>[template NAME] - file name from path /resources/views/blocks/html/NAME.blade.php');
        $form->text('meta_title', __('Meta title'));
        $form->text('meta_keywords', __('Meta keywords'));
        $form->text('meta_description', __('Meta description'));
        $form->switch('active', __('Active'))->default(1);
        $form->switch('is_home', __('Home Page'))->default(0);
        $form->switch('hide_h1', __('Hide H1'))->default(false);
        $form->switch('hide_breadcrumbs', __('Hide breadcrumbs'))->default(false);
        $form->switch('add_container_class', __('Add container class'))->default(true);
        $form->text('page_color', __('Page color'))->help('#XXXXXX');
        
        
        return $form;
    }
}
