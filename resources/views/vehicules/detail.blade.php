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
                        <h4 class="s-property-title">Autre information</h4>
                        <div class="s-property-content">
                            <p><pre>Aucune autre information</pre></p>
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

                                <div style=" margin-bottom: 20px;">
                                    <p>Vous souhaitez obtenir plus d'informations sur ce véhicule ?</p>
                                    <button class="call-button" onclick="window.location.href = 'tel:{{ $vehicules->entreprise->telephone }}';"><i class="fa fa-phone"></i> Appeler {{ $vehicules->entreprise->telephone }}</button>
                                    <br><br>
                                    <a href="https://api.whatsapp.com/send?phone={{ $vehicules->entreprise->telephone }}" target="_blank" style="background-color: #25d366; color: #ffffff; padding: 10px 20px; border-radius: 5px; text-decoration: none; display: inline-block;"><i class="fa fa-whatsapp"></i> Discuter via WhatsApp</a>
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
    

                        <input type="hidden" name="entreprise" id="" value="{{ $vehicules->entreprise->user->email }}">
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