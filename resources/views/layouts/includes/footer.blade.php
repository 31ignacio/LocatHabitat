<div class="footer-area">

    <div class=" footer">
        <div class="container">
            <div class="row">

                <div class="col-md-3 col-sm-6 wow fadeInRight animated">
                    <div class="single-footer">
                        <h4>A propos de nous </h4>
                        <div class="footer-title-line"></div>

                        <img src="{{ asset('assets/img/footer-logo.png') }}" alt="" class="wow pulse" data-wow-delay="1s">
                        <p>Nous sommes dédiés à connecter les propriétaires de biens immobiliers avec des locataires potentiels, simplifiant ainsi le processus de location et favorisant des transactions transparentes et harmonieuses.</p>
                        <ul class="footer-adress">
                            <li><i class="pe-7s-map-marker strong"> </i> Cotonou, Bénin</li>
                            <li><i class="pe-7s-mail strong"> </i> ariexpertize@gmail.com</li>
                            <li><i class="pe-7s-call strong"> </i> +229 40 73 53 35</li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 wow fadeInRight animated">
                    <div class="single-footer">
                        <h4>Liens rapides </h4>
                        <div class="footer-title-line"></div>
                        <ul class="footer-menu">
                            <li><a href="{{ route('tarification.create') }}">Page de tarification</a>  </li> 
                            @auth
                            <li><a href="{{ route('entreprise.annonce') }}">Mes annonces </a></li> 
                            @endauth
                            <li><a href="{{ route('contacte.create') }}">Contactez nous</a></li> 
                            <li><a href="{{ route('faq.create') }}">fqa</a>  </li> 
                        </ul>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 wow fadeInRight animated">
                    <div class="single-footer">
                        <h4>Annonces récentes</h4>
                        <div class="footer-title-line"></div>
                        <ul class="footer-blog">

                            
                            <li>
                                <div class="col-md-3 col-sm-4 col-xs-4 blg-thumb p0">
                                    <a href="single.html">
                                        <img src="{{ asset('assets/img/demo/small-proerty-2.jpg') }}">
                                    </a>
                                    <span class="blg-date">12-12-2016</span>

                                </div>
                                <div class="col-md-8  col-sm-8 col-xs-8  blg-entry">
                                    <h6> <a href="single.html">Add news functions </a></h6> 
                                    <p style="line-height: 17px; padding: 8px 2px;">Lorem ipsum dolor sit amet, nulla ...</p>
                                </div>
                            </li> 

                            {{-- <li>
                                <div class="col-md-3 col-sm-4 col-xs-4 blg-thumb p0">
                                    <a href="single.html">
                                        <img src="assets/img/demo/small-proerty-2.jpg">
                                    </a>
                                    <span class="blg-date">12-12-2016</span>

                                </div>
                                <div class="col-md-8  col-sm-8 col-xs-8  blg-entry">
                                    <h6> <a href="single.html">Add news functions </a></h6> 
                                    <p style="line-height: 17px; padding: 8px 2px;">Lorem ipsum dolor sit amet, nulla ...</p>
                                </div>
                            </li> 

                            <li>
                                <div class="col-md-3 col-sm-4 col-xs-4 blg-thumb p0">
                                    <a href="single.html">
                                        <img src="assets/img/demo/small-proerty-2.jpg">
                                    </a>
                                    <span class="blg-date">12-12-2016</span>

                                </div>
                                <div class="col-md-8  col-sm-8 col-xs-8  blg-entry">
                                    <h6> <a href="single.html">Add news functions </a></h6> 
                                    <p style="line-height: 17px; padding: 8px 2px;">Lorem ipsum dolor sit amet, nulla ...</p>
                                </div>
                            </li>  --}}


                        </ul>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 wow fadeInRight animated">
                    <div class="single-footer news-letter">
                        <h4>Restez connecté</h4>
                        <div class="footer-title-line"></div>
                        <p>Restez à l'affût des dernières offres et des nouvelles annonces sur LocatHabitat ! Inscrivez-vous à notre newsletter pour recevoir des mises à jour exclusives directement dans votre boîte de réception.</p>

                        <form method="POST" action="{{ route('newsletter') }}">
                            @csrf

                            <div class="input-group">
                                <input class="form-control" type="email" name="email" placeholder="Votre adresse e-mail">

                                @error('email')

                                <div class="text text-danger">{{ $message }}</div>
                                    
                                @enderror
                                <span class="input-group-btn">
                                    <button class="btn btn-primary subscribe" type="submit"><i class="pe-7s-paper-plane pe-2x"></i></button>
                                </span>
                            </div>
                            <!-- /input-group -->
                        </form> 

                        <div class="social pull-right"> 
                            <ul>
                                <li><a class="wow fadeInUp animated" href="#"><i class="fa fa-twitter"></i></a></li>
                                <li><a class="wow fadeInUp animated" href="#" data-wow-delay="0.2s"><i class="fa fa-facebook"></i></a></li>
                                <li><a class="wow fadeInUp animated" href="#" data-wow-delay="0.3s"><i class="fa fa-google-plus"></i></a></li>
                                <li><a class="wow fadeInUp animated" href="#" data-wow-delay="0.4s"><i class="fa fa-instagram"></i></a></li>
                                <li><a class="wow fadeInUp animated" href="#" data-wow-delay="0.6s"><i class="fa fa-dribbble"></i></a></li>
                            </ul> 
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>

    <div class="footer-copy text-center">
        <div class="container">
            <div class="row">
                <div class="pull-left">
                    <span> (C) <a href="#">ariExpertize</a> , 2024 Tous droits réservés</span> 
                </div> 
                <div class="bottom-menu pull-right"> 
                    <ul> 
                        <li><a class="wow fadeInUp animated" href="{{ route('home') }}" data-wow-delay="0.2s">Accueil</a></li>
                        <li><a class="wow fadeInUp animated" href="{{ route('tarification.create') }}" data-wow-delay="0.3s">Tarifications</a></li>
                        <li><a class="wow fadeInUp animated" href="{{ route('faq.create') }}" data-wow-delay="0.4s">Faq</a></li>
                        <li><a class="wow fadeInUp animated" href="{{ route('contacte.create') }}" data-wow-delay="0.6s">Contacte</a></li>
                    </ul> 
                </div>
            </div>
        </div>
    </div>

</div>
