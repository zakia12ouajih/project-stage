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
         
         <ul class="navbar-nav dropdown ">
            <a class="nav-link  " href="#" role="button" >
                     {{ Auth::user()->userName }}
                  </a>
            {{-- @guest
               @if (Route::has('login'))
                  <a class="nav-link" href="{{ route('login') }}"></a>
               @endif
            @else
               <li class="nav-item dropdown">
                  <a id="navbarDropdown" class="nav-link dropdown-toggle   " href="#" role="button" data-bs-display="static" data-bs-toggle="dropdown" aria-haspopup="false" aria-expanded="false" >
                     {{ Auth::user()->userName }}
                  </a>
                  <div class="dropdown-menu dropdown-menu-start" aria-labelledby="navbarDropdown">
                     <a class="dropdown-item " href="{{ route('logout') }}"
                        onclick="event.preventDefault();
                        document.getElementById('logout-form').submit();">
                        {{ __('Logout') }}
                     </a>
                     <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                        @csrf
                     </form>
                  </div>
               </li>
            @endguest --}}
         </ul>
         <div class="offcanvas bg-light bg-gradient offcanvas-end" tabindex="-1" id="offcanvasNavbar"
            aria-labelledby="offcanvasNavbarLabel">
            <div class="offcanvas-header justify-content-between">
               <p></p>
               <h2 class="offcanvas-title " id="offcanvasNavbarLabel">{{ Auth::user()->userName }} {{ __('msg.hello') }} </h2>
               <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
            </div>
            <div class="offcanvas-body">
               <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
                  <li class="nav-item">
                     <a class="nav-link text-center" href="#">الصفحة الرئيسية</a>
                  </li>
                  <li class="nav-item ">
                     @yield('crud_cas')
                     {{-- <a id="#demo2"  class="collapse nav-link text-center dropdown-toggle d-flex justify-content-center  align-items-center text-right flex-row-reverse mx-1" aria-current="page"  aria-haspopup="true" href="#">les cas</a>
                     <div id="demo2">
                     
                     </div> --}}
                  </li>
                  <li class="nav-item">
                     @yield('enter_donnee')
                        {{-- <a href="#" class="collapse nav-link text-center dropdown-toggle d-flex justify-content-center  align-items-center text-right " data-bs-toggle="collapse" data-bs-target="#demo1">ادخال حصيلة الشهر</a>
   
                     <div id="demo1" class="collapse">
                        <a class="dropdown-item text-center" href='#'>جنحي</a>
                        <a class="dropdown-item text-center" href="#">مدني</a>
                     </div> --}}
                  </li>
                  <li class="nav-item ">
                     @yield('statistique')
                        {{-- <a href="#" class="nav-link text-center" data-bs-toggle="collapse" data-bs-target="#demo">Collapsible</a>
                        <div id="demo" class="collapse">
                           Lorem ipsum dolor text....
                        </div>  --}}
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
                     <a href="#" class="collapse nav-link text-center dropdown-toggle d-flex justify-content-center  align-items-center text-right " data-bs-toggle="collapse" data-bs-target="#demo3">{{ __('msg.logout') }}</a>             
                     @guest
                     @if (Route::has('login'))
                     <a class="nav-link" href="{{ route('login') }}"></a>
                     @endif
                     @else
                     <li class="nav-item ">
                        
                        
                                 <div id="demo3" class="collapse">
                                 <a class="dropdown-item text-center" href="{{ route('logout') }}"
                                    onclick="event.preventDefault();
                                    document.getElementById('logout-form').submit();">
                                    {{ __('msg.logout') }}
                                 </a>
                                 <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                    @csrf
                                 </form>
                              </div>
                           </li>
                        @endguest 
                     </div>
                  </li>
               </ul>
            </div>
         </div>
      </div>
   </nav>
   
   
</header>
@endsection
