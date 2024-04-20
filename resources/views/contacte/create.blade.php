@extends('layouts.master')

@section('content')

    

<!-- End of nav bar -->

<div class="page-head"> 
    <div class="container">
        <div class="row">
            <div class="page-head-content">
                <h1 class="page-title">Contacte</h1>               
            </div>
        </div>
    </div>
</div>
<!-- End page header -->

<!-- property area -->
<div class="content-area recent-property padding-top-40" style="background-color: #FFF;">
    <div class="container">  

        <div class="col-md-9">

            <div class="" id="contact1">                        
                <div class="row">
                    <div class="col-sm-4">
                        <h3><i class="fa fa-map-marker"></i> Adresse</h3>
                        <p>Cotonou,
                            <strong>Bénin</strong>
                        </p>
                    </div>
                    <!-- /.col-sm-4 -->
                    <div class="col-sm-4">
                        <h3><i class="fa fa-phone"></i> Appel/Whatsapp</h3>
                        <p class="text-muted">Vous pouvez nous appeler ou laisser un message whatsapp.</p>
                        <p><strong>+229 40 73 53 35</strong></p>
                    </div>
                    <!-- /.col-sm-4 -->
                    <div class="col-sm-4">
                        <h3><i class="fa fa-envelope"></i> Assistance électronique</h3>
                        <p class="text-muted">N'hésitez pas à nous écrire un email.</p>
                        <ul>
                            <li><strong><a href="mailto:">ariexpertize@gmail.com</a></strong>   </li>
                            {{-- <li><strong><a href="#">Ticketio</a></strong> - our ticketing support platform</li> --}}
                        </ul>
                    </div>
                    <!-- /.col-sm-4 -->
                </div>
                <!-- /.row --> 
               
                <hr>
                {{-- <h2>Contact form</h2> --}}
                <form>
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label for="firstname">Nom</label>
                                <input type="text" class="form-control" id="firstname">
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label for="lastname">Prénom</label>
                                <input type="text" class="form-control" id="lastname">
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label for="email">Email</label>
                                <input type="text" class="form-control" id="email">
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label for="subject">Sujet</label>
                                <input type="text" class="form-control" id="subject">
                            </div>
                        </div>
                        <div class="col-sm-12">
                            <div class="form-group">
                                <label for="message">Message</label>
                                <textarea id="message" class="form-control" cols="30" rows="10" ></textarea>
                            </div>
                        </div>
                        <div class="col-sm-12 text-center">
                            <button type="submit" class="btn btn-primary"><i class="fa fa-envelope-o"></i> Soumettre</button>
                        </div>
                    </div>
                    <!-- /.row -->
                </form>
            </div>
        </div>
        <!-- /.col-md-9 -->   

        <div class="col-md-3 ">                    
            <div class="blog-asside-right">  
                <div class="panel panel-default sidebar-menu wow fadeInRight animated">
                    <div class="panel-heading">
                        <h3 class="panel-title">Recommended</h3>
                    </div>
                    <div class="panel-body recent-property-widget">
                        <ul>
                            <li>
                                <div class="col-md-3 blg-thumb p0">
                                    <a href="single.html"><img src="assets/img/demo/small-property-2.jpg"></a>
                                    <span class="property-seeker">
                                        <b class="b-1">A</b>
                                        <b class="b-2">S</b>
                                    </span>
                                </div>
                                <div class="col-md-8 blg-entry">
                                    <h6> <a href="single.html">Super nice villa </a></h6>
                                    <span class="property-price">3000000$</span>
                                </div>
                            </li>
                            <li>
                                <div class="col-md-3 blg-thumb p0">
                                    <a href="single.html"><img src="assets/img/demo/small-property-1.jpg"></a>
                                    <span class="property-seeker">
                                        <b class="b-1">A</b>
                                        <b class="b-2">S</b>
                                    </span>
                                </div>
                                <div class="col-md-8 blg-entry">
                                    <h6> <a href="single.html">Super nice villa </a></h6>
                                    <span class="property-price">3000000$</span>
                                </div>
                            </li>
                            <li>
                                <div class="col-md-3 blg-thumb p0">
                                    <a href="single.html"><img src="assets/img/demo/small-property-3.jpg"></a>
                                    <span class="property-seeker">
                                        <b class="b-1">A</b>
                                        <b class="b-2">S</b>
                                    </span>
                                </div>
                                <div class="col-md-8 blg-entry">
                                    <h6> <a href="single.html">Super nice villa </a></h6>
                                    <span class="property-price">3000000$</span>
                                </div>
                            </li>

                            <li>
                                <div class="col-md-3 blg-thumb p0">
                                    <a href="single.html"><img src="assets/img/demo/small-property-2.jpg"></a>
                                    <span class="property-seeker">
                                        <b class="b-1">A</b>
                                        <b class="b-2">S</b>
                                    </span>
                                </div>
                                <div class="col-md-8 blg-entry">
                                    <h6> <a href="single.html">Super nice villa </a></h6>
                                    <span class="property-price">3000000$</span>
                                </div>
                            </li>
                            
                            <li>
                                <div class="col-md-3 blg-thumb p0">
                                    <a href="single.html"><img src="assets/img/demo/small-property-2.jpg"></a>
                                    <span class="property-seeker">
                                        <b class="b-1">A</b>
                                        <b class="b-2">S</b>
                                    </span>
                                </div>
                                <div class="col-md-8 blg-entry">
                                    <h6> <a href="single.html">Super nice villa </a></h6>
                                    <span class="property-price">3000000$</span>
                                </div>
                            </li>
                            
                            <li>
                                <div class="col-md-3 blg-thumb p0">
                                    <a href="single.html"><img src="assets/img/demo/small-property-2.jpg"></a>
                                    <span class="property-seeker">
                                        <b class="b-1">A</b>
                                        <b class="b-2">S</b>
                                    </span>
                                </div>
                                <div class="col-md-8 blg-entry">
                                    <h6> <a href="single.html">Super nice villa </a></h6>
                                    <span class="property-price">3000000$</span>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>                     
        </div>            
    </div>
</div>
 <div id="map" style="height: 400px;"></div>

 @endsection