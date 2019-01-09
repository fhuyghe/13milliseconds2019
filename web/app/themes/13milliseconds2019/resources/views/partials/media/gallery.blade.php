<div class="media-block gallery">
  @if ($block['images'])
    @foreach ($block['images'] as $image)
    <div class="image">
      <img src="{{$image['url']}}" />
    </div>
    @endforeach
  @endif
</div>