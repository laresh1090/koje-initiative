<?php

namespace App\Livewire;

use Livewire\Attributes\Layout;
use Livewire\Attributes\Title;
use Livewire\Component;

#[Layout('components.layouts.app')]
#[Title('Koje Originals - Bespoke Fashion')]
class KojeOriginalsPage extends Component
{
    public function render()
    {
        return view('livewire.koje-originals-page');
    }
}
