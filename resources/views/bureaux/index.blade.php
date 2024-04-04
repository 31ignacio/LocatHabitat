@extends('layouts.master')

@section('content')
     <div class="slider-area">
        <div class="slider">
            <div id="bg-slider" class="owl-carousel owl-theme">
                <div class="item"><img src="{{ asset('assets/img/slide1/appartement.jpg') }}" alt="The Last of us"></div>
                <div class="item"><img src="{{ asset('assets/img/slide1/bureau.jpg') }}" alt="GTA V"></div>
                <div class="item"><img src="{{ asset('assets/img/slide1/voiture2.jpg') }}" alt="GTA V"></div>
            </div>
        </div>
        <div class="container slider-content">
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1 col-sm-12">
                    <h2>
                        <marquee style="color: #FDC600;">Votre solution pour une location sans stress !</marquee>
                    </h2><br><br>
                    <div class="sticky-top">
                        <div style="background-color: rgba(0, 0, 0, 0.7); color: white; padding: 20px;">
                            <b>Notre plateforme vous connecte directement avec des propriétaires de biens immobiliers et de
                                véhicules, vous permettant de louer rapidement et en toute simplicité votre prochain
                                appartement, bureau ou voiture. Louez en toute confiance, sans tracas.</b>
                            <br><br><br>
                            @if (Auth::check() && Auth::user()->role == 'ENTREPRISE')
                                <div class="button-container">
                                    <a href type="button" class="custom-button primary">Enregistrer Appartement</a>
                                    <a href="{{ route('bureaux') }}" type="button" class="custom-button secondary">Enregistrer Bureau</a>
                                    <a href="{{ route('vehicule') }}" type="button" class="custom-button danger">Enregistrer Voiture</a>
                                </div>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>

        
    </div> 

    

    <div class="home-lager-shearch">
        <div class="container">
            <div class="row">
                <div class="col-md-12 large-search">
                    <div class="search-form wow pulse">
                        <form action="" class=" form-inline">
                            <div class="col-md-12 clear">
                                <div class="col-md-4">
                                    <input type="text" class="form-control" placeholder="Key word">
                                </div>
                                <div class="col-md-4">
                                    <select id="lunchBegins" class="selectpicker" data-live-search="true"
                                        data-live-search-style="begins" title="Select your city">
                                        <option>New york, CA</option>
                                        <option>Paris</option>
                                        <option>Casablanca</option>
                                        <option>Tokyo</option>
                                        <option>Marraekch</option>
                                        <option>kyoto , shibua</option>
                                    </select>
                                </div>
                                <div class="col-md-4">
                                    <select id="basic" class="selectpicker show-tick form-control">
                                        <option> -Status- </option>
                                        <option>Rent </option>
                                        <option>Boy</option>
                                        <option>used</option>

                                    </select>
                                </div>
                            </div>
                            <div class="col-md-12 clear">
                                {{-- <div class="search-row">   

                                <div class="col-sm-3">
                                    <label for="price-range">Price range ($):</label>
                                    <input type="text" class="span2" value="" data-slider-min="0" 
                                        data-slider-max="600" data-slider-step="5" 
                                        data-slider-value="[0,450]" id="price-range" ><br />
                                    <b class="pull-left color">2000$</b> 
                                    <b class="pull-right color">100000$</b>
                                </div>
                                <!-- End of  -->  

                                <div class="col-sm-3">
                                    <label for="property-geo">Property geo (m2) :</label>
                                    <input type="text" class="span2" value="" data-slider-min="0" 
                                        data-slider-max="600" data-slider-step="5" 
                                        data-slider-value="[50,450]" id="property-geo" ><br />
                                    <b class="pull-left color">40m</b> 
                                    <b class="pull-right color">12000m</b>
                                </div>
                                <!-- End of  --> 

                                <div class="col-sm-3">
                                    <label for="price-range">Min baths :</label>
                                    <input type="text" class="span2" value="" data-slider-min="0" 
                                        data-slider-max="600" data-slider-step="5" 
                                        data-slider-value="[250,450]" id="min-baths" ><br />
                                    <b class="pull-left color">1</b> 
                                    <b class="pull-right color">120</b>
                                </div>
                                <!-- End of  --> 

                                <div class="col-sm-3">
                                    <label for="property-geo">Min bed :</label>
                                    <input type="text" class="span2" value="" data-slider-min="0" 
                                        data-slider-max="600" data-slider-step="5" 
                                        data-slider-value="[250,450]" id="min-bed" ><br />
                                    <b class="pull-left color">1</b> 
                                    <b class="pull-right color">120</b>
                                </div>
                                <!-- End of  --> 

                            </div> --}}

                                {{-- <div class="search-row">  

                                <div class="col-sm-3">
                                    <div class="checkbox">
                                        <label>
                                            <input type="checkbox"> Fire Place(3100)
                                        </label>
                                    </div>
                                </div>
                                <!-- End of  -->  

                                <div class="col-sm-3">
                                    <div class="checkbox">
                                        <label>
                                            <input type="checkbox"> Dual Sinks(500)
                                        </label>
                                    </div>
                                </div>
                                <!-- End of  --> 

                                <div class="col-sm-3">
                                    <div class="checkbox">
                                        <label>
                                            <input type="checkbox"> Hurricane Shutters(99)
                                        </label>
                                    </div>
                                </div>
                                <!-- End of  -->  

                                <div class="col-sm-3">
                                    <div class="checkbox">
                                        <label>
                                            <input type="checkbox"> Swimming Pool(1190)
                                        </label>
                                    </div>
                                </div>
                                <!-- End of  -->  

                                <div class="col-sm-3">
                                    <div class="checkbox">
                                        <label>
                                            <input type="checkbox"> 2 Stories(4600)
                                        </label>
                                    </div>
                                </div>
                                <!-- End of  --> 

                                <div class="col-sm-3">
                                    <div class="checkbox">
                                        <label>
                                            <input type="checkbox"> Emergency Exit(200)
                                        </label>
                                    </div>
                                </div>
                                <!-- End of  --> 

                                <div class="col-sm-3">
                                    <div class="checkbox">
                                        <label>
                                            <input type="checkbox"> Laundry Room(10073)
                                        </label>
                                    </div>
                                </div>
                                <!-- End of  -->  

                                <div class="col-sm-3">
                                    <div class="checkbox">
                                        <label>
                                            <input type="checkbox"> Jog Path(1503)
                                        </label>
                                    </div>
                                </div>
                                <!-- End of  --> 

                                <div class="col-sm-3">
                                    <div class="checkbox">
                                        <label>
                                            <input type="checkbox"> 26' Ceilings(1200)
                                        </label>
                                    </div>
                                </div>
                                <!-- End of  --> 
                            </div>    --}}
                            </div>
                            <div class="center">
                                <input type="submit" value="" class="btn btn-default btn-lg-sheach">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    
    <!-- property area -->
    <div class="content-area recent-property" style="padding-bottom: 60px; background-color: rgb(252, 252, 252);">
        <div class="container">
            <div class="row">
                <div class="col-md-12  padding-top-40 properties-page">
                    <div class="col-md-12 ">
                        <div class="col-xs-10 page-subheader sorting pl0">

                            <ul class="sort-by-list">
                                <li class="">
                                    <a href="javascript:void(0);" class="order_by_date" data-orderby="property_date"
                                        data-order="ASC">
                                        Appartements <i class="fa fa-sort-amount-asc"></i>
                                    </a>
                                </li>
                                <li class="">
                                    <a href="{{ route('bureaux.index') }}" class="order_by_date" data-orderby="property_date"
                                        data-order="ASC">
                                        Bureaux <i class="fa fa-sort-amount-asc"></i>
                                    </a>
                                </li>

                                <li class="">
                                    <a href="" class="order_by_date" data-orderby="property_date"
                                        data-order="ASC">
                                        Véhicules <i class="fa fa-sort-amount-asc"></i>
                                    </a>
                                </li>
                            </ul><!--/ .sort-by-list-->

                        </div>

                        <div class="col-xs-2 layout-switcher">
                            <a class="layout-list" href="javascript:void(0);"> <i class="fa fa-th-list"></i> </a>
                            <a class="layout-grid active" href="javascript:void(0);"> <i class="fa fa-th"></i> </a>
                        </div><!--/ .layout-switcher-->
                    </div>

                    <div class="col-md-12 ">
                        <div id="list-type" class="proerty-th">
                            

                            <h4>Liste des bureaux disponibles</h4>

                            <div class="col-md-12 clear">
                                @if(Session::get('success'))
                                    <div class="alert alert-success">
                                        {{Session::get('success')}}
                                    </div>
                                @endif
        
                                @foreach ($bureaux as $bureau)
                                <div class="col-sm-6 col-md-3 p0">
                                    <div class="box-two proerty-item">
                                        <div class="item-thumb position-relative">
                                            @php
                                                $bureau_images = explode('|', $bureau->images);
                                            @endphp
                                            @if (count($bureau_images) > 0)
                                                <a href="{{ route('bureaux.detail', $bureau->id) }}" title="Cliquer sur l'image pour plus de détails">
                                                    <!-- Badge positionné directement sur l'image en haut à droite -->

                                                    <img class="vehicule-image" src="{{ URL::to($bureau_images[0]) }}" alt="Image de véhicule">
                                                </a>
                                            @endif
                                        </div>
                            
                                        <div class="item-entry overflow">
                                            <h5><a href="{{ route('bureaux.detail', $bureau->id) }}"><span style="display: block; text-align: center;">{{ $bureau->lieux }}</span></a></h5>
                                            <div class="dot-hr"></div>
                                            <span class="pull-left"><b> Climatiseur : </b> {{ $bureau->climaVenilo }}</span><br>
                                            <span class="proerty-price pull-right"><b class="badge badge-primary">{{ $bureau->prix }} FCFA </b></span>
                                            <span class="pull-left"><b> Toilette : </b> {{ $bureau->toilette }}</span>
                                            <span class="pull-left"><b> Salle de reunion : </b> {{ $bureau->salleReunion }}</span>
                                        </div>                   
                                    </div>
                                </div>
                            @endforeach
                            
        
        
                           
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="pull-right">
                            <div class="pagination">
                                {{-- LA PAGINATION --}}
                                <div style="display: flex; justify-content: center;" class="mb-3 mt-3">
                                    {{$bureaux->links()}}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    {{-- Css des bouton --}}
    <style>

