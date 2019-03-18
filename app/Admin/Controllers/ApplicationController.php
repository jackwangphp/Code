<?php

namespace App\Admin\Controllers;

use App\Application;
use App\Http\Controllers\Controller;
use Encore\Admin\Controllers\HasResourceActions;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Layout\Content;
use Encore\Admin\Show;

class ApplicationController extends Controller
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
            ->header('申请表')
            ->description('申请表详情')
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
        $grid = new Grid(new Application);

        $grid->id('预览')->display(function ($id){
            return '<a href="'.route('applications.show',['application'=>$id]).'">查看详情<a>';
        });
        $grid->type('Type');
        $grid->year('Year');
        $grid->name('Name');
        //$grid->leader_id('Leader id');
        $grid->leader('Leader');
        //$grid->grade('Grade');
        //$grid->major('Major');
        //$grid->college('College');
        //$grid->department('Department');
        $grid->leader_phone('Leader phone');
        $grid->leader_email('Leader email');
        $grid->outlay('Outlay');
        $grid->begin_time('Begin time');
        $grid->end_time('End time');
        $grid->team_id('Team id');
        $grid->team_info('Team info');
        //$grid->reason('Reason');
        //$grid->plan('Plan');
        //$grid->result('Result');
        //$grid->outlay_detail('Outlay detail');
        $grid->proposal_t('Proposal t');
        $grid->proposal_d('Proposal d');
        $grid->proposal_u('Proposal u');
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
        $show = new Show(Application::findOrFail($id));

        $show->id('Id');
        $show->type('Type');
        $show->year('Year');
        $show->name('Name');
        $show->leader_id('Leader id');
        $show->leader('Leader');
        $show->grade('Grade');
        $show->major('Major');
        $show->college('College');
        $show->department('Department');
        $show->leader_phone('Leader phone');
        $show->leader_email('Leader email');
        $show->outlay('Outlay');
        $show->begin_time('Begin time');
        $show->end_time('End time');
        $show->team_id('Team id');
        $show->team_info('Team info');
        $show->reason('Reason');
        $show->plan('Plan');
        $show->result('Result');
        $show->outlay_detail('Outlay detail');
        $show->proposal_t('Proposal t');
        $show->proposal_d('Proposal d');
        $show->proposal_u('Proposal u');
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
        $form = new Form(new Application);

        $form->text('type', 'Type');
        $form->text('year', 'Year')->default(date('Y'));
        $form->text('name', 'Name');
        $form->text('leader_id', 'Leader id');
        $form->text('leader', 'Leader');
        $form->text('grade', 'Grade');
        $form->text('major', 'Major');
        $form->text('college', 'College');
        $form->text('department', 'Department');
        $form->text('leader_phone', 'Leader phone');
        $form->text('leader_email', 'Leader email');
        $form->text('outlay', 'Outlay');
        $form->date('begin_time', 'Begin time')->default(date('Y-m-d'));
        $form->date('end_time', 'End time')->default(date('Y-m-d'));
        $form->text('team_id', 'Team id');
        $form->text('team_info', 'Team info')->default('{}');
        $form->textarea('reason', 'Reason');
        $form->textarea('plan', 'Plan');
        $form->textarea('result', 'Result');
        $form->textarea('outlay_detail', 'Outlay detail');
        $form->text('proposal_t', 'Proposal t')->default('');
        $form->text('proposal_d', 'Proposal d')->default('');
        $form->text('proposal_u', 'Proposal u')->default('');

        return $form;
    }
}
