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
    <section id="portfolio" class="row no-gutters">
        @foreach($portfolio as $project)
          @include('partials.portfolio-item')
        @endforeach
    </section>
  @endif
  
@endsection
