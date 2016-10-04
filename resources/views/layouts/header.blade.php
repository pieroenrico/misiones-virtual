<header class="main-menu" id="slide">
    <div class="row">
        <div class="col-md-3 logo">
            <img src="/images/logo.png" alt="">
        </div>
        <div class="col-md-2 social">
            <ul>
                <li class="facebook"><a href=""><i class="socicon-facebook"></i></a></li>
                <li class="twitter"><a href=""><i class="socicon-twitter"></i></a></li>
                <li class="instagram"><a href=""><i class="socicon-instagram"></i></a></li>
            </ul>
        </div>
        <div class="col-md-7 title">
            <ul class="menu">
                <li class="active"><a href="">Lobby</a></li>
                <li><a href="">Recinto</a></li>
                <li><a href="">Digesto Jurídico</a></li>
                <li><a href="">Sala de Chat</a></li>
                <li class="novedades"><a href="">Novedades</a></li>
            </ul>
        </div>
    </div>
</header>

<header class="main-menu-mobile" id="slide">
    <div class="row">
        <div class="col-sm-11 logo">
            <img src="/images/logo.png" alt="">
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