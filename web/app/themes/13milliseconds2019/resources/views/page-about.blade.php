@extends('layouts.app')

@section('content')
  <section id="top">
    <div class="wrap">
      @while(have_posts()) @php the_post() @endphp
        @php the_content() @endphp
      @endwhile
      <div class="photos">
        <img class="sharon" src="{{ $data['sharon_photo']['sizes']['large'] }}" />
        <img class="francois" src="{{ $data['francois_photo']['sizes']['large'] }}" />
      </div>
    </div>
  </section>

  <section id="clients">
        <h2>Select Clients</h2>
        @if($data['client_logos'])
          <div class="client-logos row">
          @foreach ($data['client_logos'] as $logo)
              <div class="client col-3 col-md-2">
              <img src="{{ $logo['url'] }}">
              </div>
          @endforeach
          </div>
        @endif
  </section>
  
@endsection
