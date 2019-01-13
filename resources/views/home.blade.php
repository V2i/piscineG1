@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Espace Client</div>

                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif

                        <h3>Bienvenue {{ Auth::user()->PrenomClient }} {{ Auth::user()->NomClient }}, votre solde est de 
                            @if(Auth::user()->SoldeClient === NULL)
                                0
                            @else
                                {{Auth::user()->SoldeClient }}
                            @endif
                        point.</h3>
                        <p>Nom : {{ Auth::user()->NomClient }}<br>
                        Prénom : {{ Auth::user()->PrenomClient }}<br>
                        Adresse Mél. : {{ Auth::user()->email }}<br>
                        Tél. : {{ Auth::user()->TelClient }}<br>
                        Adresse : {{ Auth::user()->VilleClient }}, {{ Auth::user()->CPClient }}<br>
                        {{ Auth::user()->RueClient }}, {{ Auth::user()->DetailRueClient }}<br></p>
                        <a href="{{ route('update') }}">Modifier mes informations personnelles.</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection