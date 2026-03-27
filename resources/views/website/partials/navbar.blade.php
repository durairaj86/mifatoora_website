<nav class="navbar navbar-expand-lg border-bottom fixed-top">
    <div class="container">
        <a class="navbar-brand fw-bold text-dark" href="/">Ledger<span class="text-primary">OS</span></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav mx-auto">
                <li class="nav-item"><a class="nav-link px-3" href="/">Home</a></li>
                <li class="nav-item"><a class="nav-link px-3" href="/features">Features</a></li>
                <li class="nav-item"><a class="nav-link px-3" href="/pricing">Pricing</a></li>
                <li class="nav-item"><a class="nav-link px-3" href="/contact">Contact</a></li>
            </ul>
            <div class="d-flex gap-2">
                @auth
                    <a href="{{ url('/dashboard') }}" class="btn btn-light border">Go to My Account</a>
                    <form method="POST" action="{{ route('logout') }}">
                        @csrf
                        <button type="submit" class="btn btn-outline-danger">Logout</button>
                    </form>
                @else
                    <a href="{{ route('login') }}" class="btn btn-light border">Login</a>
                    @if (Route::has('register'))
                        <a href="{{ route('register') }}" class="btn btn-primary">Get Started Free</a>
                    @endif
                @endauth
            </div>
        </div>
    </div>
</nav>
