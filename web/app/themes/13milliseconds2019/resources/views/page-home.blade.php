@extends('layouts.app')

@section('content')
  <section id="top">
    <div class="wrap">
      @while(have_posts()) @php the_post() @endphp
        @php the_content() @endphp
      @endwhile
    </div>
  </section>


  @if($portfolio)
    <section id="portfolio">
      <div class="wrap">
      <div class="grid">
      <div class="grid-sizer"></div>
        @foreach($portfolio as $project)
          @include('partials.portfolio-item')
        @endforeach
      </div>
      </div>
    </section>
  @endif
  
@endsection
