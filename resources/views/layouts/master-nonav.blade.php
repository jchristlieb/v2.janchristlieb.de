<!doctype html>
<html lang="{{ app()->getLocale() }}">

@include('snippets.head')

<body class="mt-md-4 mb-md-4">

<div class="container bg__main-col rounded">

    <div class="row">
        <div class="col">
            {{--@include('snippets.navigation')--}}
        </div>
    </div>


    @yield('intro')

    @yield('content')

    @include('snippets.footer')

</div>

@yield('scripts')

</body>

</html>