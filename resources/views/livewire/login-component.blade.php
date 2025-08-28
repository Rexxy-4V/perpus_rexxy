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
