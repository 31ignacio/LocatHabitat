@extends('layouts.master')

@section('content')

<div class="page-head"> 
    <div class="container">
        <div class="row">
            <div class="page-head-content">
                <h1 class="page-title">Détails sur l'appartement </h1>               
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
                                    $appartement_images = explode('|', $appartements->images);
                                @endphp
                                @if (count($appartement_images) > 0)
                                <ul id="image-gallery" class="gallery list-unstyled cS-hidden">
                                    @foreach ($appartement_images as $image)
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
                        <h1 class="property-title pull-left">{{ $appartements->lieux }}</h1>
                        <span class="property-price pull-right">{{ $appartements->prix }} FCFA</span>
                        <span class="pull-right" style="font-size: 25px;margin-top:60px;"> Négociable :<span class="badge badge-info">{{ $appartements->negociable }} </span></span>

                    </div>

                    <div class="property-meta entry-meta clearfix ">   

                        

                        <div class="col-xs-6 col-sm-3 col-md-3 p-b-15">
                            <span class="property-info icon-area">
                                <img src="{{ asset('assets/img/icon/room-orange.png') }}">
                            </span>
                            <span class="property-info-entry">
                                <span class="property-info-label">Climatiseur</span>
                                <span class="badge badge-info">{{ $appartements->climaVenilo }}</span>
                            </span>
                        </div>

                        

                        <div class="col-xs-6 col-sm-3 col-md-3 p-b-15">
                            <span class="property-info-icon icon-bed">
                                <img src="{{ asset('assets/img/icon/sale-orange.png') }}">
                            </span>
                            <span class="property-info-entry">
                                <span class="property-info-label">Connexion internet</span>
                                <span class="badge badge-info">{{ $appartements->wifi }}</span>
                            </span>
                        </div>

                        

                        <div class="col-xs-6 col-sm-3 col-md-3 p-b-15">
                            <span class="property-info-icon icon-garage">
                                <img src="{{ asset('assets/img/icon/shawer-orange.png') }}">
                            </span>
                            <span class="property-info-entry">
                                <span class="property-info-label">Nombre de chambre</span>
                                <span class="badge badge-info">{{ $appartements->nombreChambre }}</span>
                            </span>
                        </div>

                        <div class="col-xs-6 col-sm-3 col-md-3 p-b-15">
                            <span class="property-info icon-area">
                                <img src="{{ asset('assets/img/icon/room-orange.png') }}">
                            </span>
                            <span class="property-info-entry">
                                <span class="property-info-label">Nombre de salon</span>
                                <span class="badge badge-info">{{ $appartements->nombreSalon }}</span>
                            </span>
                        </div>


                        <br><br><br><br><br><br>

                        <div class="col-xs-6 col-sm-3 col-md-3 p-b-15">
                            <span class="property-info-icon icon-bed">
                                <img src="{{ asset('assets/img/icon/cars-orange.png') }}">
                            </span>
                            <span class="property-info-entry">
                                <span class="property-info-label">Packing</span>
                                <span class="badge badge-info">{{ $appartements->packing }}</span>
                            </span>
                        </div>

                        

                        <div class="col-xs-6 col-sm-3 col-md-3 p-b-15">
                            <span class="property-info-icon icon-garage">
                                <img src="{{ asset('assets/img/icon/room-orange.png') }}">
                            </span>
                            <span class="property-info-entry">
                                <span class="property-info-label">Sécurité</span>
                                <span class="badge badge-info">{{ $appartements->securite }}</span>
                            </span>
                        </div>

                        <div class="col-xs-6 col-sm-3 col-md-3 p-b-15">
                            <span class="property-info-icon icon-bath">
                                <img src="{{ asset('assets/img/icon/os-orange.png') }}">
                            </span>
                            <span class="property-info-entry">
                                <span class="property-info-label"> Abonnement canal + </span>
                                <span class="badge badge-info">{{ $appartements->canal }} </span>
                            </span>
                        </div>

                        <div class="col-xs-6 col-sm-3 col-md-3 p-b-15">
                            <span class="property-info-icon icon-bath">
                                <img src="{{ asset('assets/img/icon/os-orange.png') }}">
                            </span>
                            <span class="property-info-entry">
                                <span class="property-info-label">Cuisine</span>
                                <span class="badge badge-info">{{ $appartements->cuisine }}</span>
                            </span>
                        </div>


                        <br><br><br><br><br><br>

                        <div class="col-xs-6 col-sm-3 col-md-3 p-b-15">
                            <span class="property-info-icon icon-bed">
                                <img src="{{ asset('assets/img/icon/cars-orange.png') }}">
                            </span>
                            <span class="property-info-entry">
                                <span class="property-info-label">L'appartement dispose d'une terasse</span>
                                <span class="badge badge-info">{{ $appartements->terasse }}</span>
                            </span>
                        </div>

                        

                        <div class="col-xs-6 col-sm-3 col-md-3 p-b-15">
                            <span class="property-info-icon icon-garage">
                                <img src="{{ asset('assets/img/icon/room-orange.png') }}">
                            </span>
                            <span class="property-info-entry">
                                <span class="property-info-label">L'appartement est meublé</span>
                                <span class="badge badge-info">{{ $appartements->meuble }}</span>
                            </span>
                        </div>

                        <div class="col-xs-6 col-sm-3 col-md-3 p-b-15">
                            <span class="property-info-icon icon-bath">
                                <img src="{{ asset('assets/img/icon/os-orange.png') }}">
                            </span>
                            <span class="property-info-entry">
                                <span class="property-info-label"> Entretien des chambres </span>
                                <span class="badge badge-info">{{ $appartements->entretien }} </span>
                            </span>
                        </div>

                        <div class="col-xs-6 col-sm-3 col-md-3 p-b-15">
                            <span class="property-info-icon icon-bath">
                                <img src="{{ asset('assets/img/icon/os-orange.png') }}">
                            </span>
                            <span class="property-info-entry">
                                <span class="property-info-label"> Pétit dejeuné </span>
                                <span class="badge badge-info">{{ $appartements->ptiDejeuner }}</span>
                            </span>
                        </div>


                        
                        


                    </div>
                    <!-- .property-meta -->

                    <div class="section">
                        <h4 class="s-property-title">Description</h4>
                        <div class="s-property-content">
                            <p><pre>{{ $appartements->description }}</pre></p>
                        </div>
                    </div>
                    <!-- End description area  -->

                    
 
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
                                            <a href="">{{ $appartements->entreprise->entreprise }}</a>
                                            <span></span>        
                                        </h3>

                                    </div>
                                </div>

                                <div class="clear">
                                    <ul class="dealer-contacts">                                       
                                        <li><i class="pe-7s-map-marker strong"> </i> {{ $appartements->entreprise->ville }} / {{ $appartements->entreprise->quatier }}</li>
                                        <li><i class="pe-7s-mail strong"> </i> {{ $appartements->entreprise->user->email }}</li>
                                        <li><i class="pe-7s-call strong"> </i> {{ $appartements->entreprise->telephone }}</li>
                                    </ul>
                                </div>

                                <div style=" margin-bottom: 20px;">
                                    <p>Vous souhaitez obtenir plus d'informations sur cet appartement ?</p>
                                    <button class="call-button" onclick="window.location.href = 'tel:{{ $appartements->entreprise->telephone }}';"><i class="fa fa-phone"></i> Appeler {{ $appartements->entreprise->telephone }}</button>
                                    <br><br>
                                    <a href="https://api.whatsapp.com/send?phone={{ $appartements->entreprise->telephone }}" target="_blank" style="background-color: #25d366; color: #ffffff; padding: 10px 20px; border-radius: 5px; text-decoration: none; display: inline-block;"><i class="fa fa-whatsapp"></i> Discuter via WhatsApp</a>
                                </div>
                

                            </div>
                        </div>
                    </div>

                    <div class="panel panel-default sidebar-menu similar-property-wdg wow fadeInRight animated">
                        <div class="panel-heading">
                            <h3 class="panel-title">Annonces Similaires</h3>
                        </div>

                            
                        <div class="panel-body recent-property-widget">
                            @foreach ($appartementSimilaires as $appartements )

                                <ul>
                                <li>
                                    <div class="col-md-3 col-sm-3 col-xs-3 blg-thumb p0">
                                        @php
                                        $appartement_images = explode('|', $appartements->images);
                                    @endphp
                                    @if (count($appartement_images) > 0)
                                        <a href="{{ route('appartement.detail', $appartements->id) }}"
                                            title="Cliquer sur l'image pour plus de détails"><img
                                                src="{{ URL::to($appartement_images[0]) }}"></a>
                                    @endif                                        
                                    <span class="property-seeker">
                                            <b class="b-1">A</b>
                                            <b class="b-2">S</b>
                                        </span>
                                    </div>
                                    <div class="col-md-8 col-sm-8 col-xs-8 blg-entry">
                                        <h6> <a href="{{ route('appartement.detail', $appartements->id) }}">{{ $appartements->lieux }}</a></h6>
                                        <span class="{{ route('appartement.detail', $appartements->id) }}">{{ $appartements->prix }} FCFA</span>
                                    </div>
                                </li>
                            
                            </ul>
                            @endforeach

                        </div>
        
                    </div>  

                
                </aside><br>

                <div class="card">
                    <div class="card-header">
                        Envoyer un mail au propriétaire
                    </div>
                    <form action="{{ route('appartement.mailProprietaire') }}" method="POST">
                        @csrf

                        @if(Session::get('success'))
                        <div class="alert alert-success text-center" id="msg_success">
                            {{Session::get('success')}}
                        </div>
                    @endif
    
                    <script>
                         // Masquer le message d'erreur après 3 secondes
                        setTimeout(function() {
                            $('#msg_success').hide();
                        }, 10000);
                    </script>
    

                        <input type="hidden" name="entreprise" id="" value="{{ $appartements->entreprise->user->email }}">
                        <div class="form-group">
                            <label for="nom">Votre nom :</label>
                            <input type="text" id="nom" name="nom">

                            @error('nom')
                            <div class="text text-danger">{{ $message }}</div>
                                
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="email">Votre email :</label>
                            <input type="email" id="email" name="email">
                            @error('email')
                            <div class="text text-danger">{{ $message }}</div>
                                
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="telephone">Votre téléphone :</label>
                            <input type="tel" id="telephone" name="telephone">

                            @error('telephone')
                            <div class="text text-danger">{{ $message }}</div>
                                
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="message">Message :</label>
                            <textarea id="message" name="message"></textarea>

                            @error('message')
                            <div class="text text-danger">{{ $message }}</div>
                                
                            @enderror
                        </div>
                        <div class="form-group">
                            <button type="submit">Envoyer</button>
                        </div>
                    </form>
                </div>
                
                   

            </div>

          
        </div>



    </div>
