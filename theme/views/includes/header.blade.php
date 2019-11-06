<header>
    <div class="logo">
        @if(get_theme_setting('sidebar.logo.logotype') == 'text')
            <a class="logo-link" href="{{ url('/') }}">
                {{ get_website_setting('website.title') }}
            </a>
        @else
            <a class="logo-link" href="{{ url('/') }}">
                <img src="{{ get_theme_setting('sidebar.logo.logoImage') }}" class="img-responsive" alt="logo">
            </a>
        @endif
    </div>

    <div class="hamburger-button-wrapper">
        <button id="hamburger-button" class="hamburger hamburger--collapse" type="button">
            <span class="hamburger-box">
                <span class="hamburger-inner"></span>
            </span>
        </button>
    </div>

    @php
        $menu = get_menu('header');
    @endphp

    <div id="navigation" class="menu">
        @if($menu)
            @foreach ($menu as $key => $item)
                <div class="menu-item @if($item->subItems->count()) dropdown @endif">
                    @if($item->parent_id == null)
                        @if($item->url)
                            <a href="/{{ $item->url }}">{{ $item->title }}</a>
                        @else
                            <a id="open-menu-{{ $item->id }}">{{ $item->title }}</a>
                        @endif
                        @if($item->subItems->count())
                        <i class="fas fa-angle-down"></i>
                        @endif
                    @endif

                    @if($item->subItems->count())
                        <div class="dropdown-content">
                        @foreach ($item->subItems as $key => $subItem)
                            <div class="drop-menu-item"><a href="/{{ $subItem->url }}">{{ $subItem->title }}</a></div>
                        @endforeach
                        </div>
                    @endif
                </div>
            @endforeach
        @else
            <div class="menu-item">
                <a href="/">Start</a>
            </div>

            <div class="menu-item">
                <a href="/posts">Blog</a>
            </div>

            <div class="menu-item dropdown">
                <a href="#" id="open-menu-1">Dropdown <i class="dropdown-arrow fas fa-angle-down"></i></a>


                <div class="dropdown-content">
                    <div class="drop-menu-item"><a href="/posts">Example 1</a></div>
                    <div class="drop-menu-item"><a href="/posts">Example 2</a></div>
                </div>
            </div>

            <div class="menu-item">
                <a href="/posts">About</a>
            </div>
        @endif
    </div>
</header>
