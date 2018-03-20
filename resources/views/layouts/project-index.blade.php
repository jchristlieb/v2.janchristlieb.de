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
        <div class="col-md-4">
            <aside>
                @yield('sidebar')
            </aside>
        </div>
        <div class="col-md-8">
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