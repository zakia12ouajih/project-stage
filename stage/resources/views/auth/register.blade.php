@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Register') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="row mb-3 mt-3 justify-content-center align-items-center">
                            
                            <div class="col-md-8 d-flex">
                                <input id="firstName" type="text" class=" text-end form-control @error('firstName') is-invalid @enderror" name="firstName" value="{{ old('firstName') }}" required autocomplete="firstName" autofocus>
                                
                                @error('firstName')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                                <label for="firstName" class="col-md-4 col-form-label text-md-end">{{ __('msg.firstName') }}</label>
                            </div>
                        </div>
                        <div class="row mb-3 justify-content-center align-items-center">
                            
                            <div class="col-md-8 d-flex">
                                <input id="lastName" type="text" class=" text-end form-control @error('lastName') is-invalid @enderror" name="lastName" value="{{ old('lastName') }}" required autocomplete="lastName" autofocus>
                                
                                @error('lastName')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                                <label for="lastName" class="col-md-4 col-form-label text-md-end">{{ __('msg.lastName') }}</label>
                            </div>
                        </div>
                        <div class="row mb-3  justify-content-center align-items-center">
                            
                            <div class="col-md-8 d-flex">
                                <input id="userName" type="text" class=" text-end form-control @error('userName') is-invalid @enderror" name="userName" value="{{ old('userName') }}" required autocomplete="userName" autofocus>
                                
                                @error('userName')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                                <label for="userName" class="col-md-4 col-form-label text-md-end">{{ __('msg.userName') }}</label>
                            </div>
                        </div>

                        <div class="row mb-3 justify-content-center align-items-center">
                            
                            <div class="col-md-8 d-flex">
                                <input id="email" type="email" class=" text-end form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">
                                
                                @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                                <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('msg.email') }}</label>
                            </div>
                        </div>

                        <div class="row mb-3 justify-content-center align-items-center">
                            
                            <div class="col-md-8 d-flex">
                                <input id="password" type="password" class=" text-end form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">
                                
                                @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                                <label for="password" class="col-md-4 col-form-label text-md-end">{{ __('msg.password') }}</label>
                            </div>
                        </div>

                        <div class="row mb-5 justify-content-center align-items-center">
                            
                            <div class="col-md-8 d-flex">
                                <input id="password-confirm" type="password" class="  text-end form-control" name="password_confirmation" required autocomplete="new-password">
                                <label for="password-confirm" class="col-md-4 col-form-label text-md-end">{{ __('msg.confirm-password') }}</label>
                            </div>
                        </div>

                        <div class="row mb-3 justify-content-center align-items-center">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('msg.register') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
