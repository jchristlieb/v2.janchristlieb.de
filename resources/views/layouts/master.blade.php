<!doctype html>
<html lang="{{ app()->getLocale() }}">

@include('snippets.head')

<body>
<div class="container">
    <div class="row">
        <div class="col">
            @include('snippets.navigation')
        </div>
    </div>
    <div class="row">
        <div class="col">
            <main>
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