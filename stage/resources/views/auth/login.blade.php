@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-4">
            <div class="card">
                <div class="card-header">{{ __('Login') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="row mb-3 d-flex justify-content-center align-items-center ">
                            
                            <div class="col-7 ">
                                <input id="userName" type="text" class="form-control @error('userName') is-invalid @enderror" name="userName" value="{{ old('userName') }}" required autocomplete="userName" autofocus>
                                
                                @error('userName')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                            <label for="userName" class="col-3 col-form-label text-end">{{ __('msg.userName') }}</label>
                        </div>

                        <div class="row mb-3  d-flex justify-content-center align-items-center">
                            
                            <div class="col-7">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
                                
                                @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                            <label for="password" class="col-3 col-form-label text-end">{{ __('msg.password') }}</label>
                        </div>

                        <div class="row mb-5   ">
                            <div class="col-6 d-flex  offset-3">
                                <div class="form-check">
                                    
                                    <input class="form-check-input " type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                                    <label class="form-check-label " for="remember">
                                        {{ __('msg.rememberMe') }}
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="row mb-2 justify-content-center align-items-center">
                            <div class="col-6 mb-2 offset-2 ">
                                <button type="submit" class="btn btn-primary ">
                                    {{ __('msg.login') }}
                                </button><br>
                            </div>
                            <div class="col-md-8 offset-md-3">
                                @if (Route::has('password.request'))
                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                        {{ __('msg.forgotPwd') }}
                                    </a>
                                @endif
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
