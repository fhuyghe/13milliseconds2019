<article>

  <header class="{{$color}}">
    <div class="wrap">
      <h1 class="entry-title">{{ get_the_title() }}</h1>
      @php the_content() @endphp
    </div>
  </header>

  <div class="entry-content">
    @if ($media)
      @foreach ($media as $block)
        @if ($block['acf_fc_layout'] == 'image')
          @include('partials.media-image')
        @elseif ($block['acf_fc_layout'] == 'video')
          @include('partials.media-video')
        @elseif ($block['acf_fc_layout'] == 'embed')
          @include('partials.media-embed')
        @endif
      @endforeach
    @endif
  </div>

  
  <footer id="postNav" class="row">

      @php 
        $next_post = get_next_post(); 
        $prev_post = get_previous_post();
      @endphp

    @if (!empty( $next_post ))
      <div class="prev col-md-6 {{ the_field('color', $next_post->ID) }}">
        <a href="<?php echo esc_url( get_permalink( $next_post->ID ) ); ?>"><?php echo esc_attr( $next_post->post_title ); ?></a>
      </div>
    @endif

    @if (!empty( $prev_post ))
      <div class="next col-md-6 {{ the_field('color', $prev_post->ID) }}">
        <a href="<?php echo esc_url( get_permalink( $prev_post->ID ) ); ?>"><?php echo esc_attr( $prev_post->post_title ); ?></a>
      </div>
    @endif

  </footer>
</article>
