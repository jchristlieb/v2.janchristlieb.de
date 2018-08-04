@extends('layouts.master')

@section('meta-info')
    <title>Welcome</title>
    <meta name="description" content="Hello. My name is Jan. I build web sites and applications.">
@endsection

@section('meta-description')
    Description
@endsection

@section('intro')
    <div class="section_welcome text-center mt-50">
        <img class="img-intro" src="images/Jan-Christlieb.jpg">
        <h3 class="mt-4">Jan Christlieb</h3>
        <hr class="hr-intro">
        <p class="lead">Web developer from Berlin</p>
    </div>
@endsection

@section('content')
    <div class="container section_welcome">
        <div class="row">
            <div class="col-12">
                <div class="jumbotron mt-4 mb-4">
                    <h1 class="display-4 mb-4">Hello.</h1>
                    <p class="lead">My name is Jan. I build web sites and web applications for clients and for fun. Have
                        a look at my <a href="/projects">project presentations</a> to get an idea of what I do.</p>
                    <p class="lead">Looking for someone to collaborate with? I am available for projects. Just send a
                        short request to mail [at] janchristlieb [dot] de or hit the button below.</p>
                    <a class="btn btn-primary" href="mailto:mail@janchristlieb.de">Let's talk</a>
                </div>
            </div>
        </div>
    </div>

@endsection



