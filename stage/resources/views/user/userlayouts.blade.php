@extends('layouts.app2')

@section('main_page')
   <h5 class="h5 len" ><a class="alien text-center" href="/home"> {{ __('msg.HomePage') }}</a></h5>

@endsection

@section('enter_donnee')
   
<h5 class="h5"><a href="#" class="alien collapse nav-link text-center dropdown-toggle d-flex justify-content-center  align-items-center text-right " data-bs-toggle="collapse" data-bs-target="#demo1">{{ __('msg.Entrer_le resultat_du mois') }}</a></h5>
<div id="demo1" class="collapse py-1">
   <h5  ><a class="t5 dropdown-item text-center" href='/user/data_delis_user'>{{ __('msg.Delis') }}</a></h5>
   <h5 ><a class="t5 dropdown-item text-center" href="/user/data_civil_user">{{ __('msg.Civil') }}</a></h5>
</div> 
@endsection
@section('cas_civil')
   <h5 class="h5"><a href="#" class="alien collapse nav-link text-center dropdown-toggle d-flex justify-content-center  align-items-center text-right " data-bs-toggle="collapse" data-bs-target="#demo3">{{ __('msg.cas_civil') }}</a></h5>
      <div id="demo3" class="collapse py-1">
         <h5 ><a class="t5 dropdown-item text-center" href='/user/voir_cas_civil_user'>{{ __('msg.voir_cas_civil') }}</a></h5>
      </div> 
@endsection
@section('cas_delis')
<h5 class="h5"><a href="#" class="alien collapse nav-link text-center dropdown-toggle d-flex justify-content-center  align-items-center text-right " data-bs-toggle="collapse" data-bs-target="#demo4">{{ __('msg.cas_delis') }}</a></h5>
      <div id="demo4" class="collapse py-1">
         <h5 ><a class="t5 dropdown-item text-center" href='/user/voir_cas_delis_user'>{{ __('msg.voir_cas_delis') }}</a></h5>
      </div> 
@endsection 
@section('statistique')
<h5 class="h5"><a href="#" class=" alien collapse nav-link text-center dropdown-toggle d-flex justify-content-center  align-items-center text-right " data-bs-toggle="collapse" data-bs-target="#demo5">{{ __('msg.statistique') }}</a></h5>
<div id="demo5" class="collapse py-1">
   <h5 ><a class=" t5 dropdown-item text-center" href='/user/staticCasDelisUser'>{{ __('msg.statistic_cas_delis') }}</a></h5>
   <h5 ><a class="t5 dropdown-item text-center" href="/user/staticCasCivilUser">{{ __('msg.statistic_cas_civil') }}</a></h5>
</div> 
@endsection




