<header>
    <header>
        <section class="container-header">
            <nav>
                <img src="{{ Vite::asset('resources/img/dc-logo.png')}}" alt="logo DC">
            </nav>
            <nav>
                <ul>
                    @foreach ($headerLinks as $link)
                    <li class="{{(Route::CurrentRouteName() == 'guest.' . $link['name']) ? 'active' : ''}}">
                        <a href="{{ $link['url'] }}">{{ $link['name'] }}</a>

                    </li>
                @endforeach
                </ul>
            </nav>
        </section>
    </header>
</header>
