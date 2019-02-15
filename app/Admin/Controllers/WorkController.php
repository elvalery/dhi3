<?php

namespace App\Admin\Controllers;

use App\Work;
use App\Http\Controllers\Controller;
use Encore\Admin\Controllers\HasResourceActions;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Layout\Content;
use Encore\Admin\Show;

use Illuminate\Support\Facades\Storage;

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

    $grid->id('Id')->sortable();;
    $grid->name(trans('Название'))->sortable();;
    $grid->description(trans('Описание'))->sortable();;
    $grid->order_id(trans('Порядок'))->sortable();;

    $grid->paginate(20);

    $grid->filter(function($filter){
      $filter->disableIdFilter();
      $filter->like('name', trans('Название'));
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
    $show = new Show(Work::findOrFail($id));

    $show->id('Id');
    $show->order_id(trans('Порядок'));
    $show->name(trans('Название'));
    $show->short_name(trans('Краткое название'));
    $show->description(trans('Описание'));
    $show->categories(trans('Категория'))
      ->as(function ($categories) {
        return $categories->pluck('name');
      })->label();
    $show->cover(trans('Маленькая картинка'))->image();
    $show->small_image(trans('Картинка для ссылок'))->image();
    $show->photos(trans('Большая картинка'))->as(function ($photos) {
      $retVal = '';
      foreach ($photos as $image) {
        if (url()->isValidUrl($image->link)) {
          $src = $image->link;
        } else {
          $src = Storage::disk(config('admin.upload.disk'))->url($image->link);
        }

        $retVal .= "<img src='$src' style='max-width:200px;max-height:200px;margin-right:10px ' class='img' />";
      }
      return $retVal;
    });

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

    $form->number('order_id', trans('Порядок'))->rules('required|integer|max:32767');

    $form
      ->multipleSelect('categories', trans('Категория'))
      ->options(\App\Category::all()->pluck('name', 'id'))
      ->rules('required');

    $form
      ->multipleSelect('services', trans('Service'))
      ->options(\App\DHIService::all()->pluck('title', 'id'));

    $form
      ->multipleSelect('workers', trans('Team'))
      ->options(\App\Worker::all()->pluck('name', 'id'));

    $form->text('name', trans('Название'))->rules('required|max:250');
    $form->text('short_name', trans('Краткое название'))->rules('required|max:250');
    $form->editor('description', trans('Описание'))->default(null);
    $form->image('cover', trans('Маленькая картинка'))
      ->rules('required')
      ->uniqueName();

    $form->image('small_image', trans('Картинка для ссылок'))
      ->uniqueName();

    $form->hasMany('photos', function (Form\NestedForm $form) {
      $form->number('order_id');
      $form->image('link')
        ->uniqueName()
        ->removable();
    });


    return $form;
  }
}
