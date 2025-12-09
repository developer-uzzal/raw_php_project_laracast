<nav class="navbar navbar-expand-lg navbar-dark bg-dark py-3 shadow-sm">
    <div class="container">
        <a class="navbar-brand fw-bold text-uppercase" href="#" style="letter-spacing:1px;">
            DemoSite
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
            <ul class="navbar-nav gap-2">
                <li class="nav-item">
                    <a class="nav-link px-3 rounded hover-nav <?= urlIs('/') ? 'active' : '' ?>" href="/">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link px-3 rounded hover-nav <?= urlIs('/about') ? 'active' : '' ?>" href="/about">About</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link px-3 rounded hover-nav <?= urlIs('/notes') ? 'active' : '' ?>" href="/notes">Notes</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link px-3 rounded hover-nav <?= urlIs('/contact') ? 'active' : '' ?>" href="/contact">Contact</a>
                </li>
            </ul>
        </div>
    </div>
</nav>