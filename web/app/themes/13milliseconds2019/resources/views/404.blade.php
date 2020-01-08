@extends('layouts.app')

@section('content')
  <div class="container">
  @if (!have_posts())
    <img class="gif-404" src="@asset('images/travolta-lost.gif')" />
    <h1>Error 404</h1>
    <p>
      {{ __('Sorry, but the page you were trying to view does not exist.', 'sage') }}
    </p>
      <a class="btn" href="/">Back to work</a>
  @endif
  </div>
@endsection
