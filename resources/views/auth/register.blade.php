@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Register') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}" aria-label="{{ __('Register') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Voornaam') }}</label>

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
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-mail adres') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required>

                                @if ($errors->has('email'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>@foreach($errors->get('email') as $error) <li>{{$error}}</li> @endforeach</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="telefoonnummer" class="col-md-4 col-form-label text-md-right">{{ __('Telefoonnummer') }}</label>
                            <div class="col-md-6">
                                <input type="tel" class="form-control{{ $errors->has('telefoonnummer') ? ' is-invalid' : '' }}" value="{{ old('telefoonnummer') }}" name="telefoonnummer">
                                @if ($errors->has('telefoonnummer'))


                                    <span class="invalid-feedback" role="alert">
                                        <strong>@foreach($errors->get('telefoonnummer') as $error) <li>{{$error}}</li> @endforeach</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Wachtwoord') }}</label>

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
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Wachtwoord bevestigen') }}</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Registeer') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="container">
                    <div class="form-group row ">
                        <div class="col-md-6 offset-md-4">

                            <a style="text-decoration: none; " href="{{route('login')}}">
                                <button type="button" class="btn btn-primary btn-block" id="buttonLogin">
                                    Ik heb al een account
                                </button>
                            </a>


                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
