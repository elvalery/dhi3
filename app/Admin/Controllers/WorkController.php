<?php

namespace App\Admin\Controllers;

use App\Work;
use App\Http\Controllers\Controller;
use Encore\Admin\Controllers\HasResourceActions;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Layout\Content;
use Encore\Admin\Show;

class WorkController extends Controller {
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
      ->header(trans('Портфолио'))
      ->description(trans('список'))
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
      ->header(trans('Портфолио'))
      ->description(trans('просмотр'))
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
      ->header(trans('Портфолио'))
      ->description(trans('редактирование'))
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
      ->header(trans('Портфолио'))
      ->description(trans('создание'))
      ->body($this->form());
  }

  /**
   * Make a grid builder.
   *
   * @return Grid
   */
  protected function grid()
  {
    $grid = new Grid(new Work);

    $grid->id('Id');
    $grid->name(trans('Название'));
    $grid->description(trans('Описание'));
    $grid->order_id(trans('Порядок'));
    $grid->created_at(trans('Создано'));
    $grid->updated_at(trans('Обновлено'));

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
    $show = new Show(Work::findOrFail($id));

    $show->id('Id');
    $show->name(trans('Название'));
    $show->description(trans('Описание'));
    $show->cover(trans('Маленькая картинка'))->image();
    $show->image(trans('Большая картинка'))->image();
    $show->order_id(trans('Порядок'));
    $show->created_at(trans('Создано'));
    $show->updated_at(trans('Обновлено'));

    return $show;
  }

  /**
   * Make a form builder.
   *
   * @return Form
   */
  protected function form()
  {
    $form = new Form(new Work);

    $form->text('name', trans('Название'));
    $form->number('order_id', trans('Порядок'));
    $form->editor('description', trans('Описание'))->default(null);
    $form->image('cover', trans('Маленькая картинка'));
    $form->image('image', trans('Большая картинка'));

    return $form;
  }
}
