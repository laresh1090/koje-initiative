<div>
    {{-- ============================================================
         SECTION 1: HERO
         ============================================================ --}}
    <section class="position-relative overflow-hidden" style="min-height: 90vh; display: flex; align-items: center;">
        {{-- Background Image --}}
        <div class="position-absolute top-0 start-0 w-100 h-100" style="z-index: 0;">
            <img src="{{ asset('images/photos/BTA_3252.jpg') }}" alt="Creative Business Webinar"
                 style="width: 100%; height: 100%; object-fit: cover;">
        </div>
        {{-- Dark Overlay --}}
        <div class="position-absolute top-0 start-0 w-100 h-100"
             style="background: linear-gradient(135deg, rgba(30,37,47,0.92) 0%, rgba(30,37,47,0.80) 50%, rgba(235,83,16,0.18) 100%); z-index: 1;">
        </div>

        <div class="ul-container position-relative w-100" style="z-index: 2;">
            <div class="row justify-content-center">
                <div class="col-lg-9 text-center" style="padding: clamp(100px, 8vw, 160px) 0 clamp(80px, 6vw, 120px);">
                    {{-- Badge --}}
                    <div class="mb-3 wow fadeInUp">
                        <span style="display: inline-block; padding: 6px 20px; border-radius: 999px; background: rgba(235,83,16,0.2); color: #FAA019; font-weight: 700; font-size: clamp(12px, 0.74vw, 14px); letter-spacing: 0.08em; text-transform: uppercase;">
                            Koje Initiative Presents
                        </span>
                    </div>

                    {{-- Title --}}
                    <h1 class="wow fadeInUp" data-wow-delay="0.1s"
                        style="font-family: var(--font-quicksand); font-weight: 800; font-size: clamp(36px, 4.5vw, 72px); color: #fff; line-height: 1.1; margin-bottom: clamp(15px, 1.2vw, 24px); letter-spacing: -0.03em;">
                        Creative Business<br>Webinar
                    </h1>

                    {{-- Subtitle --}}
                    <p class="wow fadeInUp" data-wow-delay="0.2s"
                       style="font-family: var(--font-primary); font-size: clamp(16px, 1.15vw, 22px); color: rgba(255,255,255,0.85); font-weight: 400; max-width: 600px; margin: 0 auto clamp(20px, 1.6vw, 32px); line-height: 1.6;">
                        Building Profitable Creative Businesses in Nigeria
                    </p>

                    {{-- Date / Time --}}
                    <div class="wow fadeInUp" data-wow-delay="0.3s"
                         style="display: inline-flex; align-items: center; gap: clamp(8px, 0.7vw, 14px); flex-wrap: wrap; justify-content: center; padding: 12px 28px; border-radius: 999px; background: rgba(255,255,255,0.08); border: 1px solid rgba(255,255,255,0.12); margin-bottom: clamp(25px, 2vw, 40px);">
                        <span style="color: #FAA019; font-weight: 700; font-size: clamp(14px, 0.9vw, 17px);">March 29th, 2026</span>
                        <span style="color: rgba(255,255,255,0.3);">|</span>
                        <span style="color: rgba(255,255,255,0.85); font-weight: 500; font-size: clamp(14px, 0.9vw, 17px);">10:00 AM WAT</span>
                        <span style="color: rgba(255,255,255,0.3);">|</span>
                        <span style="color: rgba(255,255,255,0.85); font-weight: 500; font-size: clamp(14px, 0.9vw, 17px);">Online</span>
                    </div>

                    {{-- Countdown Timer --}}
                    <div class="wow fadeInUp" data-wow-delay="0.4s"
                         x-data="{
                             days: 0, hours: 0, minutes: 0, seconds: 0,
                             targetDate: new Date('2026-03-29T10:00:00+01:00').getTime(),
                             expired: false,
                             init() {
                                 this.updateCountdown();
                                 setInterval(() => this.updateCountdown(), 1000);
                             },
                             updateCountdown() {
                                 const now = new Date().getTime();
                                 const distance = this.targetDate - now;
                                 if (distance < 0) {
                                     this.expired = true;
                                     return;
                                 }
                                 this.days = Math.floor(distance / (1000 * 60 * 60 * 24));
                                 this.hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
                                 this.minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
                                 this.seconds = Math.floor((distance % (1000 * 60)) / 1000);
                             }
                         }"
                         style="margin-bottom: clamp(30px, 2.5vw, 48px);">
                        <template x-if="!expired">
                            <div style="display: flex; justify-content: center; gap: clamp(12px, 1.2vw, 24px); flex-wrap: wrap;">
                                <div style="text-align: center; min-width: 70px;">
                                    <div x-text="String(days).padStart(2, '0')"
                                         style="font-family: var(--font-quicksand); font-weight: 800; font-size: clamp(32px, 3vw, 52px); color: #fff; line-height: 1;">
                                    </div>
                                    <div style="font-size: clamp(11px, 0.68vw, 13px); color: rgba(255,255,255,0.5); text-transform: uppercase; letter-spacing: 0.1em; font-weight: 600; margin-top: 4px;">Days</div>
                                </div>
                                <div style="font-family: var(--font-quicksand); font-weight: 800; font-size: clamp(32px, 3vw, 52px); color: #EB5310; line-height: 1;">:</div>
                                <div style="text-align: center; min-width: 70px;">
                                    <div x-text="String(hours).padStart(2, '0')"
                                         style="font-family: var(--font-quicksand); font-weight: 800; font-size: clamp(32px, 3vw, 52px); color: #fff; line-height: 1;">
                                    </div>
                                    <div style="font-size: clamp(11px, 0.68vw, 13px); color: rgba(255,255,255,0.5); text-transform: uppercase; letter-spacing: 0.1em; font-weight: 600; margin-top: 4px;">Hours</div>
                                </div>
                                <div style="font-family: var(--font-quicksand); font-weight: 800; font-size: clamp(32px, 3vw, 52px); color: #EB5310; line-height: 1;">:</div>
                                <div style="text-align: center; min-width: 70px;">
                                    <div x-text="String(minutes).padStart(2, '0')"
                                         style="font-family: var(--font-quicksand); font-weight: 800; font-size: clamp(32px, 3vw, 52px); color: #fff; line-height: 1;">
                                    </div>
                                    <div style="font-size: clamp(11px, 0.68vw, 13px); color: rgba(255,255,255,0.5); text-transform: uppercase; letter-spacing: 0.1em; font-weight: 600; margin-top: 4px;">Minutes</div>
                                </div>
                                <div style="font-family: var(--font-quicksand); font-weight: 800; font-size: clamp(32px, 3vw, 52px); color: #EB5310; line-height: 1;">:</div>
                                <div style="text-align: center; min-width: 70px;">
                                    <div x-text="String(seconds).padStart(2, '0')"
                                         style="font-family: var(--font-quicksand); font-weight: 800; font-size: clamp(32px, 3vw, 52px); color: #fff; line-height: 1;">
                                    </div>
                                    <div style="font-size: clamp(11px, 0.68vw, 13px); color: rgba(255,255,255,0.5); text-transform: uppercase; letter-spacing: 0.1em; font-weight: 600; margin-top: 4px;">Seconds</div>
                                </div>
                            </div>
                        </template>
                        <template x-if="expired">
                            <p style="color: #FAA019; font-weight: 700; font-size: clamp(18px, 1.2vw, 24px);">The webinar has started!</p>
                        </template>
                    </div>

                    {{-- CTA Button --}}
                    <div class="wow fadeInUp" data-wow-delay="0.5s">
                        <a href="#registration" class="ul-btn" style="font-size: clamp(14px, 0.95vw, 17px); padding: 0 clamp(20px, 1.5vw, 30px) 0 clamp(8px, 0.5vw, 10px);">
                            <i class="flaticon-right-arrow"></i>
                            Register Now - It's Free
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>


    {{-- ============================================================
         SECTION 2: ABOUT THE WEBINAR
         ============================================================ --}}
    <section class="ul-section-spacing" style="background-color: #FFF9F4;">
        <div class="ul-container">
            <div class="row align-items-center" style="gap: clamp(30px, 2.5vw, 50px) 0;">
                {{-- Text Column --}}
                <div class="col-lg-6">
                    <span class="ul-section-sub-title koje-accent wow fadeInUp">About the Webinar</span>
                    <h2 class="ul-section-title wow fadeInUp" data-wow-delay="0.1s">
                        What Is the Creative Business Webinar?
                    </h2>
                    <p class="ul-section-descr wow fadeInUp" data-wow-delay="0.2s" style="margin-bottom: clamp(20px, 1.6vw, 30px); line-height: 1.75;">
                        The Creative Business Webinar is a <strong>Koje Initiative</strong> program designed to equip creative entrepreneurs in Nigeria with the knowledge and tools they need to build profitable, sustainable businesses from their creative talents.
                    </p>

                    <div class="wow fadeInUp" data-wow-delay="0.3s">
                        <h5 style="font-family: var(--font-quicksand); font-weight: 700; font-size: clamp(16px, 1.05vw, 20px); color: var(--ul-black); margin-bottom: clamp(12px, 0.84vw, 16px);">
                            What You'll Learn:
                        </h5>
                        <ul style="list-style: none; padding: 0; display: flex; flex-direction: column; gap: clamp(10px, 0.74vw, 14px);">
                            <li style="display: flex; align-items: flex-start; gap: 12px;">
                                <span style="display: inline-flex; align-items: center; justify-content: center; width: 24px; height: 24px; min-width: 24px; border-radius: 50%; background: rgba(235,83,16,0.1); color: #EB5310; font-size: 12px; margin-top: 2px;">
                                    <i class="flaticon-check"></i>
                                </span>
                                <span style="color: var(--ul-p); font-size: clamp(13px, 0.84vw, 16px); line-height: 1.6;">Building a sustainable creative business from the ground up</span>
                            </li>
                            <li style="display: flex; align-items: flex-start; gap: 12px;">
                                <span style="display: inline-flex; align-items: center; justify-content: center; width: 24px; height: 24px; min-width: 24px; border-radius: 50%; background: rgba(235,83,16,0.1); color: #EB5310; font-size: 12px; margin-top: 2px;">
                                    <i class="flaticon-check"></i>
                                </span>
                                <span style="color: var(--ul-p); font-size: clamp(13px, 0.84vw, 16px); line-height: 1.6;">Pricing your creative work to reflect true value</span>
                            </li>
                            <li style="display: flex; align-items: flex-start; gap: 12px;">
                                <span style="display: inline-flex; align-items: center; justify-content: center; width: 24px; height: 24px; min-width: 24px; border-radius: 50%; background: rgba(235,83,16,0.1); color: #EB5310; font-size: 12px; margin-top: 2px;">
                                    <i class="flaticon-check"></i>
                                </span>
                                <span style="color: var(--ul-p); font-size: clamp(13px, 0.84vw, 16px); line-height: 1.6;">Marketing and brand building strategies for creatives</span>
                            </li>
                            <li style="display: flex; align-items: flex-start; gap: 12px;">
                                <span style="display: inline-flex; align-items: center; justify-content: center; width: 24px; height: 24px; min-width: 24px; border-radius: 50%; background: rgba(235,83,16,0.1); color: #EB5310; font-size: 12px; margin-top: 2px;">
                                    <i class="flaticon-check"></i>
                                </span>
                                <span style="color: var(--ul-p); font-size: clamp(13px, 0.84vw, 16px); line-height: 1.6;">Financial management for creative professionals</span>
                            </li>
                            <li style="display: flex; align-items: flex-start; gap: 12px;">
                                <span style="display: inline-flex; align-items: center; justify-content: center; width: 24px; height: 24px; min-width: 24px; border-radius: 50%; background: rgba(235,83,16,0.1); color: #EB5310; font-size: 12px; margin-top: 2px;">
                                    <i class="flaticon-check"></i>
                                </span>
                                <span style="color: var(--ul-p); font-size: clamp(13px, 0.84vw, 16px); line-height: 1.6;">Scaling from side hustle to full-time business</span>
                            </li>
                        </ul>
                    </div>
                </div>

                {{-- Image Column --}}
                <div class="col-lg-6 wow fadeInRight" data-wow-delay="0.2s">
                    <div style="border-radius: var(--koje-radius-xl); overflow: hidden; box-shadow: var(--koje-shadow-lg);">
                        <img src="{{ asset('images/photos/BTA_3386.jpg') }}" alt="Koje Initiative Creative Entrepreneurs"
                             style="width: 100%; height: auto; display: block; aspect-ratio: 4/3; object-fit: cover;">
                    </div>
                </div>
            </div>
        </div>
    </section>


    {{-- ============================================================
         SECTION 3: WHO SHOULD ATTEND
         ============================================================ --}}
    <section class="ul-section-spacing" style="background-color: #fff;">
        <div class="ul-container">
            <div class="text-center" style="margin-bottom: clamp(30px, 2.5vw, 50px);">
                <span class="ul-section-sub-title koje-accent wow fadeInUp">Who Is This For?</span>
                <h2 class="ul-section-title wow fadeInUp" data-wow-delay="0.1s">
                    Who Should Attend
                </h2>
                <p class="ul-section-descr wow fadeInUp" data-wow-delay="0.2s" style="max-width: 600px; margin: 0 auto;">
                    Whether you're just starting out or looking to scale, this webinar is designed for creative minds ready to build real businesses.
                </p>
            </div>

            <div class="row g-3 g-lg-4 justify-content-center">
                @php
                    $attendees = [
                        ['icon' => 'flaticon-love', 'title' => 'Fashion Designers'],
                        ['icon' => 'flaticon-creativity', 'title' => 'Artists'],
                        ['icon' => 'flaticon-photo-camera', 'title' => 'Photographers'],
                        ['icon' => 'flaticon-video-camera', 'title' => 'Content Creators'],
                        ['icon' => 'flaticon-handicraft', 'title' => 'Craft Makers'],
                        ['icon' => 'flaticon-music', 'title' => 'Musicians'],
                        ['icon' => 'flaticon-pen', 'title' => 'Writers'],
                        ['icon' => 'flaticon-rocket', 'title' => 'Entrepreneurs'],
                    ];
                @endphp

                @foreach($attendees as $index => $attendee)
                    <div class="col-6 col-md-4 col-lg-3 wow fadeInUp" data-wow-delay="{{ 0.1 * $index }}s">
                        <div style="background: #FFF9F4; border-radius: var(--koje-radius-lg); padding: clamp(24px, 2vw, 36px) clamp(16px, 1.2vw, 24px); text-align: center; transition: all 0.4s ease; border: 1px solid transparent;"
                             onmouseenter="this.style.borderColor='#EB5310'; this.style.boxShadow='var(--koje-shadow-card-hover)'; this.style.transform='translateY(-4px)';"
                             onmouseleave="this.style.borderColor='transparent'; this.style.boxShadow='none'; this.style.transform='translateY(0)';">
                            <div style="width: clamp(50px, 3.5vw, 64px); height: clamp(50px, 3.5vw, 64px); border-radius: 50%; background: linear-gradient(135deg, #EB5310, #FAA019); display: flex; align-items: center; justify-content: center; margin: 0 auto clamp(12px, 1vw, 18px);">
                                <i class="{{ $attendee['icon'] }}" style="color: #fff; font-size: clamp(20px, 1.5vw, 28px);"></i>
                            </div>
                            <h6 style="font-family: var(--font-quicksand); font-weight: 700; font-size: clamp(14px, 0.9vw, 17px); color: var(--ul-black); margin: 0;">
                                {{ $attendee['title'] }}
                            </h6>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>


    {{-- ============================================================
         SECTION 4: EVENT DETAILS
         ============================================================ --}}
    <section class="ul-section-spacing" style="background: linear-gradient(135deg, #1E252F 0%, #2a3342 100%);">
        <div class="ul-container">
            <div class="text-center" style="margin-bottom: clamp(30px, 2.5vw, 50px);">
                <span class="wow fadeInUp" style="display: inline-block; padding: 6px 20px; border-radius: 999px; background: rgba(235,83,16,0.15); color: #FAA019; font-weight: 700; font-size: clamp(12px, 0.74vw, 14px); letter-spacing: 0.08em; text-transform: uppercase; margin-bottom: clamp(10px, 0.7vw, 14px);">
                    Event Details
                </span>
                <h2 class="wow fadeInUp" data-wow-delay="0.1s"
                    style="font-family: var(--font-quicksand); font-weight: 800; font-size: clamp(25px, 2.63vw, 50px); color: #fff; letter-spacing: -0.03em;">
                    Everything You Need to Know
                </h2>
            </div>

            <div class="row g-3 g-lg-4 justify-content-center">
                @php
                    $details = [
                        ['icon' => 'flaticon-calendar', 'label' => 'Date', 'value' => 'March 29th, 2026'],
                        ['icon' => 'flaticon-clock', 'label' => 'Time', 'value' => '10:00 AM WAT'],
                        ['icon' => 'flaticon-hourglass', 'label' => 'Duration', 'value' => '2 - 3 Hours'],
                        ['icon' => 'flaticon-video-camera', 'label' => 'Platform', 'value' => 'Online - Zoom'],
                        ['icon' => 'flaticon-gift', 'label' => 'Cost', 'value' => 'Completely Free'],
                        ['icon' => 'flaticon-pen', 'label' => 'Requirements', 'value' => 'A notebook & an open mind'],
                    ];
                @endphp

                @foreach($details as $index => $detail)
                    <div class="col-6 col-md-4 col-lg-2 wow fadeInUp" data-wow-delay="{{ 0.1 * $index }}s">
                        <div style="background: rgba(255,255,255,0.05); border: 1px solid rgba(255,255,255,0.08); border-radius: var(--koje-radius-lg); padding: clamp(20px, 1.6vw, 30px) clamp(14px, 1vw, 20px); text-align: center; height: 100%;">
                            <div style="width: clamp(44px, 3vw, 56px); height: clamp(44px, 3vw, 56px); border-radius: 50%; background: rgba(235,83,16,0.15); display: flex; align-items: center; justify-content: center; margin: 0 auto clamp(12px, 0.8vw, 16px);">
                                <i class="{{ $detail['icon'] }}" style="color: #FAA019; font-size: clamp(18px, 1.2vw, 24px);"></i>
                            </div>
                            <div style="font-size: clamp(11px, 0.68vw, 13px); color: rgba(255,255,255,0.5); text-transform: uppercase; letter-spacing: 0.08em; font-weight: 600; margin-bottom: 6px;">
                                {{ $detail['label'] }}
                            </div>
                            <div style="font-family: var(--font-quicksand); font-weight: 700; font-size: clamp(14px, 0.9vw, 17px); color: #fff;">
                                {{ $detail['value'] }}
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>


    {{-- ============================================================
         SECTION 5: REGISTRATION FORM
         ============================================================ --}}
    <section id="registration" class="ul-section-spacing" style="background-color: #FFF9F4;">
        <div class="ul-container">
            <div class="text-center" style="margin-bottom: clamp(30px, 2.5vw, 50px);">
                <span class="ul-section-sub-title koje-accent wow fadeInUp">Secure Your Spot</span>
                <h2 class="ul-section-title wow fadeInUp" data-wow-delay="0.1s">
                    Register for the Webinar
                </h2>
                <p class="ul-section-descr wow fadeInUp" data-wow-delay="0.2s" style="max-width: 560px; margin: 0 auto;">
                    Spots are limited. Register now to save your seat and receive the webinar link directly in your inbox.
                </p>
            </div>

            <div class="row g-4 g-lg-5 align-items-start justify-content-center">
                {{-- Left Column: Benefits & Social Proof --}}
                <div class="col-lg-5 wow fadeInLeft" data-wow-delay="0.1s">
                    <div style="padding: clamp(24px, 2vw, 40px); background: #fff; border-radius: var(--koje-radius-xl); box-shadow: var(--koje-shadow-md);">
                        <h5 style="font-family: var(--font-quicksand); font-weight: 700; font-size: clamp(18px, 1.2vw, 22px); color: var(--ul-black); margin-bottom: clamp(18px, 1.4vw, 26px);">
                            Why Register?
                        </h5>
                        <ul style="list-style: none; padding: 0; display: flex; flex-direction: column; gap: clamp(14px, 1vw, 20px);">
                            <li style="display: flex; align-items: flex-start; gap: 14px;">
                                <span style="display: inline-flex; align-items: center; justify-content: center; width: 36px; height: 36px; min-width: 36px; border-radius: 50%; background: linear-gradient(135deg, #EB5310, #FAA019); margin-top: 2px;">
                                    <i class="flaticon-check" style="color: #fff; font-size: 13px;"></i>
                                </span>
                                <div>
                                    <strong style="color: var(--ul-black); font-size: clamp(14px, 0.9vw, 16px);">100% Free</strong>
                                    <p style="color: var(--ul-p); font-size: clamp(13px, 0.8vw, 15px); margin: 4px 0 0; line-height: 1.5;">No hidden fees. Completely free access to world-class insights.</p>
                                </div>
                            </li>
                            <li style="display: flex; align-items: flex-start; gap: 14px;">
                                <span style="display: inline-flex; align-items: center; justify-content: center; width: 36px; height: 36px; min-width: 36px; border-radius: 50%; background: linear-gradient(135deg, #EB5310, #FAA019); margin-top: 2px;">
                                    <i class="flaticon-check" style="color: #fff; font-size: 13px;"></i>
                                </span>
                                <div>
                                    <strong style="color: var(--ul-black); font-size: clamp(14px, 0.9vw, 16px);">Get the Recording</strong>
                                    <p style="color: var(--ul-p); font-size: clamp(13px, 0.8vw, 15px); margin: 4px 0 0; line-height: 1.5;">Can't make it live? Registered attendees get the full recording.</p>
                                </div>
                            </li>
                            <li style="display: flex; align-items: flex-start; gap: 14px;">
                                <span style="display: inline-flex; align-items: center; justify-content: center; width: 36px; height: 36px; min-width: 36px; border-radius: 50%; background: linear-gradient(135deg, #EB5310, #FAA019); margin-top: 2px;">
                                    <i class="flaticon-check" style="color: #fff; font-size: 13px;"></i>
                                </span>
                                <div>
                                    <strong style="color: var(--ul-black); font-size: clamp(14px, 0.9vw, 16px);">Live Q&A Session</strong>
                                    <p style="color: var(--ul-p); font-size: clamp(13px, 0.8vw, 15px); margin: 4px 0 0; line-height: 1.5;">Get your specific questions answered by experienced professionals.</p>
                                </div>
                            </li>
                            <li style="display: flex; align-items: flex-start; gap: 14px;">
                                <span style="display: inline-flex; align-items: center; justify-content: center; width: 36px; height: 36px; min-width: 36px; border-radius: 50%; background: linear-gradient(135deg, #EB5310, #FAA019); margin-top: 2px;">
                                    <i class="flaticon-check" style="color: #fff; font-size: 13px;"></i>
                                </span>
                                <div>
                                    <strong style="color: var(--ul-black); font-size: clamp(14px, 0.9vw, 16px);">Networking Opportunity</strong>
                                    <p style="color: var(--ul-p); font-size: clamp(13px, 0.8vw, 15px); margin: 4px 0 0; line-height: 1.5;">Connect with other creative entrepreneurs across Nigeria.</p>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>

                {{-- Right Column: Registration Form --}}
                <div class="col-lg-6 wow fadeInRight" data-wow-delay="0.2s">
                    <div style="padding: clamp(28px, 2.2vw, 44px); background: #fff; border-radius: var(--koje-radius-xl); box-shadow: var(--koje-shadow-lg); border-top: 4px solid #EB5310;">

                        {{-- Success Message --}}
                        @if($showSuccess)
                            <div style="background: rgba(46,204,113,0.08); border: 1px solid rgba(46,204,113,0.3); border-radius: var(--koje-radius-md); padding: clamp(20px, 1.6vw, 30px); text-align: center; margin-bottom: 0;">
                                <div style="width: 56px; height: 56px; border-radius: 50%; background: rgba(46,204,113,0.15); display: flex; align-items: center; justify-content: center; margin: 0 auto 16px;">
                                    <svg width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="#2ECC71" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round">
                                        <polyline points="20 6 9 17 4 12"></polyline>
                                    </svg>
                                </div>
                                <h5 style="font-family: var(--font-quicksand); font-weight: 700; font-size: clamp(18px, 1.2vw, 22px); color: #1E252F; margin-bottom: 8px;">
                                    You're Registered!
                                </h5>
                                <p style="color: var(--ul-p); font-size: clamp(14px, 0.9vw, 16px); margin: 0; line-height: 1.6;">
                                    We'll send you the webinar link via email before March 29th. Check your inbox!
                                </p>
                            </div>
                        @else
                            <h5 style="font-family: var(--font-quicksand); font-weight: 700; font-size: clamp(18px, 1.2vw, 22px); color: var(--ul-black); margin-bottom: clamp(6px, 0.4vw, 8px);">
                                Fill in Your Details
                            </h5>
                            <p style="color: var(--ul-p); font-size: clamp(13px, 0.8vw, 15px); margin-bottom: clamp(20px, 1.6vw, 30px);">
                                All fields are required. We'll email you the webinar link.
                            </p>

                            <form wire:submit="register">
                                {{-- Full Name --}}
                                <div class="koje-form-group">
                                    <label for="full_name" class="koje-form-label">Full Name</label>
                                    <input type="text"
                                           id="full_name"
                                           wire:model="full_name"
                                           class="koje-form-input @error('full_name') error @enderror"
                                           placeholder="Enter your full name">
                                    @error('full_name')
                                        <span class="koje-form-error-text">{{ $message }}</span>
                                    @enderror
                                </div>

                                {{-- Email Address --}}
                                <div class="koje-form-group">
                                    <label for="email" class="koje-form-label">Email Address</label>
                                    <input type="email"
                                           id="email"
                                           wire:model="email"
                                           class="koje-form-input @error('email') error @enderror"
                                           placeholder="Enter your email address">
                                    @error('email')
                                        <span class="koje-form-error-text">{{ $message }}</span>
                                    @enderror
                                </div>

                                {{-- Phone Number --}}
                                <div class="koje-form-group">
                                    <label for="phone" class="koje-form-label">Phone Number</label>
                                    <input type="tel"
                                           id="phone"
                                           wire:model="phone"
                                           class="koje-form-input @error('phone') error @enderror"
                                           placeholder="e.g. +234 801 234 5678">
                                    @error('phone')
                                        <span class="koje-form-error-text">{{ $message }}</span>
                                    @enderror
                                </div>

                                {{-- Source (How did you hear about us?) --}}
                                <div class="koje-form-group">
                                    <label for="source" class="koje-form-label">How did you hear about us?</label>
                                    <select id="source"
                                            wire:model="source"
                                            class="koje-form-input @error('source') error @enderror"
                                            style="appearance: auto; cursor: pointer;">
                                        <option value="">-- Select an option --</option>
                                        <option value="social_media">Social Media</option>
                                        <option value="friend">Friend / Word of Mouth</option>
                                        <option value="email">Email Newsletter</option>
                                        <option value="website">Koje Website</option>
                                        <option value="event">Attended a Previous Event</option>
                                        <option value="other">Other</option>
                                    </select>
                                    @error('source')
                                        <span class="koje-form-error-text">{{ $message }}</span>
                                    @enderror
                                </div>

                                {{-- Submit Button --}}
                                <button type="submit"
                                        class="ul-btn ul-btn--full"
                                        wire:loading.attr="disabled"
                                        style="height: clamp(50px, 3.2vw, 60px); border-radius: var(--koje-radius-sm); font-size: clamp(14px, 0.95vw, 17px); margin-top: clamp(8px, 0.6vw, 12px);">
                                    <span wire:loading.remove wire:target="register">
                                        <i class="flaticon-right-arrow"></i>
                                        Register Now
                                    </span>
                                    <span wire:loading wire:target="register" style="display: inline-flex; align-items: center; gap: 10px;">
                                        <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" style="animation: spin 0.8s linear infinite;">
                                            <path d="M12 2v4M12 18v4M4.93 4.93l2.83 2.83M16.24 16.24l2.83 2.83M2 12h4M18 12h4M4.93 19.07l2.83-2.83M16.24 7.76l2.83-2.83"/>
                                        </svg>
                                        Registering...
                                    </span>
                                </button>
                            </form>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </section>


    {{-- ============================================================
         SECTION 6: FAQ
         ============================================================ --}}
    <section class="ul-section-spacing" style="background-color: #fff;">
        <div class="ul-container">
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="text-center" style="margin-bottom: clamp(30px, 2.5vw, 50px);">
                        <span class="ul-section-sub-title koje-accent wow fadeInUp">Got Questions?</span>
                        <h2 class="ul-section-title wow fadeInUp" data-wow-delay="0.1s">
                            Frequently Asked Questions
                        </h2>
                    </div>

                    <div x-data="{ open: null }" class="wow fadeInUp" data-wow-delay="0.2s" style="display: flex; flex-direction: column; gap: clamp(10px, 0.74vw, 14px);">
                        @php
                            $faqs = [
                                [
                                    'question' => 'Is the webinar really free?',
                                    'answer' => 'Yes, the Creative Business Webinar is completely free! This is a Koje Initiative program designed to empower creative entrepreneurs. There are no hidden fees or charges whatsoever.',
                                ],
                                [
                                    'question' => 'How do I join the webinar?',
                                    'answer' => 'Simply register using the form above. Once registered, we will send you the Zoom meeting link via email before the event date. Make sure to check your inbox (and spam folder) closer to March 29th.',
                                ],
                                [
                                    'question' => 'Will there be a recording available?',
                                    'answer' => 'Yes! All registered attendees will receive a link to the full recording after the webinar. However, we highly recommend attending live so you can participate in the Q&A session.',
                                ],
                                [
                                    'question' => 'Can I ask questions during the webinar?',
                                    'answer' => 'Absolutely! There will be a dedicated Q&A session where you can ask questions and get personalized advice. You can also use the chat feature throughout the webinar.',
                                ],
                                [
                                    'question' => 'Who is organizing this webinar?',
                                    'answer' => 'This webinar is organized by Koje Initiative, the community empowerment arm of Koje Group. Koje Initiative focuses on equipping creative entrepreneurs with the tools and knowledge they need to thrive.',
                                ],
                            ];
                        @endphp

                        @foreach($faqs as $index => $faq)
                            <div style="border-radius: var(--koje-radius-md); overflow: hidden; transition: all 0.3s ease;"
                                 :style="open === {{ $index }} ? 'background: #fff; border: 1px solid rgba(235,83,16,0.2); box-shadow: 0 2px 8px rgba(0,0,0,0.04);' : 'background: #F4F4F4; border: 1px solid #F4F4F4;'">
                                <button @click="open = open === {{ $index }} ? null : {{ $index }}"
                                        style="width: 100%; display: flex; align-items: center; justify-content: space-between; padding: clamp(16px, 1.2vw, 22px) clamp(18px, 1.4vw, 26px); border: none; background: none; cursor: pointer; gap: 16px; text-align: left;">
                                    <span style="font-family: var(--font-quicksand); font-weight: 700; font-size: clamp(15px, 0.95vw, 18px); color: var(--ul-black);">
                                        {{ $faq['question'] }}
                                    </span>
                                    <span style="display: flex; align-items: center; justify-content: center; width: 28px; height: 28px; min-width: 28px; border-radius: 50%; transition: all 0.3s ease;"
                                          :style="open === {{ $index }} ? 'background: #EB5310; transform: rotate(45deg);' : 'background: rgba(235,83,16,0.1); transform: rotate(0deg);'">
                                        <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke-width="2.5" stroke-linecap="round"
                                             :stroke="open === {{ $index }} ? '#fff' : '#EB5310'">
                                            <line x1="12" y1="5" x2="12" y2="19"></line>
                                            <line x1="5" y1="12" x2="19" y2="12"></line>
                                        </svg>
                                    </span>
                                </button>
                                <div x-show="open === {{ $index }}"
                                     x-transition:enter="transition ease-out duration-200"
                                     x-transition:enter-start="opacity-0 transform -translate-y-2"
                                     x-transition:enter-end="opacity-100 transform translate-y-0"
                                     x-transition:leave="transition ease-in duration-150"
                                     x-transition:leave-start="opacity-100"
                                     x-transition:leave-end="opacity-0"
                                     x-cloak
                                     style="padding: 0 clamp(18px, 1.4vw, 26px) clamp(16px, 1.2vw, 22px);">
                                    <p style="color: var(--ul-p); font-size: clamp(13px, 0.84vw, 16px); line-height: 1.75; margin: 0;">
                                        {{ $faq['answer'] }}
                                    </p>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </section>


    {{-- ============================================================
         SECTION 7: FINAL CTA
         ============================================================ --}}
    <section style="background: linear-gradient(135deg, #1E252F 0%, #2a3342 50%, #1E252F 100%); padding: clamp(60px, 5vw, 100px) 0; position: relative; overflow: hidden;">
        {{-- Decorative elements --}}
        <div style="position: absolute; top: -50px; right: -50px; width: 200px; height: 200px; border-radius: 50%; background: rgba(235,83,16,0.06);"></div>
        <div style="position: absolute; bottom: -30px; left: -30px; width: 150px; height: 150px; border-radius: 50%; background: rgba(250,160,25,0.05);"></div>

        <div class="ul-container position-relative" style="z-index: 1;">
            <div class="row justify-content-center">
                <div class="col-lg-8 text-center">
                    <h2 class="wow fadeInUp"
                        style="font-family: var(--font-quicksand); font-weight: 800; font-size: clamp(28px, 2.63vw, 50px); color: #fff; margin-bottom: clamp(12px, 1vw, 20px); letter-spacing: -0.03em;">
                        Don't Miss Out!
                    </h2>
                    <p class="wow fadeInUp" data-wow-delay="0.1s"
                       style="color: rgba(255,255,255,0.7); font-size: clamp(15px, 1vw, 18px); max-width: 520px; margin: 0 auto clamp(24px, 2vw, 40px); line-height: 1.7;">
                        Secure your spot now and take the first step toward building a profitable creative business. March 29th, 2026.
                    </p>

                    {{-- CTA Button --}}
                    <div class="wow fadeInUp" data-wow-delay="0.2s" style="margin-bottom: clamp(24px, 2vw, 40px);">
                        <a href="#registration" class="ul-btn" style="font-size: clamp(14px, 0.95vw, 17px); padding: 0 clamp(20px, 1.5vw, 30px) 0 clamp(8px, 0.5vw, 10px);">
                            <i class="flaticon-right-arrow"></i>
                            Register Now - It's Free
                        </a>
                    </div>

                    {{-- Social Share --}}
                    <div class="wow fadeInUp" data-wow-delay="0.3s">
                        <p style="color: rgba(255,255,255,0.4); font-size: clamp(12px, 0.74vw, 14px); font-weight: 600; text-transform: uppercase; letter-spacing: 0.08em; margin-bottom: clamp(12px, 0.8vw, 16px);">
                            Share with a friend
                        </p>
                        <div style="display: flex; justify-content: center; gap: clamp(10px, 0.8vw, 16px);">
                            {{-- WhatsApp Share --}}
                            <a href="https://wa.me/?text={{ urlencode('Join me at the Creative Business Webinar by Koje Initiative! Free online event on March 29th, 2026. Register here: ' . url('/webinar')) }}"
                               target="_blank"
                               rel="noopener noreferrer"
                               style="display: inline-flex; align-items: center; gap: 8px; padding: 10px 20px; border-radius: 999px; background: #25D366; color: #fff; font-weight: 700; font-size: clamp(13px, 0.84vw, 15px); text-decoration: none; transition: all 0.3s ease;"
                               onmouseenter="this.style.opacity='0.85'; this.style.transform='translateY(-2px)';"
                               onmouseleave="this.style.opacity='1'; this.style.transform='translateY(0)';">
                                <svg width="18" height="18" viewBox="0 0 24 24" fill="currentColor">
                                    <path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893a11.821 11.821 0 00-3.48-8.413z"/>
                                </svg>
                                WhatsApp
                            </a>

                            {{-- Twitter / X Share --}}
                            <a href="https://twitter.com/intent/tweet?text={{ urlencode('Join the Creative Business Webinar by @KojeGroup! Free online event for creative entrepreneurs. March 29th, 2026.') }}&url={{ urlencode(url('/webinar')) }}"
                               target="_blank"
                               rel="noopener noreferrer"
                               style="display: inline-flex; align-items: center; gap: 8px; padding: 10px 20px; border-radius: 999px; background: #000; color: #fff; font-weight: 700; font-size: clamp(13px, 0.84vw, 15px); text-decoration: none; transition: all 0.3s ease;"
                               onmouseenter="this.style.opacity='0.85'; this.style.transform='translateY(-2px)';"
                               onmouseleave="this.style.opacity='1'; this.style.transform='translateY(0)';">
                                <svg width="16" height="16" viewBox="0 0 24 24" fill="currentColor">
                                    <path d="M18.244 2.25h3.308l-7.227 8.26 8.502 11.24H16.17l-5.214-6.817L4.99 21.75H1.68l7.73-8.835L1.254 2.25H8.08l4.713 6.231zm-1.161 17.52h1.833L7.084 4.126H5.117z"/>
                                </svg>
                                Post on X
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
