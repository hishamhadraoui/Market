@extends('layouts.app')

@section('content') 
<div class="col-lg-9 content-right">

<ol class="breadcrumb">
        <li><a href="index.html">Acceuil</a></li>
        <li><a href="signUp.html">Inscription</a></li>
    </ol>
    <h2>Créez votre compte</h2>
    <p>Déjà inscrit ? <a href="{{ route('login') }}"> Connectez-vous </a><br>Les zones de texte indiquees par * sont obligatoires.</p>
    <hr>
    @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif
    <div class="row">
        <div class="col-lg-12">
            <div class="well">
                <form method="POST" action="{{ route('register') }}" role="form">
                    @csrf
                    <div class="form-group{{ ($errors->has('firstName') || $errors->has('lastName')) ? ' has-error' : '' }}">
                        <div class="row">
                            <div class="col-xs-6 col-md-6">
                                <input class="form-control" value="{{ old('lastName') }}" name="lastName" placeholder="Nom " type="text" autofocus />
                            </div>
                            <div class="col-xs-6 col-md-6">
                                <input class="form-control" value="{{ old('firstName') }}" name="firstName" placeholder="Prenom " type="text" />
                            </div>
                        </div>
                    </div>
                    <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                        <input class="form-control" value="{{ old('email') }}" name="email" placeholder="Adresse e-mail *" type="email" required />
                    </div>
                    <div class="form-group{{ $errors->has('username') ? ' has-error' : '' }}">
                        <input class="form-control" value="{{ old('username') }}" name="username" placeholder="Nom d'utilisateur *" type="text" required/>
                    </div>
                    <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                        <input class="form-control" name="password" placeholder="Mot de passe *" type="password" required/>
                    </div>
                    <div class="form-group">
                        <input class="form-control"  name="password_confirmation" placeholder="Confirmez le mot de passe *" type="password" required />
                    </div>
                    <button class="btn btn-lg btn-primary btn-block" type="submit">Je m'inscris!</button>
                </form>
            </div>
        </div>
    </div>
</div>
{{-- <div class="container"> 
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Register') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}" aria-label="{{ __('Register') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Name') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" value="{{ old('name') }}" required autofocus>

                                @if ($errors->has('name'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required>

                                @if ($errors->has('email'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>

                                @if ($errors->has('password'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirm Password') }}</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Register') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div> --}}
@endsection
