<div class="media-block websiteSpread">
  <div class="top">
    <img src="@asset('images/browserTop.png')" />
    @if($block['header'])
      <img class="header" src="{{ $block['header'] }}">
    @endif
  </div>
  <div class="content">
      <img src="{{$block['image']}}">
  </div>
</div>