<header id="header">
    <div class="logo">
        @if(get_theme_setting('header.logo.logotype') == 'text')
            <a class="logo-link" href="{{ url('/') }}">
                {{ get_website_setting('website.title') }}
            </a>
        @else
            <a class="logo-link" href="{{ url('/') }}">
                <img src="{{ get_theme_setting('header.logo.logoImage') }}" class="img-responsive" alt="logo">
            </a>
        @endif
    </div>

    <div class="hamburger-button-wrapper">
        <button id="hamburger-btn" onClick="Lara.hamburgerToggle(this.id)" class="hamburger hamburger--collapse" type="button">
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
                            <span id="dropdown-menu-{{ $item->id }}" onclick="Lara.dropDownMenuToggle(this.id)">{{ $item->title }}</span>
                        @endif
                        @if($item->subItems->count())
                            <i id="dropdown-btn-{{ $item->id }}" onclick="Lara.dropDownMenuToggle('dropdown-menu-{{ $item->id }}')" class="{{ get_theme_setting('header.hamburgerMenu.dropDownButtons.openIcon') }} dropdown-visible"></i>
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
                <a href="#" id="open-menu-1">Dropdown</a>
                <i id="dropdown-btn-1" onclick="Lara.dropDownMenuToggle(this.id)" class="{{ get_theme_setting('header.hamburgerMenu.dropDownButtons.openIcon') }} dropdown-visible"></i>
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
