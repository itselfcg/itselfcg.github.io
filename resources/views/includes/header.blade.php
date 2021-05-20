<nav class="navbar navbar-expand-lg navbar-light bg-white">
    <div class="container p-5">
        <a href="/" class="navbar-brand"><img src="{{asset('pictures/logo3.png')}}"></a>

        <button id="navbar-toggler" class="navbar-toggler collapsed border-0" type="button"
                data-toggle="collapse" data-target="#navbar">
            <span class="navbar-toggler-icon"></span>
            <div class="close-icon py-1">✖</div>
        </button>

        <div class="navbar-collapse collapse" id="navbar">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item {{ Request::is('/') ? 'active' : '' }}">
                    <a class="nav-link" href="{{asset('/')}}">work</a>
                </li>
                <li class="nav-item {{ Request::is('about') ? 'active' : '' }}">
                    <a class="nav-link" href="{{asset('about')}}">about</a>
                </li>

            </ul>
        </div>
    </div>
</nav>

