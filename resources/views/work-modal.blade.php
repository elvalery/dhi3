@foreach($work->photos as $photo)
  <div class="modal__slick_item">
    <img src="{{ asset('storage/' . $photo->link) }}" alt="">
    <div class="modal__slick_text">{!! $work->description  !!} </div>
  </div>
@endforeach