/* CSS */
.item-thumb img {
    max-width: 100%; /* Limite la largeur de l'image à 100% de la largeur du conteneur */
    max-height: 100%; /* Limite la hauteur de l'image à 100% de la hauteur du conteneur */
    width: auto; /* Ajuste automatiquement la largeur de l'image pour conserver ses proportions */
    height: auto; /* Ajuste automatiquement la hauteur de l'image pour conserver ses proportions */
}


        .button-container {
            text-align: center;
        }

        .custom-button {
            display: inline-block;
            padding: 10px 20px;
            margin: 10px;
            border: 2px solid transparent;
            /* Bordure initialement transparente */
            border-radius: 5px;
            font-size: 16px;
            cursor: pointer;
            transition: border-color 0.3s, color 0.3s;
            /* Transition pour la couleur de la bordure et de l'écriture */
        }

        .custom-button:hover {
            border-color: #4CAF50;
            /* Bordure verte au survol */
            color: #4CAF50;
            /* Écriture verte au survol */
        }

        .custom-button.primary {
            border-color: #6c757d;
            /* Bordure grise */
            color: #6c757d;
            /* Écriture grise */
        }

        .custom-button.secondary {
            border-color: #6c757d;
            /* Bordure grise */
            color: #6c757d;
            /* Écriture grise */
        }

        .custom-button.danger {
            border-color: #6c757d;
            /* Bordure grise */
            color: #6c757d;
            /* Écriture grise */
        }
    </style>
@endsection
