<div class="card">
    <div class="card-body">
        <img src="{{ asset('storage/' . Auth::user()->avatar) }}" alt="{{ Auth::user()->name }}"
            class="d-block img-thumbnail mx-auto" width="130">
        <p class="text-center"><b>{{ Auth::user()->name }}</b></p>
    </div>

    <hr style="border:2px solid blue;">

    <div class="vertical-menu">
        <a href="{{ route('ads.index') }}" class="nav-link">Dashboard</a>
        <a href="{{ route('ads.index') }}" class="nav-link">Meu Cadastro</a>

        <a href="{{ route('ads.create') }}" class="nav-link">Criar Anúncio</a>
        <a href="{{ route('ads.index') }}" class="nav-link">Meus Anúncios</a>
    </div>
</div>
