@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header text-end">{{ __('msg.resetPwd') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <form method="POST" action="{{ route('password.email') }}">
                        @csrf

                        <div class="row mb-5 justify-content-center align-items-center">
                            
                            <div class="col-8  ">
                                <input id="email" type="email" class="text-end form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                                
                                @error('email')
                                <span class="invalid-feedback text-end" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                            <label for="email" class="col-4 col-form-label text-end">{{ __('msg.email') }}</label>
                        </div>

                        <div class="row mb-0 ">
                            <div class="col-md-6 offset-md-4 ">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('msg.resetLink') }}
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
