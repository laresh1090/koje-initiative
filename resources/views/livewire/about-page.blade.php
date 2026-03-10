<div>
    {{-- BREADCRUMB --}}
    <x-breadcrumb title="About Us" subtitle="Discover the Story Behind Koje Group" />


    {{-- OUR STORY SECTION START --}}
    <section class="ul-about ul-about-2 ul-section-spacing wow animate__fadeInUp">
        <div class="ul-container">
            <div class="row row-cols-md-2 row-cols-1 align-items-center gy-4 ul-about-row">
                {{-- Text Column --}}
                <div class="col">
                    <div class="ul-about-txt">
                        <span class="ul-section-sub-title ul-section-sub-title--2">Our Story</span>
                        <h2 class="ul-section-title">A Creative Conglomerate Born in Lagos</h2>
                        <p class="ul-section-descr">
                            Koje Group is a creative conglomerate based in Lagos, Nigeria, spanning fashion, production, and creative commerce. Founded with a vision to empower Africa's creative economy, we have grown from a single pop-up market into a multi-arm enterprise that touches every dimension of the creative value chain.
                        </p>
                        <p class="ul-section-descr">
                            What began as Koje Initiative -- curating premium platforms for creative entrepreneurs -- has evolved into five distinct business arms: bespoke fashion (Koje Originals), ready-to-wear clothing (Koje Essentials), bulk cloth production (Koje Production), creative entrepreneur programs (Koje Initiative), and digital advertising (Koje Vision Screen). Together, these arms form a unified ecosystem driving Africa's creative economy forward.
                        </p>

                        <div class="ul-about-bottom ul-about-2-bottom">
                            <a href="{{ route('contact') }}" class="ul-btn"><i class="flaticon-fast-forward-double-right-arrows-symbol"></i> Get In Touch</a>
                        </div>
                    </div>
                </div>

                {{-- Image Column --}}
                <div class="col">
                    <div class="ul-about-imgs ul-about-2-img">
                        <div class="img-wrapper">
                            <img src="{{ asset('images/photos/BTA_3420.jpg') }}" alt="Koje Group -- A Creative Conglomerate Based in Lagos, Nigeria">
                        </div>

                        <div class="ul-about-2-stat">
                            <span class="number">5+</span>
                            <span class="txt">Years of Impact</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    {{-- OUR STORY SECTION END --}}


    {{-- MISSION & VISION SECTION START --}}
    <section class="ul-about-tabs ul-events ul-section-spacing pt-0">
        <div class="ul-container">
            {{-- Heading --}}
            <div class="ul-section-heading align-items-center wow animate__fadeInUp">
                <div class="left">
                    <span class="ul-section-sub-title">What Drives Us</span>
                    <h2 class="ul-section-title text-white">Our Mission & Vision</h2>
                </div>
            </div>

            {{-- Tab Group --}}
            <div class="tab-group">
                {{-- Tabs Content --}}
                <div class="ul-about-tabs-wrapper">
                    {{-- Mission Tab --}}
                    <div id="tab-mission" class="ul-tab ul-about-tab active">
                        <div class="ul-about-tab-img">
                            <img src="{{ asset('images/photos/BTA_3386.jpg') }}" alt="Koje Group Mission">
                        </div>

                        <div class="ul-about-tab-txt">
                            <h3 class="ul-about-tab-title">Our Mission</h3>
                            <p class="ul-about-tab-descr">To connect and empower creative entrepreneurs through premium fashion, quality production, and curated platforms.</p>
                            <ul class="ul-about-tab-list">
                                <li>Deliver premium bespoke and ready-to-wear fashion that celebrates African craftsmanship.</li>
                                <li>Provide reliable, high-quality cloth production services at scale.</li>
                                <li>Curate platforms and programs that empower creative entrepreneurs to grow.</li>
                                <li>Offer strategic digital advertising that gives brands premium visibility.</li>
                            </ul>
                        </div>
                    </div>

                    {{-- Vision Tab --}}
                    <div id="tab-vision" class="ul-tab ul-about-tab">
                        <div class="ul-about-tab-img">
                            <img src="{{ asset('images/photos/BTA_3479.jpg') }}" alt="Koje Group Vision">
                        </div>

                        <div class="ul-about-tab-txt">
                            <h3 class="ul-about-tab-title">Our Vision</h3>
                            <p class="ul-about-tab-descr">To be Africa's leading creative commerce group -- connecting fashion, production, and entrepreneurship under one unified ecosystem.</p>
                            <ul class="ul-about-tab-list">
                                <li>Become the benchmark for creative commerce in Africa.</li>
                                <li>Build a vertically integrated fashion and production enterprise.</li>
                                <li>Scale our creative entrepreneur platforms across West Africa.</li>
                                <li>Set the standard for how creative businesses operate and collaborate.</li>
                            </ul>
                        </div>
                    </div>
                </div>

                {{-- Tab Navigation --}}
                <div class="tab-navs ul-about-tabs-nav">
                    <button class="tab-nav active" data-tab="tab-mission">Our Mission</button>
                    <button class="tab-nav" data-tab="tab-vision">Our Vision</button>
                </div>
            </div>

            {{-- Vectors --}}
            <div class="ul-events-vectors">
                <img src="{{ asset('images/template/events-vector-2.svg') }}" alt="Background Vector" class="vector-2">
            </div>
        </div>
    </section>
    {{-- MISSION & VISION SECTION END --}}


    {{-- IMPACT STATS SECTION START --}}
    <div class="ul-stats ul-section-spacing">
        <div class="ul-container">
            <div class="ul-stats-wrapper wow animate__fadeInUp">
                <div class="row row-cols-md-4 row-cols-sm-2 row-cols-2 row-cols-xxs-1 ul-bs-row justify-content-center">
                    {{-- Stat: Years --}}
                    <div class="col">
                        <div class="ul-stats-item">
                            <i class="flaticon-package"></i>
                            <span class="number">5+</span>
                            <span class="txt">Years of Impact</span>
                        </div>
                    </div>

                    {{-- Stat: Vendors --}}
                    <div class="col">
                        <div class="ul-stats-item">
                            <i class="flaticon-costumer"></i>
                            <span class="number">100+</span>
                            <span class="txt">Vendors Served</span>
                        </div>
                    </div>

                    {{-- Stat: Business Arms --}}
                    <div class="col">
                        <div class="ul-stats-item">
                            <i class="flaticon-relationship"></i>
                            <span class="number">5</span>
                            <span class="txt">Business Arms</span>
                        </div>
                    </div>

                    {{-- Stat: Community --}}
                    <div class="col">
                        <div class="ul-stats-item">
                            <i class="flaticon-team"></i>
                            <span class="number">2,000+</span>
                            <span class="txt">Community Members</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    {{-- IMPACT STATS SECTION END --}}


    {{-- OUR ARMS OVERVIEW SECTION START --}}
    <section class="ul-services ul-section-spacing overflow-hidden">
        <div class="ul-container">
            <div class="ul-section-heading justify-content-center text-center">
                <div>
                    <span class="ul-section-sub-title">Our Ecosystem</span>
                    <h2 class="ul-section-title">The Five Arms of Koje Group</h2>
                </div>
            </div>

            <div class="row row-cols-lg-3 row-cols-md-2 row-cols-1 ul-bs-row justify-content-center wow animate__fadeInUp">
                {{-- Arm 1: Koje Originals --}}
                <div class="col">
                    <div class="ul-service">
                        <div class="ul-service-img">
                            <img src="{{ asset('images/photos/BTA_3563.jpg') }}" alt="Koje Originals -- Bespoke Fashion House">
                        </div>
                        <div class="ul-service-txt">
                            <h3 class="ul-service-title"><a href="{{ route('koje-originals') }}">Koje Originals</a></h3>
                            <p class="ul-service-descr">Handcrafted, custom fashion pieces designed to express individuality and celebrate African craftsmanship. From concept to creation, every piece tells a unique story.</p>
                            <a href="{{ route('koje-originals') }}" class="ul-service-btn"><i class="flaticon-up-right-arrow"></i> Learn More</a>
                        </div>
                    </div>
                </div>

                {{-- Arm 2: Koje Essentials --}}
                <div class="col">
                    <div class="ul-service">
                        <div class="ul-service-img">
                            <img src="{{ asset('images/photos/BTA_3566.jpg') }}" alt="Koje Essentials -- Ready-to-Wear Clothing">
                        </div>
                        <div class="ul-service-txt">
                            <h3 class="ul-service-title"><a href="{{ route('koje-essentials') }}">Koje Essentials</a></h3>
                            <p class="ul-service-descr">Curated ready-to-wear collections that bring accessible, quality fashion to everyday life. Style that is always within reach.</p>
                            <a href="{{ route('koje-essentials') }}" class="ul-service-btn"><i class="flaticon-up-right-arrow"></i> Learn More</a>
                        </div>
                    </div>
                </div>

                {{-- Arm 3: Koje Production --}}
                <div class="col">
                    <div class="ul-service">
                        <div class="ul-service-img">
                            <img src="{{ asset('images/photos/BTA_3261.jpg') }}" alt="Koje Production -- Bulk Cloth Production & Uniforms">
                        </div>
                        <div class="ul-service-txt">
                            <h3 class="ul-service-title"><a href="{{ route('koje-production') }}">Koje Production</a></h3>
                            <p class="ul-service-descr">Professional cloth production services for bulk orders, corporate uniforms, school wear, and institutional outfitting at scale.</p>
                            <a href="{{ route('koje-production') }}" class="ul-service-btn"><i class="flaticon-up-right-arrow"></i> Learn More</a>
                        </div>
                    </div>
                </div>

                {{-- Arm 4: Koje Initiative --}}
                <div class="col">
                    <div class="ul-service">
                        <div class="ul-service-img">
                            <img src="{{ asset('images/photos/BTA_3252.jpg') }}" alt="Koje Initiative -- Creative Entrepreneur Programs">
                        </div>
                        <div class="ul-service-txt">
                            <h3 class="ul-service-title"><a href="{{ route('koje-initiative') }}">Koje Initiative</a></h3>
                            <p class="ul-service-descr">Platforms and programs empowering creative entrepreneurs: the Popup Market, Creative Business Summit, and community-building events.</p>
                            <a href="{{ route('koje-initiative') }}" class="ul-service-btn"><i class="flaticon-up-right-arrow"></i> Learn More</a>
                        </div>
                    </div>
                </div>

                {{-- Arm 5: Koje Vision Screen --}}
                <div class="col">
                    <div class="ul-service">
                        <div class="ul-service-img">
                            <img src="{{ asset('images/photos/BTA_3479.jpg') }}" alt="Koje Vision Screen -- Digital Advertising Screens">
                        </div>
                        <div class="ul-service-txt">
                            <h3 class="ul-service-title"><a href="{{ route('koje-vision-screen') }}">Koje Vision Screen</a></h3>
                            <p class="ul-service-descr">Strategic digital advertising screens in high-traffic locations delivering premium brand visibility and measurable reach.</p>
                            <a href="{{ route('koje-vision-screen') }}" class="ul-service-btn"><i class="flaticon-up-right-arrow"></i> Learn More</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    {{-- OUR ARMS OVERVIEW SECTION END --}}


    {{-- CTA SECTION START --}}
    <section class="ul-cta">
        <div class="ul-container">
            <span class="ul-section-sub-title">Be Part of Something Bigger</span>
            <h2 class="ul-cta-title">Ready to Join Our Journey?</h2>
            <div class="ul-banner-btns" style="display: flex; gap: 16px; justify-content: center; flex-wrap: wrap;">
                <a href="{{ route('contact') }}" class="ul-btn"><i class="flaticon-fast-forward-double-right-arrows-symbol"></i> Contact Us</a>
                <a href="{{ route('webinar') }}" class="ul-btn"><i class="flaticon-fast-forward-double-right-arrows-symbol"></i> Join Our Webinar</a>
            </div>
        </div>
        <img src="{{ asset('images/template/cta-vector.svg') }}" alt="Vector" class="ul-cta-vector">
    </section>
    {{-- CTA SECTION END --}}
</div>
