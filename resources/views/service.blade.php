<div class="service__avatar service__avatar_{{ $service->id }}">
  <div class="service__floating_text">
    <h3 class="block_title open__semibold text_size__md text-center c__white w-100">{{ $service->title }}</h3>
  </div>
</div>
<div class="service__content">
  {!!  $content !!}
  @if($service->works)
  <div class="service__portfolio">
    @foreach($service->works as $work)
      <a href="#" class="service__portfolio_item service__portfolio_1" style="background-image: url({{ $work->small_image }})">
      <p>{{ $work->short_name }}</p>
    </a>
    @endforeach
  </div>
  @endif
  <div class="service__back_button open__bold c__black text_size__md border brc__metal brc_h__black px-3 py-1">Back</div>
</div>