@extends('admin.adminLayouts')

@section('content')
   <div class="row justify-content-center">
      <div class="col-md-5 mt-2 bg-white border border-1 rounded">
         <form action="/admin/voir_cas_delis/search" method="POST">
            @csrf
            <div class="row  d-flex  justify-content-center align-items-center">
               <div class=" col-7 pt-3 ">
                  <h5 class="text-end  py-2">{{ __('msg.datefrom') }}</h5>
                  <input  class="form-control text-end" type="date" name="datefrom" id="datefrom">
               </div>
            </div>
            <div class="row  d-flex  justify-content-center align-items-center">
               <div class=" col-7 pt-3 ">
                  <h5 class="text-end  py-2">{{ __('msg.dateto') }}</h5>
                  <input  class="form-control mb-3 text-end" type="date" name="dateto" id="dateto">
               </div>
            </div>
            <div class="row d-flex bg-white justify-content-center align-items-center">
               <div class="col-7  pb-5">
                  <h5  class="text-end  mt-2">{{ __('msg.cas1') }}</h5>
                  <select class="form-select text-end " name="type" id="type">
                     <option value="" selected >{{ __('msg.choose') }}</option>
                     @foreach ($data2 as $d)
                     <option value="{{ $d->id }}">{{ $d->nom_type }}</option>
                     @endforeach
                  </select>
               </div>
            </div>
            <div class="d-flex mb-4  justify-content-center align-items-center">
               <input class="btn bg-success text-white" type="submit" value="{{ __('msg.envoyer') }}" id="envoyer">
            </div>
         </form>
      </div>
   </div>
@endsection

@section('navbar2')
   <a  href="" class="fs navbar-brand text-white fw-bolder">
         {{ __('msg.cas_delis') }} / {{ __('msg.enter_date') }} 
   </a>
   
@endsection