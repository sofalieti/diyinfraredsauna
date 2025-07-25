<?php

namespace App\Admin\Controllers;

use App\Http\Controllers\Controller;
use App\Menu;
use App\Page;
use Encore\Admin\Form;
use Encore\Admin\Facades\Admin;
use Encore\Admin\Layout\Content;
use Encore\Admin\Controllers\ModelForm;
use Encore\Admin\Tree;

class MenuController extends Controller
{
    use ModelForm;
    
    public function index()
    {
        return Admin::content(function (Content $content) {
            $content->header('Menu');
            $content->body(Menu::tree());
        });
    }
    
    public function create(Content $content)
    {
        return $content
            ->header('Create')
            ->description('description')
            ->body($this->form());
    }
    
    public function edit($id, Content $content)
    {
        return $content
            ->header('Edit')
            ->description('description')
            ->body($this->form($id)->edit($id));
    }
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = 'Menu';

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new Menu());

        $grid->column('id', __('Id'));
        $grid->column('name', __('Name'));
        $grid->column('link', __('Link'));
        $grid->column('active', __('Active'));
        $grid->column('target_blank', __('Target blank'));
        $grid->column('position', __('Position'));
        $grid->column('page_id', __('Page id'));
        $grid->column('parent_id', __('Parent id'));

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
        $show = new Show(Menu::findOrFail($id));

        $show->field('id', __('Id'));
        $show->field('name', __('Name'));
        $show->field('link', __('Link'));
        $show->field('active', __('Active'));
        $show->field('target_blank', __('Target blank'));
        $show->field('position', __('Position'));
        $show->field('page_id', __('Page id'));
        $show->field('parent_id', __('Parent id'));

        return $show;
    }

    /**
     * Make a form builder.
     *
     * @return Form
     */
    protected function form($id = null)
    {
        $form = new Form(new Menu());

        $form->text('name', __('Name'))->required();
        $form->text('link', __('Link'));
        $form->switch('active', __('Active'))->default(1);
        $form->switch('target_blank', __('Target blank'));
        $form->number('position', __('Position'))->default(100);
        $form->select('page_id', __('Page id'))->options(Page::orderBy('name')->get()->pluck('name', 'id'));
        $form->select('parent_id', __('Parent id'))->options($form->model()->menu_tree_for_options(0, 0, $id))->default(0);

        return $form;
    }
}
