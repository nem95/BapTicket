<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    
    <title>Site de billetterie pour des conférences sur le digital </title>

    <link rel="icon" type="image/png" href="img/favicon.png" />
    <!-- Dublin Core -->
    <meta name="DC.title" content="WITICKET site de billetterie pour des conférences sur le digital">
    <meta name="DC.creator" content="WITICKET">
    <meta name="DC.subject" content="Site de conférences sur le digital, top conférences" />
    <meta name="DC.description" content="WITICKET, est le site de billeterie pour des conférences touchant le domaine du digital" />
    <meta name="DC.publisher" content="WITICKET">
    <meta name="DC.format" content="website">
    <meta name="DC.identifier" content="">
    <meta name="DC.language" content="fr-FR">
    <meta name="DC.coverage" content="World">
    <meta name="DC.rights" content="&copy; Site de billetterie pour des conférences sur le digital">
    <!-- END Dublin Core -->

    <!-- Referencement -->
    <meta name="description" content="WITICKET, est le site de billeterie pour des conférences touchant le domaine du digital">
    <meta name="keywords" content="WITICKET, billeterie, conférences, digital, marketing">
    <meta name="author" content="">
    <meta name="robots" content="index">
    <meta name="Indentifier-URL" content="">
    <!-- END Référencement -->

    <!-- Open Graph-->
    <meta property="og:title" content="WITICKET site de billetterie pour des conférences sur le digital">
    <meta property="og:type" content="website">
    <meta property="og:url" content="">
    <meta property="og:image" content="">
    <meta property="og:site_name" content="Site de conférences sur le digital, top conférence">
    <meta property="og:description" content="WITICKET, est le site de billeterie pour des conférences touchant le domaine du digitale">
    <!-- END Open Graph-->

    <!-- Fonts -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.4.0/css/font-awesome.min.css" rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Doppio+One' rel='stylesheet' type='text/css'>
    <link href="https://fonts.googleapis.com/css?family=Lato:100,300,400,700" rel='stylesheet' type='text/css'>

    <!-- Styles -->
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet">
    {{-- <link href="{{ elixir('css/app.css') }}" rel="stylesheet"> --}}
    <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/jquery.slick/1.5.9/slick.css"/>
    <link rel="stylesheet" type="text/css" href="{{asset("slick/slick/slick.css")}}"/>
    <link rel="stylesheet" type="text/css" href="{{asset("slick/slick/slick-theme.css")}}"/>
    {{--CSS HOME --}}
    <link rel="stylesheet" type="text/css" href="{{asset("css/home-page.css")}}"/>
    {{--CSS SLIDER home --}}
    <link rel="stylesheet" type="text/css" href="{{asset("css/slider.css")}}"/>
    <link rel="stylesheet" type="text/css" href="{{asset("css/slider-tab.css")}}" media="screen and (max-width: 1340px)"/>
    <link rel="stylesheet" type="text/css" href="{{asset("css/slider-mobile.css")}}" media="screen and (max-width: 640px)"/>
    <link rel="stylesheet" type="text/css" href="{{asset("css/slider-mid-tab.css")}}" media="screen and (min-width: 641px) and (max-width: 999px) "/>
    <link rel="stylesheet" type="text/css" href="{{asset("css/style.css")}}"/>
    {{--CSS ORGANISATEUR--}}
    <link rel="stylesheet" type="text/css" href="{{asset("css/orga.css")}}"/>
    {{--JS--}}

    <style>
        body {
            font-family: 'Lato';
        }

        .fa-btn {
            margin-right: 6px;
        }

        .events {
            text-align: center;
        }

        .right {
            text-align: right;
        }
    </style>
</head>
<body id="app-layout">

