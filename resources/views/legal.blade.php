@extends('layouts.master')

@section('meta-info')
    <title>Legal notice</title>
    <meta name="description" content="This page is designed to provide you with information about the site owner">
@endsection

@section('intro')
    <div class="row">
        <div class="intro">
            <h1 class="display-4">Legal notice</h1>
        </div>
    </div>
@endsection

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h3 class="">Liability and information</h3>
                <p class="lead">According to §5 TMG</p>
                <p>Jan Christlieb<br>
                    Schwartzkopffstraße 4<br>
                    10115 Berlin<br></p>
                <p>Mobil: 0176 / 99983308<br>
                    Email: mail [at] janchristlieb [dot] de<br>
                    USt-IdNr.: DE305359246</p>
            </div>
            <div class="col-12">
                <h3 class="mt-4">Responsible for content</h3>
                <p class="lead">According to §55 paragraph 2 RStV</p>
                <p>Jan Christlieb<br>
                    Schwartzkopffstraße 4<br>
                    10115 Berlin<br></p>
            </div>
            <div class="col-12">
                <h3 class="mt-4 mb-4">Credits</h3>
                <p>I solely built this website upon open source components. The backend runs on the wonderful
                    <a class="color" href="https://laravel.com/" target="_blank">Laravel framework</a>. As you may recognize the
                    frontend is based upon <a class="color" href="https://getbootstrap.com/" target="_blank">Bootstrap 4</a>. Finally,
                    the typeface is called <a class="color" href="https://github.com/JulietaUla/Montserrat" target="_blank">Montserrat</a> designed
                    by Julieta Ulanovsky.</p>
            </div>
        </div>
    </div>

@endsection



