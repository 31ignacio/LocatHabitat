@extends('layouts.master')

@section('content')


    
<div class="page-head"> 
    <div class="container">
        <div class="row">
            <div class="page-head-content">
                <h1 class="page-title"> <span class="orange strong">Mon véhicule</span></h1>               
            </div>
        </div>
    </div>
</div>
<!-- End page header --> 

<!-- property area -->
<div class="content-area user-profiel" style="background-color: #FCFCFC;">&nbsp;
    <div class="container">   
        <div class="row">
            <div class="col-md-5">
                <img src="assets/img/slide1/voiture2.jpg" alt="Description de l'image" class="image-adjust">

            </div>
            <div class="col-md-7 profiel-container">

                

                <form id="form" enctype="multipart/form-data">
                    @csrf

                    <div class="profiel-header">
                        <h3>
                            <b>Enregistrer</b> mon véhicule <br>
                            <small>Veuillez enregistrer votre vehicule en remplissant le formulaire ci-dessous</small>
                        </h3>
                        <hr>
                    </div>

                    @if(Session::get('success'))
                        <div class="alert alert-success">
                            {{Session::get('success')}}
                        </div>
                    @endif

                    <div id="error-message" class="alert alert-warning text-center" style="display: none;">
                        Veuillez remplir tous les champs.
                    </div>
                    
                        <div id="msg50"></div>

                    <div class="clear">

                        <div class="col-sm-6 padding-top-25">

                            <div class="form-group">
                                <label>Marque du véhicule</label>
                                <input name="marque" id="marque"  type="text" class="form-control">

                                @error('marque')

                                <div class="text-danger">{{$message}}</div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label>Climatiseur</label>

                                <select name="climatiseur" id="climatiseur" class="form-control">
                                    <option value="Oui">Oui</option>
                                    <option value="Non">Non</option>

                                </select>
                            </div>
                            
                        </div>
                        <div class="col-sm-6 padding-top-25">

                            <div class="form-group">
                                <label>Prix</label>
                                <input type="text" name="prix" id="prix" class="form-control" oninput="validatePrix(this)">

                                <div id="error-message2" class="error-message text-danger"></div>

                            </div>

                            <div class="form-group">
                                <label>Chauffeur</label>
                                <select name="chauffeur" id="chauffeur" class="form-control">
                                    <option value="Au choix">Au choix</option>
                                    <option value="Oui">Oui</option>
                                    <option value="Non">Non</option>

                                </select>                            
                            </div>

                        </div>

                        <div class="col-sm-6 padding-top-25">
                          
                            <div class="form-group">
                                <label>Carburation</label>
                                <select name="caburation" id="caburation" class="form-control">
                                    <option value="A la charge du client">A la charge du client</option>
                                    <option value="A notre charge">A notre charge</option>

                                </select>                           
                             </div>

                            
                        </div>
                        
                        <div class="col-sm-6 padding-top-25">
                          
                            <div class="form-group">
                                <label>Image(<span style="font-size: 10px;">vous pouvez ajouter plusieurs images à la fois</span>)</label>
                                <input name="images[]" id="images" type="file" accept="image/*" class="form-control" multiple>
                            </div>
                        </div>

                    </div>

                   
                    <div class="col-sm-5 col-sm-offset-1">
                        <br>
                        {{-- <input type='button' class='btn btn-finish btn-primary' name='finish' value='Finish' /> --}}
                        <button type="button" class='btn btn-finish btn-primary' id="envoyer" onclick="submitForm()"> Valider</button>
                    </div>
                    <br>
                </form>

            </div>
            
        </div><!-- end row -->

    </div>
</div>

<style>
    .image-adjust {
    margin-top: 100px; /* Ajustez cette valeur selon vos besoins */
}

</style>

<script src="https://cdn.kkiapay.me/k.js"></script>


    <!-- Modal resumé -->
    <div class="modal fade" id="staticBackdrop3" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
        aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h3 class="modal-title fs-5" id="staticBackdropLabel1">Facturation</h3>
                    {{-- {# <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button> #} --}}
                </div>
                <div class="modal-body">

                    <p> Frais de dépôt d'annonce <b class="badge rounded-pill bg-success"><span style="color: white;">
                                7.000 FCFA </span></b></p>
                    <span style="color:rgb(255, 0, 0);"><b>Cette somme est non remboursable</b></span>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Annuler</button>

                    <span id="payer"> <kkiapay-widget amount="6869" key="caf3f6e0eacf11ee80ae5bdd91083b6e"
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
        var saveRoute = "{{ route('vehicule.store') }}";
        var retourRoute= "{{ route('home') }}";
    </script>
    
    <script src="{{ asset('JS/vehiculeCreation.js') }}"></script>
@endsection
