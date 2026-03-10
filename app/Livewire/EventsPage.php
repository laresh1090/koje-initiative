<?php

namespace App\Livewire;

use Livewire\Attributes\Layout;
use Livewire\Attributes\Title;
use Livewire\Component;

#[Layout('components.layouts.app')]
#[Title('Events - Koje Group')]
class EventsPage extends Component
{
    public string $activeTab = 'upcoming';

    public function setTab(string $tab): void
    {
        $this->activeTab = $tab;
    }

    public function getUpcomingEventsProperty(): array
    {
        return [
            [
                'title'       => 'Creative Business Webinar',
                'date'        => 'March 29, 2026',
                'date_day'    => '29',
                'date_month'  => 'Mar',
                'location'    => 'Online',
                'arm'         => 'Koje Initiative',
                'image'       => '/images/photos/BTA_3252.jpg',
                'description' => 'Join us for a free webinar exploring the business side of creativity. Learn how to monetize your craft, build a brand, and connect with a community of like-minded entrepreneurs.',
                'link'        => '/creative-business-webinar',
                'featured'    => true,
            ],
            [
                'title'       => 'Popup Market Edition 6',
                'date'        => 'April 2026',
                'date_day'    => 'TBD',
                'date_month'  => 'Apr',
                'location'    => 'Lagos, Nigeria',
                'arm'         => 'Koje Initiative',
                'image'       => '/images/photos/BTA_3386.jpg',
                'description' => 'The 6th edition of our signature pop-up market featuring 30+ creative vendors, live entertainment, and an unforgettable shopping experience.',
                'link'        => '#',
                'featured'    => false,
            ],
            [
                'title'       => 'Creative Business Summit 2026',
                'date'        => 'May 2026',
                'date_day'    => 'TBD',
                'date_month'  => 'May',
                'location'    => 'Lagos, Nigeria',
                'arm'         => 'Koje Initiative',
                'image'       => '/images/photos/BTA_3420.jpg',
                'description' => 'Our flagship summit bringing together industry leaders and creative entrepreneurs for a day of knowledge sharing, networking, and business growth strategies.',
                'link'        => '#',
                'featured'    => false,
            ],
        ];
    }

    public function getPastEventsProperty(): array
    {
        return [
            [
                'title'       => 'Popup Market Edition 5',
                'date'        => 'December 2025',
                'date_day'    => '20',
                'date_month'  => 'Dec',
                'location'    => 'Lagos Marriott Hotel, Ikeja, Lagos',
                'arm'         => 'Koje Initiative',
                'image'       => '/images/photos/BTA_3563.jpg',
                'description' => 'Our biggest edition yet brought the holiday spirit alive with an incredible lineup of creative vendors and festive experiences.',
                'vendors'     => 35,
                'attendees'   => '500+',
            ],
            [
                'title'       => 'Popup Market Edition 4',
                'date'        => 'September 2025',
                'date_day'    => '16',
                'date_month'  => 'Sep',
                'location'    => 'Lagos, Nigeria',
                'arm'         => 'Koje Initiative',
                'image'       => '/images/photos/BTA_3479.jpg',
                'description' => 'A vibrant mid-year edition that showcased the growing strength of the Koje vendor community with curated lifestyle and fashion brands.',
                'vendors'     => 28,
                'attendees'   => '350+',
            ],
            [
                'title'       => 'Creative Business Summit 2025',
                'date'        => 'July 2025',
                'date_day'    => 'TBD',
                'date_month'  => 'Jul',
                'location'    => 'Lagos, Nigeria',
                'arm'         => 'Koje Initiative',
                'image'       => '/images/photos/BTA_3261.jpg',
                'description' => 'A landmark summit that brought together creative entrepreneurs and industry leaders for panels, workshops, and strategic networking.',
                'vendors'     => null,
                'attendees'   => '200+',
            ],
            [
                'title'       => 'Popup Market Edition 3',
                'date'        => 'May 2025',
                'date_day'    => '10',
                'date_month'  => 'May',
                'location'    => 'Lagos, Nigeria',
                'arm'         => 'Koje Initiative',
                'image'       => '/images/photos/BTA_3566.jpg',
                'description' => 'The third edition expanded our reach with an exciting mix of new and returning vendors, solidifying Koje as a must-attend creative market.',
                'vendors'     => 25,
                'attendees'   => '300+',
            ],
            [
                'title'       => 'Popup Market Edition 2',
                'date'        => 'February 2025',
                'date_day'    => '18',
                'date_month'  => 'Feb',
                'location'    => 'Lagos, Nigeria',
                'arm'         => 'Koje Initiative',
                'image'       => '/images/photos/BTA_3583.jpg',
                'description' => 'Building on the momentum of our debut, Edition 2 brought more vendors, more attendees, and confirmed the demand for curated creative markets in Lagos.',
                'vendors'     => 20,
                'attendees'   => '250+',
            ],
        ];
    }

    public function render()
    {
        return view('livewire.events-page');
    }
}
