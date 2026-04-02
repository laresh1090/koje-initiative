<div class="login-card">
    <div class="login-brand">
        <h2><span>KOJE</span> ADMIN</h2>
        <p>Sign in to manage your site</p>
    </div>

    @if($error)
        <div class="alert alert-danger py-2 px-3" style="font-size:14px; border-radius:10px;">
            <i class="bi bi-exclamation-circle me-1"></i> {{ $error }}
        </div>
    @endif

    <form wire:submit="login">
        <div class="mb-3">
            <label class="form-label fw-semibold" style="font-size:13px;">Email Address</label>
            <input type="email" class="form-control @error('email') is-invalid @enderror"
                   wire:model="email" placeholder="admin@kojegroup.com" autofocus>
            @error('email') <div class="invalid-feedback">{{ $message }}</div> @enderror
        </div>

        <div class="mb-3">
            <label class="form-label fw-semibold" style="font-size:13px;">Password</label>
            <input type="password" class="form-control @error('password') is-invalid @enderror"
                   wire:model="password" placeholder="Enter your password">
            @error('password') <div class="invalid-feedback">{{ $message }}</div> @enderror
        </div>

        <div class="mb-4">
            <div class="form-check">
                <input type="checkbox" class="form-check-input" wire:model="remember" id="remember">
                <label class="form-check-label" for="remember" style="font-size:13px;">Remember me</label>
            </div>
        </div>

        <button type="submit" class="btn btn-login" wire:loading.attr="disabled">
            <span wire:loading.remove>Sign In</span>
            <span wire:loading>
                <span class="spinner-border spinner-border-sm me-1"></span> Signing in...
            </span>
        </button>
    </form>
</div>
