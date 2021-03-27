<nav class="nav" id="nav">
    <a href="{{ url('/') }}">
        <img src="{{ asset('images/logos-y-ethos-logo.png') }}" alt="">
    </a>
    <a href={{ url('/') }} class={{ $active === 'inicio' ? 'active' : '' }}>INICIO </a>
    <a href={{ url('/nosotros') }} class={{ $active === 'nosotros' ? 'active' : '' }}>NOSOTROS</a>
    <a href={{ url('/publicaciones') }} class={{ $active === 'publicaciones' ? 'active' : '' }}>PUBLICACIONES</a>
    <a href={{ url('#') }} class={{ $active === 'eventos' ? 'active' : '' }}>EVENTOS</a>
    <a href={{ url('/contacto') }} class={{ $active === 'contacto' ? 'active' : '' }}>CONTACTO</a>
    <a href="javascript:void(0);" class="icon" onclick="toogleNav()">
        <span class="icon-menu"></span>
    </a>
</nav>
