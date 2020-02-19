<div class="media-block videotext">
  <div class="row">
    <div class="col-md-6">
  <video poster="{{$block['poster']}}" muted autoplay loop playsinline>
    <source src="{{$block['mp4']}}" type="video/mp4" />
    <source src="{{$block['ogv']}}" type="video/ogv" />
    <source src="{{$block['webm']}}" type="video/webm" />
  </video>
    </div>
    <div class="col-md-6 text">
    {!! $block['text'] !!}
    </div>
  </div>
</div>