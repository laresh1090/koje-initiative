<div>
    {{-- Breadcrumb --}}
    <x-breadcrumb title="Events" subtitle="Discover What's Happening" />

    <style>
        /* Tab Navigation Styles */
        .koje-event-tabs {
            display: flex;
            gap: 10px;
            margin-bottom: 40px;
            border-bottom: 2px solid #e9ecef;
            padding-bottom: 0;
            justify-content: center;
            list-style: none;
            padding-left: 0;
        }
        .koje-event-tabs .nav-link {
            background: none;
            border: none;
            border-bottom: 3px solid transparent;
            padding: 12px 28px;
            font-size: 16px;
            font-weight: 600;
            color: #6c757d;
            cursor: pointer;
            transition: all 0.3s ease;
            margin-bottom: -2px;
        }
        .koje-event-tabs .nav-link:hover {
            color: #EB5310;
        }
        .koje-event-tabs .nav-link.active {
            color: #EB5310;
            border-bottom-color: #EB5310;
        }

        /* Featured Event Banner */
        .koje-featured-event {
            background: linear-gradient(135deg, #1E252F 0%, #2a3442 100%);
            border-radius: 16px;
            overflow: hidden;
            margin-bottom: 48px;
            position: relative;
        }
        .koje-featured-event .featured-badge {
            position: absolute;
            top: 20px;
            left: 20px;
            background: #EB5310;
            color: #fff;
            padding: 6px 18px;
            border-radius: 30px;
            font-size: 13px;
            font-weight: 700;
            text-transform: uppercase;
            letter-spacing: 1px;
            z-index: 2;
        }
        .koje-featured-event .featured-img {
            width: 100%;
            height: 360px;
            object-fit: cover;
        }
        @media (min-width: 992px) {
            .koje-featured-event .featured-img {
                height: 100%;
                min-height: 400px;
            }
        }
        .koje-featured-event .featured-content {
            padding: 40px;
            display: flex;
            flex-direction: column;
            justify-content: center;
        }
        .koje-featured-event .featured-date {
            display: inline-flex;
            align-items: center;
            gap: 8px;
            background: rgba(235, 83, 16, 0.15);
            color: #EB5310;
            padding: 6px 16px;
            border-radius: 30px;
            font-size: 14px;
            font-weight: 600;
            margin-bottom: 16px;
            width: fit-content;
        }
        .koje-featured-event .featured-title {
            color: #fff;
            font-size: 28px;
            font-weight: 800;
            margin-bottom: 12px;
            font-family: var(--font-quicksand, 'Quicksand', sans-serif);
        }
        .koje-featured-event .featured-location {
            color: rgba(255,255,255,0.6);
            font-size: 15px;
            margin-bottom: 16px;
        }
        .koje-featured-event .featured-location i {
            margin-right: 6px;
            color: #FAA019;
        }
        .koje-featured-event .featured-descr {
            color: rgba(255,255,255,0.8);
            font-size: 15px;
            line-height: 1.7;
            margin-bottom: 24px;
        }
        .koje-featured-event .featured-arm {
            display: inline-block;
            background: rgba(250, 160, 25, 0.15);
            color: #FAA019;
            padding: 4px 14px;
            border-radius: 20px;
            font-size: 13px;
            font-weight: 600;
            margin-bottom: 16px;
            width: fit-content;
        }

        /* Event Cards Grid */
        .koje-event-card {
            background: #fff;
            border-radius: 12px;
            overflow: hidden;
            box-shadow: 0 4px 20px rgba(0,0,0,0.06);
            transition: transform 0.3s ease, box-shadow 0.3s ease;
            height: 100%;
            display: flex;
            flex-direction: column;
        }
        .koje-event-card:hover {
            transform: translateY(-4px);
            box-shadow: 0 8px 30px rgba(0,0,0,0.1);
        }
        .koje-event-card .card-img-wrapper {
            position: relative;
            overflow: hidden;
            height: 220px;
        }
        .koje-event-card .card-img-wrapper img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            transition: transform 0.4s ease;
        }
        .koje-event-card:hover .card-img-wrapper img {
            transform: scale(1.05);
        }
        .koje-event-card .card-date-badge {
            position: absolute;
            top: 16px;
            left: 16px;
            background: #EB5310;
            color: #fff;
            padding: 8px 12px;
            border-radius: 8px;
            text-align: center;
            min-width: 56px;
            line-height: 1;
        }
        .koje-event-card .card-date-badge .day {
            display: block;
            font-size: 20px;
            font-weight: 800;
        }
        .koje-event-card .card-date-badge .month {
            display: block;
            font-size: 12px;
            font-weight: 600;
            text-transform: uppercase;
            margin-top: 2px;
        }
        .koje-event-card .card-arm-badge {
            position: absolute;
            top: 16px;
            right: 16px;
            background: rgba(30, 37, 47, 0.85);
            color: #FAA019;
            padding: 4px 12px;
            border-radius: 20px;
            font-size: 12px;
            font-weight: 600;
        }
        .koje-event-card .card-body-content {
            padding: 24px;
            flex: 1;
            display: flex;
            flex-direction: column;
        }
        .koje-event-card .card-title {
            font-size: 18px;
            font-weight: 700;
            color: #1E252F;
            margin-bottom: 8px;
            font-family: var(--font-quicksand, 'Quicksand', sans-serif);
        }
        .koje-event-card .card-title a {
            color: inherit;
            text-decoration: none;
        }
        .koje-event-card .card-title a:hover {
            color: #EB5310;
        }
        .koje-event-card .card-location {
            font-size: 14px;
            color: #888;
            margin-bottom: 12px;
        }
        .koje-event-card .card-location i {
            margin-right: 4px;
            color: #EB5310;
        }
        .koje-event-card .card-descr {
            font-size: 14px;
            color: #666;
            line-height: 1.6;
            margin-bottom: 16px;
            flex: 1;
        }

        /* Past event muted styling */
        .koje-event-card.past-event {
            opacity: 0.9;
        }
        .koje-event-card.past-event .card-img-wrapper::after {
            content: '';
            position: absolute;
            inset: 0;
            background: rgba(0,0,0,0.15);
        }
        .koje-event-card.past-event .card-date-badge {
            background: #6c757d;
        }

        /* Past event stats */
        .koje-past-stats {
            display: flex;
            gap: 16px;
            margin-top: auto;
            flex-wrap: wrap;
            padding-top: 12px;
            border-top: 1px solid #f0f0f0;
        }
        .koje-past-stats span {
            font-size: 13px;
            color: #888;
        }
        .koje-past-stats span strong {
            color: #333;
        }

        /* CTA Section */
        .koje-events-cta {
            background: #1E252F;
            padding: 80px 0;
            text-align: center;
            position: relative;
            overflow: hidden;
        }
        .koje-events-cta h2 {
            color: #fff;
            font-size: 36px;
            font-weight: 800;
            margin-bottom: 16px;
            font-family: var(--font-quicksand, 'Quicksand', sans-serif);
        }
        .koje-events-cta p {
            color: rgba(255,255,255,0.7);
            font-size: 16px;
            margin-bottom: 32px;
            max-width: 600px;
            margin-left: auto;
            margin-right: auto;
        }
        .koje-events-cta .cta-buttons {
            display: flex;
            gap: 16px;
            justify-content: center;
            flex-wrap: wrap;
        }
        .koje-events-cta .ul-btn.btn-outline {
            background: transparent;
            border: 2px solid #fff;
            color: #fff;
        }
        .koje-events-cta .ul-btn.btn-outline:hover {
            background: #fff;
            color: #1E252F;
        }
    </style>

    {{-- EVENTS SECTION WITH TABS --}}
    <section class="ul-section-spacing">
        <div class="ul-container">
            {{-- Section Heading --}}
            <div class="ul-section-heading text-center justify-content-center wow animate__fadeInUp" style="margin-bottom: 40px;">
                <div>
                    <span class="ul-section-sub-title">Creative Commerce Events</span>
                    <h2 class="ul-section-title">Our Events</h2>
                    <p class="ul-section-descr" style="max-width: 640px; margin: 0 auto;">From curated pop-up markets to business summits, explore our lineup of events designed to empower creative entrepreneurs and connect thriving communities.</p>
                </div>
            </div>

            {{-- Tab Navigation --}}
            <ul class="koje-event-tabs" role="tablist">
                <li class="nav-item" role="presentation">
                    <button wire:click="setTab('upcoming')" type="button" role="tab"
                            class="nav-link {{ $activeTab === 'upcoming' ? 'active' : '' }}">
                        Upcoming Events
                    </button>
                </li>
                <li class="nav-item" role="presentation">
                    <button wire:click="setTab('past')" type="button" role="tab"
                            class="nav-link {{ $activeTab === 'past' ? 'active' : '' }}">
                        Past Events
                    </button>
                </li>
            </ul>

            {{-- Tab Content --}}
            @if($activeTab === 'upcoming')
                {{-- UPCOMING EVENTS --}}
                <div class="ul-events-wrapper" wire:key="upcoming-events">
                    @foreach($this->upcomingEvents as $index => $event)
                        @if($event['featured'])
                            {{-- Featured Event Banner --}}
                            <div class="koje-featured-event wow animate__fadeInUp">
                                <div class="row g-0">
                                    <div class="col-lg-6 position-relative">
                                        <span class="featured-badge">Featured Event</span>
                                        <img src="{{ asset($event['image']) }}" alt="{{ $event['title'] }}" class="featured-img">
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="featured-content">
                                            <span class="featured-arm">{{ $event['arm'] }}</span>
                                            <span class="featured-date">
                                                <i class="flaticon-calendar"></i> {{ $event['date'] }}
                                            </span>
                                            <h3 class="featured-title">{{ $event['title'] }}</h3>
                                            <p class="featured-location">
                                                <i class="flaticon-pin"></i> {{ $event['location'] }}
                                            </p>
                                            <p class="featured-descr">{{ $event['description'] }}</p>
                                            <div>
                                                <a href="{{ $event['link'] }}" class="ul-btn">
                                                    <i class="flaticon-fast-forward-double-right-arrows-symbol"></i> Register Now
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endif
                    @endforeach

                    {{-- Non-featured upcoming event cards --}}
                    <div class="row ul-bs-row row-cols-lg-3 row-cols-md-2 row-cols-1 g-4">
                        @foreach($this->upcomingEvents as $index => $event)
                            @if(!$event['featured'])
                                <div class="col wow animate__fadeInUp" data-wow-delay="{{ $index * 0.1 }}s">
                                    <div class="koje-event-card">
                                        <div class="card-img-wrapper">
                                            <img src="{{ asset($event['image']) }}" alt="{{ $event['title'] }}">
                                            <span class="card-date-badge">
                                                <span class="day">{{ $event['date_day'] }}</span>
                                                <span class="month">{{ $event['date_month'] }}</span>
                                            </span>
                                            <span class="card-arm-badge">{{ $event['arm'] }}</span>
                                        </div>
                                        <div class="card-body-content">
                                            <h3 class="card-title"><a href="{{ $event['link'] }}">{{ $event['title'] }}</a></h3>
                                            <p class="card-location"><i class="flaticon-pin"></i> {{ $event['location'] }}</p>
                                            <p class="card-descr">{{ $event['description'] }}</p>
                                            <a href="{{ $event['link'] }}" class="ul-btn" style="align-self: flex-start;">
                                                <i class="flaticon-fast-forward-double-right-arrows-symbol"></i> Learn More
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            @endif
                        @endforeach
                    </div>
                </div>
            @else
                {{-- PAST EVENTS --}}
                <div class="ul-events-wrapper" wire:key="past-events">
                    <div class="row ul-bs-row row-cols-lg-3 row-cols-md-2 row-cols-1 g-4">
                        @foreach($this->pastEvents as $index => $event)
                            <div class="col wow animate__fadeInUp" data-wow-delay="{{ $index * 0.1 }}s">
                                <div class="koje-event-card past-event">
                                    <div class="card-img-wrapper">
                                        <img src="{{ asset($event['image']) }}" alt="{{ $event['title'] }}">
                                        <span class="card-date-badge">
                                            <span class="day">{{ $event['date_day'] }}</span>
                                            <span class="month">{{ $event['date_month'] }}</span>
                                        </span>
                                        <span class="card-arm-badge">{{ $event['arm'] }}</span>
                                    </div>
                                    <div class="card-body-content">
                                        <h3 class="card-title">{{ $event['title'] }}</h3>
                                        <p class="card-location"><i class="flaticon-pin"></i> {{ $event['location'] }}</p>
                                        <p class="card-descr">{{ $event['description'] }}</p>
                                        <div class="koje-past-stats">
                                            @if(!empty($event['vendors']))
                                                <span><strong>{{ $event['vendors'] }}</strong> Vendors</span>
                                            @endif
                                            @if(!empty($event['attendees']))
                                                <span><strong>{{ $event['attendees'] }}</strong> Attendees</span>
                                            @endif
                                            <span><strong>{{ $event['date'] }}</strong></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            @endif
        </div>
    </section>

    {{-- CTA SECTION --}}
    <section class="koje-events-cta">
        <div class="ul-container">
            <span class="ul-section-sub-title" style="color: #EB5310;">Join the Movement</span>
            <h2>Want to Be Part of the Next Edition?</h2>
            <p>Whether you're a creative entrepreneur looking for a platform or a brand seeking strategic partnerships, there's a place for you at Koje.</p>
            <div class="cta-buttons">
                <a href="{{ route('contact') }}" class="ul-btn"><i class="flaticon-fast-forward-double-right-arrows-symbol"></i> Get Involved</a>
                <a href="{{ route('contact') }}" class="ul-btn btn-outline"><i class="flaticon-fast-forward-double-right-arrows-symbol"></i> Partner With Us</a>
            </div>
        </div>
    </section>
</div>
