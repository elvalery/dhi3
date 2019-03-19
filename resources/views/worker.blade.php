@if ($worker->works)
  <div class="worker__portfolio">
    @foreach($worker->works as $work)
      @if($work->small_image)
        <a href="/#works-{{ $work->id }}" class="worker__portfolio_item worker__portfolio_1" style="background-image: url({{ asset('storage/' . $work->small_image )}})">
          <p>{{ $work->name }}</p>
        </a>
      @endif
    @endforeach
  </div>
@endif
