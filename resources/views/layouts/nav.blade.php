<nav class="navbar navbar-expand-lg menu_one" id="sticky">
    <div class="container">
        <a class="navbar-brand sticky_logo" href="{{ route('home.index') }}">
            <img src="{{ asset('img/logo.png') }}" srcset="{{ asset('img/logo.png') }} 2x" width="55" alt="logo">
            <img src="{{ asset('img/logo.png') }}" srcset="{{ asset('img/logo.png') }} 2x" width="55" alt="logo">
            <span class="text-white">{{ config('app.name') }}</span>
        </a>
        <button class="navbar-toggler collapsed"
                type="button"
                data-toggle="collapse"
                data-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent"
                aria-expanded="false"
                aria-label="Toggle navigation">
            <span class="menu_toggle">
                <span class="hamburger">
                    <span></span>
                    <span></span>
                    <span></span>
                </span>
                <span class="hamburger-cross">
                    <span></span>
                    <span></span>
                </span>
            </span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav menu ml-auto">
                <x-nav-item route-name="home.index" route="home.index" title="Home" />
                <x-nav-item route-name="docs"
                            route="{{ route('docs', ['version' => config('app.version', '1.x'), 'page' => 'introduction']) }}"
                            title="Docs" />
                <x-nav-item route="https://twitter.com/MilwadDev" title="Twitter" />
            </ul>
            <a class="nav_btn" href="https://github.com/milwad-dev/laravel-validate">Github</a>
        </div>
    </div>
</nav>
