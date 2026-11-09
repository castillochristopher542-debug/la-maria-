<aside class="sidebar" id="sidebar">
    <div class="sidebar__brand">
        <div class="sidebar__brand-mark">LM</div>
        <div class="sidebar__brand-text">
            <span class="sidebar__brand-name">La María</span>
            <span class="sidebar__brand-caption">Pastelería artesanal</span>
        </div>
    </div>

    <p class="sidebar__section-label">PRINCIPAL</p>

    <nav class="sidebar__nav">
        <a href="{{ route('dashboard') }}" class="sidebar__link {{ request()->routeIs('dashboard') ? 'is-active' : '' }}">
            <span class="sidebar__icon">📊</span>
            <span>Dashboard</span>
        </a>

        <a href="{{ route('productos.index') }}" class="sidebar__link {{ request()->routeIs('productos.*') ? 'is-active' : '' }}">
            <span class="sidebar__icon">🎂</span>
            <span>Productos</span>
        </a>

        <a href="{{ route('categorias.index') }}" class="sidebar__link {{ request()->routeIs('categorias.*') ? 'is-active' : '' }}">
            <span class="sidebar__icon">📁</span>
            <span>Categorías</span>
        </a>

        <div class="sidebar__divider"></div>

        <p class="sidebar__section-label">ADMINISTRACIÓN</p>

        <a href="{{ route('usuarios.index') }}" class="sidebar__link {{ request()->routeIs('usuarios.*') ? 'is-active' : '' }}">
            <span class="sidebar__icon">👥</span>
            <span>Usuarios</span>
        </a>

        <a href="{{ route('roles.index') }}" class="sidebar__link {{ request()->routeIs('roles.*') ? 'is-active' : '' }}">
            <span class="sidebar__icon">🛡️</span>
            <span>Roles</span>
        </a>

        <a href="{{ route('empresa') }}" class="sidebar__link {{ request()->routeIs('empresa') ? 'is-active' : '' }}">
            <span class="sidebar__icon">🏢</span>
            <span>Empresa</span>
        </a>
    </nav>

    <div class="sidebar-logout">
        <form method="POST" action="{{ route('logout') }}">
            @csrf
            <button type="submit" class="btn-logout">
                <span class="sidebar__icon">🚪</span>
                <span>Cerrar sesión</span>
            </button>
        </form>
    </div>
</aside>
