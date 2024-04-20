@extends('layouts.master')

@section('content')

<div class="page-head"> 
    <div class="container">
        <div class="row">
            <div class="page-head-content">
                <h1 class="page-title">Détails du bureau </h1>               
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
                                    $bureau_images = explode('|', $bureaux->images);
                                @endphp
                                @if (count($bureau_images) > 0)
                                <ul id="image-gallery" class="gallery list-unstyled cS-hidden">
                                    @foreach ($bureau_images as $image)
                                    <li data-thumb="{{ URL::to($image) }}"> 
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
                        <h1 class="property-title pull-left">{{ $bureaux->lieux }}</h1>
                        <span class="property-price pull-right">{{ $bureaux->prix }} FCFA</span>
                    </div>

                    <div class="property-meta entry-meta clearfix ">   

                        

                        <div class="col-xs-6 col-sm-3 col-md-3 p-b-15">
                            <span class="property-info icon-area">
                                <img src="{{ asset('assets/img/icon/room-orange.png') }}">
                            </span>
                            <span class="property-info-entry">
                                <span class="property-info-label">Climatiseur</span>
                                <span class="badge badge-info">{{ $bureaux->climaVenilo }}</span>
                            </span>
                        </div>

                        

                        <div class="col-xs-6 col-sm-3 col-md-3 p-b-15">
                            <span class="property-info-icon icon-bed">
                                <img src="{{ asset('assets/img/icon/sale-orange.png') }}">
                            </span>
                            <span class="property-info-entry">
                                <span class="property-info-label">Connexion internet</span>
                                <span class="badge badge-info">{{ $bureaux->wifi }}</span>
                            </span>
                        </div>

                        

                        <div class="col-xs-6 col-sm-3 col-md-3 p-b-15">
                            <span class="property-info-icon icon-garage">
                                <img src="{{ asset('assets/img/icon/shawer-orange.png') }}">
                            </span>
                            <span class="property-info-entry">
                                <span class="property-info-label">Toilette</span>
                                <span class="badge badge-info">{{ $bureaux->toilette }}</span>
                            </span>
                        </div>

                        <div class="col-xs-6 col-sm-3 col-md-3 p-b-15">
                            <span class="property-info icon-area">
                                <img src="{{ asset('assets/img/icon/room-orange.png') }}">
                            </span>
                            <span class="property-info-entry">
                                <span class="property-info-label">Salle de reunion</span>
                                <span class="badge badge-info">{{ $bureaux->salleReunion }}</span>
                            </span>
                        </div>


                        <br><br><br><br><br><br>

                        <div class="col-xs-6 col-sm-3 col-md-3 p-b-15">
                            <span class="property-info-icon icon-bed">
                                <img src="{{ asset('assets/img/icon/cars-orange.png') }}">
                            </span>
                            <span class="property-info-entry">
                                <span class="property-info-label">Emplacement</span>
                                <span class="badge badge-info">{{ $bureaux->emplacement }}</span>
                            </span>
                        </div>

                        

                        <div class="col-xs-6 col-sm-3 col-md-3 p-b-15">
                            <span class="property-info-icon icon-garage">
                                <img src="{{ asset('assets/img/icon/room-orange.png') }}">
                            </span>
                            <span class="property-info-entry">
                                <span class="property-info-label">L'eau</span>
                                <span class="badge badge-info">{{ $bureaux->eau }}</span>
                            </span>
                        </div>

                        <div class="col-xs-6 col-sm-3 col-md-3 p-b-15">
                            <span class="property-info-icon icon-bath">
                                <img src="{{ asset('assets/img/icon/os-orange.png') }}">
                            </span>
                            <span class="property-info-entry">
                                <span class="property-info-label">Nombre de bureau</span>
                                <span class="badge badge-info">{{ $bureaux->nombreSalle }}</span>
                            </span>
                        </div>

                        <div class="col-xs-6 col-sm-3 col-md-3 p-b-15">
                            <span class="property-info-icon icon-bath">
                                <img src="{{ asset('assets/img/icon/os-orange.png') }}">
                            </span>
                            <span class="property-info-entry">
                                <span class="property-info-label">Bureau équiper</span>
                                <span class="badge badge-info">{{ $bureaux->bureauEquiper }}</span>
                            </span>
                        </div>


                        
                        
                        


                    </div>
                    <!-- .property-meta -->

                    <div class="section">
                        <h4 class="s-property-title">Description</h4>
                        <div class="s-property-content">
                            <p>{{ $bureaux->description }}</p>
                        </div>
                    </div>
                    <!-- End description area  -->

                    <div class="section additional-details">

                        <h4 class="s-property-title">Information du propriétaire</h4>

                        <ul class="additional-details-list clearfix">
                            <li>
                                <span class="col-xs-6 col-sm-4 col-md-4 add-d-title">Entreprise</span>
                                <span class="col-xs-6 col-sm-8 col-md-8 add-d-entry">{{ $bureaux->entreprise->entreprise }}</span>
                            </li>

                            <li>
                                <span class="col-xs-6 col-sm-4 col-md-4 add-d-title">Représentant</span>
                                <span class="col-xs-6 col-sm-8 col-md-8 add-d-entry">{{ $bureaux->entreprise->representant }}</span>
                            </li>
                            <li>
                                <span class="col-xs-6 col-sm-4 col-md-4 add-d-title">Adresse</span>
                                <span class="col-xs-6 col-sm-8 col-md-8 add-d-entry">{{ $bureaux->entreprise->ville }} / {{ $bureaux->entreprise->quatier }}</span>
                            </li>

                            <li>
                                <span class="col-xs-6 col-sm-4 col-md-4 add-d-title">Téléphone</span>
                                <span class="col-xs-6 col-sm-8 col-md-8 add-d-entry">{{ $bureaux->entreprise->telephone }}</span>
                            </li>

                            {{-- <li>
                                <span class="col-xs-6 col-sm-4 col-md-4 add-d-title">Email</span>
                                <span class="col-xs-6 col-sm-8 col-md-8 add-d-entry">{{ $bureaux->entreprise->user->email }}</span>
                            </li> --}}

                        </ul>
                    </div>  
                    <!-- End additional-details area  -->
 
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
                                            <img src="{{ asset('assets/img/client-face1.jpg') }}" class="img-circle">
                                        </a>
                                    </div>
                                    <div class="col-xs-8 col-sm-8 ">
                                        <h3 class="dealer-name">
                                            <a href="">{{ $bureaux->entreprise->entreprise }}</a>
                                            <span></span>        
                                        </h3>

                                    </div>
                                </div>

                                <div class="clear">
                                    <ul class="dealer-contacts">                                       
                                        <li><i class="pe-7s-map-marker strong"> </i> {{ $bureaux->entreprise->ville }} / {{ $bureaux->entreprise->quatier }}</li>
                                        <li><i class="pe-7s-mail strong"> </i> {{ $bureaux->entreprise->user->email }}</li>
                                        <li><i class="pe-7s-call strong"> </i> {{ $bureaux->entreprise->telephone }}</li>
                                    </ul>
                                </div>

                                <div style=" margin-bottom: 20px;">
                                    <p>Vous souhaitez obtenir plus d'informations sur ce bureau  ?</p>
                                    <button class="call-button" onclick="window.location.href = 'tel:{{ $bureaux->entreprise->telephone }}';"><i class="fa fa-phone"></i> Appeler {{ $bureaux->entreprise->telephone }}</button>
                                    <br><br>
                                    <a href="https://api.whatsapp.com/send?phone={{ $bureaux->entreprise->telephone }}" target="_blank" style="background-color: #25d366; color: #ffffff; padding: 10px 20px; border-radius: 5px; text-decoration: none; display: inline-block;"><i class="fa fa-whatsapp"></i> Dicuter via WhatsApp</a>
                                </div>

                            </div>
                        </div>
                    </div>

                    <div class="panel panel-default sidebar-menu similar-property-wdg wow fadeInRight animated">
                        <div class="panel-heading">
                            <h3 class="panel-title">Annonces Similaires</h3>
                        </div>

                            
                        <div class="panel-body recent-property-widget">
                            @foreach ($bureauxSimilaires as $bureaux )

                                <ul>
                                <li>
                                    <div class="col-md-3 col-sm-3 col-xs-3 blg-thumb p0">
                                        @php
                                        $bureau_images = explode('|', $bureaux->images);
                                    @endphp
                                    @if (count($bureau_images) > 0)
                                        <a href="{{ route('bureaux.detail', $bureaux->id) }}"
                                            title="Cliquer sur l'image pour plus de détails"><img
                                                src="{{ URL::to($bureau_images[0]) }}"></a>
                                    @endif                                        
                                    <span class="property-seeker">
                                            <b class="b-1">A</b>
                                            <b class="b-2">S</b>
                                        </span>
                                    </div>
                                    <div class="col-md-8 col-sm-8 col-xs-8 blg-entry">
                                        <h6> <a href="{{ route('bureaux.detail', $bureaux->id) }}">{{ $bureaux->lieux }}</a></h6>
                                        <span class="{{ route('bureaux.detail', $bureaux->id) }}">{{ $bureaux->prix }} FCFA</span>
                                    </div>
                                </li>
                            
                            </ul>
                            @endforeach

                        </div>
                    </div>      

                </aside><br>

                

            </div>
        </div>



    </div>
</div>

<style>
    .call-button {
    background-color: #000000; /* Couleur de fond */
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