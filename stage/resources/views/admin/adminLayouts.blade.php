@extends('layouts.app2')

@section('main_page')
   <h5 class="h5 len" ><a class="fw-bolder alien text-center" href="/home"> {{ __('msg.HomePage') }}</a></h5>

@endsection

@section('enter_donnee')
      <h5 class="h5"><a href="#" class="fw-bolder alien collapse nav-link text-center dropdown-toggle d-flex justify-content-center  align-items-center text-right " data-bs-toggle="collapse" data-bs-target="#demo1">{{ __('msg.Entrer_le resultat_du mois') }}  </a></h5>
      <div id="demo1" class="collapse py-1">
         <h5><a class="t5 dropdown-item text-center" href='/admin/data_delis'>{{ __('msg.Delis') }}</a></h5>
         <h5><a class="t5 dropdown-item text-center" href="/admin/data_civil">{{ __('msg.Civil') }}</a></h5>
      </div> 
@endsection


@section('crud_cas')
      <h5 class="h5"><a href="#" class="fw-bolder alien collapse nav-link text-center dropdown-toggle d-flex justify-content-center  align-items-center text-right " data-bs-toggle="collapse" data-bs-target="#demo2">{{ __('msg.cas') }}</a></h5>
      <div id="demo2" class="collapse py-1">
         <h5><a class="t5 dropdown-item text-center" href='/admin/aff_table'>{{ __('msg.voir_cas') }}</a></h5>
      </div> 
@endsection


@section('cas_civil')
      <h5 class="h5"><a href="#" class="fw-bolder alien collapse nav-link text-center dropdown-toggle d-flex justify-content-center  align-items-center text-right " data-bs-toggle="collapse" data-bs-target="#demo3">{{ __('msg.cas_civil') }}</a></h5>
      <div id="demo3" class="collapse py-1">
         <h5><a class="t5 dropdown-item text-center" href='/admin/voir_cas_civil'>{{ __('msg.voir_cas_civil') }}</a></h5>
      </div> 
@endsection


@section('cas_delis')
      <h5 class="h5"><a href="#" class="fw-bolder alien collapse nav-link text-center dropdown-toggle d-flex justify-content-center  align-items-center text-right " data-bs-toggle="collapse" data-bs-target="#demo4">{{ __('msg.cas_delis') }}</a></h5>
      <div id="demo4" class="collapse py-1">
         <h5><a class="t5 dropdown-item text-center" href='/admin/voir_cas_delis'>{{ __('msg.voir_cas_delis') }}</a></h5>
      </div> 
@endsection 


@section('statistique')
      <h5 class="h5"><a href="#" class="fw-bolder alien collapse nav-link text-center dropdown-toggle d-flex justify-content-center  align-items-center text-right " data-bs-toggle="collapse" data-bs-target="#demo5">{{ __('msg.statistique') }}</a></h5>
   <div id="demo5" class="collapse py-1">
      <h5><a class="t5 dropdown-item text-center" href='/admin/staticCasDelisAdmin'>{{ __('msg.statistic_cas_delis') }}</a></h5>
      <h5><a class="t5 dropdown-item text-center" href="/admin/staticCasCivilAdmin">{{ __('msg.statistic_cas_civil') }}</a></h5>
   </div> 
   @endsection
   
   @section('voir_les_utilisateurs')
   <h5 class="h5"><a href="#" class="fw-bolder alien collapse nav-link text-center dropdown-toggle d-flex justify-content-center  align-items-center text-right " data-bs-toggle="collapse" data-bs-target="#demo6">{{ __('msg.users') }}</a></h5>
   <div id="demo6" class="collapse py-1">
      {{-- <h5><a class="t5 dropdown-item text-center" href='/admin/createUser'>{{ __('msg.ajouter_user') }}</a></h5> --}}
      <h5><a class="t5 dropdown-item text-center" href="/admin/voir_user">{{ __('msg.voir_user') }}</a></h5>
   </div> 
@endsection
