@extends('admin.adminLayouts')

@section('content')
   <div class="row justify-content-center">
      <div class="col-md-8">
         <h4 class="display-4 text-end mb-3">{{ __('msg.enter_date') }}</h4>
         <form action="/admin/staticCasCivilAdmin/search" method="POST">
            @csrf
            <div class="row mb-3 d-flex justify-content-center align-items-center">
               <div class="col-md-6 d-flex">
                  <input class="btn bg-primary text-white" type="submit" value="envoyer" id="envoyer">
                  <input  class="form-controller bg-warning" type="date" name="dateto" id="dateto">
                  <input  class="form-controller" type="date" name="datefrom" id="datefrom">
               </div>
            </div>
         </form>
      </div>
   </div>
@endsection