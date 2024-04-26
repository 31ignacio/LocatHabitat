@extends('layouts.master')

@section('content')



<div class="page-head"> 
    <div class="container">
        <div class="row">
            <div class="page-head-content">
                <h1 class="page-title">Modifier mon appartement</h1>               
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
                            <form id="form" method="POST" action="{{ route('appartement.update', $appartement) }}" enctype="multipart/form-data">
                                @csrf
                                        
                                <ul>
                                    <li><a href="#step1" data-toggle="tab"> 1 </a></li>
                                    <li><a href="#step2" data-toggle="tab"> 2 </a></li>
                                    <li><a href="#step3" data-toggle="tab"> 3 </a></li>
                                </ul>
        
                                <div class="tab-content">
        
                                    <div class="tab-pane" id="step1">
                                        <div class="p-b-15  ">
                                            <h5 class="info-text"> <b>Modifier mon appartement</b></h5>
                                            
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
                                                        value="{{ $appartement->nombreSalon }}" class="form-control">
                
                                                    @error('nombreSalon')
                                                        <div class="text-danger">{{ $message }}</div>
                                                    @enderror
                                                </div>
                                                <div class="col-md-6 form-group">
                                                    <label>Nombre de chambre</label>
                                                    <input name="nombreChambre" id="nombreChambre" type="number" min="0"
                                                    value="{{ $appartement->nombreChambre }}" class="form-control">
                
                                                    @error('nombreChambre')
                                                        <div class="text-danger">{{ $message }}</div>
                                                    @enderror
                                                </div>
                                            </div>


                                            <div class="row">
                
                                                <div class="col-md-6 form-group">
                                                    <label>L'appartement est climatisé ?</label>
                                                    <select name="climaVenilo" id="climaVenilo" class="form-control">
                                                        <option value="Climatiseur" {{ $appartement->climaVenilo == 'Climatiseur' ? 'selected' : ''}}>Climatiseur</option>
                                                        <option value="Brasseur" {{ $appartement->climaVenilo == 'Brasseur' ? 'selected' : ''}}>Brasseur</option>
                                                        <option value="Non" {{ $appartement->climaVenilo == 'Non' ? 'selected' : ''}}>Non</option>
                                                    </select>
                                                </div>

                                                <div class="col-md-6 form-group">
                                                    <label>L'appartement dispose d'une cuisine ?</label>
                                                    <select name="cuisine" id="cuisine" class="form-control">
                                                        <option value="Oui" {{ $appartement->cuisine == 'Oui' ? 'selected' : ''}}>Oui</option>
                                                        <option value="Non" {{ $appartement->cuisine == 'Non' ? 'selected' : ''}}>Non</option>

                                                    </select>
                                                </div>
                                            </div>

                                            <div class="row">
                                                
                                                <div class="col-md-6 form-group">
                                                    <label>L'appartement dispose d'une terasse ?</label>
                                                    <select name="terasse" id="terasse" class="form-control">
                                                        <option value="Oui" {{ $appartement->terasse == 'Oui' ? 'selected' : ''}}>Oui</option>
                                                        <option value="Non" {{ $appartement->terasse == 'Non' ? 'selected' : ''}}>Non</option>

                                                    </select>
                                                </div>
                                                <div class="col-md-6 form-group">
                                                    <label>L'appartement dispose d'un packing ?</label>
                                                    <select name="packing" id="packing" class="form-control">
                                                        <option value="Oui" {{ $appartement->packing == 'Oui' ? 'selected' : ''}}>Oui</option>
                                                        <option value="Non" {{ $appartement->packing == 'Non' ? 'selected' : ''}}>Non</option>

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
                                                    <option value="Oui" {{ $appartement->ptiDejeuner == 'Oui' ? 'selected' : ''}}>Oui</option>
                                                    <option value="Non" {{ $appartement->ptiDejeuner == 'Non' ? 'selected' : ''}}>Non</option>

                                                </select>
                                            </div>
                                            <div class="col-md-6 form-group">
                                                <label style="font-size: 90%">L'appartement dispose d'un abonnement canal+ ?</label>
                                                <select name="canal" id="canal" class="form-control">
                                                    <option value="Oui" {{ $appartement->canal == 'Oui' ? 'selected' : ''}}>Oui</option>
                                                    <option value="Non" {{ $appartement->canal == 'Non' ? 'selected' : ''}}>Non</option>

                                                </select>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-md-6 form-group">
                                                <label style="font-size: 90%">L'appartement dispose d'une connexion interne ?</label>
                                                <select name="wifi" id="wifi" class="form-control">
                                                    <option value="Wifi" {{ $appartement->wifi == 'Wifi' ? 'selected' : ''}}>Wifi</option>
                                                    <option value="Fibre optique" {{ $appartement->wifi == 'Fibre optique' ? 'selected' : ''}}>Fibre optique</option>
                                                    <option value="Non" {{ $appartement->wifi == 'Non' ? 'selected' : ''}}>Non</option>
                                                </select>
                                            </div>
                                            <div class="col-md-6 form-group">
                                                <label style="font-size: 90%">L'appartement dispose d'un agent de sécurité ?</label>
                                                <select name="securite" id="securite" class="form-control">
                                                    <option value="Oui" {{ $appartement->securite == 'Oui' ? 'selected' : ''}}>Oui</option>
                                                    <option value="Non" {{ $appartement->securite == 'Non' ? 'selected' : ''}}>Non</option>
                                                </select>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-md-6 form-group">
                                                <label style="font-size: 90%">L'appartement est meublé?</label>
                                                <select name="meuble" id="meuble" class="form-control">
                                                    <option value="Meublé" {{ $appartement->meuble == 'Meublé' ? 'selected' : ''}}>Meublé</option>
                                                    <option value="Non meublé" {{ $appartement->meuble == 'Non meublé' ? 'selected' : ''}}>Non meublé</option>
                                                </select>
                                            </div>
                                            <div class="col-md-6 form-group">
                                                <label style="font-size: 90%">Entretien des chambres</label>
                                                <select name="entretien" id="entretien" class="form-control">
                                                    <option value="Chaque semaine" {{ $appartement->entretien == 'Chaque semaine' ? 'selected' : ''}}>Chaque semaine</option>
                                                    <option value="Chaque jour" {{ $appartement->entretien == 'Chaque jour' ? 'selected' : ''}}>Chaque jour</option>
                                                    <option value="Chaque trois jours" {{ $appartement->entretien == 'Chaque trois jours' ? 'selected' : ''}}>Chaque trois jours</option>
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
                                                <input type="text" name="prix" id="prix" value="{{ $appartement->prix }}" class="form-control" oninput="validatePrix(this)">

                                                @error('prix')
                                                    <div class="text text-danger">{{ $message }}</div>
                                                @enderror
                                                <div id="error-message2" class="error-message text-danger"></div>                                            
                                            </div>

                                            <div class="col-md-6 form-group">
                                                <label>Le prix est négociable ?</label>
                                                <select name="negociable" id="negociable" class="form-control">
                                                    <option value="Pour long séjour" {{ $appartement->negociable == 'Pour long séjour' ? 'selected' : ''}}>Pour long séjour</option>
                                                    <option value="Oui" {{ $appartement->negociable == 'Oui' ? 'selected' : ''}}>Oui</option>
                                                    <option value="Non" {{ $appartement->negociable == 'Non' ? 'selected' : ''}}>Non</option>
                                                </select>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class=" col-md-6 form-group">
                                                <label>Ville, Quartier</label>
                                                <input name="lieux" id="lieux" type="text" class="form-control" value="{{ $appartement->lieux }}">
                                                @error('lieux')
                                                <div class="text text-danger">{{ $message }}</div>
                                                @enderror
                                            </div>
            
                                            <div class="col-md-6 form-group">
                                                <label>Image(<span style="font-size: 10px;">vous puvez ajouter plusieurs images à la fois</span>)</label>
                                                <input name="images[]" id="images" type="file" class="form-control" multiple>
                                                    
                                            </div>

                                            
                                        </div>

                                        <div class="row">
                                            <div class=" col-md-12 form-group">
                                                <label> Autres informations </label>
                                                <textarea name="description" id="description" cols="38" rows="6" class="form-control"> {{ $appartement->description }}</textarea>
                                                
                                            </div>
            
                                            
                                        </div>
                                        

                                    </div>
                                    <!--  End step 3 -->
    
                                    <!--  End step 4 -->
        
                                </div>
        
                                <div class="wizard-footer">
                                    <div class="pull-right">
                                        <input type='button' class='btn btn-next btn-primary' name='next' value='Suivant' />
                                        <input type='submit' class='btn btn-finish btn-primary' onclick="submitForm()" id="envoyer" name='finish' value='Soumettre' />
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

@endsection
