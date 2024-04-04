@extends('layouts.master2')
@section('content')

<div class="page-head"> 
    <div class="container">
        <div class="row">
            <div class="page-head-content">
                <h1 class="page-title text-center">Inscription clients</h1>               
            </div>
        </div>
    </div>
</div>
<!-- End page header -->


<!-- register-area -->
<div class="register-area" style="background-color: rgb(249, 249, 249);">
    <div class="container">

        <div class="col-md-3"></div>
        

        <div class="col-md-6">
            <div class="box-for overflow" style="border: 1px solid #ccc; padding: 15px;">
                <div class="col-md-12 col-xs-12 register-blocks">
                    <h2>Nouveau compte : </h2> 
                    <form action="" method="post">
                        <div class="row">

                            <div class="form-group col-md-6">
                                <label for="">Nom</label>
                                <input type="text" class="form-control" name="name">
                            </div>
                            <div class="form-group col-md-6">
                                <label for="">Prénom</label>
                                <input type="text" class="form-control" name="prenom">
                            </div>
    
                        </div>
                        

                        <div class="row">

                            <div class="form-group col-md-6">
                                <label for="">Téléphone</label>
                                <input type="number" min="00000000" class="form-control" name="telephone">
                            </div>
                            <div class="form-group col-md-6">
                                <label for="">Email</label>
                                <input type="email" class="form-control" name="email">
                            </div>
    
                        </div>
 
                        
                        <div class="row">
                            <div class="form-group col-md-6">
                                <label for="">Mot de passe</label>
                                <input type="password" class="form-control" name="password">
                            </div>
                            <div class="form-group col-md-6">
                                <label for="">Confirmer mot de passe</label>
                                <input type="password" class="form-control" name="cfpassword">
                            </div>
                        </div>
                        
                        <div class="text-center">
                            <button type="submit" class="btn btn-sm btn-default">Créer mon compte</button>
                        </div>
                        
                        <br>
                        <div id="emailHelp" class="form-text ttext mb-5 text-dark mt-5">
                            Déjà inscrit ?<a href="{{route('user.login')}}" class="text-dark fw-bold"> Connectez-vous</a>
                        </div>

                        
                    </form>
                </div>
            </div>
        </div>
        
        <div class="col-md-3"></div>

        

    </div>
</div>      



@endsection