<nav class="navbar navbar-expand mt-4 mb-4">
    <ul class="navbar-nav text-center">
        <li class="nav-link pl-0"><a href="/">Home</a></li>
        <li class="nav-link"><a href="/projects">Projects</a></li>
        <li class="nav-link"><a href="">Toolbox</a></li>
        <li class="nav-link"><a href="/about">About</a></li>
    </ul>
    <ul class="navbar-nav ml-auto">
        <!-- Authentication Links -->
        @guest
        @else
            <li class="nav-item dropdown">
                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                    {{ Auth::user()->name }} <span class="caret"></span>
                </a>

                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="/admin">Dashboard</a>
                    <a class="dropdown-item" href="{{ route('logout') }}"
                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                        {{ __('Logout') }}
                    </a>

                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        @csrf
                    </form>
                </div>
            </li>
            @endguest
    </ul>
</nav>

