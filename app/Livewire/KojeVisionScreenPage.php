<?php

namespace App\Livewire;

use Livewire\Attributes\Layout;
use Livewire\Attributes\Title;
use Livewire\Component;

#[Layout('components.layouts.app')]
#[Title('Koje Vision Screen - Premium Visibility')]
class KojeVisionScreenPage extends Component
{
    public function render()
    {
        return view('livewire.koje-vision-screen-page');
    }
}
