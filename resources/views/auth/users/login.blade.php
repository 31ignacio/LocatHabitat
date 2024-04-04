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
                                <div class="alert alert-danger">
                                    {{Session::get('error')}}
                                </div>
                            @endif
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
                                    Nouveau membre ?<a href="{{route('user.registerEntreprise')}}" class="text-dark fw-bold"> Créer mon compte</a>
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


@endsection