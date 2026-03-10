<?php

namespace App\Livewire;

use App\Mail\NewWebinarRegistration;
use App\Models\WebinarRegistration;
use Illuminate\Support\Facades\Mail;
use Livewire\Attributes\Layout;
use Livewire\Attributes\Title;
use Livewire\Attributes\Validate;
use Livewire\Component;

#[Layout('components.layouts.app')]
#[Title('Creative Business Webinar')]
class WebinarPage extends Component
{
    #[Validate('required|min:2', message: 'Please enter your full name (at least 2 characters).')]
    public string $full_name = '';

    #[Validate('required|email|unique:webinar_registrations,email', message: [
        'required' => 'Please enter your email address.',
        'email' => 'Please enter a valid email address.',
        'unique' => 'This email is already registered for the webinar.',
    ])]
    public string $email = '';

    #[Validate('required', message: 'Please enter your phone number.')]
    public string $phone = '';

    #[Validate('required|in:social_media,friend,email,website,event,other', message: [
        'required' => 'Please tell us how you heard about the webinar.',
        'in' => 'Please select a valid option.',
    ])]
    public string $source = '';

    public bool $showSuccess = false;

    public bool $isSubmitting = false;

    public function register(): void
    {
        $this->isSubmitting = true;

        $validated = $this->validate();

        $registration = WebinarRegistration::create($validated);

        try {
            Mail::to(config('mail.admin_email', 'admin@kojegroup.com'))
                ->send(new NewWebinarRegistration($registration));
        } catch (\Exception $e) {
            // Log the error but don't prevent registration success
            logger()->error('Failed to send webinar registration email: ' . $e->getMessage());
        }

        $this->showSuccess = true;
        $this->isSubmitting = false;

        $this->reset(['full_name', 'email', 'phone', 'source']);
    }

    public function render()
    {
        return view('livewire.webinar-page');
    }
}
