@extends('layouts.master')

@section('content')


<div class="page-head"> 
    <div class="container">
        <div class="row">
            <div class="page-head-content">
                <h1 class="page-title">List Layout With Sidebar</h1>               
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
                <div class="panel panel-default sidebar-menu wow fadeInRight animated" >
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

                                        <select id="lunchBegins" class="selectpicker" data-live-search="true" data-live-search-style="begins" title="Select Your City">

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
                                               data-slider-max="600" data-slider-step="5" 
                                               data-slider-value="[0,450]" id="price-range" ><br />
                                        <b class="pull-left color">2000$</b> 
                                        <b class="pull-right color">100000$</b>                                                
                                    </div>
                                    <div class="col-xs-6">
                                        <label for="property-geo">Property geo (m2) :</label>
                                        <input type="text" class="span2" value="" data-slider-min="0" 
                                               data-slider-max="600" data-slider-step="5" 
                                               data-slider-value="[50,450]" id="property-geo" ><br />
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
                                               data-slider-max="600" data-slider-step="5" 
                                               data-slider-value="[250,450]" id="min-baths" ><br />
                                        <b class="pull-left color">1</b> 
                                        <b class="pull-right color">120</b>                                                
                                    </div>

                                    <div class="col-xs-6">
                                        <label for="property-geo">Min bed :</label>
                                        <input type="text" class="span2" value="" data-slider-min="0" 
                                               data-slider-max="600" data-slider-step="5" 
                                               data-slider-value="[250,450]" id="min-bed" ><br />
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
                                            <label>  <input type="checkbox" checked> Jog Path </label>
                                        </div>
                                    </div>  
                                    <div class="col-xs-6"> 
                                        <div class="checkbox">
                                            <label>  <input type="checkbox"> 26' Ceilings </label>
                                        </div>
                                    </div>  
                                </div>
                            </fieldset>

                            <fieldset class="padding-5">
                                <div class="row">
                                    <div class="col-xs-12"> 
                                        <div class="checkbox">
                                            <label>  <input type="checkbox"> Hurricane Shutters </label>
                                        </div>
                                    </div>  
                                </div>
                            </fieldset>

                            <fieldset >
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
                        <li class="active">
                            <a href="javascript:void(0);" class="order_by_date" data-orderby="property_date" data-order="ASC">
                                APPARTEMENTS <i class="fa fa-sort-amount-asc"></i>					
                            </a>
                        </li>
                        <li class="active">
                            <a href="{{ route('bureaux.entreprise') }}" class="order_by_date" data-orderby="property_date" data-order="ASC">
                                BUREAUX <i class="fa fa-sort-amount-asc"></i>					
                            </a>
                        </li>

                        <li class="active">
                            <a href="{{ route('vehicule.entreprise') }}" class="order_by_date" data-orderby="property_date" data-order="ASC">
                                VEHICULES <i class="fa fa-sort-amount-asc"></i>					
                            </a>
                        </li>
                    </ul><!--/ .sort-by-list-->

                    
                </div>

                <div class="col-xs-2 layout-switcher">
                    <a class="layout-list" href="javascript:void(0);"> <i class="fa fa-th-list"></i>  </a>
                    <a class="layout-grid active" href="javascript:void(0);"> <i class="fa fa-th"></i> </a>                          
                </div><!--/ .layout-switcher-->
            </div>

            <div class="col-md-12 clear"> 
                <div id="list-type" class="proerty-th">
                    <div class="col-sm-6 col-md-4 p0">
                            <div class="box-two proerty-item">
                                <div class="item-thumb">
                                    <a href="property-1.html" ><img src="assets/img/demo/property-3.jpg"></a>
                                </div>

                                <div class="item-entry overflow">
                                    <h5><a href="property-1.html"> Super nice villa </a></h5>
                                    <div class="dot-hr"></div>
                                    <span class="pull-left"><b> Area :</b> 120m </span>
                                    <span class="proerty-price pull-right"> $ 300,000</span>
                                    <p style="display: none;">Suspendisse ultricies Suspendisse ultricies Nulla quis dapibus nisl. Suspendisse ultricies commodo arcu nec pretium ...</p>
                                    <div class="property-icon">
                                        <img src="assets/img/icon/bed.png">(5)|
                                        <img src="assets/img/icon/shawer.png">(2)|
                                        <img src="assets/img/icon/cars.png">(1)  
                                    </div>
                                </div>


                            </div>
                        </div> 

                        <div class="col-sm-6 col-md-4 p0">
                            <div class="box-two proerty-item">
                                <div class="item-thumb">
                                    <a href="property-1.html" ><img src="assets/img/demo/property-2.jpg"></a>
                                </div>

                                <div class="item-entry overflow">
                                    <h5><a href="property-1.html"> Super nice villa </a></h5>
                                    <div class="dot-hr"></div>
                                    <span class="pull-left"><b> Area :</b> 120m </span>
                                    <span class="proerty-price pull-right"> $ 300,000</span>
                                    <p style="display: none;">Suspendisse ultricies Suspendisse ultricies Nulla quis dapibus nisl. Suspendisse ultricies commodo arcu nec pretium ...</p>
                                    <div class="property-icon">
                                        <img src="assets/img/icon/bed.png">(5)|
                                        <img src="assets/img/icon/shawer.png">(2)|
                                        <img src="assets/img/icon/cars.png">(1)  
                                    </div>
                                </div> 
                            </div>
                        </div> 

                        <div class="col-sm-6 col-md-4 p0">
                            <div class="box-two proerty-item">
                                <div class="item-thumb">
                                    <a href="property-1.html" ><img src="assets/img/demo/property-1.jpg"></a>
                                </div>

                                <div class="item-entry overflow">
                                    <h5><a href="property-1.html"> Super nice villa </a></h5>
                                    <div class="dot-hr"></div>
                                    <span class="pull-left"><b> Area :</b> 120m </span>
                                    <span class="proerty-price pull-right"> $ 300,000</span>
                                    <p style="display: none;">Suspendisse ultricies Suspendisse ultricies Nulla quis dapibus nisl. Suspendisse ultricies commodo arcu nec pretium ...</p>
                                    <div class="property-icon">
                                        <img src="assets/img/icon/bed.png">(5)|
                                        <img src="assets/img/icon/shawer.png">(2)|
                                        <img src="assets/img/icon/cars.png">(1)  
                                    </div>
                                </div> 
                            </div>
                        </div> 

                        <div class="col-sm-6 col-md-4 p0">
                            <div class="box-two proerty-item">
                                <div class="item-thumb">
                                    <a href="property-1.html" ><img src="assets/img/demo/property-3.jpg"></a>
                                </div>

                                <div class="item-entry overflow">
                                    <h5><a href="property-1.html"> Super nice villa </a></h5>
                                    <div class="dot-hr"></div>
                                    <span class="pull-left"><b> Area :</b> 120m </span>
                                    <span class="proerty-price pull-right"> $ 300,000</span>
                                    <p style="display: none;">Suspendisse ultricies Suspendisse ultricies Nulla quis dapibus nisl. Suspendisse ultricies commodo arcu nec pretium ...</p>
                                    <div class="property-icon">
                                        <img src="assets/img/icon/bed.png">(5)|
                                        <img src="assets/img/icon/shawer.png">(2)|
                                        <img src="assets/img/icon/cars.png">(1)  
                                    </div>
                                </div> 
                            </div>
                        </div> 

                        <div class="col-sm-6 col-md-4 p0">
                            <div class="box-two proerty-item">
                                <div class="item-thumb">
                                    <a href="property-1.html" ><img src="assets/img/demo/property-1.jpg"></a>
                                </div>

                                <div class="item-entry overflow">
                                    <h5><a href="property-1.html"> Super nice villa </a></h5>
                                    <div class="dot-hr"></div>
                                    <span class="pull-left"><b> Area :</b> 120m </span>
                                    <span class="proerty-price pull-right"> $ 300,000</span>
                                    <p style="display: none;">Suspendisse ultricies Suspendisse ultricies Nulla quis dapibus nisl. Suspendisse ultricies commodo arcu nec pretium ...</p>
                                    <div class="property-icon">
                                        <img src="assets/img/icon/bed.png">(5)|
                                        <img src="assets/img/icon/shawer.png">(2)|
                                        <img src="assets/img/icon/cars.png">(1)  
                                    </div>
                                </div>

                            </div>
                        </div> 

                        <div class="col-sm-6 col-md-4 p0">
                            <div class="box-two proerty-item">
                                <div class="item-thumb">
                                    <a href="property-1.html" ><img src="assets/img/demo/property-2.jpg"></a>
                                </div>

                                <div class="item-entry overflow">
                                    <h5><a href="property-1.html"> Super nice villa </a></h5>
                                    <div class="dot-hr"></div>
                                    <span class="pull-left"><b> Area :</b> 120m </span>
                                    <span class="proerty-price pull-right"> $ 300,000</span>
                                    <p style="display: none;">Suspendisse ultricies Suspendisse ultricies Nulla quis dapibus nisl. Suspendisse ultricies commodo arcu nec pretium ...</p>
                                    <div class="property-icon">
                                        <img src="assets/img/icon/bed.png">(5)|
                                        <img src="assets/img/icon/shawer.png">(2)|
                                        <img src="assets/img/icon/cars.png">(1)  
                                    </div>
                                </div> 
                            </div>
                        </div> 

                        <div class="col-sm-6 col-md-4 p0">
                            <div class="box-two proerty-item">
                                <div class="item-thumb">
                                    <a href="property-1.html" ><img src="assets/img/demo/property-3.jpg"></a>
                                </div>

                                <div class="item-entry overflow">
                                    <h5><a href="property-1.html"> Super nice villa </a></h5>
                                    <div class="dot-hr"></div>
                                    <span class="pull-left"><b> Area :</b> 120m </span>
                                    <span class="proerty-price pull-right"> $ 300,000</span>
                                    <p style="display: none;">Suspendisse ultricies Suspendisse ultricies Nulla quis dapibus nisl. Suspendisse ultricies commodo arcu nec pretium ...</p>
                                    <div class="property-icon">
                                        <img src="assets/img/icon/bed.png">(5)|
                                        <img src="assets/img/icon/shawer.png">(2)|
                                        <img src="assets/img/icon/cars.png">(1)  
                                    </div>
                                </div> 
                            </div>
                        </div> 

                        <div class="col-sm-6 col-md-4 p0">
                            <div class="box-two proerty-item">
                                <div class="item-thumb">
                                    <a href="property-1.html" ><img src="assets/img/demo/property-2.jpg"></a>
                                </div>

                                <div class="item-entry overflow">
                                    <h5><a href="property-1.html"> Super nice villa </a></h5>
                                    <div class="dot-hr"></div>
                                    <span class="pull-left"><b> Area :</b> 120m </span>
                                    <span class="proerty-price pull-right"> $ 300,000</span>
                                    <p style="display: none;">Suspendisse ultricies Suspendisse ultricies Nulla quis dapibus nisl. Suspendisse ultricies commodo arcu nec pretium ...</p>
                                    <div class="property-icon">
                                        <img src="assets/img/icon/bed.png">(5)|
                                        <img src="assets/img/icon/shawer.png">(2)|
                                        <img src="assets/img/icon/cars.png">(1)  
                                    </div>
                                </div> 
                            </div>
                        </div> 

                        <div class="col-sm-6 col-md-4 p0">
                            <div class="box-two proerty-item">
                                <div class="item-thumb">
                                    <a href="property-1.html" ><img src="assets/img/demo/property-1.jpg"></a>
                                </div>

                                <div class="item-entry overflow">
                                    <h5><a href="property-1.html"> Super nice villa </a></h5>
                                    <div class="dot-hr"></div>
                                    <span class="pull-left"><b> Area :</b> 120m </span>
                                    <span class="proerty-price pull-right"> $ 300,000</span>
                                    <p style="display: none;">Suspendisse ultricies Suspendisse ultricies Nulla quis dapibus nisl. Suspendisse ultricies commodo arcu nec pretium ...</p>
                                    <div class="property-icon">
                                        <img src="assets/img/icon/bed.png">(5)|
                                        <img src="assets/img/icon/shawer.png">(2)|
                                        <img src="assets/img/icon/cars.png">(1)  
                                    </div>
                                </div> 
                            </div>
                        </div> 
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
</div>


@endsection