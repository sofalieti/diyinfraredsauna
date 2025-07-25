<nav aria-label="breadcrumb">
    <div class="container">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="/">Home</a></li>
            @foreach($breadcrumbs as $breadcrumb)
            <li class="breadcrumb-item {{$breadcrumb['last'] ? 'active' : ''}}">
                @if($breadcrumb['url'])
                <a href="{{$breadcrumb['url']}}">
                @endif
                {{$breadcrumb['name']}}
                @if($breadcrumb['url'])
                </a>
                @endif
            </li>
            @endforeach
        </ol>
    </div>
</nav>