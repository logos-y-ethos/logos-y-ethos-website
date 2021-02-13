<aside class="side-bar" id="side-bar">
    <a href={{ url('/admin/dashboard') }} class={{ $active === 'inicio' ? 'active' : 'false' }}>
        <svg width="30" height="30" viewBox="0 0 30 30" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path
                d="M2.5 16.2498L14.1163 4.63356C14.6044 4.14558 15.3956 4.14558 15.8838 4.63356L27.5 16.2498H25V26.2498C25 26.9402 24.4404 27.4998 23.75 27.4998H17.5V18.7498H12.5V27.4998H6.25C5.55964 27.4998 5 26.9402 5 26.2498V16.2498H2.5Z"
                fill="white" />
        </svg>
        <span>Inicio</span>
    </a>
    <a href={{ url('/admin/publicaciones') }} class={{ $active === 'publicaciones' ? 'active' : 'false' }}>
        <svg width="30" height="30" viewBox="0 0 30 30" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path
                d="M22.5 27.5001H7.5C6.11929 27.5001 5 26.3808 5 25.0001V5.00011C5 3.6194 6.11929 2.50011 7.5 2.50011H16.25C16.2612 2.49866 16.2725 2.49866 16.2837 2.50011H16.2912C16.3031 2.50381 16.3152 2.50632 16.3275 2.50761C16.4377 2.51468 16.5466 2.53611 16.6512 2.57136H16.67H16.6887H16.7037C16.7268 2.58752 16.7485 2.60549 16.7687 2.62511C16.9049 2.68564 17.029 2.77034 17.135 2.87511L24.635 10.3751C24.7398 10.4811 24.8245 10.6052 24.885 10.7414C24.8962 10.7689 24.905 10.7951 24.9137 10.8239L24.9262 10.8589C24.9611 10.9631 24.9817 11.0716 24.9875 11.1814C24.9886 11.1938 24.9915 11.206 24.9962 11.2176V11.2251C24.9983 11.2333 24.9996 11.2417 25 11.2501V25.0001C25 25.6632 24.7366 26.299 24.2678 26.7679C23.7989 27.2367 23.163 27.5001 22.5 27.5001ZM16.25 5.00011V11.2501H22.5L16.25 5.00011Z"
                fill="white" />
        </svg>
        <span>Publicaciones</span>
    </a>
    <a href={{ url('/admin/eventos') }} class={{ $active === 'eventos' ? 'active' : 'false' }}>
        <svg width="30" height="30" viewBox="0 0 30 30" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path
                d="M23.75 27.5H6.25C4.86929 27.5 3.75 26.3807 3.75 25V7.5C3.75 6.11929 4.86929 5 6.25 5H8.75V2.5H11.25V5H18.75V2.5H21.25V5H23.75C25.1307 5 26.25 6.11929 26.25 7.5V25C26.25 26.3807 25.1307 27.5 23.75 27.5ZM6.25 12.5V25H23.75V12.5H6.25ZM6.25 7.5V10H23.75V7.5H6.25ZM21.25 22.5H18.75V20H21.25V22.5ZM16.25 22.5H13.75V20H16.25V22.5ZM11.25 22.5H8.75V20H11.25V22.5ZM21.25 17.5H18.75V15H21.25V17.5ZM16.25 17.5H13.75V15H16.25V17.5ZM11.25 17.5H8.75V15H11.25V17.5Z"
                fill="white" />
        </svg>
        <span>Eventos</span>
    </a>
    <a href={{ url('/admin/colaboradores') }} class={{ $active === 'colaboradores' ? 'active' : 'false' }}>
        <svg width="30" height="30" viewBox="0 0 30 30" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path
                d="M5 27.5H2.5V2.5H5V27.5ZM18.75 26.25H6.25V22.5H18.75V26.25ZM22.5 20H6.25V16.25H22.5V20ZM26.25 13.75H6.25V10H26.25V13.75ZM16.25 7.5H6.25V3.75H16.25V7.5Z"
                fill="white" />
        </svg>
        <span>Colaboradores</span>
    </a>
    <a href={{ url('/admin/usuarios') }} class={{ $active === 'usuarios' ? 'active' : 'false' }}>
        <svg width="30" height="30" viewBox="0 0 30 30" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path
                d="M6.25 26.25H3.75V25C3.75551 20.1698 7.66979 16.2555 12.5 16.25H17.5C22.3302 16.2555 26.2445 20.1698 26.25 25V26.25H23.75V25C23.7459 21.5499 20.9501 18.7541 17.5 18.75H12.5C9.04993 18.7541 6.25413 21.5499 6.25 25V26.25ZM15 15C11.5482 15 8.75 12.2018 8.75 8.75C8.75 5.29822 11.5482 2.5 15 2.5C18.4518 2.5 21.25 5.29822 21.25 8.75C21.2459 12.2001 18.4501 14.9959 15 15ZM15 5C12.9289 5 11.25 6.67893 11.25 8.75C11.25 10.8211 12.9289 12.5 15 12.5C17.0711 12.5 18.75 10.8211 18.75 8.75C18.75 6.67893 17.0711 5 15 5Z"
                fill="white" />
            <path
                d="M4.99985 25.625H24.9998C24.9998 22.9167 23.8328 17.5 14.3748 17.5C7.5 17.5 4.58318 22.9167 4.99985 25.625Z"
                fill="white" stroke="white" />
            <circle cx="15" cy="8.75" r="3.75" fill="white" />
        </svg>
        <span>Usuarios</span>
    </a>
    <form method="POST" action="{{ route('logout') }}">
        @csrf
        <a href="route('logout')" onclick="event.preventDefault();this.closest('form').submit();">
            <svg width="30" height="30" viewBox="0 0 30 30" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path
                    d="M23.75 26.25H12.5C11.1193 26.25 10 25.1307 10 23.75V18.75H12.5V23.75H23.75V6.25H12.5V11.25H10V6.25C10 4.86929 11.1193 3.75 12.5 3.75H23.75C25.1307 3.75 26.25 4.86929 26.25 6.25V23.75C26.25 25.1307 25.1307 26.25 23.75 26.25ZM15 20V16.25H3.75V13.75H15V10L21.25 15L15 20Z"
                    fill="white" />
            </svg>
            <span>Cerrar Sesión</span>
        </a>
    </form>

</aside>
