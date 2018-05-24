@extends('layouts.master-nonav')

@section('meta-info')
    <title>404 status</title>
    <meta name="description" content="The page you are looking for could not be found.">
@endsection

@section('content')
    <div class="container mt-4">
        <div class="row">
            <div class="col-12">
                <h1 class="mt-4 mb-4">Lost in translation</h1>
                <p>My server responded to your request with a 404 status code. That means, the page you are looking for could not be found. I suggest you'll take a deep breath and
                    restart your journey on my <a class="underline" href="/">homepage</a>.<p>
                <p>Save travel.</p>
            </div>
        </div>
    </div>

@endsection