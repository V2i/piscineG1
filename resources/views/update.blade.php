@extends('layouts.app2')

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

                        <h2>Vous pouvez modifier vos informations personelles.</h2>
                        <p><form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="nom" class="col-md-4 col-form-label text-md-right">{{ __('Nom') }}</label>

                            <div class="col-md-6">
                                <input id="nom" type="text" class="form-control{{ $errors->has('NomClient') ? ' is-invalid' : '' }}" name="NomClient" value="{{ Auth::user()->NomClient }}" required autofocus>

                                @if ($errors->has('NomClient'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('NomClient') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="prenom" class="col-md-4 col-form-label text-md-right">{{ __('Prenom') }}</label>

                            <div class="col-md-6">
                                <input id="prenom" type="text" class="form-control{{ $errors->has('PrenomClient') ? ' is-invalid' : '' }}" name="PrenomClient" value="{{ Auth::user()->PrenomClient }}" required >

                                @if ($errors->has('PrenomClient'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('PrenomClient') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('Adresse Mél') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ Auth::user()->email }}" required>

                                @if ($errors->has('email'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="telephone" class="col-md-4 col-form-label text-md-right">{{ __('Téléphone') }}</label>

                            <div class="col-md-6">
                                <input id="telephone" type="text" class="form-control{{ $errors->has('TelClient') ? ' is-invalid' : '' }}" name="TelClient" value="{{ Auth::user()->TelClient }}" required>

                                @if ($errors->has('TelClient'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('TelClient') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="rue" class="col-md-4 col-form-label text-md-right">{{ __('Adresse Rue') }}</label>

                            <div class="col-md-6">
                                <input id="rue" type="text" class="form-control{{ $errors->has('RueClient') ? ' is-invalid' : '' }}" name="RueClient" value="{{ Auth::user()->VilleClient }}" required>

                                @if ($errors->has('RueClient'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('RueClient') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="detail" class="col-md-4 col-form-label text-md-right">{{ __('Détail Rue') }}</label>

                            <div class="col-md-6">
                                <input id="detail" type="text" class="form-control{{ $errors->has('DetailRueClient') ? ' is-invalid' : '' }}" name="DetailRueClient" value="{{ Auth::user()->DetailRueClient }}">

                                @if ($errors->has('DetailRueClient'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('DetailRueClient') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="ville" class="col-md-4 col-form-label text-md-right">{{ __('Ville') }}</label>

                            <div class="col-md-6">
                                <input id="ville" type="text" class="form-control{{ $errors->has('VilleClient') ? ' is-invalid' : '' }}" name="VilleClient" value="{{ Auth::user()->VilleClient }}" required>

                                @if ($errors->has('VilleClient'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('VilleClient') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="cp" class="col-md-4 col-form-label text-md-right">{{ __('Code Postale') }}</label>

                            <div class="col-md-6">
                                <input id="cp" type="text" class="form-control{{ $errors->has('CPClient') ? ' is-invalid' : '' }}" name="CPClient" value="{{ Auth::user()->CPClient }}" required>

                                @if ($errors->has('CPClient'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('CPClient') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Nouveau Mot de Passe') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" value="{{ Auth::user()->password}}" required>

                                @if ($errors->has('password'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirmer le Nouveau Mot de Passe') }}</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" value="{{ Auth::user()->password}}" required>
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Enregistrer les modifications') }}
                                </button>
                                <button href="{{ route('home')}}" class="btn btn-secondary">
                                    {{ __('Annuler') }}
                                </button>
                            </div>
                        </div>
                    </form></p>
                    </div>
                </div>
                
            </div>
        </div>
    </div>
</div>
@endsection
