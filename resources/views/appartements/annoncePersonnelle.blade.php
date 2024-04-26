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
                                    <button class="btn btn-warning">Modifier l'annonce</button>
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
