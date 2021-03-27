<div class="sub-menu">
    @if (isset($active))
        <div class="{{ $active === 'nosotros' ? 'item active' : 'item' }}">
            <a href={{ url('/nosotros') }}>¿Quiénes somos?</a>
        </div>
        <div class="{{ $active === 'secretarias' ? 'item active' : 'item' }}">
            <a href={{ url('/nosotros/secretarias') }}>Secretarías</a>
        </div>
        <div class="{{ $active === 'organizacion' ? 'item active' : 'item' }}">
            <a href={{ url('/nosotros/organizacion') }}>Organización</a>
        </div>
    @else
        <div class="item">
            <a href={{ url('/nosotros') }}>¿Quiénes somos?</a>
        </div>
        <div class="item">
            <a href={{ url('/nosotros/secretarias') }}>Secretarías</a>
        </div>
        <div class="item">
            <a href={{ url('/nosotros/organizacion') }}>Organización</a>
        </div>
    @endif
</div>
