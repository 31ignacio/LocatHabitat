@extends('layouts.master2')

@section('content')

        <!-- register-area -->
        <div class="register-area" style="background-color: rgb(249, 249, 249);">
            <div class="container">

              <div class="col-md-4"></div>
                <div class="col-md-4">
                    <div class="box-for overflow">                         
                        <div class="col-md-12 col-xs-12 login-blocks">
                            <h2>Connexion</h2> 
                            <br>
                            @if(Session::get('error'))
                                <div class="alert alert-danger" id="msg_error">
                                    {{Session::get('error')}}
                                </div>
                            @endif

                            <script>
                                // Masquer le message d'erreur après 3 secondes
                                setTimeout(function() {
                                    $('#msg_error').hide();
                                }, 5000);
                            </script>
                            @if(Session::get('success'))
                                <div class="alert alert-success" id="msg_success">
                                    {{Session::get('success')}}
                                </div>
                            @endif
                            <script>
                                    // Masquer le message d'erreur après 3 secondes
                                setTimeout(function() {
                                    $('#msg_success').hide();
                                }, 8000);
                            </script>
                            <br>

                            <form action="{{ route('handleUserLogin') }}" method="post">
                                @method('post')
                                @csrf
    

                                <div class="form-group">
                                    <label for="email">Email</label>
                                    <input type="text" class="form-control" value="{{old('email')}}" name="email">

                                    @error('email')
                                        <div class="text-danger">{{$message}}</div>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label for="password">Password</label>
                                    <input type="password" class="form-control" value="{{old('password')}}" name="password" id="password">

                                    @error('password')
                                        <div class="text-danger">{{$message}}</div>
                                    @enderror
                                </div>
                                <div class="text-center">
                                    <button type="submit" class="btn btn-sm btn-default"> Me connecter</button>
                                </div>
                                    <br>
                                <div id="emailHelp" class="form-text text-center mb-5 text-dark">
                                    Nouveau membre ?<a href="#" id="registerModalButton" class="text-dark fw-bold">Créer mon compte</a>
                                    
                                        <!-- Modal -->
                                        <div id="registerModal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="registerModalLabel">
                                            <div class="modal-dialog" role="document">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h4 class="modal-title text-center" id="registerModalLabel">Inscription</h4>
                                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                            <span aria-hidden="true">&times;</span>
                                                        </button>
                                                    </div>
                                                    <div class="modal-body">
                                                        <p>L'inscription est réservée aux entreprises désireuses de publier des biens immobiliers tels que des voitures, des appartements, des bureaux. Si vous êtes un client utilisateur, vous pouvez parcourir notre page d'accueil pour choisir un bien immobilier et entrer en contact directement avec le propriétaire.</p>
                                                    </div>
                                                    <div class="modal-footer">
                                                        <a href="{{ route('user.registerEntreprise') }}" class="btn btn-primary">Continuer</a>
                                                        <a href="#" type="button" class="btn btn-secondary " data-dismiss="modal">Retour</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                </div>
                            </form>
                            <br>
                            
                            <a href=""> Mot de passe oubli ?</a>
                            
                            
                        </div>
                        
                    </div>
                </div>
                <div class="col-md-4"></div>

            </div>
        </div>     
        
        <script>
            document.getElementById('registerModalButton').addEventListener('click', function() {
                $('#registerModal').modal('show');
            });
        </script>


@endsection