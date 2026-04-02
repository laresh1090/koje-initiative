<?php

namespace App\Livewire\Admin;

use Livewire\Component;
use Livewire\Attributes\Layout;
use Livewire\Attributes\Title;
use App\Models\WebinarRegistration;
use App\Models\ContactMessage;

#[Layout('components.layouts.admin')]
#[Title('Dashboard')]
class Dashboard extends Component
{
    public function render()
    {
        return view('livewire.admin.dashboard', [
            'totalRegistrations' => WebinarRegistration::count(),
            'totalMessages' => ContactMessage::count(),
            'unreadMessages' => ContactMessage::where('read', false)->count(),
            'recentRegistrations' => WebinarRegistration::latest()->take(5)->get(),
            'recentMessages' => ContactMessage::latest()->take(5)->get(),
        ]);
    }
}
