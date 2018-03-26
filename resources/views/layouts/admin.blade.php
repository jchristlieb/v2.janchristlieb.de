<!doctype html>
<html lang="{{ app()->getLocale() }}">

@include('snippets.head')

<body class="mt-md-4 mb-md-4">

<div class="container bg__main-col rounded">

    <div class="row">
        <div class="col-12">
            @include('snippets.navigation')
        </div>
    </div>

    <div class="row">
        <div class="intro">
            <h1 class="display-4">Dashboard</h1>
        </div>
    </div>

    <div class="container">
        <div class="row">
            <div class="col-md-3">
                <ul class="nav flex-column">
                    <li class="nav-item">
                        <a class="nav-link pl-0" href="/admin/projects/create">
                            <i class="fal fa-pen-square pr-2"></i>Add project</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link pl-0" href="/admin/projects">
                            <i class="fal fa-list-alt pr-2"></i>Manage projects</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link pl-0" href="/admin/tags">
                            <i class="fal fa-tags pr-2"></i>Tags</a>
                    </li>
                </ul>
            </div>
            <div class="col-md-9">
                @include('snippets.form-errors')
                @yield('content')
            </div>
        </div>
    </div>

    @include('snippets.footer')

</div>

@yield('scripts')

</body>

</html>