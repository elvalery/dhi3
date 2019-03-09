@foreach($work->photos as $photo)
  <div class="modal_item" data-src="{{ asset('storage/' . $photo->link) }}" ></div>
@endforeach
<div class="modal__slick_text">{!! $work->description !!}</div>