</div>

<style>
    body {
        font-family: Arial, sans-serif;
        background-color: #f4f4f4;
        padding: 20px;
    }
    .card {
        background-color: #fff;
        border-radius: 10px;
        box-shadow: 0 0 20px rgba(0, 0, 0, 0.1);
        max-width: 800px;
        margin: 0 auto;
        padding: 20px;
    }
    .card-header {
        background-color: #FFA600;
        color: #fff;
        padding: 15px;
        border-top-left-radius: 10px;
        border-top-right-radius: 10px;
        text-align: center;
        font-size: 20px;
        margin-bottom: 20px;
    }
    .form-group {
        margin-bottom: 20px;
    }
    .form-group label {
        display: block;
        margin-bottom: 5px;
    }
    .form-group input[type="text"],
    .form-group input[type="email"],
    .form-group input[type="tel"],
    .form-group textarea {
        width: 100%;
        padding: 10px;
        border: 1px solid #ccc;
        border-radius: 5px;
        box-sizing: border-box;
        font-size: 16px;
    }
    .form-group textarea {
        height: 100px;
    }
    .form-group button {
        background-color: #FFA600;
        color: #fff;
        border: none;
        border-radius: 5px;
        padding: 10px 20px;
        cursor: pointer;
        font-size: 16px;
    }
    .form-group button:hover {
        background-color: #FFA600;
    }
</style>

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