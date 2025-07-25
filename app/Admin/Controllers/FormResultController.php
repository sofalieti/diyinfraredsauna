<?php

namespace App\Admin\Controllers;

use App\FormResult;
use App\Http\Controllers\Controller;
use Encore\Admin\Controllers\HasResourceActions;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Layout\Content;
use Encore\Admin\Show;

use Encore\Admin\Auth\Permission;

use Admin;

class FormResultController extends Controller
{
    use HasResourceActions;

    /**
     * Index interface.
     *
     * @param Content $content
     * @return Content
     */
    public function index(Content $content)
    {
        return $content
            ->header('Index')
            ->description('description')
            ->body($this->grid());
    }

    /**
     * Show interface.
     *
     * @param mixed $id
     * @param Content $content
     * @return Content
     */
    public function show($id, Content $content)
    {
        return $content
            ->header('Detail')
            ->description('description')
            ->body($this->detail($id));
    }

    /**
     * Edit interface.
     *
     * @param mixed $id
     * @param Content $content
     * @return Content
     */
    public function edit($id, Content $content)
    {
        return $content
            ->header('Edit')
            ->description('description')
            ->body($this->form()->edit($id));
    }

    /**
     * Create interface.
     *
     * @param Content $content
     * @return Content
     */
    public function create(Content $content)
    {
        return $content
            ->header('Create')
            ->description('description')
            ->body($this->form());
    }

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        
        $grid = new Grid(new FormResult);
        $grid->model()->orderBy('id', 'desc');
        $grid->id('#');
        $grid->form_name('Form');
        $grid->data('Data')->display(function($data) {
            $data = collect(json_decode($data, true))->map(function($data){
                return $data['name']." - ".$data['value'];
            })->toArray();
            return join(', ', $data);
        });
        $grid->created_at('Date')->display(function($created_at){
            return date('d.m.Y H:i', strtotime($created_at));
        });
        
        $grid->link('Link')->display(function($link){
            return "<a href='$link' target='_blank'>$link</a>";
        });
        
        $grid->actions(function ($actions) {
            $actions->disableEdit();
        });

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
        $show = new Show(FormResult::findOrFail($id));

        $show->id('#');
        $show->form_name('Form');
        $show->data('Data')->as(function($data) {
            $data = collect(json_decode($data, true))->map(function($data){
                return $data['name']." - ".$data['value'];
            })->toArray();
            return join(", ", $data);
        });
        $show->created_at('Created at')->as(function($created_at){
            return date('d.m.Y H:i', strtotime($created_at));
        });
        $show->link('Link');
        
        
        $show->panel()->tools(function ($tools) {
            $tools->disableEdit();
        });

        return $show;
    }

    /**
     * Make a form builder.
     *
     * @return Form
     */
    protected function form()
    {
        $form = new Form(new FormResult);

        $form->number('custom_form_id', 'Custom form id');
        $form->text('form_name', 'Form name');
        $form->text('data', 'Data');

        return $form;
    }
}
