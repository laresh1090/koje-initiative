<?php

namespace App\Livewire\Admin;

use Livewire\Component;
use Livewire\Attributes\Layout;
use Livewire\Attributes\Title;
use Livewire\Attributes\Validate;
use Illuminate\Support\Facades\Auth;

#[Layout('components.layouts.admin-login')]
#[Title('Admin Login')]
class Login extends Component
{
    #[Validate('required|email')]
    public string $email = '';

    #[Validate('required|min:6')]
    public string $password = '';

    public bool $remember = false;
    public string $error = '';

    public function login(): void
    {
        $this->validate();

        if (Auth::attempt(['email' => $this->email, 'password' => $this->password, 'is_admin' => true], $this->remember)) {
            session()->regenerate();
            $this->redirect(route('admin.dashboard'));
            return;
        }

        $this->error = 'Invalid credentials or insufficient permissions.';
        $this->password = '';
    }

    public function render()
    {
        return view('livewire.admin.login');
    }
}
