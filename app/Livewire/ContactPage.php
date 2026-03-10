<?php

namespace App\Livewire;

use App\Mail\NewContactMessage;
use App\Models\ContactMessage;
use Illuminate\Support\Facades\Mail;
use Livewire\Attributes\Layout;
use Livewire\Attributes\Title;
use Livewire\Attributes\Validate;
use Livewire\Component;

#[Layout('components.layouts.app')]
#[Title('Contact Us - Koje Group')]
class ContactPage extends Component
{
    #[Validate('required|string|max:255')]
    public string $name = '';

    #[Validate('required|email|max:255')]
    public string $email = '';

    #[Validate('nullable|string|max:30')]
    public string $phone = '';

    #[Validate('required|string|max:255')]
    public string $subject = '';

    #[Validate('required|string|min:10|max:5000')]
    public string $message = '';

    public bool $showSuccess = false;

    public function submit(): void
    {
        $validated = $this->validate();

        $contactMessage = ContactMessage::create($validated);

        // Send email notification to admin
        try {
            Mail::to(config('mail.admin_address', 'hello@kojegroup.com'))
                ->send(new NewContactMessage($contactMessage));
        } catch (\Exception $e) {
            // Log the error but don't prevent the success message
            logger()->error('Failed to send contact notification email: ' . $e->getMessage());
        }

        $this->reset(['name', 'email', 'phone', 'subject', 'message']);
        $this->showSuccess = true;
    }

    public function render()
    {
        return view('livewire.contact-page');
    }
}
