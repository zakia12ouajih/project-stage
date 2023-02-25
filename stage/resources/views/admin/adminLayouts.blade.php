@extends('layouts.app2')

@section('main_page')
   <a class="nav-link text-center" href="/home">الصفحة الرئيسية</a>

@endsection

@section('enter_donnee')
   <a href="#" class="collapse nav-link text-center dropdown-toggle d-flex justify-content-center  align-items-center text-right " data-bs-toggle="collapse" data-bs-target="#demo1">ادخال حصيلة الشهر</a>
      <div id="demo1" class="collapse py-1">
         <a class="dropdown-item text-center" href='/admin/data_delis'>جنحي</a>
         <a class="dropdown-item text-center" href="/admin/data_civil">مدني</a>
      </div> 
@endsection


@section('crud_cas')
   <a href="#" class="collapse nav-link text-center dropdown-toggle d-flex justify-content-center  align-items-center text-right " data-bs-toggle="collapse" data-bs-target="#demo2">{{ __('msg.cas') }}</a>
      <div id="demo2" class="collapse py-1">
         <a class="dropdown-item text-center" href='/admin/form'>{{ __('msg.ajouter_cas') }}</a>
         <a class="dropdown-item text-center" href='/admin/aff_table'>{{ __('msg.voir_cas') }}</a>
      </div> 
@endsection


@section('cas_civil')
   <a href="#" class="collapse nav-link text-center dropdown-toggle d-flex justify-content-center  align-items-center text-right " data-bs-toggle="collapse" data-bs-target="#demo3">{{ __('msg.cas_civil') }}</a>
      <div id="demo3" class="collapse py-1">
         <a class="dropdown-item text-center" href='/admin/voir_cas_civil'>{{ __('msg.voir_cas_civil') }}</a>
      </div> 
@endsection


@section('cas_delis')
   <a href="#" class="collapse nav-link text-center dropdown-toggle d-flex justify-content-center  align-items-center text-right " data-bs-toggle="collapse" data-bs-target="#demo4">{{ __('msg.cas_delis') }}</a>
      <div id="demo4" class="collapse py-1">
         <a class="dropdown-item text-center" href='/admin/voir_cas_delis'>{{ __('msg.voir_cas_delis') }}</a>
      </div> 
@endsection 


@section('statistique')
   <a href="#" class="collapse nav-link text-center dropdown-toggle d-flex justify-content-center  align-items-center text-right " data-bs-toggle="collapse" data-bs-target="#demo5">{{ __('msg.statistique') }}</a>
   <div id="demo5" class="collapse py-1">
      <a class="dropdown-item text-center" href='/admin/staticCasDelisAdmin'>{{ __('msg.statistic_cas_delis') }}</a>
      <a class="dropdown-item text-center" href="/admin/staticCasCivilAdmin">{{ __('msg.statistic_cas_civil') }}</a>
   </div> 
   @endsection
   
   @section('voir_les_utilisateurs')
   <a href="#" class="collapse nav-link text-center dropdown-toggle d-flex justify-content-center  align-items-center text-right " data-bs-toggle="collapse" data-bs-target="#demo6">{{ __('msg.users') }}</a>
   <div id="demo6" class="collapse py-1">
      {{-- <a class="dropdown-item text-center" href='/admin/createUser'>{{ __('msg.ajouter_user') }}</a> --}}
      <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 dark:text-gray-500 underline">Register</a>
      <a class="dropdown-item text-center" href="/admin/voir_user">{{ __('msg.voir_user') }}</a>
   </div> 
@endsection
