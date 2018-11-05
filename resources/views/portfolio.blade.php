<div class="container portfolio__lg">
  <div class="col-12 pb-0 pb-lg-5 wow fadeInUp">
    <h1 class="montserrat__bold title_size__xl text-center">@lang('Работы мирового уровня')</h1>
  </div>
  <div class="wall-tabs col-12 wow fadeInUp">
    <ul class="tabs_buttons d-flex flex-column flex-sm-row justify-content-between px-0" style="list-style-type: none;">
      @if ($works->count())
      <li class="button portfolio__tab_button border-0 open__semibold text_size__md c__black bgc_h__yellow px-2 px-md-3 px-lg-5 py-2 my-2 my-sm-0 bgc__active">
        <span>All</span>
      </li>
      @endif
      @foreach($categories as $category) @continue(!$category->works->count())
        <li class="button portfolio__tab_button border-0 open__semibold text_size__md c__black bgc_h__yellow px-2 px-md-3 px-lg-5 py-2 my-2 my-sm-0">
          <span>{{ $category->name }}</span>
        </li>
      @endforeach
    </ul>
  
    @if ($works->count())
    <div class="portfolio__slick_outer wall wall_tab wall_tab__active">
      <div class="portfolio__slide_container"><div class="portfolio__slide_wrapper">
          @foreach($works as $work)
            @if($loop->iteration % 6 == 0)</div></div><div class="portfolio__slide_container"><div class="portfolio__slide_wrapper">@endif
          <div class="portfolio__item" style="background-image: url({{ asset('storage/' . $work->cover) }});">
            <div class="portfolio__item_inner">
              <h3 class="block_title open__semibold text_size__md text-center c__white w-100">{{ $work->name }}</h3>
              <button type="button" class="modal__open_button button border-0 open__semibold text_size__md c__black bgc__yellow bgc_h__yellow mt-lg-3 px-3 px-lg-5 py-2" data-id="{{ $work->id }}">@lang('Подробнее')</button>
            </div>
          </div>
          @endforeach
      </div></div>
    </div>
    @endif
    
    @foreach($categories as $category) @continue(!$category->works->count())
    <div class="portfolio__slick_outer wall wall_tab">
      <div class="portfolio__slide_container"><div class="portfolio__slide_wrapper">
          @foreach($category->works as $work)
            @if($loop->iteration % 6 == 0)
        </div></div><div class="portfolio__slide_container"><div class="portfolio__slide_wrapper">
          @endif
          <div class="portfolio__item" style="background-image: url({{ asset('storage/' . $work->cover) }});">
            <div class="portfolio__item_inner">
              <h3 class="block_title open__semibold text_size__md text-center c__white w-100">{{ $work->name }}</h3>
              <button type="button" class="modal__open_button button border-0 open__semibold text_size__md c__black bgc__yellow bgc_h__yellow mt-lg-3 px-3 px-lg-5 py-2" data-id="{{ $work->id }}">@lang('Подробнее')</button>
            </div>
          </div>
          @endforeach
        </div></div>
    </div>
    @endforeach
  </div>
</div>

<div class="container portfolio__mobile">
  <div class="col-12 pb-0 pb-lg-5 wow fadeInUp">
    <h1 class="montserrat__bold title_size__xl text-center">@lang('Работы мирового уровня')</h1>
  </div>
  <div class="wall-tabs col-12 wow fadeInUp">
    <ul class="tabs_buttons d-flex flex-column flex-sm-row justify-content-between px-0" style="list-style-type: none;">@php($first = true)
      @foreach($categories as $category) @continue(!$category->works->count())
        <li class="button portfolio__tab_button border-0 open__semibold text_size__md c__black bgc_h__yellow px-2 px-md-3 px-lg-5 py-2 my-2 my-sm-0
                        @if ($first)bgc__active @php($first = false)@endif"><span>{{ $category->name }}</span></li>
      @endforeach
    </ul>@php($first = true)
    @foreach($categories as $category) @continue(!$category->works->count())
    <div class="portfolio__slick_outer wall wall_tab @if ($first)wall_tab__active @php($first = false)@endif">
      @foreach($category->works as $work)
      <div class="portfolio__slide_container">
        <div class="portfolio__slide_wrapper">
          <div class="portfolio__item" style="background-image: url({{ asset('storage/' . $work->cover) }});">
            <div class="portfolio__item_inner">
              <h3 class="block_title open__semibold text_size__md text-center c__white w-100">{{ $work->name }}</h3>
              <button type="button" class="modal__open_button button border-0 open__semibold text_size__md c__black bgc__yellow bgc_h__yellow mt-lg-3 px-3 px-lg-5 py-2" data-id="{{ $work->id }}">@lang('Подробнее')</button>
            </div>
          </div>
        </div>
      </div>
      @endforeach
    </div>
  @endforeach
  </div>
</div>