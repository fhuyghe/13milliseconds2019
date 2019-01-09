<div class="media-block image">
  <img src="{{$block['image']}}">
  @if($block['caption'])
    <div class="caption">
      {!!$block['caption']!!}
    </div>
  @endif
</div>