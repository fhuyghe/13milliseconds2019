@php $categories = get_the_category($project->ID); @endphp
@php $featured = get_field('featured', $project->ID) @endphp

<div class="grid-item {{ the_field('color', $project->ID) }} @if($featured)featured @endif @foreach($categories as $cat) {{$cat->slug}} @endforeach" >
    <a class="grid-image" href="{{ get_permalink($project)}}" >
        @php echo get_the_post_thumbnail($project->ID, '@if($featured) large @else medium @endif') @endphp
    </a>

    <div class="categories">
        @foreach($categories as $cat)
            <span class="tag" data-slug="{{$cat->slug}}">{{$cat->name}}</span>
        @endforeach
    </div>
    <h2>
        <a href="{{ get_permalink($project)}}" >{{ $project->post_title }}</a>
    </h2>
</div>