@extends('layouts.app')

@section('navbar')
<header>

   
   
   <nav class="navbar navbar-expanded navbar-light bg-white ">
      <div class="container d-flex flex-row-reverse justify-content-between">
         <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar">
            <span class="navbar-toggler-icon"></span>
         </button>
         <a  href="{{ url('/') }}" class="navbar-brand">
            <img src="/images/logmor.png" class="img-fluid image" alt="">
         </a>
         
         <ul class="navbar-nav  ">
            <h4 class="text-muted text-center pt-2">{{ Auth::user()->userName }}</h4>
         </ul>
         <div class="offcanvas color offcanvas-end" tabindex="-1" id="offcanvasNavbar"
            aria-labelledby="offcanvasNavbarLabel">
            <div class="offcanvas-header justify-content-between">
               <p></p>
               <h2 class="offcanvas-title " id="offcanvasNavbarLabel">{{ Auth::user()->userName }} {{ __('msg.hello') }} </h2>
               <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
            </div>
            <div class="offcanvas-body">
               <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
                  <li class="nav-item ">
                     @yield('main_page')
                  </li>
                  <li class="nav-item">
                     @yield('enter_donnee')
                        
                  </li>
                  <li class="nav-item ">
                     @yield('crud_cas')
                     
                  </li>
                  <li class="nav-item ">
                     @yield('statistique')
                        
                  </li>
                  <li class="nav-item">
                     @yield('cas_delis')
                  </li>
                  <li class="nav-item">
                     @yield('cas_civil')
                  </li>
                  <li class="nav-item">
                     @yield('consulter_les_cas')
                  </li>
                  <li class="nav-item">
                     @yield('voir_les_utilisateurs')
                  </li>
                  <li class="nav-item">
                     <h5 class="h5"><a href="#" class="fw-bolder alien collapse nav-link text-center dropdown-toggle d-flex justify-content-center  align-items-center text-right " data-bs-toggle="collapse" data-bs-target="#demox">{{ __('msg.logout') }}</a></h5>            
                     @guest
                        @if (Route::has('login'))
                           <h5>    
                              <a class="nav-link " href="{{ route('login') }}"></a>
                           </h5>
                        @endif
                     @else
                        <li class="nav-item ">
                           <div id="demox" class="collapse">
                              
                                 <h5>
                                    <a class=" t5 dropdown-item text-center" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                       {{ __('msg.logout') }}
                                    </a>
                                 </h5>
                              <form id="logout-form" action="{{ route('logout') }}" method="POST" class=" d-none">
                                 @csrf
                              </form>
                           </div>
                        </li>
                     @endguest 
                     
                  </li>
               </ul>
            </div>
         </div>
      </div>
   </nav>
   

   <div class="container-fluid  bg-dark bg-opacity-25 mt-0">
      <div class="row d-flex flex-row-reverse align-items-center ">
         <div class=" d-flex col-5 text-end  justify-content-center align-items-center">
            @yield('navbar2')
         </div>
      </div>
</header>
@endsection
