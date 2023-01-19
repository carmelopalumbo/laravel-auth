<aside class="col-2 bg-dark text-white option-box pt-5 container-fluid">
    <div class="text-center links fw-bold container">

        <p class="mb-5">
            <a class="{{ Route::currentRouteName() === 'admin.dashboard' ? 'active' : 'notactive' }}"
                href="{{ route('admin.dashboard') }}">HOME</a>
        </p>

        <p class="mb-5">
            <a class="{{ Route::currentRouteName() === 'admin.projects.index' ? 'active' : 'notactive' }}"
                href="{{ route('admin.projects.index') }}">PROGETTI</a>
        </p>

        <p>
            <a class="notactive" target="_blank" href="https://github.com/carmelopalumbo">GITHUB</a>
        </p>
    </div>
</aside>
