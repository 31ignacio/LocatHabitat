@extends('layouts.master')

@section('content')



<div class="page-head"> 
    <div class="container">
        <div class="row">
            <div class="page-head-content">
                <h1 class="page-title">Mon appartement</h1>               
            </div>
        </div>
    </div>
</div>
<!-- End page header -->

<!-- property area -->
<div class="content-area submit-property" style="background-color: #FCFCFC;">&nbsp;
    <div class="container">
        <div class="clearfix" > 
            <div class="wizard-container"> 

                <div class="row">
                    <div class="col-md-5">
                        <img src="{{ asset('assets/img/slide1/appartement2.jpg') }}" alt="Description de l'image"
                        class="image-adjust">


                    </div>
                    <div class="col-md-7">

                        <div class="wizard-card ct-wizard-orange" id="wizardProperty">
                            <form id="form" enctype="multipart/form-data">
                                @csrf
                                        
                                <ul>
                                    <li><a href="#step1" data-toggle="tab"> 1 </a></li>
                                    <li><a href="#step2" data-toggle="tab"> 2 </a></li>

                                    <li><a href="#step3" data-toggle="tab"> 3 </a></li>
                                    <li><a href="#step4" data-toggle="tab">Soumettre </a></li>
                                </ul>
        
                                <div class="tab-content">
        
                                    <div class="tab-pane" id="step1">
                                        <div class="p-b-15  ">
                                            <h5 class="info-text"> <b>Veuillez enregistrer votre appartement en remplissant le formulaire </b></h5>
                                            
                                            @if (Session::get('success'))
                                                <div class="alert alert-success">
                                                    {{ Session::get('success') }}
                                                </div>
                                            @endif

                                            
                                            
                                                <div id="msg501"></div>
                        
                                            <div class="row">
                                                <div class="col-md-6 form-group">
                                                    <label>Nombre de salon</label>
                                                    <input name="nombreSalon" id="nombreSalon" type="number" min="0"
                                                        class="form-control">
                
                                                    @error('nombreSalon')
                                                        <div class="text-danger">{{ $message }}</div>
                                                    @enderror
                                                </div>
                                                <div class="col-md-6 form-group">
                                                    <label>Nombre de chambre</label>
                                                    <input name="nombreChambre" id="nombreChambre" type="number" min="0"
                                                        class="form-control">
                
                                                    @error('nombreChambre')
                                                        <div class="text-danger">{{ $message }}</div>
                                                    @enderror
                                                </div>
                                            </div>

                                            <div class="row">
                
                                                <div class="col-md-6 form-group">
                                                    <label>L'appartement est climatisé ?</label>
                                                    <select name="climaVenilo" id="climaVenilo" class="form-control">
                                                        <option value="Climatiseur">Climatiseur</option>
                                                        <option value="Brasseur">Brasseur</option>
                                                        <option value="Non">Non</option>

                                                    </select>
                                                </div>

                                                <div class="col-md-6 form-group">
                                                    <label>L'appartement dispose d'une cuisine ?</label>
                                                    <select name="cuisine" id="cuisine" class="form-control">
                                                        <option value="Oui">Oui</option>
                                                        <option value="Non">Non</option>
                                                    </select>
                                                </div>
                                            </div>

                                            <div class="row">
                                                
                                                <div class="col-md-6 form-group">
                                                    <label>L'appartement dispose d'une terasse ?</label>
                                                    <select name="terasse" id="terasse" class="form-control">
                                                        <option value="Oui">Oui</option>
                                                        <option value="Non">Non</option>
                                                    </select>
                                                </div>
                                                <div class="col-md-6 form-group">
                                                    <label>L'appartement dispose d'un packing ?</label>
                                                    <select name="packing" id="packing" class="form-control">
                                                        <option value="Oui">Oui</option>
                                                        <option value="Non">Non</option>
                                                    </select>
                                                </div>
                                            </div>
                                            
                                        </div>
                                    </div>
                                    <!--  End step 1 -->
                                    <div class="tab-pane" id="step2">                                        
                                        {{-- <h4 class="info-text">Give us somme images and videos ? </h4> --}}
                                        <br>
                                        <div class="row">
                                            <div class="col-md-6 form-group">
                                                <label>Le client a droit au pétit déjeuner ?</label>
                                                <select name="ptiDejeuner" id="ptiDejeuner" class="form-control">
                                                    <option value="Non">Non</option>
                                                    <option value="Oui">Oui</option>
                                                </select>
                                            </div>
                                            <div class="col-md-6 form-group">
                                                <label style="font-size: 90%">L'appartement dispose d'un abonnement canal+ ?</label>
                                                <select name="canal" id="canal" class="form-control">
                                                    <option value="Oui">Oui</option>
                                                    <option value="Non">Non</option>
                                                </select>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-md-6 form-group">
                                                <label style="font-size: 90%">L'appartement dispose d'une connexion interne ?</label>
                                                <select name="wifi" id="wifi" class="form-control">
                                                    <option value="Wifi">Wifi</option>
                                                    <option value="Fibre optique">Fibre optique</option>
                                                    <option value="Non">Non</option>
                                                </select>
                                            </div>
                                            <div class="col-md-6 form-group">
                                                <label style="font-size: 90%">L'appartement dispose d'un agent de sécurité ?</label>
                                                <select name="securite" id="securite" class="form-control">
                                                    <option value="Oui">Oui</option>
                                                    <option value="Non">Non</option>
                                                </select>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-md-6 form-group">
                                                <label style="font-size: 90%">L'appartement est meublé?</label>
                                                <select name="meuble" id="meuble" class="form-control">
                                                    <option value="Meublé">Meublé</option>
                                                    <option value="Non meublé">Non meublé</option>
                                                </select>
                                            </div>
                                            <div class="col-md-6 form-group">
                                                <label style="font-size: 90%">Entretien des chambres</label>
                                                <select name="entretien" id="entretien" class="form-control">
                                                    <option value="Chaque semaine">Chaque semaine</option>
                                                    <option value="Chaque jour">Chaque jour</option>
                                                    <option value="Chaque trois jours">Chaque trois jours</option>
                                                </select>
                                            </div>
                                        </div>
                                        

                                    </div>
                                   
                                    <!-- End step 2 -->
        
                                    <div class="tab-pane" id="step3">                                        
                                        {{-- <h4 class="info-text">Give us somme images and videos ? </h4> --}}
                                        <br>
                                        <div class="row">
                                            <div class="col-md-6 form-group">
                                                <label>Prix </label>
                                                <input type="text" name="prix" id="prix" class="form-control" oninput="validatePrix(this)">

                                                <div id="error-message2" class="error-message text-danger"></div>                                            </div>
                                            <div class="col-md-6 form-group">
                                                <label>Le prix est négociable ?</label>
                                                <select name="negociable" id="negociable" class="form-control">
                                                    <option value="Pour long séjour">Pour long séjour</option>
                                                    <option value="Oui">Oui</option>
                                                    <option value="Non">Non</option>
                                                </select>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class=" col-md-6 form-group">
                                                <label>Ville, Quartier</label>
                                                <input name="lieux" id="lieux" type="text" class="form-control">
                                            </div>
            
                                            <div class="col-md-6 form-group">
                                                <label>Image(<span style="font-size: 10px;">vous puvez ajouter plusieurs images à la fois</span>)</label>
                                                <input name="images[]" id="images" type="file" class="form-control" multiple>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class=" col-md-12 form-group">
                                                <label> Autres informations </label>
                                                <textarea name="description" id="description" cols="38" rows="6" class="form-control"></textarea>
                                            
                                            </div>
            
                                            
                                        </div>
                                        

                                    </div>
                                    <!--  End step 3 -->
        
        
                                    <div class="tab-pane" id="step4">  
                                        <div id="error-message0" class="alert alert-warning text-center" style="display: none;">
                                            Veuillez remplir tous les champs.
                                        </div>                                      
                                        <h4 class="info-text"> Terminé et Soumettre </h4>
                                        <div class="row">  
                                            <div class="col-sm-12">
                                                <div class="">
                                                    <p>
                                                        Merci d'avoir choisi Locathabitat pour publier votre appartement à louer. Nous sommes là pour vous aider à trouver les locataires parfaits.
                                                        Assurez-vous de fournir des informations détaillées pour attirer davantage de candidats. <br><strong> <h4 class="info-text">Bienvenue sur Locathabitat</h4></strong>
                                                    </p>
                                                    
                                                    {{-- <div class="checkbox">
                                                        <label>
                                                            <input type="checkbox" /> <strong>Accept termes and conditions.</strong>
                                                        </label>
                                                    </div>  --}}
        
                                                </div> 
                                            </div>
                                        </div>
                                    </div>
                                    <!--  End step 4 -->
        
                                </div>
        
                                <div class="wizard-footer">
                                    <div class="pull-right">
                                        <input type='button' class='btn btn-next btn-primary' name='next' value='Suivant' />
                                        <input type='button' class='btn btn-finish btn-primary' onclick="submitForm()" id="envoyer" name='finish' value='Soumettre' />
                                    </div>
        
                                    <div class="pull-left">
                                        <input type='button' class='btn btn-previous btn-default' name='previous' value='Precedent' />
                                    </div>
                                    <div class="clearfix"></div>                                            
                                </div>	
                            </form>
                        </div>

                    </div>
                </div>

                
                <!-- End submit form -->
            </div> 
        </div>
    </div>
