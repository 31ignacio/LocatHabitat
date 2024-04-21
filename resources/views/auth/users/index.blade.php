@extends('layouts.master')

@section('content')
     <div class="slider-area">
        <div class="slider">
            <div id="bg-slider" class="owl-carousel owl-theme">
                <div class="item"><img src="{{ asset('assets/img/slide1/appartement.jpg') }}" alt="Mon image"></div>
                <div class="item"><img src="{{ asset('assets/img/slide1/bureau.jpg') }}" alt="Mon image"></div>
                <div class="item"><img src="{{ asset('assets/img/slide1/voiture2.jpg') }}" alt="Mon image"></div>
            </div>
        </div>
        <div class="container slider-content">
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1 col-sm-12">
                    {{-- <h2>
                        <marquee style="color: #FDC600;">Votre solution pour une location sans stress !</marquee>
                    </h2> --}}
                    <div class="sticky-top">
                        <div style="background-color: rgba(0, 0, 0, 0.7); color: white; padding: 20px;">
                            <b>Notre plateforme vous connecte directement avec des propriétaires de biens immobiliers et de
                                véhicules, vous permettant de louer rapidement et en toute simplicité votre prochain
                                appartement, bureau ou voiture. Louez en toute confiance, sans tracas.</b>
                            <br><br>
                            @if (Auth::check() && Auth::user()->role == 'ENTREPRISE')
                                <div class="button-container">
                                    <a href="{{ route('appartement') }}" type="button" class=" btn-sm custom-button primary">Enregistrer Appartement</a>
                                    <a href="{{ route('bureaux') }}" type="button" class="btn-sm custom-button secondary">Enregistrer Bureau</a>
                                    <a href="{{ route('vehicule') }}" type="button" class="btn-sm custom-button danger">Enregistrer Voiture</a>
                                </div>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>

        
    </div> 

    
    
    
    <!-- property area -->
    <div class="content-area recent-property" style="padding-bottom: 60px; background-color: rgb(252, 252, 252);">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-sm-6 padding-top-40 properties-page">
                    <div class="col-md-12 col-sm-6 ">
                        <div class="col-xs-10 page-subheader sorting pl0">

                            <ul class="sort-by-list">
                                <li class="">
                                    <a href="{{ route('appartement.index') }}" class="order_by_date" data-orderby="property_date"
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
                                    <a href="{{ route('home') }}" class="order_by_date" data-orderby="property_date"
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

                    <div class="col-md-12">
                        <div id="list-type" class="proerty-th">
                            


                            <div class="col-md-12 clear">
                                @if(Session::get('success'))
                                    <div class="alert alert-success">
                                        {{Session::get('success')}}
                                    </div>
                                @endif
                                    <br>
                                <form action="{{ route('search.vehicule') }}" method="GET">

                                    @csrf
                                    <div class="row">
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <input type="text" class="form-control" id="marque" name="marque" placeholder="Marque du véhicule">
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <input type="number" class="form-control" id="prix_min" name="prix_min" placeholder="Prix minimum">
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <input type="number" class="form-control" id="prix_max" name="prix_max" placeholder="Prix maximum">
                                            </div>
                                        </div>

                                        <div class="col-md-3">
                                            <button type="submit" class="btn btn-primary">Rechercher</button>
                                        </div>
                                    </div>
                                    
                                </form>
                                
                                <h5>Liste des véhicules disponibles</h5>

                                @foreach ($vehicules as $vehicule)
                                <div class="col-sm-6 col-md-4 p0">
                                    <div class="box-two proerty-item">
                                        <div class="item-thumb position-relative">
                                            @php
                                                $vehicule_images = explode('|', $vehicule->images);
                                            @endphp
                                            @if (count($vehicule_images) > 0)
                                                <a href="{{ route('vehicule.detail', $vehicule->id) }}" title="Cliquer sur l'image pour plus de détails">
                                                    <!-- Badge positionné directement sur l'image en haut à droite -->
                                                    
                                                    {{-- <span class="badge badge-{{ $vehicule->disponible ? 'success' : 'danger' }} badge-pill badge-on-image position-absolute top-0 end-0 mt-2 me-2"> {{ $vehicule->disponible ? 'Disponible' : 'Non disponible' }}</span> --}}

                                                    <img class="vehicule-image" src="{{ URL::to($vehicule_images[0]) }}" alt="Image de véhicule">
                                                </a>
                                            @endif
                                        </div>
                            
                                        <div class="item-entry overflow">
                                            <h5><a href="{{ route('vehicule.detail', $vehicule->id) }}"><span style="display: block; text-align: center;">{{ $vehicule->marque }}</span></a></h5>
                                            <div class="dot-hr"></div>
                                            <span class="pull-left"><b> Climatiseur : </b> {{ $vehicule->climatiseur }}</span><br>
                                            <span class="proerty-price pull-right"><b class="badge badge-primary">{{ $vehicule->prix }} FCFA </b></span>
                                            <span class="pull-left"><b> Chauffeur : </b> {{ $vehicule->chauffeur }}</span>
                                            <span class="pull-left"><b> Caburant : </b> {{ $vehicule->caburation }}</span>
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
                                    {{$vehicules->links()}}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    {{-- Css des bouton pour enregistrement --}}
    <style>

            .item-thumb img {

            width: 100px;
            height: 50px;
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
