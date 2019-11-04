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
      <div class="wrap">
      {!! $data['client_section'] !!}
    </div>
  </section>
  
@endsection
