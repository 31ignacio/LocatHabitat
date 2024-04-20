@extends('layouts.master')

@section('content')
    
    <div class="page-head">
        <div class="container">
            <div class="row">
                <div class="page-head-content">
                    <h1 class="page-title">Mes annonces</h1>
                </div>
            </div>
        </div>
    </div>
    <!-- End page header -->

    <!-- property area -->
    <div class="properties-area recent-property" style="background-color: #FFF;">
        <div class="container">
            <div class="row">


                <div class="col-md-12  pr0 padding-top-40 properties-page">
                    <div class="col-md-12 clear">
                        <div class="col-xs-10 page-subheader sorting pl0">
                            <ul class="sort-by-list">
                                <li class="">
                                    <a href="{{ route('entreprises.annonce') }}" class="order_by_date" data-orderby="property_date"
                                        data-order="ASC">
                                        APPARTEMENTS <i class="fa fa-sort-amount-asc"></i>
                                    </a>
                                </li>
                                <li class="{{ route('bureaux.entreprise') }}">
                                    <a href="" class="order_by_date" data-orderby="property_date"
                                        data-order="ASC">
                                        BUREAUX <i class="fa fa-sort-amount-asc"></i>
                                    </a>
                                </li>

                                <li class="">
                                    <a href="{{ route('vehicule.entreprise') }}" class="order_by_date" data-orderby="property_date"
                                        data-order="ASC">
                                        VEHICULEdddS <i class="fa fa-sort-amount-asc"></i>
                                    </a>
                                </li>
                            </ul><!--/ .sort-by-list-->


                        </div>

                        {{-- <div class="col-xs-2 layout-switcher">
                            <a class="layout-list" href="javascript:void(0);"> <i class="fa fa-th-list"></i> </a>
                            <a class="layout-grid active" href="javascript:void(0);"> <i class="fa fa-th"></i> </a>
                        </div><!--/ .layout-switcher--> --}}
                    </div>

                    <div class="col-md-12 clear">
                        <h5>Mes Appartements</h5>

                        @if(Session::get('success'))
                            <div class="alert alert-success">
                                {{Session::get('success')}}
                            </div>
                        @endif

                        @foreach ($bureaux as $bureau)
                            <div class="col-sm-6 col-md-4 p0" style="margin-bottom: 20px;">
                                <div class="box-two proerty-item" style="margin-right: 20px; margin-bottom: 20px;">
                                    <!-- Ajouter une marge droite et basse -->
                                    <div class="item-thumb">
                                        <!-- Afficher l'image spécifique au véhicule -->
                                        @php
                                            $bureau_images = explode('|', $bureau->images);
                                        @endphp
                                        @if (count($bureau_images) > 0)
                                            <a href="{{ route('bureaux.detail', $bureau->id) }}"
                                                title="Cliquer sur l'image pour plus de détails"><img
                                                    src="{{ URL::to($bureau_images[0]) }}"></a>
                                        @endif
                                    </div>

                                    <div class="item-entry overflow">
                                        <h5><a href="{{ route('bureaux.detail', $bureau->id) }}"><span
                                                    style="display: block; text-align: center;">{{ $bureau->lieux }}</span></a>
                                        </h5>
                                        <div class="dot-hr"></div>
                                        <span class="pull-left"><b> Climatiseur : </b> {{ $bureau->climaVenilo }}</span><br>
                                        <span class="proerty-price pull-right"><b class="badge badge-primary">
                                                {{ $bureau->prix }} FCFA </b></span>
                                        <span class="pull-left"><b> Toilette : </b> {{ $bureau->toilette }}</span>
                                        <span class="pull-left"><b> Salle de réunion  : </b> {{ $bureau->salleReunion }}</span>
                                    </div><br>
                                    <button class="btn btn-warning" data-toggle="modal"
                                        data-target="#editModal{{ $bureau->id }}">Modifier l'annonce</button>
                                </div>
                            </div>


                            <!-- Modal -->
                            <div class="modal fade" id="editModal{{ $bureau->id }}" tabindex="-1" role="dialog"
                                aria-labelledby="editModalLabel" aria-hidden="true">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="editModalLabel">Modifier les informations du
                                                bureau</h5>
                                            <button type="button" class="close" data-dismiss="modal"
                                                aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <!-- Inside the modal body -->
                                        <div class="modal-body">
                                            <!-- Your form inputs for editing vehicle information here -->
                                            <form action="{{ route('bureaux.update', $bureau->id) }}" method="POST"
                                                enctype="multipart/form-data">
                                                @csrf
                                                <!-- Input fields for vehicle information -->
                                                <div class="row">
                                                    <div class="form-group col-md-6">
                                                        <label for="marque">Lieux </label>
                                                        <input type="text" class="form-control" id="lieux"
                                                            name="lieux" value="{{ $bureau->lieux }}">
                                                    </div>

                                                    <div class="form-group col-md-6">
                                                        <label for="prix">Prix </label>
                                                        <input type="number" class="form-control" id="prix"
                                                            name="prix" value="{{ $bureau->prix }}">
                                                    </div>
                                                    

                                                </div>

                                                <div class="row">
                                                    <div class="form-group col-md-6">
                                                        <label for="climaVenilo">Climatiseur </label>
                                                        <select class="form-control" id="climaVenilo" name="climaVenilo">
                                                            <option value="Climatiseur"
                                                                {{ $bureau->climaVenilo === 'Climatiseur' ? 'selected' : '' }}>
                                                                Climatiseur</option>
                                                            <option value="Brasseur"
                                                                {{ $bureau->climaVenilo === 'Brasseur' ? 'selected' : '' }}>
                                                                Brasseur</option>

                                                                <option value="Non"
                                                                {{ $bureau->climaVenilo === 'Non' ? 'selected' : '' }}>
                                                                Non</option>
                                                            <!-- Add more options as needed -->
                                                        </select>
                                                    </div>
                                                    <div class="form-group col-md-6">
                                                        <label for="caburation">Salle de réunion </label>
                                                        <select class="form-control" id="salleReunion" name="salleReunion">
                                                            <option value="Oui"
                                                                {{ $bureau->salleReunion === 'Oui' ? 'selected' : '' }}>
                                                                Oui</option>
                                                            <option value="Non"
                                                                {{ $bureau->salleReunion === 'Non' ? 'selected' : '' }}>
                                                                Non</option>
                                                            <!-- Add more options as needed -->
                                                        </select>
                                                    </div>
                                                    

                                                </div>

                                                <div class="row">
                                                    <div class="form-group col-md-6">
                                                        <label for="bureauEquiper">Connexion internet</label>
                                                        <select class="form-control" id="wifi" name="wifi">
                                                            
                                                                <option value="Fibre optique"
                                                                {{ $bureau->wifi === 'Fibre opique' ? 'selected' : '' }}>
                                                                Fibre optique</option>

                                                                <option value="Wifi"
                                                                {{ $bureau->wifi === 'Wifi' ? 'selected' : '' }}>
                                                                Wifi</option>


                                                                <option value="Non"
                                                                {{ $bureau->wifi === 'Non' ? 'selected' : '' }}>
                                                                Non</option>
                                                            <!-- Add more options as needed -->
                                                        </select>
                                                    </div>
                                                    <div class="form-group col-md-6">
                                                        <label for="eau">Eau </label>
                                                        <select class="form-control" id="eau" name="eau">
                                                            <option value="Oui"
                                                                {{ $bureau->eau === 'Oui' ? 'selected' : '' }}>
                                                                Oui</option>
                                                            <option value="Non"
                                                                {{ $bureau->eau === 'Non' ? 'selected' : '' }}>
                                                                Non</option>
                                                            <!-- Add more options as needed -->
                                                        </select>
                                                    </div>
                                                    

                                                </div>


                                                <div class="row">
                                                    <div class="form-group col-md-3">
                                                        <label for="bureauEquiper">Bureaux équipés</label>
                                                        <select class="form-control" id="bureauEquiper" name="bureauEquiper">
                                                            <option value="Oui"
                                                                {{ $bureau->bureauEquiper === 'Oui' ? 'selected' : '' }}>
                                                                Oui</option>

                                                                <option value="Non"
                                                                {{ $bureau->bureauEquiper === 'Non' ? 'selected' : '' }}>
                                                                Non</option>
                                                            <!-- Add more options as needed -->
                                                        </select>
                                                    </div>
                                                    <div class="form-group col-md-3">
                                                        <label for="nombreSalle">Nombre de salle</label>
                                                        <input type="text" class="form-control" id="nombreSalle"
                                                            name="nombreSalle" value="{{ $bureau->nombreSalle }}">
                                                    </div>
                                                    

                                                    <div class="form-group col-md-6">
                                                        <label for="caburation">Emplacement</label>
                                                        <select class="form-control" id="emplacement" name="emplacement">
                                                            <option value="Rez-de-chaussée"
                                                                {{ $bureau->emplacement === 'Rez-de-chaussée' ? 'selected' : '' }}>
                                                                Rez-de-chaussée</option>
                                                            <option value="Sur étage"
                                                                {{ $bureau->emplacement === 'Sur étage' ? 'selected' : '' }}>
                                                                Sur étage</option>
                                                            <!-- Add more options as needed -->
                                                        </select>
                                                    </div>
                                                    
                                                </div>

                                                <div class="row">
                                                    <div class="form-group col-md-6">
                                                        <label for="toilette">Toilette</label>
                                                        <select class="form-control" id="toilette" name="toilette">
                                                            <option value="Oui"
                                                                {{ $bureau->toilette === 'Oui' ? 'selected' : '' }}>
                                                                Oui</option>
                                                            <option value="Non"
                                                                {{ $bureau->toilette === 'Non' ? 'selected' : '' }}>
                                                                Non
                                                            </option>
                                                        </select>
                                                            
                                                    </div>

                                                    <div class="form-group col-md-6">
                                                        <label for="images">Images</label>
                                                        <input type="file" class="form-control" id="images"
                                                            name="images[]" multiple>
                                                    </div>
                                                    

                                                </div>
                                                
                                                <div class="modal-footer">
                                                    
                                                    <button type="submit" class="btn btn-sm btn-warning">Enregistrer les
                                                        modifications</button>
                                                </div>
                                            </form>
                                        </div>

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
                                {{$appartements->links()}}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <style>
        .item-thumb img {

            width: 380px;
            height: 200px;
        }
    </style>
@endsection
