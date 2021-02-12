<nav class="nav" id="nav">
    <a href="{{ url('/') }}">
        <img src="{{ asset('images/logos-y-ethos-logo.png') }}" alt="">
    </a>
    <a href={{ url('/') }} class={{ $active === 'inicio' ? 'active' : 'false' }}>INICIO </a>
    <a href={{ url('/nosotros') }} class={{ $active === 'nosotros' ? 'active' : 'false' }}>NOSOTROS</a>
    <a href={{ url('/publicaciones') }} class={{ $active === 'publicaciones' ? 'active' : 'false' }}>PUBLICACIONES</a>
    <a href={{ url('#') }} class={{ $active === 'eventos' ? 'active' : 'false' }}>EVENTOS</a>
    <a href={{ url('/contacto') }} class={{ $active === 'contacto' ? 'active' : 'false' }}>CONTACTO</a>
    <a href="javascript:void(0);" class="icon" onclick="toogleNav()">
        <span class="icon-menu"></span>
    </a>
</nav>
