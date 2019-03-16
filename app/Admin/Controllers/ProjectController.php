<?php

namespace App\Admin\Controllers;

use App\Project;
use App\Http\Controllers\Controller;
use Encore\Admin\Controllers\HasResourceActions;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Layout\Content;
use Encore\Admin\Show;

class ProjectController extends Controller
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
            ->header('大创项目')
            ->description('发布大创项目')
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
        $grid = new Grid(new Project);

        $grid->id('Id');
        $grid->name('Name');
        $grid->creator('Creator');
        $grid->userid('Userid');
        $grid->desc('Desc');
        $grid->teamid('Teamid');
        $grid->git('Git');
        $grid->email('Email');
        $grid->website('Website');
        $grid->created_at('Created at');
        $grid->updated_at('Updated at');

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

        $show->id('Id');
        $show->name('Name');
        $show->creator('Creator');
        $show->userid('Userid');
        $show->desc('Desc');
        $show->teamid('Teamid');
        $show->git('Git');
        $show->email('Email');
        $show->website('Website');
        $show->created_at('Created at');
        $show->updated_at('Updated at');

        return $show;
    }

    /**
     * Make a form builder.
     *
     * @return Form
     */
    protected function form()
    {
        $form = new Form(new Project);

        $form->text('name', 'Name');
        $form->text('creator', 'Creator');
        $form->text('userid', 'Userid');
        $form->text('desc', 'Desc');
        $form->text('teamid', 'Teamid');
        $form->text('git', 'Git');
        $form->email('email', 'Email');
        $form->text('website', 'Website');

        return $form;
    }
}
