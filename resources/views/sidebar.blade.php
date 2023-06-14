<div class="card">
    <div class="card-body">
        @if (Auth::user()->avatar)
            <img src="{{ asset('storage/' . Auth::user()->avatar) }}" alt="{{ Auth::user()->name }}"
                class="d-block img-thumbnail mx-auto" width="130">
            <p class="text-center">{{ Auth::user()->name }}</p>
        @else
            <div class="d-flex justify-content-center">
                <svg xmlns="http://www.w3.org/2000/svg" width="130" height="130" fill="currentColor"
                    class="bi bi-person img-thumbnail mx-auto" viewBox="0 0 16 16">
                    <path
                        d="M8 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6Zm2-3a2 2 0 1 1-4 0 2 2 0 0 1 4 0Zm4 8c0 1-1 1-1 1H3s-1 0-1-1 1-4 6-4 6 3 6 4Zm-1-.004c-.001-.246-.154-.986-.832-1.664C11.516 10.68 10.289 10 8 10c-2.29 0-3.516.68-4.168 1.332-.678.678-.83 1.418-.832 1.664h10Z" />
                </svg>
            </div>
            <p class="text-center">{{ Auth::user()->name }}</p>
        @endif
    </div>

    <hr style="border:2px solid blue;">

    <div class="vertical-menu">
        <a href="{{ route('profiles.index') }}" class="nav-link {{ request()->is('profiles') ? 'active' : '' }}">Meu
            Cadastro</a>

        <a href="{{ route('ads.create') }}" class="nav-link {{ request()->is('ads/create') ? 'active' : '' }}">Criar
            Anúncio</a>
        <a href="{{ route('ads.index') }}" class="nav-link {{ request()->is('ads') ? 'active' : '' }}">Meus Anúncios</a>
    </div>
</div>

<style>
    .vertical-menu a {
        width: 100%;
        height: 100%;
        overflow-y: auto;
        color: black;
        text-decoration: none;
        display: block;
        padding: 12px;
        background-color: #eee;
        border-radius: 3px;
    }

    .vertical-menu a:hover {
        background-color: #ccc;
    }

    .vertical-menu a.active {
        background-color: blue;
        color: white;
    }
</style>
