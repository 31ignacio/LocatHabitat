@extends('layouts.master')

@section('content')
<br>
<div class="container">
    <h2 class="text-center">Liste des Entreprises</h2>
    <p class="text-center">
        <span class="total-enterprises">Nombre total d'entreprises :</span>
        <span class="badge badge-pill badge-primary">{{ $entreprises->total() }}</span>
    </p>
    <div class="table-responsive">
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


        <table class="table table-striped table-bordered">
            <thead>
                <tr>
                    <th>Entreprise</th>
                    <th>Ville / Quartier</th>
                    <th>Téléphone</th>
                    <th>Représentant</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($entreprises as $entreprise )
                    <tr>
                        <td>{{ $entreprise->entreprise }}</td>
                        <td>{{ $entreprise->ville }}, {{ $entreprise->quatier }}</td>
                        <td>{{ $entreprise->telephone }}</td>
                        <td>{{ $entreprise->representant }}</td>
                        <td>
                            <a href="{{ route('entreprise.show', $entreprise->id) }}" class="btn btn-sm btn-info"><i class="fa fa-info-circle"></i></a>
                            @if ($entreprise->user->estActive)
                                <form action="{{ route('entreprise.desactiver', $entreprise->id) }}" method="post" style="display: inline;">
                                    @csrf
                                    @method('PUT')
                                    <button type="submit" class="btn btn-sm btn-danger"><i class="fa fa-toggle-off"></i></button>

                                </form>
                            @else
                                <form action="{{ route('entreprise.activer', $entreprise->id) }}" method="post" style="display: inline;">
                                    @csrf
                                    @method('PUT')

                                    <button type="submit" class="btn btn-sm btn-success"><i class="fa fa-toggle-on"></i></button>
                                </form>
                            @endif
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        <div class="col-md-12">
            <div class="pull-right">
                <div class="pagination">
                    {{-- LA PAGINATION --}}
                    <div style="display: flex; justify-content: center;" class="mb-3 mt-3">
                        {{$entreprises->links()}}
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<br>

@endsection
