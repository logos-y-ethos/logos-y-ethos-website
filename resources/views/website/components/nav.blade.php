<nav class="nav" id="nav">
    <a href="#">
        <img src="{{ asset('images/logos-y-ethos-logo.png') }}" alt="" >
    </a>
    <a href="#" class="active">INICIO</a>
    <a href="#" class="">NOSOTROS</a>
    <a href="#" class="">PUBLICACIONES</a>
    <a href="#" class="">EVENTOS</a>
    <a href="#" class="">CONTACTO</a>
    <a href="javascript:void(0);" class="icon" onclick="myFunction()">
        <span class="icon-menu"></span>

    </a>
</nav>

<script>
    function myFunction() {
        var x = document.getElementById("nav");
        if (x.className === "nav") {
            x.className += " responsive";
        } else {
            x.className = "nav";
        }
    }
</script>