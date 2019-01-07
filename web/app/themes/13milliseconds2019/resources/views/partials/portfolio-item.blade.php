@php $categories = get_the_category($project->ID); @endphp
<a href="{{ get_permalink($project)}}" class="portfolio-item col-md-6 {{ the_field('color', $project->ID) }}" >
    <header>
        <h2>{{ $project->post_title }}</h2>

        <div class="categories">
            @foreach($categories as $cat)
                <span>{{$cat->name}}</span>
            @endforeach
        </div>
    </header>

    <div class="illustration">
        @php $thumbnail = get_the_post_thumbnail_url($project->ID, 'full') @endphp
        <img src="{{ $thumbnail }}" />
    </div>
</a>