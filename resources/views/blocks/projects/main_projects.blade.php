@if($projects)
<div class="projects-block py-5 h-100">
    <div class="container h-100">
        <h2 class="title text-center mb-5">Latest projects</h2>
        <?php
        /*
        <div class="row align-items-center project-row no-gutters h-100 bg-white">
            <div class="col-md-6 h-100">
                <div class="media-preview image-block">
                    <img src="{{'/uploads/'.$projects[0]->thumbnail('medium', 'image')}}" class="w-100"/>
                </div>
            </div>
            <div class="col-md-6 h-100">
                <div class="description p-3 h-100">
                    <h3>{{$projects[0]->name}}</h3>
                    <div class="mb-1">
                        {{str_limit(strip_tags($projects[0]->description), 300)}}
                    </div>
                    <a href="{{route('project', $projects[0]->slug)}}">Read more</a>
                </div>
            </div>
        </div>
        */
        ?>
        <div class="media-preview image-block project">
            <div class="info">
                <div class="title">{{$projects[0]->name}}</div>
                <a href="{{route('project', $projects[0]->slug)}}" class="btn btn-outline-white mt-3">Read more</a>
            </div>
            <img src="{{'/uploads/'.$projects[0]->thumbnail('big', 'image')}}" class="w-100"/>
        </div>
        <div class="projects-preview owl-carousel mt-3">
            @foreach($projects as $key => $project)
            <div class="item">
                <a href="#" data-id="{{$project->id}}" class="{{$key == 0 ? 'active' : ''}}">
                    <div class="image-block">
                        <img src="{{'/uploads/'.$project->thumbnail('small', 'image')}}"/>
                    </div>
                    <div class="title">{{$project->name}}</div>
                </a>
            </div>
            @endforeach
        </div>
    </div>
</div>
@endif