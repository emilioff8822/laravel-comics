<header class="container">
    <div class="logo">
        <img src="/img/dc-logo.png" alt="logo" />
    </div>
    <h3>
        {{ Route::currentRouteName() }}
    </h3>
    <nav>
        <ul>
            @foreach ($datax['mainMenu'] as $menu)
                <li>
                    <a class="{{ Route::currentRouteName() === $menu['routeName'] ? 'active' : '' }}"
                        href="{{ route($menu['routeName']) }}">
                        {{ $menu['text'] }}
                    </a>
                </li>
            @endforeach
        </ul>
    </nav>
</header>
