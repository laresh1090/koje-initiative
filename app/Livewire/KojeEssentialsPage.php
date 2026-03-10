<?php

namespace App\Livewire;

use Livewire\Attributes\Layout;
use Livewire\Attributes\Title;
use Livewire\Component;

#[Layout('components.layouts.app')]
#[Title('Koje Essentials - Ready to Wear')]
class KojeEssentialsPage extends Component
{
    public function render()
    {
        return view('livewire.koje-essentials-page');
    }
}
