@extends('layouts.master')

@section('intro')
    <div class="row">
        <div class="intro">
            <h1 class="display-4">{{ $project->name }}</h1>
                <h4 class="text-muted">{{ $project->title }}</h4>
        </div>
    </div>
@endsection


@section('content')

    <div class="row section_project section_project_single">
        <div class="col-12">
            <div class="ml-4 mr-4">
                @foreach($project->tags as $tag)
                    <span class="badge badge-primary p-2 mb-2 mr-2">{{ $tag->name }}</span>
                @endforeach
            </div>
        </div>
        <div class="m-4">
            <div class="col-12">
                <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                    <div class="carousel-inner">


                        <?php $i = 1 ?>

                        @foreach($images as $image)


                            <div class="carousel-item<?php if ($i === 1) echo ' active' ?>">
                                <div class="fake-browser-ui">
                                    <div class="frame">
                                        <span class="bt-1"></span>
                                        <span class="bt-2"></span>
                                        <span class="bt-3"></span>
                                    </div>
                                    <img class="d-block w-100" src="{{ $image->getUrl() }}" alt="First slide">
                                </div>
                            </div>


                            <?php $i++ ?>

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
        <div class="col-12 ">
            <div class="m-4">
                <h2 class="mb-2">{{ $project->subtitle }}</h2>
                <p class="mt-2">{!! $project->description !!}</p>
            </div>
        </div>
        <div class="col-12">
            <div class="m-4">
                <h2>In a nutshell</h2>
                <h5 class="text-muted mt-4"><i class="fal fa-wrench mr-2"></i>Technology stack</h5>
                <p class="lead">{!! $project->techstack !!}</p>
                <h5 class="text-muted mt-4"><i class="fal fa-user-circle mr-2"></i>Client</h5>
                <p class="lead">{{ $project->client }}</p>
                <h5 class="text-muted mt-4"><i class="fal fa-calendar-check mr-2"></i>Year</h5>
                <p class="lead">{{ \Carbon\Carbon::parse($project->date)->format('Y') }}</p>
                <h5 class="text-muted mt-4"><i class="fal fa-external-link mr-2"></i>Link</h5>
                <a class="lead underline" target="_blank" href="{{ $project->link }}">{{ $project->link }}</a>
               @if($project->repository != "")
                <h5 class="text-muted mt-4"><i class="fab fa-github mr-2"></i>Repository</h5>
                <a class="lead underline" target="_blank" href="{{ $project->repository }}">{{ $project->repository }}</a>
                   @endif
            </div>
        </div>
    </div>

@endsection

@section('scripts')

    <script type="text/javascript" src="{{ URL::asset('js/app.js') }}"></script>

    <script>

        $('.carousel').carousel({
            interval: 5000
        })

    </script>


@endsection