<nav class="navbar">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header row">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <i class="fa fa-2x fa-bars" aria-hidden="true"></i>
      </button>

      <a class="navbar-brand" href="{{ url('/') }}"><img src="{{ asset("img/logo.png") }}" alt="Logo WiTicket" class="img-responsive"></a>

      <li role="presentation" class="dropdown searchmobile">
        <a class="dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">
          <i class="fa fa-2x fa-search" aria-hidden="true"></i>
        </a>
        <ul class="dropdown-menu searchmenu">
          <div class="input-group inputmobile">
              <input type="text" class="form-control" placeholder="Search for...">
              <span class="input-group-btn">
                <button class="btn btn-default" type="button">Rechercher</button>
              </span>
            </div>
        </ul>
      </li>
    </div>
    
    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">

    <form class="navbar-form navbar-left" role="search">
        <div class="input-group barremenu">
        <span class="input-group-addon" id="basic-addon1"><i class="fa fa-search" aria-hidden="true"></i></span>
          <input type="text" class="form-control searchmenuinput" placeholder="Mots-clés..." size="50">
          <div class="input-group-btn">
            <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fa fa-eye" aria-hidden="true"></i> Genre <i class="fa fa-angle-down" aria-hidden="true"></i></button>
            <ul class="dropdown-menu dropdown-menu-right">
              <li><a href="#">Accueil</a></li>
              <li><a href="#">Qui sommes-nous ?</a></li>
              <li><a href="#">Nous contacter</a></li>
              <li><a href="#">Plan du site</a></li>
            </ul>
            <button class="btn btnlogin btnsearch" type="button">Rechercher</button>
          </div>
        </div>
    </form>
      <ul class="nav navbar-nav navbar-right">
        @if (Auth::guest())
            <li>
                <a href="{{ url('/login') }}" class="btnnavbar">
                    <p>Connexion / Inscription</p>
                </a>
            </li>
        @else
            <li>
                <a href="#" class="dropdown-toggle aidemenu" data-toggle="dropdown" role="button" aria-expanded="false">
                    {{ Auth::user()->name }} {{ Auth::user()->surname }} <span class="caret"></span>
                </a>

                <ul class="dropdown-menu">

                @if(Auth::check() && Auth::user()->is_orga == 1 || Auth::check() && Auth::user()->is_admin == 1 )
                    <li><a href="{{ route('organisateur.show', Auth::user()->id) }}">Mon profil</a></li>
                    <li><a href="{{ route('evenement.create') }}">Créer un event</a></li>
                @else
                    <li><a href="{{ route('organisateur.show', Auth::user()->id) }}">Mon profil</a></li>
                @endif
                    @if(Auth::check() && Auth::user()->is_admin == 1)
                        <li><a href="{{ route('admin.index') }}">Administration</a></li>
                    @endif
                    <li><a href="{{ url('/logout') }}"><i class="fa fa-btn fa-sign-out"></i>Logout</a></li>
                </ul>
            </li>
        @endif
        <li class="aidemenudisplay"><a class="aidemenu" href="{{ url('/faq') }}">Aide</a></li>
      </ul>
      </ul>

    
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>






@yield('content')
<footer> @include('layouts.footer') </footer>
<!-- JavaScripts -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
{{-- <script src="{{ elixir('js/app.js') }}"></script> --}}

{{--SLIDER SLICK.JS--}}

<script type="text/javascript" src="//code.jquery.com/jquery-1.11.0.min.js"></script>
<script src="http://jashkenas.github.com/coffee-script/extras/coffee-script.js"></script>
<script type="text/javascript" src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
<script type="text/javascript" src="{{asset("slick/slick/slick.min.js")}}"></script>
<script type="text/javascript" src="{{asset("js/menu.js")}}"></script>

<script type="text/javascript">
    $(document).ready(function(){
        $('.slider').slick({
            autoplay: true,
            autoplaySpeed: 3000,
            prevArrow: '<img src="{{asset("img/prev.png")}}" alt="" class="slick-prev prev">',
            nextArrow: '<img src="{{asset("img/next.png")}}" alt="" class="slick-next next">',
        });
    });
</script>
<script>
    $(document).ready(function(){
        $("address").each(function(){                     
            var embed ="<iframe width='100%' height='100%' frameborder='0' scrolling='no' marginheight='0' marginwidth='0'  src='https://maps.google.com/maps?&amp;q="+ encodeURIComponent( $(this).text() ) +"&amp;output=embed'></iframe>";
                $(this).html(embed);                             
        });
        $('.maps').click(function () {
        $('.maps iframe').css("pointer-events", "auto");
    });
    
    $( ".maps" ).mouseleave(function() {
      $('.maps iframe').css("pointer-events", "none"); 
    });


});
</script>
</body>
</html>
