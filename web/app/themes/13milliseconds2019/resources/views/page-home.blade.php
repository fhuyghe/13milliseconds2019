@extends('layouts.app')

@section('content')
  <section id="top">
  @while(have_posts()) @php the_post() @endphp
    @php the_content() @endphp
  @endwhile
  </section>


  @if($portfolio)
    <section id="portfolio" class="row no-gutters">
        @foreach($portfolio as $project)
          @include('partials.portfolio-item')
        @endforeach
    </section>
  @endif


  @include('partials.contact-footer')
  
@endsection
