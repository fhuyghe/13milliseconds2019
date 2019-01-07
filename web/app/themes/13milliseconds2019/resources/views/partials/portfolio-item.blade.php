@php $categories = get_the_category($project->ID); @endphp
<div class="portfolio-item col-md-6 {{ the_field('color', $project->ID) }}" >
    <a href="{{ get_permalink($project)}}">
        <div class="wrap">

            <h2>{{ $project->post_title }}</h2>

            <div class="categories">
                @foreach($categories as $cat)
                    <span>{{$cat->name}}</span>
                @endforeach
            </div>

            <div class="illustration">
                @php $thumbnail = get_the_post_thumbnail_url($project->ID, 'medium') @endphp
                <img src="{{ $thumbnail }}" />
            </div>
        </div>
    </a>
</div>