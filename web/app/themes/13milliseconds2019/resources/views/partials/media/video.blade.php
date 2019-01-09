<div class="media-block video">
  <video poster="{{$block['poster']}}" muted autoplay loop>
    <source src="{{$block['mp4']}}" type="video/mp4" />
    <source src="{{$block['ogv']}}" type="video/ogv" />
    <source src="{{$block['webm']}}" type="video/webm" />
  </video>
  <p>{{$block['description']}}</p>
</div>