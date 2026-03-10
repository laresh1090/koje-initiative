{{-- ============================================================
    BREADCRUMB - Reusable inner-page hero / breadcrumb banner
    Props: $title (required), $subtitle (optional)
    ============================================================ --}}
@props([
    'title',
    'subtitle' => null,
])

<section class="ul-breadcrumb" style="background-image: url('{{ asset('images/template/BTA_3252.jpg') }}');">
    <div class="ul-container">
        <h1 class="ul-breadcrumb-title wow fadeInUp">{{ $title }}</h1>

        @if($subtitle)
            <p class="ul-breadcrumb-subtitle wow fadeInUp" data-wow-delay="0.1s">{{ $subtitle }}</p>
        @endif

        <ul class="ul-breadcrumb-nav wow fadeInUp" data-wow-delay="0.2s">
            <li><a href="{{ route('home') }}">Home</a></li>
            <li><span class="separator"><i class="flaticon-right-arrow-2"></i></span></li>
            <li>{{ $title }}</li>
        </ul>
    </div>
</section>
