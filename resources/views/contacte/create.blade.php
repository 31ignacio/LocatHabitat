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
                    <div class="col-sm-6">
                        <h4><i class="fa fa-map-marker"></i> Adresse</h4>
                        <p>Cotonou,
                            <strong>Bénin</strong>
                        </p>
                    </div>
                    <!-- /.col-sm-4 -->
                    <div class="col-sm-6">
                        <h4><i class="fa fa-phone"></i> Appel/Whatsapp</h4>
                        <p class="text-muted" style="font-size: 13px;"  >Vous pouvez nous appeler ou laisser un message whatsapp.</p>
                        <p><strong>+229 40 73 53 35</strong></p>
                    </div>
                    <!-- /.col-sm-4 -->
                    
                    <!-- /.col-sm-4 -->
                </div>
                <!-- /.row --> 
               
                <hr>
                {{-- <h2>Contact form</h2> --}}
                <form method="post" action="{{ route('contacte.store') }}">
                    @csrf
                    <h4>Envoyez un mail en remplissant le formulaire ci-dessous</h4><br>

                    @if(Session::get('success'))
                    <div class="alert alert-success text-center" id="msg_success">
                        {{Session::get('success')}}
                    </div>
                @endif

                <script>
                     // Masquer le message d'erreur après 3 secondes
                    setTimeout(function() {
                        $('#msg_success').hide();
                    }, 5000);
                </script>

                    <div class="row">
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label for="nom">Nom</label>
                                <input type="text" class="form-control" id="nom" name="nom"  value="{{ old('nom') }}">

                                @error('nom')

                                <div class="text text-danger">{{ $message }}</div>    
                                @enderror
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label for="prenom">Prénom</label>
                                <input type="text" class="form-control" id="prenom" name="prenom" value="{{ old('prenom') }}">

                                @error('prenom')

                                <div class="text text-danger">{{ $message }}</div>    
                                @enderror
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label for="email">Email</label>
                                <input type="email" class="form-control" id="email" name="email" value="{{ old('email') }}">

                                @error('email')

                                <div class="text text-danger">{{ $message }}</div>    
                                @enderror
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label for="subject">Sujet</label>
                                <input type="text" class="form-control" id="subject" name="sujet" value="{{ old('sujet') }}">

                                @error('sujet')

                                <div class="text text-danger">{{ $message }}</div>    
                                @enderror
                            </div>
                        </div>
                        <div class="col-sm-12">
                            <div class="form-group">
                                <label for="message">Message</label>
                                <textarea id="message" name="message" class="form-control" cols="30" rows="10" value="{{ old('message') }}" ></textarea>
                                
                                @error('message')

                                <div class="text text-danger">{{ $message }}</div>    
                                @enderror
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