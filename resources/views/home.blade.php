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

                        <h2>Vous êtes connecté !</h2>
                        
                        
                        
                    </div>
                </div>
                <div style="padding: 20px"><a href="http://vps627012.ovh.net/~piscine/piscine/public/">Retouner a la page d'acceuil.</a></div>
            </div>
        </div>
    </div>
</div>
@endsection
