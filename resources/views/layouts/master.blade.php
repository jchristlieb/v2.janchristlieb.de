<!doctype html>
<html lang="{{ app()->getLocale() }}">

@include('snippets.head')

<body>

<div class="container">

    @include('snippets.navigation')

    <main class="">

        @yield('content')

    </main>

    @include('snippets.footer')

    @yield('scripts')
</div>

</body>

</html>