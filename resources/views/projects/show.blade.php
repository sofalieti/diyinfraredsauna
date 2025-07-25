@extends('layouts.site')
@section('content')
<div class="container pb-5">
    <div class="d-flex align-items-center align-items-md-end mb-3">
        <h1 class="title mb-0">{{$project->name}}</h1>        
        <ul class="projects-quick-links ml-auto">
            @foreach($projects as $key => $p)
            <li>
                <a href="{{route('project', $p->slug)}}" class="{{$p->id == $project->id ? "active" : ""}}">{{$p->name}}</a>
                @if($key+1 < count($projects)) / @endif
            </li>
            @endforeach
        </ul>
    </div>
    
    <div class="description">
        {!!$project->description!!}        
    </div>
    
    @if(count($project->project_images))
    <div class="project-images card-columns">
        @foreach($project->project_images as $image)
        <a href="/uploads/{{$image->image}}" class="image d-block" data-fancybox="image" title="{{$image->name}}">
            <img src="/uploads/{{$image->thumbnail('medium', 'image')}}" class="w-100"  alt="{{$image->name}}"/>
        </a>
        @endforeach
    </div>
    @endif
</div>
@endsection