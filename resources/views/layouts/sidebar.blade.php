<aside class="sidebar">
    <div class="logo-container">
        <img src="{{ asset('images/logo.png') }}" alt="Logo">
    </div>

    <nav class="menu">
        <a href="{{ route('dashboard') }}"
           class="{{ request()->routeIs('dashboard') ? 'active' : '' }}">
            Tableau de bord
        </a>

        <a href="{{ route('filieres.index') }}"
           class="{{ request()->routeIs('filieres.*') ? 'active' : '' }}">
            Filière
        </a>

        <a href="{{ route('niveaux.index') }}"
           class="{{ request()->routeIs('niveaux.*') ? 'active' : '' }}">
            Niveau
        </a>

        <a href="{{ route('classes.index') }}"
           class="{{ request()->routeIs('classes.*') ? 'active' : '' }}">
            Classe
        </a>

        <a href="{{ route('tarifs.index') }}"
           class="{{ request()->routeIs('tarifs.*') ? 'active' : '' }}">
            Tarif
        </a>
    </nav>
</aside>