</div>


<script src="https://cdn.kkiapay.me/k.js"></script>


    <!-- Modal resumé -->
    <div class="modal fade" id="staticBackdrop2" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
        aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h3 class="modal-title fs-5" id="staticBackdropLabel1">Facturation</h3>
                    {{-- {# <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button> #} --}}
                </div>
                <div class="modal-body">

                    <p> Frais de dépôt d'annonce <b class="badge rounded-pill bg-success"><span style="color: white;">
                                10.000 FCFA </span></b></p>
                    <span style="color:rgb(255, 0, 0);"><b>Cette somme est non remboursable</b></span>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Annuler</button>

                    <span id="payer"> <kkiapay-widget amount="9814" key="caf3f6e0eacf11ee80ae5bdd91083b6e"
                            {{-- {# url="<url-vers-votre-logo>" #}  --}} position="left" sandbox="true" data="" method="post"
                            {{-- {# callback="<url-de-redirection-quand-lepaiement-est-reuissi>" #} --}}>
                        </kkiapay-widget>
                    </span>

                </div>
            </div>
        </div>
    </div>


    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
    <script>
        var saveRoute = "{{ route('appartement.store') }}";
        var retourRoute= "{{ route('home') }}";
    </script>
    
    <script src="{{ asset('JS/appartementCreation.js') }}"></script>
@endsection
