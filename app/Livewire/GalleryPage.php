<?php

namespace App\Livewire;

use Livewire\Attributes\Layout;
use Livewire\Attributes\Title;
use Livewire\Component;

#[Layout('components.layouts.app')]
#[Title('Gallery - Koje Group')]
class GalleryPage extends Component
{
    public string $activeFilter = 'all';

    public function setFilter(string $filter): void
    {
        $this->activeFilter = $filter;
    }

    public function getGalleryImagesProperty(): array
    {
        return [
            [
                'src'      => '/images/photos/BTA_3252.jpg',
                'category' => 'events',
                'caption'  => 'Creative Business Summit',
            ],
            [
                'src'      => '/images/photos/BTA_3261.jpg',
                'category' => 'fashion',
                'caption'  => 'Koje Originals Collection',
            ],
            [
                'src'      => '/images/photos/BTA_3386.jpg',
                'category' => 'events',
                'caption'  => 'Popup Market Edition 5',
            ],
            [
                'src'      => '/images/photos/BTA_3420.jpg',
                'category' => 'production',
                'caption'  => 'Bulk Production Workshop',
            ],
            [
                'src'      => '/images/photos/BTA_3479.jpg',
                'category' => 'events',
                'caption'  => 'Koje Vision Screen Launch',
            ],
            [
                'src'      => '/images/photos/BTA_3563.jpg',
                'category' => 'fashion',
                'caption'  => 'Bespoke Fashion Showcase',
            ],
            [
                'src'      => '/images/photos/BTA_3566.jpg',
                'category' => 'fashion',
                'caption'  => 'Ready-to-Wear Collection',
            ],
            [
                'src'      => '/images/photos/BTA_3583.jpg',
                'category' => 'events',
                'caption'  => 'Creative Entrepreneurs Networking',
            ],
        ];
    }

    public function getFilteredImagesProperty(): array
    {
        if ($this->activeFilter === 'all') {
            return $this->galleryImages;
        }

        return array_values(
            array_filter($this->galleryImages, fn($img) => $img['category'] === $this->activeFilter)
        );
    }

    public function render()
    {
        return view('livewire.gallery-page');
    }
}
