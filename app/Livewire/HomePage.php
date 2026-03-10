<?php

namespace App\Livewire;

use Livewire\Attributes\Layout;
use Livewire\Attributes\Title;
use Livewire\Component;

#[Layout('components.layouts.app')]
#[Title('Home - Fashion, Production & Creative Commerce')]
class HomePage extends Component
{
    public function render()
    {
        return view('livewire.home-page');
    }
}
