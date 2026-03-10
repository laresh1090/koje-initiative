<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ $title ?? 'Koje Group' }} - Koje Group</title>
    <meta name="description" content="Koje Group - Creativity, Culture & Community. Home of Koje Originals, Koje Essentials, Koje Production, Koje Initiative, and Koje Vision Screen.">

    {{-- Favicon --}}
    <link rel="icon" href="{{ asset('favicon.ico') }}" type="image/x-icon">

    {{-- Google Fonts --}}
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Manrope:wght@200..800&family=Quicksand:wght@300..700&family=Caveat:wght@400..700&display=swap" rel="stylesheet">

    {{-- Bootstrap 5 CSS (CDN) --}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

    {{-- Vendor CSS --}}
    <link rel="stylesheet" href="{{ asset('vendor/animate-wow/animate.min.css') }}">
    <link rel="stylesheet" href="{{ asset('vendor/swiper/swiper-bundle.min.css') }}">
    <link rel="stylesheet" href="{{ asset('vendor/splide/splide.min.css') }}">
    <link rel="stylesheet" href="{{ asset('vendor/slim-select/slimselect.css') }}">
    <link rel="stylesheet" href="{{ asset('vendor/flatpickr/flatpickr.min.css') }}">

    {{-- Icon Font --}}
    <link rel="stylesheet" href="{{ asset('fonts/icon/flaticon_charitics.css') }}">

    {{-- Legacy CSS (template + Koje custom overrides) --}}
    <link rel="stylesheet" href="{{ asset('css/legacy/style.css') }}">
    <link rel="stylesheet" href="{{ asset('css/legacy/koje-custom.css') }}">

    {{-- Vite: Tailwind + App JS --}}
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body>

    {{-- Preloader --}}
    <div id="preloader" style="position:fixed;inset:0;background:#fff;z-index:999999;display:flex;align-items:center;justify-content:center;">
        <div style="text-align:center;">
            <div style="width:40px;height:40px;border:4px solid #f3f3f3;border-top:4px solid #EB5310;border-radius:50%;animation:spin 0.8s linear infinite;margin:0 auto 15px;"></div>
            <span style="font-family:'Quicksand',sans-serif;font-weight:700;color:#1E252F;font-size:18px;">KOJE GROUP</span>
        </div>
    </div>
    <style>@keyframes spin{0%{transform:rotate(0deg)}100%{transform:rotate(360deg)}}</style>

    {{-- Header --}}
    @include('partials.header')

    {{-- Mobile Sidebar --}}
    <div class="ul-sidebar">
        <div class="ul-sidebar-top">
            <div class="ul-sidebar-header-logo">
                <a href="{{ route('home') }}" class="logo-text">KOJE GROUP</a>
            </div>
            <button class="ul-sidebar-closer">
                <i class="flaticon-close"></i>
            </button>
        </div>
        <div class="ul-sidebar-header-nav-wrapper">
            {{-- Nav moves here in mobile via main.js --}}
        </div>
    </div>

    {{-- Page Content --}}
    <main>
        {{ $slot }}
    </main>

    {{-- Footer --}}
    @include('partials.footer')

    {{-- Bootstrap 5 JS (CDN) --}}
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

    {{-- Vendor JS --}}
    <script src="{{ asset('vendor/swiper/swiper-bundle.min.js') }}"></script>
    <script src="{{ asset('vendor/splide/splide.min.js') }}"></script>
    <script src="{{ asset('vendor/splide/splide-extension-auto-scroll.min.js') }}"></script>
    <script src="{{ asset('vendor/animate-wow/wow.min.js') }}"></script>
    <script src="{{ asset('vendor/splittype/index.min.js') }}"></script>
    <script src="{{ asset('vendor/fslightbox/fslightbox.js') }}"></script>
    <script src="{{ asset('vendor/mixitup/mixitup.min.js') }}"></script>
    <script src="{{ asset('vendor/slim-select/slimselect.min.js') }}"></script>

    {{-- Site JS --}}
    <script src="{{ asset('js/main.js') }}"></script>

    {{-- Initialize WOW.js --}}
    <script>
        new WOW().init();
    </script>
</body>
</html>
