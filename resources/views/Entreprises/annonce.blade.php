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

                                <li class="">
                                    <a href="{{ route('vehicule.entreprise') }}" class="order_by_date" data-orderby="property_date"
                                        data-order="ASC">
                                        VEHICULE <i class="fa fa-sort-amount-asc"></i>
                                    </a>
                                </li>
                            </ul><!--/ .sort-by-list-->


                        </div>

                    </div>

                    <div class="col-md-12 clear">
                        <h4>Mes Appartements</h4>

                        @if(Session::get('success'))
                            <div class="alert alert-success">
                                {{Session::get('success')}}
                            </div>
                        @endif

                        @foreach ($appartements as $appartement)
                            <div class="col-sm-6 col-md-4 p0" style="margin-bottom: 20px;">
                                <div class="box-two proerty-item" style="margin-right: 20px; margin-bottom: 20px;">
                                    <!-- Ajouter une marge droite et basse -->
                                    <div class="item-thumb">
                                        <!-- Afficher l'image spécifique au véhicule -->
                                        @php
                                            $appartement_images = explode('|', $appartement->images);
                                        @endphp
                                        @if (count($appartement_images) > 0)
                                            <a href="{{ route('appartement.detail', $appartement->id) }}"
                                                title="Cliquer sur l'image pour plus de détails"><img
                                                    src="{{ URL::to($appartement_images[0]) }}"></a>
                                        @endif
                                    </div>

                                    <div class="item-entry overflow">
                                        <h5><a href="{{ route('appartement.detail', $appartement->id) }}"><span
                                                    style="display: block; text-align: center;">{{ $appartement->lieux }}</span></a>
                                        </h5>
                                        <div class="dot-hr"></div>
                                        <span class="pull-left"><b> Climatiseur : </b> {{ $appartement->climaVenilo }}</span><br>
                                        <span class="proerty-price pull-right"><b class="badge badge-primary">
                                                {{ $appartement->prix }} FCFA </b></span>
                                        <span class="pull-left"><b> Packing : </b> {{ $appartement->packing }}</span><br>
                                        <span class="pull-left"><b> Connexion internet  : </b> {{ $appartement->wifi }}</span>
                                    </div><br>
                                    <a href="{{ route('appartement.mod', $appartement->id) }}" class="btn btn-warning">Modifier l'annonce</a>

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
