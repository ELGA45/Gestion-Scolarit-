<div class="sidebar text-white vh-100 p-3">

    <div class="logo-container text-center mb-4">
        <img src="{{ asset('images/logo.png') }}" alt="Logo">
    </div>

    <a href="{{ route('dashboard') }}"
       class="menu-link {{ request()->routeIs('dashboard') ? 'active' : '' }}">
        Tableau de bord
    </a>

    <a href="{{ route('filieres.index') }}"
       class="menu-link {{ request()->routeIs('filieres.*') ? 'active' : '' }}">
        Filière
    </a>

    <a href="{{ route('niveaux.index') }}"
       class="menu-link {{ request()->routeIs('niveaux.*') ? 'active' : '' }}">
        Niveau
    </a>

    <a href="{{ route('sousNiveaux.index') }}"
       class="menu-link {{ request()->routeIs('sousNiveaux.*') ? 'active' : '' }}">
        Sous-Niveau
    </a>

    <a href="{{ route('classes.index') }}"
       class="menu-link {{ request()->routeIs('classes.*') ? 'active' : '' }}">
        Classe
    </a>

    <a href="{{ route('tarifs.index') }}"
       class="menu-link {{ request()->routeIs('tarifs.*') ? 'active' : '' }}">
        Tarif
    </a>

    <hr class="text-secondary">
</div>
