@extends('layouts.project-index')

@section('sidebar')

    <div class="card mt-4">
        <div class="card-body">
            <h3>Filter projects</h3>
            <p class="mb-0">My projects are build with different tools and technologies. Feel free to filter according
                to your
                interests.</p>
        </div>
        <ul class="list-group list-group-flush">
            @foreach($tags as $tag)
                <li class="list-group-item">
                    <div class="custom-control custom-checkbox">
                        <input type="checkbox" class="custom-control-input" id="{{ $tag->id }}">
                        <label class="custom-control-label" for="{{ $tag->slug }}">{{ $tag->name }}</label>
                    </div>
                </li>
            @endforeach
        </ul>
        <form method="post" action="/projects">
            <div class="m-2">
                <button type="submit" class="btn btn-primary btn-block">Reset filter</button>
            </div>
        </form>
    </div>


@endsection

@section('content')

    @foreach($projects as $project)

        <div class="section_project mt-4 mb-5">
            <div class="card">
                <a href="{{ $project->path() }}">
                    <div class="fake-browser-ui">
                        <div class="frame">
                            <span class="bt-1"></span>
                            <span class="bt-2"></span>
                            <span class="bt-3"></span>
                        </div>
                        <img class="card-img-top" src="images/landscape.jpg" alt="Card image cap">
                    </div>
                    <div class="card-body">
                        <h5 class="card-title">{{ $project->title }}</h5>
                        <p class="card-text">{{ \Illuminate\Support\Str::words($project->description, 20, ' ...') }}</p>
                    </div>
                    <div class="card-footer">
                        @foreach($project->tags as $tag)
                            <span class="badge badge-primary">{{ $tag->name }}</span>
                        @endforeach
                    </div>
                </a>
            </div>
        </div>

    @endforeach

@endsection