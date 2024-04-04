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

                <div class="col-md-3 p0 padding-top-40">
                    <div class="blog-asside-right pr0">
                        <div class="panel panel-default sidebar-menu wow fadeInRight animated">
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

                                                <select id="lunchBegins" class="selectpicker" data-live-search="true"
                                                    data-live-search-style="begins" title="Select Your City">

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
                                                    data-slider-max="600" data-slider-step="5" data-slider-value="[0,450]"
                                                    id="price-range"><br />
                                                <b class="pull-left color">2000$</b>
                                                <b class="pull-right color">100000$</b>
                                            </div>
                                            <div class="col-xs-6">
                                                <label for="property-geo">Property geo (m2) :</label>
                                                <input type="text" class="span2" value="" data-slider-min="0"
                                                    data-slider-max="600" data-slider-step="5" data-slider-value="[50,450]"
                                                    id="property-geo"><br />
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
                                                    data-slider-max="600" data-slider-step="5" data-slider-value="[250,450]"
                                                    id="min-baths"><br />
                                                <b class="pull-left color">1</b>
                                                <b class="pull-right color">120</b>
                                            </div>

                                            <div class="col-xs-6">
                                                <label for="property-geo">Min bed :</label>
                                                <input type="text" class="span2" value="" data-slider-min="0"
                                                    data-slider-max="600" data-slider-step="5" data-slider-value="[250,450]"
                                                    id="min-bed"><br />
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
                                                    <label> <input type="checkbox" checked> Jog Path </label>
                                                </div>
                                            </div>
                                            <div class="col-xs-6">
                                                <div class="checkbox">
                                                    <label> <input type="checkbox"> 26' Ceilings </label>
                                                </div>
                                            </div>
                                        </div>
                                    </fieldset>

                                    <fieldset class="padding-5">
                                        <div class="row">
                                            <div class="col-xs-12">
                                                <div class="checkbox">
                                                    <label> <input type="checkbox"> Hurricane Shutters </label>
                                                </div>
                                            </div>
                                        </div>
                                    </fieldset>

                                    <fieldset>
                                        <div class="row">
                                            <div class="col-xs-12">
                                                <input class="button btn largesearch-btn" value="Search" type="submit">
                                            </div>
                                        </div>
                                    </fieldset>
                                </form>
                            </div>
                        </div>

                        <div class="panel panel-default sidebar-menu wow fadeInRight animated">
                            <div class="panel-heading">
                                <h3 class="panel-title">Recommended</h3>
                            </div>
                            <div class="panel-body recent-property-widget">
                                <ul>
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
                                    </li>
                                    <li>
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
                                    </li>

                                </ul>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-9  pr0 padding-top-40 properties-page">
                    <div class="col-md-12 clear">
                        <div class="col-xs-10 page-subheader sorting pl0">
                            <ul class="sort-by-list">
                                <li class="">
                                    <a href="javascript:void(0);" class="order_by_date" data-orderby="property_date"
                                        data-order="ASC">
                                        APPARTEMENTS <i class="fa fa-sort-amount-asc"></i>
                                    </a>
                                </li>
                                <li class="">
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

                        <div class="col-xs-2 layout-switcher">
                            <a class="layout-list" href="javascript:void(0);"> <i class="fa fa-th-list"></i> </a>
                            <a class="layout-grid active" href="javascript:void(0);"> <i class="fa fa-th"></i> </a>
                        </div><!--/ .layout-switcher-->
                    </div>

                    <h4>Mes bureaux</h4>
                    <div class="col-md-12 clear">
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
                            <ul>
                                <li><a href="#">Prev</a></li>
                                <li><a href="#">1</a></li>
                                <li><a href="#">2</a></li>
                                <li><a href="#">3</a></li>
                                <li><a href="#">4</a></li>
                                <li><a href="#">Next</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
