<nav class="sidenav navbar navbar-vertical  fixed-left  navbar-expand-xs navbar-light bg-white" id="sidenav-main">
    <div class="scrollbar-inner">
        <!-- Brand -->
        <div class="sidenav-header  align-items-center bg-gradient-info">
            <a class="navbar-brand text-white font-weight-bold" href="{{ url('/') }}">
                ¡Bienvenido!
            </a>
        </div>
        <div class="navbar-inner">
            <!-- Collapse -->
            <div class="collapse navbar-collapse" id="sidenav-collapse-main">
                <!-- Nav items -->
                <ul class="navbar-nav">
                    @switch(session('role'))
                        @case('estudiante')
                        <li class="nav-item">
                            <a class="nav-link active" href="{{ route('user.topics') }}">
                                <i class="ni ni-tv-2 text-primary"></i>
                                <span class="nav-link-text">Mis Temáticas</span>
                            </a>
                        </li>
                        @break
                        @case('docente')
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('user.my-topics') }}">Mis temáticas</a>
                        </li>
                        @break
                        @case('administrador')
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('capacitadores') }}">
                                <i class="fa fa-user-circle" aria-hidden="true"></i>
                                <span class="nav-link-text my-2">Lista de Docentes</span>
                            </a>
                            <hr>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('capacitantes') }}">
                                <i class="fa fa-user-circle" aria-hidden="true"></i>
                                <span class="nav-link-text my-2">Lista de Estudiantes</span>
                            </a>
                            <hr>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('tematicas') }}">
                                <i class="ni ni-hat-3"></i>
                                <span class="nav-link-text my-2">Lista de Temáticas</span>
                            </a>
                            <hr>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('capsulas') }}">
                                <i class="ni ni-air-baloon"></i>
                                <span class="nav-link-text my-2">Lista de Cápsulas Educativas</span>
                            </a>
                            <hr>
                        </li>
                        @break
                        @default
                       @guest
                       <li class="nav-item">
                        <a class="nav-link active" href="{{ route('login') }}">
                            <i class="ni ni-single-02 text-success"></i>
                            <span class="nav-link-text">Iniciar Sesión</span>
                        </a>
                    </li>
                       @endguest
                    @endswitch
            </div>
        </div>
    </div>
</nav>
