@extends('layouts.site')
@section('content')
<div class="container projects-list">
    <h1 class="title">Projects</h1>
    <div class="row">
        @foreach($projects as $project)
        <div class="col-md-4 col-sm-6 item-block">
            <a href="{{route('project', $project->slug)}}">
                <div class="image-block">
                    <img src="{{'/uploads/'.$project->image}}"/>
                </div>
                <div class="title">{{$project->name}}</div>
            </a>
        </div>
        @endforeach
    </div>
</div>
@endsection