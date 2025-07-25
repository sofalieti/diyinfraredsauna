@extends('layouts.site')
@section('content')
<div class="{{$page->add_container_class ? 'container' : ''}}">
    @if(!$page->hide_h1)
    <h1 class="title">{{$page->name}}</h1>
    @endif
    {!! $page->description !!}
</div>
@endsection