<button class="btn btn-primary d-md-none menu-toggle">☰</button>
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Dashboard</h1>
    <div class="btn-toolbar mb-2 mb-md-0">
        <div class="btn-group mr-2">
            <a href="{{ route('error') }}">
                <button type="button" class="btn btn-sm btn-outline-secondary">Profile</button>
            </a>
        </div>
        <div class="btn-group">
            <a href="{{ route('logout') }}">
                <button type="button" class="btn btn-sm btn-outline-secondary">Logout</button>
            </a>
        </div>
    </div>
</div>
