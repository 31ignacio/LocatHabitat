@extends('layouts.master2')

@section('content')

<!-- register-area -->


<div class="register-area" style="background-color: rgb(249, 249, 249);">
                        <!-- Flèche de retour -->
    <a href="javascript:history.go(-1)" class="back-arrow"><i class="fa fa-arrow-left arrow-icon"></i></a>

    <div class="container">

        <div class="col-md-3"></div>
        <div class="col-md-6">
            <div class="box-for overflow">
                <div class="col-md-12 col-xs-12 login-blocks">
                    <h2>Définnissez vos accès</h2>
                    <br>
                    <!-- Messages d'erreur/succès -->
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
                        // Masquer le message de succès après 3 secondes
                        setTimeout(function() {
                            $('#msg_success').hide();
                        }, 8000);
                    </script>
                    @error('code')
                    <div class="text-danger">{{$message}}</div>
                    @enderror
                    <br>


                    <!-- Formulaire de connexion -->
                    <form action="{{ route('submitDefineAccessMail', $email) }}" method="post">
                        @method('post')
                        @csrf

                        <div class="form-group">
                            <label for="email">Email</label>
                            <input type="text" class="form-control" value="{{$email}}" name="email" readonly>

                            @error('email')
                            <div class="text-danger">{{$message}}</div>
                            @enderror
                        </div>

                        <div class="form-group" hidden>
                            <label for="code">Code</label>
                            <input type="text" class="form-control" value="{{$code}}" name="code" readonly>

                            
                        </div>
                        <div class="form-group">
                            <label for="password">Nouveau mot de passe</label>
                            <input type="password" class="form-control" value="{{old('password')}}" name="password" id="password">

                            @error('password')
                            <div class="text-danger">{{$message}}</div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="confirme_password">Mot de passe de confirmation</label>
                            <input type="password" class="form-control" value="{{old('confirme_password')}}" name="confirme_password" id="confirme_password">

                            @error('confirme_password')
                            <div class="text-danger">{{$message}}</div>
                            @enderror
                        </div>
                        <div class="text-center">
                            <button type="submit" class="btn btn-sm btn-default"> Valider</button>
                        </div>
                        
                    </form>

                </div>
            </div>
        </div>
        <div class="col-md-3"></div>
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
