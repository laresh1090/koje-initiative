{{-- ============================================================
    HEADER - Koje Group (ul-header-2 variant with top bar)
    ============================================================ --}}
<header class="ul-header ul-header-2">

    {{-- Top Bar --}}
    <div class="ul-header-top">
        <div class="ul-header-container">
            <div class="ul-header-top-left">
                <div class="address">
                    <i class="flaticon-pin"></i>
                    <span>2, Oluwakemi Street, Akowonjo,Lagos, Nigeria</span>
                </div>
            </div>
            <div class="ul-header-top-social">
                <span class="d-none d-sm-inline">Follow us:</span>
                <div class="links">
                    <a href="https://instagram.com/koje_initiative" target="_blank" rel="noopener" aria-label="Instagram">
                        <i class="flaticon-instagram"></i>
                    </a>
                    <a href="https://twitter.com/koje_initiative" target="_blank" rel="noopener" aria-label="Twitter">
                        <i class="flaticon-twitter"></i>
                    </a>
                    <a href="https://facebook.com/koje_initiative" target="_blank" rel="noopener" aria-label="Facebook">
                        <i class="flaticon-facebook"></i>
                    </a>
                </div>
            </div>
        </div>
    </div>

    {{-- Main Navigation Bar --}}
    <div class="ul-header-bottom to-be-sticky">
        <div class="ul-header-container ul-header-bottom-wrapper">

            {{-- Left: Logo + Nav --}}
            <div class="header-bottom-left">

                {{-- Logo --}}
                <div class="logo-container">
                    <a href="{{ route('home') }}" class="logo-text">KOJE GROUP</a>
                </div>

                {{-- Desktop Nav Wrapper --}}
                <div class="ul-header-nav-wrapper">
                    <div class="to-go-to-sidebar-in-mobile">
                        <nav>
                            <ul class="ul-header-nav">
                                {{-- Home --}}
                                <li>
                                    <a href="{{ route('home') }}"
                                       class="{{ request()->routeIs('home') ? 'active' : '' }}">
                                        Home
                                    </a>
                                </li>

                                {{-- About Us --}}
                                <li>
                                    <a href="{{ route('about') }}"
                                       class="{{ request()->routeIs('about') ? 'active' : '' }}">
                                        About Us
                                    </a>
                                </li>

                                {{-- Our Arms (Dropdown) --}}
                                <li class="has-sub-menu {{ request()->routeIs('koje-originals', 'koje-essentials', 'koje-production', 'koje-initiative', 'koje-vision-screen') ? 'active' : '' }}">
                                    <a href="javascript:void(0)"
                                       role="button"
                                       class="{{ request()->routeIs('koje-originals', 'koje-essentials', 'koje-production', 'koje-initiative', 'koje-vision-screen') ? 'active' : '' }}">
                                        Our Arms
                                    </a>
                                    <ul class="ul-header-submenu">
                                        <li>
                                            <a href="{{ route('koje-originals') }}"
                                               class="{{ request()->routeIs('koje-originals') ? 'active' : '' }}">
                                                Koje Originals
                                            </a>
                                        </li>
                                        <li>
                                            <a href="{{ route('koje-essentials') }}"
                                               class="{{ request()->routeIs('koje-essentials') ? 'active' : '' }}">
                                                Koje Essentials
                                            </a>
                                        </li>
                                        <li>
                                            <a href="{{ route('koje-production') }}"
                                               class="{{ request()->routeIs('koje-production') ? 'active' : '' }}">
                                                Koje Production
                                            </a>
                                        </li>
                                        <li>
                                            <a href="{{ route('koje-initiative') }}"
                                               class="{{ request()->routeIs('koje-initiative') ? 'active' : '' }}">
                                                Koje Initiative
                                            </a>
                                        </li>
                                        <li>
                                            <a href="{{ route('koje-vision-screen') }}"
                                               class="{{ request()->routeIs('koje-vision-screen') ? 'active' : '' }}">
                                                Koje Vision Screen
                                            </a>
                                        </li>
                                    </ul>
                                </li>

                                {{-- Events --}}
                                <li>
                                    <a href="{{ route('events') }}"
                                       class="{{ request()->routeIs('events') ? 'active' : '' }}">
                                        Events
                                    </a>
                                </li>

                                {{-- Gallery --}}
                                <li>
                                    <a href="{{ route('gallery') }}"
                                       class="{{ request()->routeIs('gallery') ? 'active' : '' }}">
                                        Gallery
                                    </a>
                                </li>

                                {{-- Contact --}}
                                <li>
                                    <a href="{{ route('contact') }}"
                                       class="{{ request()->routeIs('contact') ? 'active' : '' }}">
                                        Contact
                                    </a>
                                </li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>

            {{-- Right: CTA + Mobile Toggle --}}
            <div class="ul-header-actions">
                {{-- Register for Webinar CTA --}}
                <a href="{{ route('webinar') }}" class="ul-btn d-none d-lg-inline-flex">
                    <i class="flaticon-fast-forward-double-right-arrows-symbol"></i>
                    Register for Webinar
                </a>

                {{-- Mobile Hamburger --}}
                <button class="ul-header-sidebar-opener d-lg-none" aria-label="Open menu">
                    <svg width="24" height="18" viewBox="0 0 24 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <rect width="24" height="2" rx="1" fill="currentColor"/>
                        <rect y="8" width="24" height="2" rx="1" fill="currentColor"/>
                        <rect y="16" width="24" height="2" rx="1" fill="currentColor"/>
                    </svg>
                </button>
            </div>

        </div>
    </div>

</header>
