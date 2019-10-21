@php $categories = get_the_category($project->ID); @endphp
<div class="portfolio-item col-md-6 col-lg-4 col-12 {{ the_field('color', $project->ID) }}" >
    <a href="{{ get_permalink($project)}}" >
        @php $thumbnail = get_the_post_thumbnail_url($project->ID, 'full') @endphp
        <div class="illustration" style="background-image: url({{ $thumbnail }})"></div>
    </a>

    <div class="categories">
        @foreach($categories as $cat)
            <span>{{$cat->name}}</span>
        @endforeach
    </div>
    <h2>
        <a href="{{ get_permalink($project)}}" >{{ $project->post_title }}</a>
    </h2>
</div>