<div class="modal__slick" id="modal_page_content_slick">
  @foreach($work->photos as $photo)
    <div class="modal__slick_item">
      <div style="background-image: url({{ asset('storage/' . $photo->link) }});" ></div>
    </div>
  @endforeach
</div>
<div class="modal__slick_text">{!! $work->description !!} </div>

