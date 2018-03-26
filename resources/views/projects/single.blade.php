@extends('layouts.master')

@section('intro')
    <div class="row">
        <div class="intro">
            <h1 class="display-4 mb-4">{{ $project->title }}</h1>
            <a class="lead" href="{{ $project->link }}">{{ $project->link }}</a>
        </div>
    </div>
@endsection


@section('content')

    <div class="row section_project">
        <div class="col-12">
            <div class="m-4 fake-browser-ui">
                <div class="frame">
                    <span class="bt-1"></span>
                    <span class="bt-2"></span>
                    <span class="bt-3"></span>
                </div>


                <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                    <div class="carousel-inner">

                        @foreach($images as $image)

                            <div class="project-image carousel-item active">
                                <img class="d-block w-100" src="{{ $image->getUrl() }}" alt="First slide">
                            </div>

                        @endforeach

                    </div>
                    <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>
                </div>

            </div>
        </div>
        <div class="col-12">
            <div class="m-4">
                <h2 class="mb-2">{{ $project->title }}</h2>
                @foreach($project->tags as $tag)
                    <span class="badge badge-primary">{{ $tag->name }}</span>
                @endforeach
                <p class="mt-2">{{ $project->description }}</p>
            </div>
        </div>
        <div class="col-12">
            <div class="m-4">
                <h2>In a nutshell</h2>
                <h5 class="text-muted mt-4">Client</h5>
                <p class="lead">{{ $project->client }}</p>
                <h5 class="text-muted mt-4">Year</h5>
                <p class="lead">{{ $project->date }}</p>
                <h5 class="text-muted mt-4">Link</h5>
                <a class="lead" href="{{ $project->link }}">{{ $project->link }}</a>
                <h5 class="text-muted mt-4">Repository</h5>
                <a class="lead" href="{{ $project->repository }}">{{ $project->repository }}</a>
            </div>
        </div>
    </div>

@endsection

@section('scripts')

    <script src="/public/js/app.js"></script>

    <script>

        $('.carousel').carousel()

    </script>


@endsection