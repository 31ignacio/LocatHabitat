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

                 {{-- <div class="col-md-3 p0 padding-top-40">
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
                </div>  --}}

                <div class="col-md-12  pr0 padding-top-40 properties-page">
                    <div class="col-md-12 clear">
                        <div class="col-xs-10 page-subheader sorting pl0">
                            <ul class="sort-by-list">
                                <li class="">
                                    <a href="{{ route('entreprise.annonce') }}" class="order_by_date" data-orderby="property_date"
                                        data-order="ASC">
                                        APPARTEMENTS <i class="fa fa-sort-amount-asc"></i>
                                    </a>
                                </li>
                                <li class="">
                                    <a href="{{ route('bureaux.entreprise') }}" class="order_by_date" data-orderby="property_date"
                                        data-order="ASC">
                                        BUREAUX <i class="fa fa-sort-amount-asc"></i>
                                    </a>
                                </li>

                                <li class="{{ route('vehicule.entreprise') }}">
                                    <a href="" class="order_by_date" data-orderby="property_date"
                                        data-order="ASC">
                                        VEHICULES <i class="fa fa-sort-amount-asc"></i>
                                    </a>
                                </li>
                            </ul><!--/ .sort-by-list-->

                        </div>
                    </div>

                    <div class="col-md-12 clear">
                        <div id="list-type" class="proerty-th">

                            <h5 >Mes véhicules</h5>

                            @if(Session::get('success'))
                                <div class="alert alert-success">
                                    {{Session::get('success')}}
                                </div>
                            @endif

                            @foreach ($vehicules as $vehicule)
                                <div class="col-sm-6 col-md-4 p0">
                                    <div class="box-two proerty-item" style="margin-right: 20px; margin-bottom: 20px;">
                                        <!-- Ajouter une marge droite et basse -->
                                        <div class="item-thumb">
                                            <!-- Afficher l'image spécifique au véhicule -->
                                            @php
                                                $vehicule_images = explode('|', $vehicule->images);
                                            @endphp
                                            @if (count($vehicule_images) > 0)
                                                <a href="{{ route('vehicule.detail', $vehicule->id) }}"
                                                    title="Cliquer sur l'image pour plus de détails"><img
                                                        src="{{ URL::to($vehicule_images[0]) }}"></a>
                                            @endif
                                        </div>

                                        <div class="item-entry overflow">
                                            <h5><a href="{{ route('vehicule.detail', $vehicule->id) }}"><span
                                                        style="display: block; text-align: center;">{{ $vehicule->marque }}</span></a>
                                            </h5>
                                            <div class="dot-hr"></div>
                                            <span class="pull-left"><b> Climatiseur : </b> {{ $vehicule->climatiseur }}</span>
                                            <span class="proerty-price pull-right"><b class="badge badge-primary">
                                                    {{ $vehicule->prix }} FCFA </b></span>
                                            <span class="pull-left"><b> Chauffeur : </b> {{ $vehicule->chauffeur }}</span>
                                            <span class="pull-left"><b> Caburant : </b> {{ $vehicule->caburation }}</span>
                                        </div><br>
                                        <button class="btn btn-warning" data-toggle="modal"
                                            data-target="#editModal{{ $vehicule->id }}">Modifier l'annonce</button>
                                    </div>
                                </div>


                                <!-- Modal -->
                                <div class="modal fade" id="editModal{{ $vehicule->id }}" tabindex="-1" role="dialog"
                                    aria-labelledby="editModalLabel" aria-hidden="true">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="editModalLabel">Modifier les informations du
                                                    véhicule</h5>
                                                <button type="button" class="close" data-dismiss="modal"
                                                    aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <!-- Inside the modal body -->
                                            <div class="modal-body">
                                                <!-- Your form inputs for editing vehicle information here -->
                                                <form action="{{ route('vehicule.update', $vehicule->id) }}" method="POST"
                                                    enctype="multipart/form-data">
                                                    @csrf
                                                    <!-- Input fields for vehicle information -->
                                                    <div class="row">
                                                        <div class="form-group col-md-6">
                                                            <label for="marque">Marque :</label>
                                                            <input type="text" class="form-control" id="marque"
                                                                name="marque" value="{{ $vehicule->marque }}">
                                                        </div>

                                                        <div class="form-group col-md-6">
                                                            <label for="prix">Prix :</label>
                                                            <input type="number" class="form-control" id="prix"
                                                                name="prix" value="{{ $vehicule->prix }}">
                                                        </div>
                                                        

                                                    </div>

                                                    <div class="row">
                                                        <div class="form-group col-md-6">
                                                            <label for="climatiseur">Climatiseur :</label>
                                                            <select class="form-control" id="climatiseur" name="climatiseur">
                                                                <option value="Oui"
                                                                    {{ $vehicule->climatiseur === 'Oui' ? 'selected' : '' }}>
                                                                    Oui</option>
                                                                <option value="Non"
                                                                    {{ $vehicule->climatiseur === 'Non' ? 'selected' : '' }}>
                                                                    Non</option>
                                                                <!-- Add more options as needed -->
                                                            </select>
                                                        </div>
                                                        <div class="form-group col-md-6">
                                                            <label for="caburation">Caburation :</label>
                                                            <select class="form-control" id="caburation" name="caburation">
                                                                <option value="A la charge du client"
                                                                    {{ $vehicule->caburation === 'A la charge du client' ? 'selected' : '' }}>
                                                                    A la charge du client</option>
                                                                <option value="A notre charge"
                                                                    {{ $vehicule->caburation === 'A notre charge' ? 'selected' : '' }}>
                                                                    A notre charge</option>
                                                                <!-- Add more options as needed -->
                                                            </select>
                                                        </div>
                                                        

                                                    </div>

                                                    <div class="row">
                                                        <div class="form-group col-md-6">
                                                            <label for="chauffeur">Chauffeur :</label>
                                                            <select class="form-control" id="chauffeur" name="chauffeur">
                                                                <option value="Oui"
                                                                    {{ $vehicule->chauffeur === 'Oui' ? 'selected' : '' }}>
                                                                    Oui</option>
                                                                <option value="Non"
                                                                    {{ $vehicule->chauffeur === 'Non' ? 'selected' : '' }}>
                                                                    Non</option>
                                                                <option value="Au choix"
                                                                    {{ $vehicule->chauffeur === 'Au choix' ? 'selected' : '' }}>
                                                                    Au choix</option>
                                                                </select>
                                                        </div>
                                                        <div class="form-group col-md-6">
                                                            <label for="images">Images :</label>
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

    <style>
        .item-thumb img {

            width: 380px;
            height: 200px;
        }
    </style>
@endsection
