@extends('layouts.master')


@section('intro')
    <div class="row">
        <div class="intro">
            <h1 class="display-4 mb-4">Projects</h1>
            <p class="lead">Get an idea of the products I build and the underlying technologies.</p>
        </div>
    </div>
@endsection


@section('content')

    <div class="container section_project">
        <div class="row">

            @foreach($projects as $project)

                <div class="col-12 col-md-6 mb-5">
                    <div class="card">
                        <a href="{{ $project->path() }}">
                            <div class="fake-browser-ui">
                                <div class="frame">
                                    <span class="bt-1"></span>
                                    <span class="bt-2"></span>
                                    <span class="bt-3"></span>
                                </div>
                                <div class="project-image">
                                    <img src="{{ $project->getFirstMediaUrl($project->slug) }}">
                                </div>
                            </div>
                            <div class="card-body">
                                <h5 class="card-title">{{ $project->title }}</h5>
                                <p class="card-text">{{ \Illuminate\Support\Str::words($project->description, 20, ' [...]') }}</p>
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

        </div>
    </div>

@endsection