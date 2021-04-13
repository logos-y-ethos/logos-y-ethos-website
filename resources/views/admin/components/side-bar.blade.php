<aside class="side-bar" id="side-bar">
    <a href={{ url('/admin/dashboard') }} class={{ $active === 'inicio' ? 'active' : '' }}>
        <svg width="30" height="30" viewBox="0 0 30 30" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path
                d="M2.5 16.2498L14.1163 4.63356C14.6044 4.14558 15.3956 4.14558 15.8838 4.63356L27.5 16.2498H25V26.2498C25 26.9402 24.4404 27.4998 23.75 27.4998H17.5V18.7498H12.5V27.4998H6.25C5.55964 27.4998 5 26.9402 5 26.2498V16.2498H2.5Z"
                fill="white" />
        </svg>
        <span>Inicio</span>
    </a>
    @if (str_contains(Auth::user()->role, 'Publicaciones'))
        <a href={{ url('/admin/publicaciones') }} class={{ $active === 'publicaciones' ? 'active' : '' }}>
            <svg width="30" height="30" viewBox="0 0 30 30" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path
                    d="M17.5 2.5H7.5C6.125 2.5 5.0125 3.625 5.0125 5L5 25C5 26.375 6.1125 27.5 7.4875 27.5H22.5C23.875 27.5 25 26.375 25 25V10L17.5 2.5ZM20 22.5H10V20H20V22.5ZM20 17.5H10V15H20V17.5ZM16.25 11.25V4.375L23.125 11.25H16.25Z"
                    fill="white" />
            </svg>
            <span>Publicaciones</span>
        </a>
    @endif
    @if (str_contains(Auth::user()->role, 'Secretarías'))

        <a href={{ url('/admin/secretarias') }} class={{ $active === 'secretarias' ? 'active' : '' }}>
            <svg width="30" height="30" viewBox="0 0 30 30" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path
                    d="M5 7.5H2.5V25C2.5 26.375 3.625 27.5 5 27.5H22.5V25H5V7.5ZM25 2.5H10C8.625 2.5 7.5 3.625 7.5 5V20C7.5 21.375 8.625 22.5 10 22.5H25C26.375 22.5 27.5 21.375 27.5 20V5C27.5 3.625 26.375 2.5 25 2.5ZM17.5 5C19.575 5 21.25 6.675 21.25 8.75C21.25 10.825 19.575 12.5 17.5 12.5C15.425 12.5 13.75 10.825 13.75 8.75C13.75 6.675 15.425 5 17.5 5ZM25 20H10V18.125C10 15.6375 15 14.375 17.5 14.375C20 14.375 25 15.6375 25 18.125V20Z"
                    fill="white" />
            </svg>
            <span>Secretarías</span>
        </a>
    @endif
    @if (str_contains(Auth::user()->role, 'Consejo Directivo'))

        <a href={{ url('/admin/consejo-directivo') }} class={{ $active === 'consejo directivo' ? 'active' : '' }}>
            <svg width="30" height="30" viewBox="0 0 30 30" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path
                    d="M15 15.9375C17.0375 15.9375 18.8375 16.425 20.3 17.0625C21.65 17.6625 22.5 19.0125 22.5 20.475V22.5H7.5V20.4875C7.5 19.0125 8.35 17.6625 9.7 17.075C11.1625 16.425 12.9625 15.9375 15 15.9375ZM5 16.25C6.375 16.25 7.5 15.125 7.5 13.75C7.5 12.375 6.375 11.25 5 11.25C3.625 11.25 2.5 12.375 2.5 13.75C2.5 15.125 3.625 16.25 5 16.25ZM6.4125 17.625C5.95 17.55 5.4875 17.5 5 17.5C3.7625 17.5 2.5875 17.7625 1.525 18.225C0.6 18.625 0 19.525 0 20.5375V22.5H5.625V20.4875C5.625 19.45 5.9125 18.475 6.4125 17.625ZM25 16.25C26.375 16.25 27.5 15.125 27.5 13.75C27.5 12.375 26.375 11.25 25 11.25C23.625 11.25 22.5 12.375 22.5 13.75C22.5 15.125 23.625 16.25 25 16.25ZM30 20.5375C30 19.525 29.4 18.625 28.475 18.225C27.4125 17.7625 26.2375 17.5 25 17.5C24.5125 17.5 24.05 17.55 23.5875 17.625C24.0875 18.475 24.375 19.45 24.375 20.4875V22.5H30V20.5375ZM15 7.5C17.075 7.5 18.75 9.175 18.75 11.25C18.75 13.325 17.075 15 15 15C12.925 15 11.25 13.325 11.25 11.25C11.25 9.175 12.925 7.5 15 7.5Z"
                    fill="white" />
            </svg>
            <span>Consejo Directivo</span>
        </a>
    @endif
    @if (str_contains(Auth::user()->role, 'Miembros Activos'))

        <a href={{ url('/admin/miembros-activos') }} class={{ $active === 'miembros activos' ? 'active' : '' }}>
            <svg width="30" height="30" viewBox="0 0 30 30" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path
                    d="M15 15.9375C17.0375 15.9375 18.8375 16.425 20.3 17.0625C21.65 17.6625 22.5 19.0125 22.5 20.475V22.5H7.5V20.4875C7.5 19.0125 8.35 17.6625 9.7 17.075C11.1625 16.425 12.9625 15.9375 15 15.9375ZM5 16.25C6.375 16.25 7.5 15.125 7.5 13.75C7.5 12.375 6.375 11.25 5 11.25C3.625 11.25 2.5 12.375 2.5 13.75C2.5 15.125 3.625 16.25 5 16.25ZM6.4125 17.625C5.95 17.55 5.4875 17.5 5 17.5C3.7625 17.5 2.5875 17.7625 1.525 18.225C0.6 18.625 0 19.525 0 20.5375V22.5H5.625V20.4875C5.625 19.45 5.9125 18.475 6.4125 17.625ZM25 16.25C26.375 16.25 27.5 15.125 27.5 13.75C27.5 12.375 26.375 11.25 25 11.25C23.625 11.25 22.5 12.375 22.5 13.75C22.5 15.125 23.625 16.25 25 16.25ZM30 20.5375C30 19.525 29.4 18.625 28.475 18.225C27.4125 17.7625 26.2375 17.5 25 17.5C24.5125 17.5 24.05 17.55 23.5875 17.625C24.0875 18.475 24.375 19.45 24.375 20.4875V22.5H30V20.5375ZM15 7.5C17.075 7.5 18.75 9.175 18.75 11.25C18.75 13.325 17.075 15 15 15C12.925 15 11.25 13.325 11.25 11.25C11.25 9.175 12.925 7.5 15 7.5Z"
                    fill="white" />
            </svg>
            <span>Miembros Activos</span>
        </a>
    @endif
    @if (str_contains(Auth::user()->role, 'Colaboradores'))
        <a href={{ url('/admin/colaboradores') }} class={{ $active === 'colaboradores' ? 'active' : '' }}>
            <svg width="30" height="30" viewBox="0 0 30 30" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path
                    d="M15 15.9375C17.0375 15.9375 18.8375 16.425 20.3 17.0625C21.65 17.6625 22.5 19.0125 22.5 20.475V22.5H7.5V20.4875C7.5 19.0125 8.35 17.6625 9.7 17.075C11.1625 16.425 12.9625 15.9375 15 15.9375ZM5 16.25C6.375 16.25 7.5 15.125 7.5 13.75C7.5 12.375 6.375 11.25 5 11.25C3.625 11.25 2.5 12.375 2.5 13.75C2.5 15.125 3.625 16.25 5 16.25ZM6.4125 17.625C5.95 17.55 5.4875 17.5 5 17.5C3.7625 17.5 2.5875 17.7625 1.525 18.225C0.6 18.625 0 19.525 0 20.5375V22.5H5.625V20.4875C5.625 19.45 5.9125 18.475 6.4125 17.625ZM25 16.25C26.375 16.25 27.5 15.125 27.5 13.75C27.5 12.375 26.375 11.25 25 11.25C23.625 11.25 22.5 12.375 22.5 13.75C22.5 15.125 23.625 16.25 25 16.25ZM30 20.5375C30 19.525 29.4 18.625 28.475 18.225C27.4125 17.7625 26.2375 17.5 25 17.5C24.5125 17.5 24.05 17.55 23.5875 17.625C24.0875 18.475 24.375 19.45 24.375 20.4875V22.5H30V20.5375ZM15 7.5C17.075 7.5 18.75 9.175 18.75 11.25C18.75 13.325 17.075 15 15 15C12.925 15 11.25 13.325 11.25 11.25C11.25 9.175 12.925 7.5 15 7.5Z"
                    fill="white" />
            </svg>
            <span>Colaboradores</span>
        </a>
    @endif
    @if (str_contains(Auth::user()->role, 'Comité Consultivo'))
        <a href={{ url('/admin/comite-consultivo') }} class={{ $active === 'comite consultivo' ? 'active' : '' }}>
            <svg width="30" height="30" viewBox="0 0 30 30" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path
                    d="M15 15.9375C17.0375 15.9375 18.8375 16.425 20.3 17.0625C21.65 17.6625 22.5 19.0125 22.5 20.475V22.5H7.5V20.4875C7.5 19.0125 8.35 17.6625 9.7 17.075C11.1625 16.425 12.9625 15.9375 15 15.9375ZM5 16.25C6.375 16.25 7.5 15.125 7.5 13.75C7.5 12.375 6.375 11.25 5 11.25C3.625 11.25 2.5 12.375 2.5 13.75C2.5 15.125 3.625 16.25 5 16.25ZM6.4125 17.625C5.95 17.55 5.4875 17.5 5 17.5C3.7625 17.5 2.5875 17.7625 1.525 18.225C0.6 18.625 0 19.525 0 20.5375V22.5H5.625V20.4875C5.625 19.45 5.9125 18.475 6.4125 17.625ZM25 16.25C26.375 16.25 27.5 15.125 27.5 13.75C27.5 12.375 26.375 11.25 25 11.25C23.625 11.25 22.5 12.375 22.5 13.75C22.5 15.125 23.625 16.25 25 16.25ZM30 20.5375C30 19.525 29.4 18.625 28.475 18.225C27.4125 17.7625 26.2375 17.5 25 17.5C24.5125 17.5 24.05 17.55 23.5875 17.625C24.0875 18.475 24.375 19.45 24.375 20.4875V22.5H30V20.5375ZM15 7.5C17.075 7.5 18.75 9.175 18.75 11.25C18.75 13.325 17.075 15 15 15C12.925 15 11.25 13.325 11.25 11.25C11.25 9.175 12.925 7.5 15 7.5Z"
                    fill="white" />
            </svg>
            <span>Comité Consultivo</span>
        </a>
    @endif
    @if (str_contains(Auth::user()->role, 'Eventos'))
        <a href={{ url('/admin/eventos') }} class={{ $active === 'eventos' ? 'active' : '' }}>
            <svg width="30" height="30" viewBox="0 0 30 30" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path
                    d="M23.75 27.5H6.25C4.86929 27.5 3.75 26.3807 3.75 25V7.5C3.75 6.11929 4.86929 5 6.25 5H8.75V2.5H11.25V5H18.75V2.5H21.25V5H23.75C25.1307 5 26.25 6.11929 26.25 7.5V25C26.25 26.3807 25.1307 27.5 23.75 27.5ZM6.25 12.5V25H23.75V12.5H6.25ZM6.25 7.5V10H23.75V7.5H6.25ZM21.25 22.5H18.75V20H21.25V22.5ZM16.25 22.5H13.75V20H16.25V22.5ZM11.25 22.5H8.75V20H11.25V22.5ZM21.25 17.5H18.75V15H21.25V17.5ZM16.25 17.5H13.75V15H16.25V17.5ZM11.25 17.5H8.75V15H11.25V17.5Z"
                    fill="white" />
            </svg>
            <span>Eventos</span>
        </a>
    @endif
    @if (str_contains(Auth::user()->role, 'Usuarios'))
        <a href={{ url('/admin/usuarios') }} class={{ $active === 'usuarios' ? 'active' : '' }}>
            <svg width="30" height="30" viewBox="0 0 30 30" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path
                    d="M15 2.5C8.1 2.5 2.5 8.1 2.5 15C2.5 21.9 8.1 27.5 15 27.5C21.9 27.5 27.5 21.9 27.5 15C27.5 8.1 21.9 2.5 15 2.5ZM15 6.25C17.075 6.25 18.75 7.925 18.75 10C18.75 12.075 17.075 13.75 15 13.75C12.925 13.75 11.25 12.075 11.25 10C11.25 7.925 12.925 6.25 15 6.25ZM15 24C11.875 24 9.1125 22.4 7.5 19.975C7.5375 17.4875 12.5 16.125 15 16.125C17.4875 16.125 22.4625 17.4875 22.5 19.975C20.8875 22.4 18.125 24 15 24Z"
                    fill="white" />
            </svg>
            <span>Usuarios</span>
        </a>
    @endif
    <a href={{ url('/admin/configuracion') }} class={{ $active === 'configuracion' ? 'active' : '' }}>
        <svg width="30" height="30" viewBox="0 0 30 30" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path
                d="M23.9251 16.175C23.9751 15.8 24.0001 15.4125 24.0001 15C24.0001 14.6 23.9751 14.2 23.9126 13.825L26.4501 11.85C26.6751 11.675 26.7376 11.3375 26.6001 11.0875L24.2001 6.9375C24.0501 6.6625 23.7376 6.575 23.4626 6.6625L20.4751 7.8625C19.8501 7.3875 19.1876 6.9875 18.4501 6.6875L18.0001 3.5125C17.9501 3.2125 17.7001 3 17.4001 3H12.6001C12.3001 3 12.0626 3.2125 12.0126 3.5125L11.5626 6.6875C10.8251 6.9875 10.1501 7.4 9.53764 7.8625L6.55014 6.6625C6.27514 6.5625 5.96264 6.6625 5.81264 6.9375L3.42514 11.0875C3.27514 11.35 3.32514 11.675 3.57514 11.85L6.11264 13.825C6.05014 14.2 6.00014 14.6125 6.00014 15C6.00014 15.3875 6.02514 15.8 6.08764 16.175L3.55014 18.15C3.32514 18.325 3.26264 18.6625 3.40014 18.9125L5.80014 23.0625C5.95014 23.3375 6.26264 23.425 6.53764 23.3375L9.52514 22.1375C10.1501 22.6125 10.8126 23.0125 11.5501 23.3125L12.0001 26.4875C12.0626 26.7875 12.3001 27 12.6001 27H17.4001C17.7001 27 17.9501 26.7875 17.9876 26.4875L18.4376 23.3125C19.1751 23.0125 19.8501 22.6125 20.4626 22.1375L23.4501 23.3375C23.7251 23.4375 24.0376 23.3375 24.1876 23.0625L26.5876 18.9125C26.7376 18.6375 26.6751 18.325 26.4376 18.15L23.9251 16.175ZM15.0001 19.5C12.5251 19.5 10.5001 17.475 10.5001 15C10.5001 12.525 12.5251 10.5 15.0001 10.5C17.4751 10.5 19.5001 12.525 19.5001 15C19.5001 17.475 17.4751 19.5 15.0001 19.5Z"
                fill="white" />
        </svg>
        <span>Configuración</span>
    </a>
    <form method="POST" action="{{ route('logout') }}">
        @csrf
        <a href="route('logout')" onclick="event.preventDefault();this.closest('form').submit();">
            <svg width="30" height="30" viewBox="0 0 30 30" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path
                    d="M12.6125 19.4875L14.375 21.25L20.625 15L14.375 8.75L12.6125 10.5125L15.8375 13.75H3.75V16.25H15.8375L12.6125 19.4875ZM23.75 3.75H6.25C4.8625 3.75 3.75 4.875 3.75 6.25V11.25H6.25V6.25H23.75V23.75H6.25V18.75H3.75V23.75C3.75 25.125 4.8625 26.25 6.25 26.25H23.75C25.125 26.25 26.25 25.125 26.25 23.75V6.25C26.25 4.875 25.125 3.75 23.75 3.75Z"
                    fill="white" />
            </svg>
            <span>Cerrar Sesión</span>
        </a>
    </form>

</aside>
