@extends('admin.adminLayouts')

@section('content')
   <div class="row justify-content-center">
      <div class="col-7 mt-2 border border-1 rounded">
         <form action="/admin/staticCasCivilAdmin/search" method="POST">
            @csrf
            <div class="row mb-3 d-flex bg-white justify-content-center align-items-center ">
               <div class=" col-8    pt-3 pb-3">
                  <h5 class="text-end mt-2 py-2">{{ __('msg.datefrom') }}</h5>
                  <input  class="form-control" type="date" name="datefrom" id="datefrom">
                  <h5 class="text-end mt-2 py-2">{{ __('msg.dateto') }}</h5>
                  <input  class="form-control mb-5" type="date" name="dateto" id="dateto">
                  <div class="d-flex  justify-content-center align-items-center">
                     <input class="btn bg-primary text-white " type="submit" value="{{ __('msg.envoyer') }}" id="envoyer">
                  </div>
               </div>
            </div>
         </form>
      </div>
   </div>
@endsection

@section('navbar2')
   <a  href="" class="fs navbar-brand text-white fw-bolder">
         {{ __('msg.statistique') }} / {{ __('msg.statistic_cas_civil') }} / {{ __('msg.enter_date') }}
   </a>
   
@endsection