<div class="media-preview image-block project">
    <div class="info">
        <div class="title">{{$project->name}}</div>
        <a href="{{route('project', $project->slug)}}" class="btn btn-outline-white mt-3">Read more</a>
    </div>
    <img src="{{'/uploads/'.$project->thumbnail('big', 'image')}}" class="w-100"/>
</div>