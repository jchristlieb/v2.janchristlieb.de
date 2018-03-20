@extends('layouts.project-single')

@section('sidebar')

    <div class="card mt-4">
        <div class="card-body">
            <h3>In a nutshell</h3>
            <h5 class="text-muted mt-4">Client</h5>
            <p>{{ $project->client }}</p>
            <h5 class="text-muted mt-4">Year</h5>
            <p>{{ $project->date }}</p>
            <h5 class="text-muted mt-4">Link</h5>
            <a href="{{ $project->link }}">{{ $project->link }}</a>
            <h5 class="text-muted mt-4">Repository</h5>
            <a href="{{ $project->repository }}">{{ $project->repository }}</a>
            <h5 class="text-muted mt-4">Tags</h5>
            @foreach($project->tags as $tag)
                <li>{{ $tag->name }}</li>
            @endforeach
        </div>
    </div>


@endsection

@section('screenshot')

    <div class="mt-4 ml-4 mr-4 fake-browser-ui">
        <div class="frame">
            <span class="bt-1"></span>
            <span class="bt-2"></span>
            <span class="bt-3"></span>
        </div>
        <img class="card-img-top" src="../images/landscape.jpg" alt="Card image cap">
    </div>

    @endsection

@section('content')

    <div class="section_project">
        <article class="card mt-4 mb-4">
            <div class="card-body">
                <h1 class="card-title">{{ $project->title }}</h1>
                <p class="card-text">{{ $project->description }}</p>
            </div>
        </article>
    </div>

@endsection