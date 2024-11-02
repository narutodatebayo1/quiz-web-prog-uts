<nav class="navbar navbar-expand-lg bg-body-tertiary">
    <div class="container-fluid">
        <div class="navbar-brand">
            <a class="nav-link" href="{{ route('home') }}">Logo</a>
        </div>
        <div class="nav navbar-brand">
            <li class="nav-item">
                <a class="nav-link" href="{{ route('home') }}">Home</a>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="#" role="button" aria-expanded="false">Category</a>
                <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="{{ route('category', ['name' => 1]) }}">Data Science</a></li>
                    <li><a class="dropdown-item" href="{{ route('category', ['name' => 2]) }}">Network Security</a></li>
                </ul>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ route('writers') }}">Writers</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ route('about') }}">About Us</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ route('popular') }}">Popular</a>
            </li>
        </div>
    </div>
</nav>