@extends('layouts.master')

@section('content')

<div class="page-head"> 
    <div class="container">
        <div class="row">
            <div class="page-head-content">
                <h1 class="page-title">Détails du véhicule <b>{{ $vehicules->marque }}</b></h1>               
            </div>
        </div>
    </div>
</div>
<!-- End page header -->

<!-- property area -->
<div class="content-area single-property" style="background-color: #FCFCFC;">&nbsp;
    <div class="container">   

        <div class="clearfix padding-top-40" >

            <div class="col-md-8 single-property-content prp-style-1 ">
                <div class="row">
                    <div class="light-slide-item">            
                        <div class="clearfix">
                            <div class="favorite-and-print">
                                <a class="add-to-fav" href="#login-modal" data-toggle="modal">
                                    <i class="fa fa-star-o"></i>
                                </a>
                                <a class="printer-icon " href="javascript:window.print()">
                                    <i class="fa fa-print"></i> 
                                </a>
                            </div> 
                            @php
                                    $vehicule_images = explode('|', $vehicules->images);
                                @endphp
                                @if (count($vehicule_images) > 0)
                                <ul id="image-gallery" class="gallery list-unstyled cS-hidden">
                                    @foreach ($vehicule_images as $image)
                                    <li data-thumb="assets/img/property-1/property1.jpg"> 
                                        <img src="{{ URL::to($image) }}" />
                                    </li>
                                    @endforeach
                                </ul>
                                @endif

                        </div>
                    </div>
                </div>

                <div class="single-property-wrapper">
                    <div class="single-property-header">                                          
                        <h1 class="property-title pull-left">{{ $vehicules->marque }}</h1>
                        <span class="property-price pull-right">{{ $vehicules->prix }} FCFA</span>
                    </div>

                    <div class="property-meta entry-meta clearfix ">   

                        

                        <div class="col-xs-6 col-sm-3 col-md-3 p-b-15">
                            <span class="property-info icon-area">
                                <img src="assets/img/icon/room-orange.png">
                            </span>
                            <span class="property-info-entry">
                                <span class="property-info-label">Climatiseur</span>
                                <span class="badge badge-info">{{ $vehicules->climatiseur }}</span>
                            </span>
                        </div>

                        

                        <div class="col-xs-6 col-sm-3 col-md-3 p-b-15">
                            <span class="property-info-icon icon-bed">
                                <img src="assets/img/icon/cars-orange.png">
                            </span>
                            <span class="property-info-entry">
                                <span class="property-info-label">Chauffeur</span>
                                <span class="badge badge-info">{{ $vehicules->chauffeur }}</span>
                            </span>
                        </div>

                        

                        <div class="col-xs-6 col-sm-3 col-md-3 p-b-15">
                            <span class="property-info-icon icon-garage">
                                <img src="assets/img/icon/room-orange.png">
                            </span>
                            <span class="property-info-entry">
                                <span class="property-info-label">Caburation</span>
                                <span class="badge badge-info">{{ $vehicules->caburation }}</span>
                            </span>
                        </div>
                        
                        


                    </div>
                    <!-- .property-meta -->

                    <div class="section">
                        <h4 class="s-property-title">Description</h4>
                        <div class="s-property-content">
                            <p>{{ $vehicules->entreprise->description }}</p>
                        </div>
                    </div>
                    <!-- End description area  -->

                    <div class="section additional-details">

                        <h4 class="s-property-title">Information du propriétaire</h4>

                        <ul class="additional-details-list clearfix">
                            <li>
                                <span class="col-xs-6 col-sm-4 col-md-4 add-d-title">Entreprise</span>
                                <span class="col-xs-6 col-sm-8 col-md-8 add-d-entry">{{ $vehicules->entreprise->entreprise }}</span>
                            </li>

                            <li>
                                <span class="col-xs-6 col-sm-4 col-md-4 add-d-title">Représentant</span>
                                <span class="col-xs-6 col-sm-8 col-md-8 add-d-entry">{{ $vehicules->entreprise->representant }}</span>
                            </li>
                            <li>
                                <span class="col-xs-6 col-sm-4 col-md-4 add-d-title">Adresse</span>
                                <span class="col-xs-6 col-sm-8 col-md-8 add-d-entry">{{ $vehicules->entreprise->ville }} / {{ $vehicules->entreprise->quatier }}</span>
                            </li>

                            <li>
                                <span class="col-xs-6 col-sm-4 col-md-4 add-d-title">Téléphone</span>
                                <span class="col-xs-6 col-sm-8 col-md-8 add-d-entry">{{ $vehicules->entreprise->telephone }}</span>
                            </li>

                            <li>
                                <span class="col-xs-6 col-sm-4 col-md-4 add-d-title">Email</span>
                                <span class="col-xs-6 col-sm-8 col-md-8 add-d-entry">{{ $vehicules->entreprise->user->email }}</span>
                            </li>

                        </ul>
                    </div>  
                    <!-- End additional-details area  -->

                    {{-- <div class="section property-features">      

                        <h4 class="s-property-title">Features</h4>                            
                        <ul>
                            <li><a href="properties.html">Swimming Pool</a></li>   
                            <li><a href="properties.html">3 Stories</a></li>
                            <li><a href="properties.html">Central Cooling</a></li>
                            <li><a href="properties.html">Jog Path 2</a></li>
                            <li><a href="properties.html">2 Lawn</a></li>
                            <li><a href="properties.html">Bike Path</a></li>
                        </ul>

                    </div> --}}
                    <!-- End features area  -->

                    {{-- <div class="section property-video"> 
                        <h4 class="s-property-title">Property Video</h4> 
                        <div class="video-thumb">
                            <a class="video-popup" href="yout" title="Virtual Tour">
                                <img src="assets/img/property-video.jpg" class="img-responsive wp-post-image" alt="Exterior">            
                            </a>
                        </div>
                    </div> --}}
                    <!-- End video area  -->
                    
                    

                    {{-- <div class="section property-share"> 
                        <h4 class="s-property-title">Share width your friends </h4> 
                        <div class="roperty-social">
                            <ul> 
                                <li><a title="Share this on dribbble " href="#"><img src="assets/img/social_big/dribbble_grey.png"></a></li>                                         
                                <li><a title="Share this on facebok " href="#"><img src="assets/img/social_big/facebook_grey.png"></a></li> 
                                <li><a title="Share this on delicious " href="#"><img src="assets/img/social_big/delicious_grey.png"></a></li> 
                                <li><a title="Share this on tumblr " href="#"><img src="assets/img/social_big/tumblr_grey.png"></a></li> 
                                <li><a title="Share this on digg " href="#"><img src="assets/img/social_big/digg_grey.png"></a></li> 
                                <li><a title="Share this on twitter " href="#"><img src="assets/img/social_big/twitter_grey.png"></a></li> 
                                <li><a title="Share this on linkedin " href="#"><img src="assets/img/social_big/linkedin_grey.png"></a></li>                                        
                            </ul>
                        </div>
                    </div> --}}
                    <!-- End video area  -->
                    
                </div>
            </div>

            {{-- COTE DROIT --}}
            <div class="col-md-4 p0">
                <aside class="sidebar sidebar-property blog-asside-right">
                    <div class="dealer-widget">
                        <div class="dealer-content">
                            <div class="inner-wrapper">

                                <div class="clear">
                                    <div class="col-xs-4 col-sm-4 dealer-face">
                                        <a href="">
                                            <img src="assets/img/client-face1.jpg" class="img-circle">
                                        </a>
                                    </div>
                                    <div class="col-xs-8 col-sm-8 ">
                                        <h3 class="dealer-name">
                                            <a href="">{{ $vehicules->entreprise->entreprise }}</a>
                                            <span></span>        
                                        </h3>

                                    </div>
                                </div>

                                <div class="clear">
                                    <ul class="dealer-contacts">                                       
                                        <li><i class="pe-7s-map-marker strong"> </i> {{ $vehicules->entreprise->ville }} / {{ $vehicules->entreprise->quatier }}</li>
                                        <li><i class="pe-7s-mail strong"> </i> {{ $vehicules->entreprise->user->email }}</li>
                                        <li><i class="pe-7s-call strong"> </i> {{ $vehicules->entreprise->telephone }}</li>
                                    </ul>
                                </div>

                            </div>
                        </div>
                    </div>

                    <div class="panel panel-default sidebar-menu similar-property-wdg wow fadeInRight animated">
                        <div class="panel-heading">
                            <h3 class="panel-title">Annonces Similaires</h3>
                        </div>

                            
                        <div class="panel-body recent-property-widget">
                            @foreach ($vehiculesSimilaires as $vehicules )

                                <ul>
                                <li>
                                    <div class="col-md-3 col-sm-3 col-xs-3 blg-thumb p0">
                                        @php
                                        $vehicule_images = explode('|', $vehicules->images);
                                    @endphp
                                    @if (count($vehicule_images) > 0)
                                        <a href="{{ route('vehicule.detail', $vehicules->id) }}"
                                            title="Cliquer sur l'image pour plus de détails"><img
                                                src="{{ URL::to($vehicule_images[0]) }}"></a>
                                    @endif                                        <span class="property-seeker">
                                            <b class="b-1">A</b>
                                            <b class="b-2">S</b>
                                        </span>
                                    </div>
                                    <div class="col-md-8 col-sm-8 col-xs-8 blg-entry">
                                        <h6> <a href="{{ route('vehicule.detail', $vehicules->id) }}">{{ $vehicules->marque }}</a></h6>
                                        <span class="{{ route('vehicule.detail', $vehicules->id) }}">{{ $vehicules->prix }} FCFA</span>
                                    </div>
                                </li>
                                {{-- <li>
                                    <div class="col-md-3 col-sm-3  col-xs-3 blg-thumb p0">
                                        <a href="single.html"><img src="assets/img/demo/small-property-1.jpg"></a>
                                        <span class="property-seeker">
                                            <b class="b-1">A</b>
                                            <b class="b-2">S</b>
                                        </span>
                                    </div>
                                    <div class="col-md-8 col-sm-8 col-xs-8 blg-entry">
                                        <h6> <a href="single.html">Super nice villa </a></h6>
                                        <span class="property-price">3000000$</span>
                                    </div>
                                </li>
                                <li>
                                    <div class="col-md-3 col-sm-3 col-xs-3 blg-thumb p0">
                                        <a href="single.html"><img src="assets/img/demo/small-property-3.jpg"></a>
                                        <span class="property-seeker">
                                            <b class="b-1">A</b>
                                            <b class="b-2">S</b>
                                        </span>
                                    </div>
                                    <div class="col-md-8 col-sm-8 col-xs-8 blg-entry">
                                        <h6> <a href="single.html">Super nice villa </a></h6>
                                        <span class="property-price">3000000$</span>
                                    </div>
                                </li>

                                <li>
                                    <div class="col-md-3 col-sm-3 col-xs-3 blg-thumb p0">
                                        <a href="single.html"><img src="assets/img/demo/small-property-2.jpg"></a>
                                        <span class="property-seeker">
                                            <b class="b-1">A</b>
                                            <b class="b-2">S</b>
                                        </span>
                                    </div>
                                    <div class="col-md-8 col-sm-8 col-xs-8 blg-entry">
                                        <h6> <a href="single.html">Super nice villa </a></h6>
                                        <span class="property-price">3000000$</span>
                                    </div>
                                </li> --}}

                            </ul>
                            @endforeach

                        </div>
                    </div>      


                    {{-- <div class="panel panel-default sidebar-menu wow fadeInRight animated">
                        <div class="panel-heading">
                            <h3 class="panel-title">Ads her  </h3>
                        </div>
                        <div class="panel-body recent-property-widget">
                            <img src="assets/img/ads.jpg">
                        </div>
                    </div> --}}

                    {{-- <div class="panel panel-default sidebar-menu wow fadeInRight animated" >
                        <div class="panel-heading">
                            <h3 class="panel-title">Smart search</h3>
                        </div>
                        <div class="panel-body search-widget">
                            <form action="" class=" form-inline"> 
                                <fieldset>
                                    <div class="row">
                                        <div class="col-xs-12">
                                            <input type="text" class="form-control" placeholder="Key word">
                                        </div>
                                    </div>
                                </fieldset>

                                <fieldset>
                                    <div class="row">
                                        <div class="col-xs-6">

                                            <select id="lunchBegins" class="selectpicker" data-live-search="true" data-live-search-style="begins" title="Select Your City">

                                                <option>New york, CA</option>
                                                <option>Paris</option>
                                                <option>Casablanca</option>
                                                <option>Tokyo</option>
                                                <option>Marraekch</option>
                                                <option>kyoto , shibua</option>
                                            </select>
                                        </div>
                                        <div class="col-xs-6">

                                            <select id="basic" class="selectpicker show-tick form-control">
                                                <option> -Status- </option>
                                                <option>Rent </option>
                                                <option>Boy</option>
                                                <option>used</option>  

                                            </select>
                                        </div>
                                    </div>
                                </fieldset>

                                <fieldset class="padding-5">
                                    <div class="row">
                                        <div class="col-xs-6">
                                            <label for="price-range">Price range ($):</label>
                                            <input type="text" class="span2" value="" data-slider-min="0" 
                                                   data-slider-max="600" data-slider-step="5" 
                                                   data-slider-value="[0,450]" id="price-range" ><br />
                                            <b class="pull-left color">2000$</b> 
                                            <b class="pull-right color">100000$</b>                                                
                                        </div>
                                        <div class="col-xs-6">
                                            <label for="property-geo">Property geo (m2) :</label>
                                            <input type="text" class="span2" value="" data-slider-min="0" 
                                                   data-slider-max="600" data-slider-step="5" 
                                                   data-slider-value="[50,450]" id="property-geo" ><br />
                                            <b class="pull-left color">40m</b> 
                                            <b class="pull-right color">12000m</b>                                                
                                        </div>                                            
                                    </div>
                                </fieldset>                                

                                <fieldset class="padding-5">
                                    <div class="row">
                                        <div class="col-xs-6">
                                            <label for="price-range">Min baths :</label>
                                            <input type="text" class="span2" value="" data-slider-min="0" 
                                                   data-slider-max="600" data-slider-step="5" 
                                                   data-slider-value="[250,450]" id="min-baths" ><br />
                                            <b class="pull-left color">1</b> 
                                            <b class="pull-right color">120</b>                                                
                                        </div>

                                        <div class="col-xs-6">
                                            <label for="property-geo">Min bed :</label>
                                            <input type="text" class="span2" value="" data-slider-min="0" 
                                                   data-slider-max="600" data-slider-step="5" 
                                                   data-slider-value="[250,450]" id="min-bed" ><br />
                                            <b class="pull-left color">1</b> 
                                            <b class="pull-right color">120</b>

                                        </div>
                                    </div>
                                </fieldset>

                                <fieldset class="padding-5">
                                    <div class="row">
                                        <div class="col-xs-6">
                                            <div class="checkbox">
                                                <label> <input type="checkbox" checked> Fire Place</label>
                                            </div> 
                                        </div>

                                        <div class="col-xs-6">
                                            <div class="checkbox">
                                                <label> <input type="checkbox"> Dual Sinks</label>
                                            </div>
                                        </div>                                            
                                    </div>
                                </fieldset>

                                <fieldset class="padding-5">
                                    <div class="row">
                                        <div class="col-xs-6"> 
                                            <div class="checkbox">
                                                <label> <input type="checkbox" checked> Swimming Pool</label>
                                            </div>
                                        </div>  
                                        <div class="col-xs-6"> 
                                            <div class="checkbox">
                                                <label> <input type="checkbox" checked> 2 Stories </label>
                                            </div>
                                        </div>  
                                    </div>
                                </fieldset>

                                <fieldset class="padding-5">
                                    <div class="row">
                                        <div class="col-xs-6"> 
                                            <div class="checkbox">
                                                <label><input type="checkbox"> Laundry Room </label>
                                            </div>
                                        </div>  
                                        <div class="col-xs-6"> 
                                            <div class="checkbox">
                                                <label> <input type="checkbox"> Emergency Exit</label>
                                            </div>
                                        </div>  
                                    </div>
                                </fieldset>

                                <fieldset class="padding-5">
                                    <div class="row">
                                        <div class="col-xs-6"> 
                                            <div class="checkbox">
                                                <label>  <input type="checkbox" checked> Jog Path </label>
                                            </div>
                                        </div>  
                                        <div class="col-xs-6"> 
                                            <div class="checkbox">
                                                <label>  <input type="checkbox"> 26' Ceilings </label>
                                            </div>
                                        </div>  
                                    </div>
                                </fieldset>

                                <fieldset class="padding-5">
                                    <div class="row">
                                        <div class="col-xs-12"> 
                                            <div class="checkbox">
                                                <label>  <input type="checkbox"> Hurricane Shutters </label>
                                            </div>
                                        </div>  
                                    </div>
                                </fieldset>

                                <fieldset >
                                    <div class="row">
                                        <div class="col-xs-12">  
                                            <input class="button btn largesearch-btn" value="Search" type="submit">
                                        </div>  
                                    </div>
                                </fieldset>                                     
                            </form>
                        </div>
                    </div> --}}

                </aside><br>

                <div style=" margin-bottom: 20px;">
                    <p>Vous souhaitez obtenir plus d'informations sur ce véhicule ?</p>
                    <button class="call-button" onclick="window.location.href = 'tel:{{ $vehicules->entreprise->telephone }}';"><i class="fa fa-phone"></i> Appeler {{ $vehicules->entreprise->entreprise }}</button>
                    <br><br>
                    <a href="https://api.whatsapp.com/send?phone={{ $vehicules->entreprise->telephone }}" target="_blank" style="background-color: #25d366; color: #ffffff; padding: 10px 20px; border-radius: 5px; text-decoration: none; display: inline-block;"><i class="fa fa-whatsapp"></i> Cliquer pour contacter le propriétaire via WhatsApp</a>
                </div>

            </div>
        </div>



    </div>
</div>

<style>
    .call-button {
    background-color: #FFA600; /* Couleur de fond */
    color: #fff; /* Couleur du texte */
    border: none; /* Suppression des bordures */
    border-radius: 5px; /* Coins arrondis */
    padding: 10px 20px; /* Espacement intérieur */
    font-size: 16px; /* Taille de la police */
    cursor: pointer; /* Curseur de la souris */
    transition: background-color 0.3s; /* Animation de transition */
}

.call-button:hover {
    background-color: #FFA600; /* Couleur de fond au survol */
}

</style>
@endsection