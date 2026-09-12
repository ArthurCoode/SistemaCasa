<nav class="navbar navbar-expand-sm navbar-dark bg-dark shadow-sm sticky-top">

    <div class="container-fluid">

        <a class="navbar-brand fw-bold d-flex align-items-center gap-2" href="{{ route('home') }}">
            <i class="fa fa-house"></i>
            Casa
        </a>

        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#collapsibleNavbar">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="collapsibleNavbar">

            <ul class="navbar-nav me-auto">

                <li class="nav-item">
                    <a class="nav-link {{ request()->routeIs('home') ? 'active fw-semibold' : '' }}" href="{{ route('home') }}">
                        <i class="fa fa-home me-1"></i>
                        Home
                    </a>
                </li>

                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle {{ request()->routeIs('listar_alimentos') || request()->routeIs('cadastrar_alimentos') || request()->routeIs('editar_alimentos') ? 'active fw-semibold' : '' }}"
                       href="#" role="button" data-bs-toggle="dropdown">
                        <i class="fa fa-apple-whole me-1"></i>
                        Alimentos
                    </a>
                    <ul class="dropdown-menu dropdown-menu-dark shadow">
                        <li>
                            <a class="dropdown-item {{ request()->routeIs('cadastrar_alimentos') ? 'active' : '' }}" href="{{ route('cadastrar_alimentos') }}">
                                <i class="fa fa-plus me-2"></i>
                                Cadastrar Alimento
                            </a>
                        </li>
                        <li>
                            <a class="dropdown-item {{ request()->routeIs('listar_alimentos') ? 'active' : '' }}" href="{{ route('listar_alimentos') }}">
                                <i class="fa fa-list me-2"></i>
                                Listar Alimentos
                            </a>
                        </li>
                    </ul>
                </li>

            </ul>

        </div>

    </div>

</nav>

<style>
    .navbar .nav-link {
        transition: color .15s ease;
    }

    .navbar .nav-link.active {
        color: #fff !important;
        position: relative;
    }

    .navbar .nav-link.active::after {
        content: "";
        position: absolute;
        left: 0.5rem;
        right: 0.5rem;
        bottom: -2px;
        height: 2px;
        background-color: #198754;
        border-radius: 2px;
    }

    .dropdown-item.active,
    .dropdown-item:active {
        background-color: #198754;
    }
</style>