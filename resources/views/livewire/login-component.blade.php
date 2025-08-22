{{-- <div class="login-container">
    <div class="login-header">
        <img src="{{ asset('assets/login.png') }}" alt="Library Logo">
        <h2>Perpustakaan Login</h2>
    </div>
    <form>
        <div class="form-group">
            <input type="text" wire:model="email" class="form-control" id="email" placeholder="Email Address">
            @error('email')
                <div class="alert alert-danger" role="alert">
                    {{ $message }}
                </div>
            @enderror
        </div>
        <div class="form-group">
            <input type="password" wire:model="password" class="form-control" id="password" placeholder="Password">
            @error('password')
                <div class="alert alert-danger" role="alert">
                    {{ $message }}
                </div>
            @enderror
        </div>
        <button type="button" wire:click="proses" class="btn btn-primary btn-login">Login</button>
    </form>
    <div class="text-center">
        <a href="#">Forgot password?</a>
    </div>
</div> --}}

<div class="wrapper">
    <form action="">
        <h1>Login</h1>
        <div class="input-box">
            <input type="text" wire:model="email" id="email" placeholder="Email Address">
            <i class='bx bxs-user'></i>
            @error('email')
                <div class="alert alert-danger" role="alert">
                    {{ $message }}
                </div>
            @enderror
        </div>
        <div class="input-box">
            <input type="password" wire:model="password" id="password" placeholder="Password">
            <i class='bx bxs-lock-alt'></i>
            @error('password')
                <div class="alert alert-danger" role="alert">
                    {{ $message }}
                </div>
            @enderror
        </div>
        <div class="remember-forgot">
            <label><input type="checkbox">Remember Me</label>
            <a href="#">Forgot Password</a>
        </div>
        <button type="button" class="btn" wire:click="proses">Login</button>
        <div class="register-link">
            <p>Dont have an account? <a href="#">Register</a></p>
        </div>
    </form>
</div>
