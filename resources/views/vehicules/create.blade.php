@extends('layouts.master')

@section('content')


    
<div class="page-head"> 
    <div class="container">
        <div class="row">
            <div class="page-head-content">
                <h1 class="page-title"> <span class="orange strong">Mon véhicule</span></h1>               
            </div>
        </div>
    </div>
</div>
<!-- End page header --> 

<!-- property area -->
<div class="content-area user-profiel" style="background-color: #FCFCFC;">&nbsp;
    <div class="container">   
        <div class="row">
            <div class="col-md-5">
                <img src="assets/img/slide1/voiture2.jpg" alt="Description de l'image" class="image-adjust">

            </div>
            <div class="col-md-7 profiel-container">

                

                <form action="{{ route('vehicule.store') }}" method="post" enctype="multipart/form-data">
                    @csrf

                    <div class="profiel-header">
                        <h3>
                            <b>Enregistrer</b> mon véhicule <br>
                            <small>Veuillez enregistrer votre vehicule en remplissant le formulaire ci-dessous</small>
                        </h3>
                        <hr>
                    </div>

                    @if(Session::get('success'))
                        <div class="alert alert-success">
                            {{Session::get('success')}}
                        </div>
                    @endif


                    <div class="clear">

                        <div class="col-sm-6 padding-top-25">

                            <div class="form-group">
                                <label>Marque du véhicule</label>
                                <input name="marque"  type="text" class="form-control">

                                @error('marque')

                                <div class="text-danger">{{$message}}</div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label>Climatiseur</label>

                                <select name="climatiseur" id="" class="form-control">
                                    <option value="Oui">Oui</option>
                                    <option value="Non">Non</option>

                                </select>
                            </div>
                            
                        </div>
                        <div class="col-sm-6 padding-top-25">

                            <div class="form-group">
                                <label>Prix</label>
                                <input type="text"  name="prix" class="form-control">

                                @error('prix')

                                    <div class="text text-danger">{{ $message }}</div>    
                                @enderror
                            </div>

                            <div class="form-group">
                                <label>Chauffeur</label>
                                <select name="chauffeur" id="" class="form-control">
                                    <option value="Au choix">Au choix</option>
                                    <option value="Oui">Oui</option>
                                    <option value="Non">Non</option>

                                </select>                            
                            </div>

                        </div>

                        <div class="col-sm-6 padding-top-25">
                          
                            <div class="form-group">
                                <label>Carburation</label>
                                <select name="caburation" id="" class="form-control">
                                    <option value="A la charge du client">A la charge du client</option>
                                    <option value="A notre charge">A notre charge</option>

                                </select>                           
                             </div>

                            
                        </div>
                        
                        <div class="col-sm-6 padding-top-25">
                          
                            <div class="form-group">
                                <label>Image(<span style="font-size: 10px;">vous puvez ajouter plusieurs images à la fois</span>)</label>
                                <input name="images[]" type="file" class="form-control" multiple>
                            </div>
                        </div>

                    </div>

                   
                    <div class="col-sm-5 col-sm-offset-1">
                        <br>
                        {{-- <input type='button' class='btn btn-finish btn-primary' name='finish' value='Finish' /> --}}
                        <button type="submit" class='btn btn-finish btn-primary'> Valider</button>
                    </div>
                    <br>
                </form>

            </div>
            
        </div><!-- end row -->

    </div>
</div>

<style>
    .image-adjust {
    margin-top: 100px; /* Ajustez cette valeur selon vos besoins */
}

</style>

@endsection