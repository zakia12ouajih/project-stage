@extends('user.userLayouts')

@section('content')
   <div class="row justify-content-center">
        <div class="col-md-8">
            <form action="/user/casCivilT/search" method="POST">
                @csrf
                <div class="row mb-3 d-flex justify-content-center align-items-center">
                    <div class="col-md-6 d-flex">
                        <input class="btn bg-primary text-white" type="submit" value="envoyer" id="envoyer">
                        <input  class="form-controller  bg-warning" type="date" name="dateS" id="dateS">
                        <h4 class="display-8 text-end mb-3"> :{{ __('msg.enter_date') }}</h4>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection
                        

@section('navbar2')
    <a  href="" class="fs navbar-brand text-light fw-bolder ">
        {{ __('msg.cas_civil') }} 
    </a>
    <a class="px-1">hi</a>

@endsection