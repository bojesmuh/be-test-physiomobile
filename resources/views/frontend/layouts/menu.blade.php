<nav class="navbar navbar-expand-lg fixed-top bg-white border-bottom">
    <div class="container">
        <a class="navbar-brand" href="#">
            <img src="{{ asset('build/assets/images/logo.svg') }}" alt="geo">
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="{{ route(name: 'beranda') }}">Beranda</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="{{ route('tentang-kami') }}">Tentang Kami</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="{{ route('blog') }}">Blog Kami</a>
                </li>
            </ul>
            <ul class="navbar-nav">
                <li class="nav-item dropdown px-3">
                    <a class="nav-link dropdown-toggle" href="#" id="languageDropdown" role="button"
                        data-bs-toggle="dropdown" aria-expanded="false">
                        <i class="fi fi-id"></i> ID
                    </a>
                    <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="languageDropdown">
                        <li><a class="dropdown-item" href="#"><i class="fi fi-id"></i> ID</a></li>
                        <li><a class="dropdown-item" href="#"><i class="fi fi-gb"></i> EN</a></li>
                        <li><a class="dropdown-item" href="#"><i class="fi fi-ch"></i> CH</a></li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a class="btn btn-primary-geo" aria-current="page" href="#">Hubungi Kami</a>
                </li>
            </ul>
        </div>
    </div>
</nav>