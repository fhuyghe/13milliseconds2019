<article>

  <header>
    <div class="wrap">
      <h1 class="entry-title">{{ get_the_title() }}
      @if($data['live_link'])
        <a href="{{ $data['live_link'] }}" target="_blank"><i class="far fa-external-link"></i> </a>
      @endif
      </h1>
      @php the_content() @endphp
    </div>
  </header>

  <div class="entry-content">
    @if ($media)
      @foreach ($media as $block)
        @if ($block['acf_fc_layout'] == 'image')
          @include('partials.media.image')
        @elseif ($block['acf_fc_layout'] == 'two_images')
          @include('partials.media.two-images')
        @elseif ($block['acf_fc_layout'] == 'gallery')
          @include('partials.media.gallery')
        @elseif ($block['acf_fc_layout'] == 'website_spread')
          @include('partials.media.websiteSpread')
        @elseif ($block['acf_fc_layout'] == 'video')
          @include('partials.media.video')
          @elseif ($block['acf_fc_layout'] == 'videotext')
          @include('partials.media.video-text')
        @elseif ($block['acf_fc_layout'] == 'embed')
          @include('partials.media.embed')
        @elseif ($block['acf_fc_layout'] == 'text')
          @include('partials.media.text')
        @elseif ($block['acf_fc_layout'] == 'quote')
          @include('partials.media.quote')
        @endif
      @endforeach
    @endif
  </div>

  
  <footer id="postNav">
    <div class="container">
    <div class="row">

      @php 
        $next_post = get_next_post(); 
        $prev_post = get_previous_post();
      @endphp
      
      @if (empty( $next_post ))
        @php $next_post = get_posts(array('numberposts' => 1, 'order' => 'ASC', 'orderby' => 'DESC')); 
          $next_post = $next_post[0];
        @endphp
      @endif

      @if (empty( $prev_post ))
        @php $prev_post = get_posts(array('posts_per_page' => 1)); 
          $prev_post = $prev_post[0];
        @endphp
      @endif

    
      <div class="prev col-md-6">
        <a href="<?php echo esc_url( get_permalink( $next_post->ID ) ); ?>">
          <h6><i class="fal fa-arrow-left"></i> Previous</h6>
          {{-- <h3>{{ esc_attr( $next_post->post_title ) }}</h3> --}}
          {{-- <div class="categories">
              @php $categories = get_the_category($next_post->ID); @endphp
              @foreach($categories as $cat)
                  <span class="tag">{{$cat->name}}</span>
              @endforeach
          </div> --}}
        </a>
      </div>
    

      <div class="next col-md-6">
        <a href="<?php echo esc_url( get_permalink( $prev_post->ID ) ); ?>">
          <h6>Next <i class="fal fa-arrow-right"></i></h6>
          {{-- <h3>{{ esc_attr( $prev_post->post_title ) }}</h3> --}}
          {{-- <div class="categories">
              @php $categories = get_the_category($prev_post->ID); @endphp
              @foreach($categories as $cat)
                  <span class="tag">{{$cat->name}}</span>
              @endforeach
          </div> --}}
        </a>
      </div>

    </div>
    </div>
  </footer>
</article>
