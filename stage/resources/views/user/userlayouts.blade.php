@extends('layouts.app2')

@section('main_page')
   <a class="nav-link text-center" href="/home">الصفحة الرئيسية</a>

@endsection

@section('enter_donnee')
   
<a href="#" class="collapse nav-link text-center dropdown-toggle d-flex justify-content-center  align-items-center text-right " data-bs-toggle="collapse" data-bs-target="#demo1">ادخال حصيلة الشهر</a>
<div id="demo1" class="collapse py-1">
   <a class="dropdown-item text-center" href='/user/data_delis_user'>جنحي</a>
   <a class="dropdown-item text-center" href="/user/data_civil_user">مدني</a>
</div> 
@endsection
@section('cas_civil')
   <a href="#" class="collapse nav-link text-center dropdown-toggle d-flex justify-content-center  align-items-center text-right " data-bs-toggle="collapse" data-bs-target="#demo3">{{ __('msg.cas_civil') }}</a>
      <div id="demo3" class="collapse py-1">
         <a class="dropdown-item text-center" href='/user/CasCivil/search'>{{ __('msg.voir_cas_civil') }}</a>
      </div> 
@endsection
@section('cas_delis')
   <a href="#" class="collapse nav-link text-center dropdown-toggle d-flex justify-content-center  align-items-center text-right " data-bs-toggle="collapse" data-bs-target="#demo4">{{ __('msg.cas_delis') }}</a>
      <div id="demo4" class="collapse py-1">
         <a class="dropdown-item text-center" href='/user/voir_cas_delis_user'>{{ __('msg.voir_cas_delis') }}</a>
      </div> 
@endsection 
@section('statistique')
<a href="#" class="collapse nav-link text-center dropdown-toggle d-flex justify-content-center  align-items-center text-right " data-bs-toggle="collapse" data-bs-target="#demo5">{{ __('msg.statistique') }}</a>
<div id="demo5" class="collapse py-1">
   <a class="dropdown-item text-center" href='/user/staticCasDelisUser'>{{ __('msg.statistic_cas_delis') }}</a>
   <a class="dropdown-item text-center" href="/user/staticCasCivilUser">{{ __('msg.statistic_cas_civil') }}</a>
</div> 
@endsection




