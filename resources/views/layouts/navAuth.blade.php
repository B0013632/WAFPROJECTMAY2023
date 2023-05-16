<nav class="navbar navbar-expand-sm navbar-dark bg-dark">
    <ul class="navbar-nav ml-auto">
        @if(Auth::guest())
            <li class="nav-item">
                <a class="nav-link" href="{{ route('register') }}">Register <span class="glyphicon glyphicon-pencil"></span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ route('login') }}">Login <span class="glyphicon glyphicon-log-in"></span></a>
            </li>
        @else
            <li class="nav-item">
                <form action="{{ route('logout') }}" method="POST">
                    @csrf
                    <button type="submit" class="btn btn-primary" style="padding: 15px;">
                        <span class="glyphicon glyphicon-log-out"></span> Log out
                    </button>
                </form>
            </li>
        @endif
    </ul>
</nav>