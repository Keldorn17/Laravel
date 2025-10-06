<nav class="navbar navbar-expand-lg bg-body-tertiary">
    <div class="container-fluid">
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="/">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/kepzesek">Kepzesek</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Pricing</a>
                </li>
            </ul>
        </div>
        <form class="d-flex" action="/logout" method="POST">
            @csrf
            <button class="btn btn-outline-danger" type="submit">
                @auth
                    Logout
                @else
                    Login
                @endauth
            </button>
        </form>
    </div>
</nav>
