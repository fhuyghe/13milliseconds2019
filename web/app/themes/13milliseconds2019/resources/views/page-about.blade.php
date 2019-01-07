@extends('layouts.app')

@section('content')
  <section id="top">
    <div class="wrap">
      @while(have_posts()) @php the_post() @endphp
        @php the_content() @endphp
      @endwhile
    </div>
  </section>

  <section id="clients">
      <div class="wrap">
      {!! $clients !!}
    </div>
  </section>


  @include('partials.contact-footer')
  
@endsection
