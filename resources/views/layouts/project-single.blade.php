<!doctype html>
<html lang="{{ app()->getLocale() }}">

@include('snippets.head')

<body>
<div class="container-fluid bg__project--single">
    <div class="container">
        <div class="row">
            <div class="col">
                @include('snippets.navigation')
                @yield('screenshot')
            </div>
        </div>
    </div>
</div>
<div class="container">
    <div class="row">
        <div class="col">
            <main class="">
                @yield('content')
            </main>
        </div>
    </div>
    <div class="row">
        <div class="col">
            @include('snippets.footer')
        </div>
    </div>

    @yield('scripts')
</div>

</body>

</html>