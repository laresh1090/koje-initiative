<?php

namespace App\Livewire;

use Livewire\Attributes\Layout;
use Livewire\Attributes\Title;
use Livewire\Component;

#[Layout('components.layouts.app')]
#[Title('About Us - Koje Group')]
class AboutPage extends Component
{
    public function render()
    {
        return view('livewire.about-page');
    }
}
