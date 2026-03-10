{{-- ============================================================
    FOOTER - Koje Group
    ============================================================ --}}
<footer class="ul-footer">

    {{-- Footer Middle: 4-Column Widget Area --}}
    <div class="ul-footer-middle" style="background-color: var(--ul-black);">
        <div class="ul-footer-container">
            <div class="ul-footer-middle-wrapper">
                <div class="row">

                    {{-- Column 1: About Koje Group --}}
                    <div class="col-lg-3 col-md-6 col-12 mb-4 mb-lg-0">
                        <div class="ul-footer-about">
                            <a href="{{ route('home') }}" class="logo-text logo-text--white" style="margin-bottom: 18px; display: inline-block;">
                                KOJE GROUP
                            </a>
                            <p class="ul-footer-about-txt" style="color: rgba(255,255,255,0.7); line-height: 1.75; margin-bottom: 20px;">
                                Koje Group is a creative ecosystem driving culture, community, and commerce across Africa through fashion, events, media production, social impact, and film screenings.
                            </p>
                            <div class="ul-footer-socials">
                                <a href="https://instagram.com/kojegroup" target="_blank" rel="noopener" aria-label="Instagram">
                                    <i class="flaticon-instagram"></i>
                                </a>
                                <a href="https://twitter.com/kojegroup" target="_blank" rel="noopener" aria-label="Twitter">
                                    <i class="flaticon-twitter"></i>
                                </a>
                                <a href="https://facebook.com/kojegroup" target="_blank" rel="noopener" aria-label="Facebook">
                                    <i class="flaticon-facebook"></i>
                                </a>
                            </div>
                        </div>
                    </div>

                    {{-- Column 2: Quick Links --}}
                    <div class="col-lg-3 col-md-6 col-12 mb-4 mb-lg-0">
                        <div class="ul-footer-widget">
                            <h4 class="ul-footer-widget-title">Quick Links</h4>
                            <ul class="ul-footer-widget-links">
                                <li><a href="{{ route('home') }}">Home</a></li>
                                <li><a href="{{ route('about') }}">About Us</a></li>
                                <li><a href="{{ route('events') }}">Events</a></li>
                                <li><a href="{{ route('gallery') }}">Gallery</a></li>
                                <li><a href="{{ route('contact') }}">Contact</a></li>
                            </ul>
                        </div>
                    </div>

                    {{-- Column 3: Our Arms --}}
                    <div class="col-lg-3 col-md-6 col-12 mb-4 mb-lg-0">
                        <div class="ul-footer-widget">
                            <h4 class="ul-footer-widget-title">Our Arms</h4>
                            <ul class="ul-footer-widget-links">
                                <li><a href="{{ route('koje-originals') }}">Koje Originals</a></li>
                                <li><a href="{{ route('koje-essentials') }}">Koje Essentials</a></li>
                                <li><a href="{{ route('koje-production') }}">Koje Production</a></li>
                                <li><a href="{{ route('koje-initiative') }}">Koje Initiative</a></li>
                                <li><a href="{{ route('koje-vision-screen') }}">Koje Vision Screen</a></li>
                            </ul>
                        </div>
                    </div>

                    {{-- Column 4: Contact Info + Webinar --}}
                    <div class="col-lg-3 col-md-6 col-12">
                        <div class="ul-footer-widget">
                            <h4 class="ul-footer-widget-title">Get In Touch</h4>
                            <ul class="ul-footer-contact-links" style="list-style: none; padding: 0;">
                                <li style="margin-bottom: 12px;">
                                    <a href="mailto:hello@kojegroup.com" style="color: rgba(255,255,255,0.7); display: flex; align-items: center; gap: 8px;">
                                        <i class="flaticon-email" style="color: var(--ul-primary);"></i>
                                        hello@kojegroup.com
                                    </a>
                                </li>
                                <li style="margin-bottom: 12px;">
                                    <a href="tel:+2348000000000" style="color: rgba(255,255,255,0.7); display: flex; align-items: center; gap: 8px;">
                                        <i class="flaticon-phone-call" style="color: var(--ul-primary);"></i>
                                        +234 800 000 0000
                                    </a>
                                </li>
                                <li style="margin-bottom: 12px; color: rgba(255,255,255,0.7); display: flex; align-items: start; gap: 8px;">
                                    <i class="flaticon-pin" style="color: var(--ul-primary); margin-top: 3px;"></i>
                                    Lagos, Nigeria
                                </li>
                            </ul>
                            <div style="margin-top: 20px;">
                                <a href="{{ route('webinar') }}" class="ul-btn" style="font-size: 13px;">
                                    <i class="flaticon-right-arrow"></i>
                                    Register for Webinar
                                </a>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>

    {{-- Footer Bottom: Copyright --}}
    <div class="ul-footer-bottom" style="background-color: #161b22;">
        <div class="ul-footer-container">
            <div class="ul-footer-bottom-wrapper" style="padding: 20px 0; display: flex; align-items: center; justify-content: center; text-align: center;">
                <p class="copyright-txt" style="color: rgba(255,255,255,0.5); margin: 0; font-size: 14px;">
                    &copy; {{ date('Y') }} Koje Group. All rights reserved.
                </p>
            </div>
        </div>
    </div>

</footer>
