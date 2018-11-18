<?php

namespace App\Admin\Controllers;

use App\Team;
use App\Http\Controllers\Controller;
use Encore\Admin\Controllers\HasResourceActions;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Layout\Content;
use Encore\Admin\Show;

class TeamController extends Controller
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
        $grid = new Grid(new Team);

        $grid->id('Id');
        $grid->teamid('Teamid');
        $grid->projectid('Projectid');
        $grid->year('Year');
        $grid->userid('Userid');
        $grid->name('Name');
        $grid->email('Email');
        $grid->inteam('Inteam');
        $grid->info('Info');
        $grid->type('Type');
        $grid->cellphone('Cellphone');
        $grid->is_active('Is active');
        $grid->token('Token');
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
        $show = new Show(Team::findOrFail($id));

        $show->id('Id');
        $show->teamid('Teamid');
        $show->projectid('Projectid');
        $show->year('Year');
        $show->userid('Userid');
        $show->name('Name');
        $show->email('Email');
        $show->inteam('Inteam');
        $show->info('Info');
        $show->type('Type');
        $show->cellphone('Cellphone');
        $show->is_active('Is active');
        $show->token('Token');
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
        $form = new Form(new Team);

        $form->text('teamid', 'Teamid');
        $form->text('projectid', 'Projectid');
        $form->date('year', 'Year')->default(date('Y-m-d'));
        $form->text('userid', 'Userid');
        $form->text('name', 'Name');
        $form->email('email', 'Email');
        $form->text('inteam', 'Inteam');
        $form->text('info', 'Info');
        $form->text('type', 'Type');
        $form->text('cellphone', 'Cellphone');
        $form->text('is_active', 'Is active');
        $form->text('token', 'Token');

        return $form;
    }
}
