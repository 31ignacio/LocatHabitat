@extends('layouts.master2')
@section('content')

<div class="page-head"> 
    <div class="container">
        <div class="row">
            <div class="page-head-content">
                <h1 class="page-title">Inscription Entreprises</h1>               
            </div>
        </div>
    </div>
</div>
<!-- End page header -->


<!-- register-area -->
<a href="javascript:history.go(-1)" class="back-arrow"><i class="fa fa-arrow-left arrow-icon"></i></a>

<div class="register-area" style="background-color: rgb(249, 249, 249);"> 

    <div class="container">
        <div class="col-md-1"></div>

        <div class="col-md-5">
            <img src="{{ asset('inscription.jpg') }}" alt="image inscription" height="500" width="450">

            <p class="text-justify">Boostez votre visibilité ! Inscrivez-vous pour publier vos biens (véhicules, bureaux, appartements) et attirez de nouveaux clients. Rejoignez-nous dès maintenant !</p>
        </div>
        

        <div class="col-md-6">

            <div class="box-for overflow" style="border: 1px solid #ccc; padding: 15px;">
                <div class="col-md-12 col-xs-12 register-blocks">
                    <h2 style="font-size: 70%;"> Inscrivez votre entreprise dès aujourd'hui </h2> <br> 
                    @if(Session::get('success'))
                    <div class="alert alert-success">
                        {{Session::get('success')}}
                    </div>
                @endif
                    <br>

                    <form action="{{ route('handleEntrepriseRegister') }}" method="post">
                        @csrf
                        @method('post')
                        <div class="row">

                            <div class="form-group col-md-6">
                                <label for="">Entreprise</label>
                                <input type="text" class="form-control" value="{{old('entreprise')}}" name="entreprise">

                                @error('entreprise')
                                    <div class="text-danger">{{$message}}</div>
                                @enderror
                            </div>
                            <div class="form-group col-md-6">
                                <label for="">Nom du représentant</label>
                                <input type="text" class="form-control" value="{{old('representant')}}" name="representant">

                                @error('representant')
                                    <div class="text-danger">{{$message}}</div>
                                @enderror
                            </div>
    
                        </div>
                        
                        <div class="row">

                            <div class="form-group col-md-6">
                                <label for="">Ville</label>
                                <input type="text" class="form-control" value="{{old('ville')}}" name="ville">

                                @error('ville')
                                    <div class="text-danger">{{$message}}</div>
                                @enderror
                            </div>
                            <div class="form-group col-md-6">
                                <label for="">Quatier</label>
                                <input type="text" class="form-control" value="{{old('quatier')}}" name="quatier">

                                @error('quatier')
                                    <div class="text-danger">{{$message}}</div>
                                @enderror
                            </div>
    
                        </div>

                        <div class="row">

                            <div class="form-group col-md-6">
                                <label for="">Téléphone</label>
                                <input type="number" min="00000000" class="form-control" value="{{old('telephone')}}" name="telephone">

                                @error('telephone')
                                    <div class="text-danger">{{$message}}</div>
                                @enderror
                            </div>
                            <div class="form-group col-md-6">
                                <label for="">Email</label>
                                <input type="email" class="form-control" value="{{old('email')}}" name="email">

                                @error('email')
                                    <div class="text-danger">{{$message}}</div>
                                @enderror
                            </div>
    
                        </div>
 
                        <div class="row">
                            <div class="form-group col-md-12">

                                <label for="">Bref description</label>
                                <textarea name="description" cols="30" rows="3" class="form-control" value="{{old('description')}}"></textarea>
                            </div>
                        </div>
                        <div class="text-center">
                            <button type="submit" class="btn btn-sm btn-default">Créer mon compte</button>
                        </div>
                        <br>
                        <div id="emailHelp" class="form-text mb-5 text-dark">
                            Déjà inscrit ?<a href="{{route('user.login')}}" class="text-dark fw-bold"> Connectez-vous</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        

        

    </div>
</div>      




<style>

    .arrow-icon {
        font-size: 30px; /* Taille de l'icône */
        width: 50px; /* Largeur de l'icône */
        height: 50px; /* Hauteur de l'icône */
        margin-left: 70px;
        margin-top: 20px;
    }
    
</style>
    
<script>
    document.getElementById('registerModalButton').addEventListener('click', function() {
        $('#registerModal').modal('show');
    });
</script>
    

@endsection