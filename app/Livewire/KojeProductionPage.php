<?php

namespace App\Livewire;

use Livewire\Attributes\Layout;
use Livewire\Attributes\Title;
use Livewire\Component;

#[Layout('components.layouts.app')]
#[Title('Koje Production - Fashion at Scale')]
class KojeProductionPage extends Component
{
    public function render()
    {
        return view('livewire.koje-production-page');
    }
}
