@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Login') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="row mb-3 justify-content-center align-items-center">
                            
                            <div class="col-md-8 d-flex">
                                <input id="userName" type="text" class="form-control @error('userName') is-invalid @enderror" name="userName" value="{{ old('userName') }}" required autocomplete="userName" autofocus>
                                
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
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
                                
                                @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                                <label for="password" class="col-md-4 col-form-label text-md-end">{{ __('msg.password') }}</label>
                            </div>
                        </div>

                        <div class="row mb-5 justify-items-center align-items-center">
                            <div class="col-md-8 offset-md-3 d-flex ">
                                <div class="form-check  ">
                                    
                                    <label class="form-check-label" for="remember">
                                        {{ __('msg.rememberMe') }}
                                    </label>
                                </div>
                                <input class="form-check-input mx-1" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                            </div>
                        </div>

                        <div class="row mb-0 ">
                            <div class="col-md-8 offset-md-4 ustify-content-center align-items-center">
                                <button type="submit" class="btn btn-primary j">
                                    {{ __('msg.login') }}
                                </button><br>
                            </div>
                            <div class="col-md-8 offset-md-4 ustify-content-center align-items-center">
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
