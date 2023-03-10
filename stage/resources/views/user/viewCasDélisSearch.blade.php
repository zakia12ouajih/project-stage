@extends('user.userLayouts')

@section('content')
   <div class="row justify-content-center">
        <div class="col-md-8">
            <form action="/user/casDelisT/search" method="POST">
                @csrf
                <div class="row mb-3 d-flex bg-white justify-content-center align-items-center">
                    <div class="col-8 pt-3 pb-3">
                       <h5 class="text-end mt-2 py-2">{{ __('msg.date') }}</h5>
                       <input  class="form-control mb-5" type="date" name="search" id="search">
                       <div class="d-flex  justify-content-center align-items-center">
                          <input class="btn bg-primary text-white" type="submit" value="envoyer" id="envoyer">
                       </div>
                    </div>
                 </div>
            </form>
        </div>
    </div>
@endsection
                        

@section('navbar2')
    <a  href="" class="fs navbar-brand text-light fw-bolder ">
        {{ __('msg.cas_delis') }} 
    </a>
@endsection