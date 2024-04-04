
<div class="header-connect">
    <div class="container">
        <div class="row">
            <div class="col-md-5 col-sm-8  col-xs-12">
                <div class="header-half header-call">
                    <p>
                        <span><i class="pe-7s-call"></i> +229 40 73 53 35</span>
                        <span><i class="pe-7s-mail"></i> ariExpertiz@gmail.com</span>
                    </p>
                </div>
            </div>
            <div class="col-md-2 col-md-offset-5  col-sm-3 col-sm-offset-1  col-xs-12">
                <div class="header-half header-social">
                    <ul class="list-inline">
                        <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                        <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                        <li><a href="#"><i class="fa fa-vine"></i></a></li>
                        <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                        <li><a href="#"><i class="fa fa-dribbble"></i></a></li>
                        <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>  

<nav class="navbar navbar-default ">
    <div class="container">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navigation">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="{{ route('home') }}"><img src="{{ asset('assets/img/logo.png') }}" alt=""></a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse yamm" id="navigation">

            {{-- Si l'utilisateur n'est pas connecté tu m'affiche ca (grace a la methode guest) --}}
            @guest
                
            <div class="button navbar-right">
                <a href="{{route('user.login')}}" class=" btn navbar-btn nav-button wow bounceInRight login">Connexion</a>
                <a href="{{route('user.registerEntreprise')}}" class="btn navbar-btn nav-button wow fadeInRight">Inscription</a>
            </div>
            
            @endguest
            <ul class="main-nav nav navbar-nav navbar-right">
               
                <li class="wow fadeInDown" data-wow-delay="0.1s"><a class="" href="{{route('home') }}">Accueil</a></li>
                    @auth
                    <li class="wow fadeInDown" data-wow-delay="0.1s"><a class="" href="{{ route('entreprise.annonce') }}">Mes annonces</a></li>

                    @endauth
                {{-- <li class="wow fadeInDown" data-wow-delay="0.1s"><a class="" href="property.html">Property</a></li> --}}
                

                <li class="wow fadeInDown" data-wow-delay="0.4s"><a href="contact.html">Contacte</a></li>

                @auth
                    
                <li class="dropdown ymm-sw " data-wow-delay="0.1s">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-delay="200">Profil <b class="caret"></b></a>
                    <ul class="dropdown-menu navbar-nav">
                        <li>
                            <a href="{{ route('user.profil') }}">Profil</a>
                        </li>
                        <li>
                            <a href="{{route('user.logout')}}">Me Déconnecter</a>
                        </li>
                        

                    </ul>
                </li>
                
                @endauth

            </ul>
        </div><!-- /.navbar-collapse -->
    </div><!-- /.container-fluid -->
</nav>
<!-- End of nav bar -->
