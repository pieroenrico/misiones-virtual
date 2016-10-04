<header class="main-menu-mobile" id="slide">
    <div class="row">
        <div class="col-sm-11 logo">
            <a href="/"><img src="/images/logo.png" alt=""></a>
        </div>
        <div class="col-sm-1 burguer">
            <i class="fa fa-bars"></i>
        </div>
    </div>
</header>

<div class="menu-mobile">
    <ul class="menu">
        <li class="active"><a href="">Lobby</a></li>
        <li><a href="">Recinto</a></li>
        <li><a href="">Digesto Jurídico</a></li>
        <li><a href="">Sala de Chat</a></li>
        <li class="novedades"><a href="">Novedades</a></li>
    </ul>
</div>

<script>
    $(document).on('click', '.burguer', function(e){
        e.preventDefault();
        $('.menu-mobile').toggle();
    })
</script>