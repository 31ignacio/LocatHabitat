@extends('layouts.master')

@section('content')


    
<div class="page-head"> 
    <div class="container">
        <div class="row">
            <div class="page-head-content">
                <h1 class="page-title"> <span class="orange strong">Mon profil</span></h1>               
            </div>
        </div>
    </div>
</div>
<!-- End page header --> 

<!-- property area -->
<div class="content-area user-profiel" style="background-color: #FCFCFC;">&nbsp;
    <div class="container">   
        <div class="row">
            {{-- <div class="col-md-1"></div> --}}
            <div class="col-md-7 profiel-container">

                

                <form action="{{ route('profil.update', ['entreprise' => $entreprise->id]) }}" method="post">
                    @csrf

                    <div class="profiel-header">
                        <h3>
                            <b>PROFIL</b> YOUR PROFILE <br>
                            <small>Vous pouvez modifier votre profil</small>
                        </h3>
                        <hr>
                    </div>

                    @if(Session::get('success'))
                        <div class="alert alert-success">
                            {{Session::get('success')}}
                        </div>
                    @endif


                    <div class="clear">
                        <input name="id" type="hidden" value="{{ $entreprise->id }}">

                        <div class="col-sm-6 padding-top-25">

                            <div class="form-group">
                                <label>Entreprise</label>
                                <input name="entreprise" type="text" class="form-control" value="{{ $entreprise->entreprise }}">
                            </div>
                            <div class="form-group">
                                <label>Nom du représentant</label>
                                <input name="representant" type="text"  class="form-control" value="{{ $entreprise->representant }}">
                            </div>
                            
                        </div>
                        <div class="col-sm-6 padding-top-25">

                            <div class="form-group">
                                <label>Ville</label>
                                <input type="text"  name="ville" class="form-control" value="{{ $entreprise->ville }}">
                            </div>

                            <div class="form-group">
                                <label>Quatier</label>
                                <input name="quatier" type="text" class="form-control" value="{{ $entreprise->quatier }}">
                            </div>

                        </div>

                        <div class="col-sm-6 padding-top-25">
                          
                            <div class="form-group">
                                <label>Téléphone</label>
                                <input name="telephone" min="00000000" type="number" class="form-control" value="{{ $entreprise->telephone }}">
                            </div>

                            <div class="form-group">
                                <label>Email</label>
                                <input name="email" type="email" class="form-control" value="{{ $entreprise->user->email }}">
                            </div> 
                            
                        </div>
                        
                        <div class="col-sm-6 padding-top-25">
                          
                            <div class="form-group">
                                <label>Description</label>
                                <textarea name="description" id="" cols="30" rows="7" class="form-control"> {{ $entreprise->description }}</textarea>
                            </div>
                        </div>

                    </div>

                   
                    <div class="col-sm-5 col-sm-offset-1">
                        <br>
                        {{-- <input type='button' class='btn btn-finish btn-primary' name='finish' value='Finish' /> --}}
                        <button type="submit" class='btn btn-finish btn-primary' > Modifier</button>
                    </div>
                    <br>
                </form>

            </div>
            <div class="col-md-1"></div>
            <div class="col-md-4 profiel-container">

                <form action="" method="">
                    <div class="profiel-header">
                        <h3>
                            
                            <small><b>Changer mon mot de passe</b></small>
                        </h3>
                        <hr>
                    </div>

                    <div class="clear">
                       
                        <div class="col-sm-12 padding-top-25">

                            <div class="form-group">
                                <label>Ancien mot de passe</label>
                                <input name="firstname" type="text" class="form-control" placeholder="Andrew...">
                            </div>
                            <div class="form-group">
                                <label>Nouveau mot de passe</label>
                                <input name="lastname" type="text" class="form-control" placeholder="Smith...">
                            </div> 
                            <div class="form-group">
                                <label>Confimer nouveau mot de passe</label>
                                <input name="email" type="email" class="form-control" placeholder="andrew@email@email.com.com">
                            </div> 
                        </div>
                        

                    </div>

                   
                    <div class="col-sm-5 col-sm-offset-1">
                        <br>
                        <input type='button' class='btn btn-finish btn-primary' name='finish' value='Finish' />
                    </div>
                    <br>
                </form>

            </div>


            
            {{-- <div class="col-md-1"></div> --}}
        </div><!-- end row -->

    </div>
</div>






@endsection