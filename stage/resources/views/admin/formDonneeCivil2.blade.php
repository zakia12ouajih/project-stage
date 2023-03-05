@extends('admin.adminLayouts')

@section('content')
   <div class="container">
      <div class="row justify-content-center">
         @if (Session::has('success'))
            <div class="alert alert-success alert-dismissible " role="alert">
               <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
               <strong>{{ __('msg.operation_accomplie_ave_Success') }}</strong> 
            </div>
            
         @endif
         <div class="col-md-7">
            <div class="card py-4">
               <form action="/admin/data_civil/add" method="POST">
                  @csrf
                  <input type="hidden" name="type" value="{{ $a }}">
                  @if ($idTypeCount == 0)
                     <div class="row mb-3 mt-3 d-flex justify-content-center align-items-center">
                        <div class="col-7">
                           <input id="reste_derniere_session" type="number" class="form-control text-end" name="reste_derniere_session"  />
                        </div>
                        <label for="reste_derniere_session" class="col-3 col-form-label text-md-end">{{ __('msg.reste_derniere_session') }}</label>
                     </div>
                  @endif
                  
                  <div class="row mb-3  mt-3 d-flex justify-content-center align-items-center">
                     <div class="col-7">
                        <input id="inscrit" type="number" class="form-control text-end" name="inscrit"  />
                     </div>
                     <label for="inscrit" class="col-3 col-form-label text-md-end">{{ __('msg.inscrit') }}</label>
                  </div>
                  <div class="row mb-3  mt-3 d-flex justify-content-center align-items-center">
                     <div class="col-7">
                        <input id="comdamne" type="number" class="form-control text-end" name="comdamne"  />
                     </div>
                     <label for="comdamne" class="col-3 col-form-label text-md-end">{{ __('msg.comdamne') }}</label>
                  </div>
                  
                  
                  <div class="row mb-0  mt-3 d-flex justify-content-center align-items-center">
                     <div class="col-7 offset-5">
                        <input class="btn btn-success" type="submit" value={{ __('msg.envoyer') }}>
                     </div>
                  </div>
               </form>
            </div>
         </div>
      </div>
   </div>
@endsection

@section('navbar2')
   <a  href="" class="fs navbar-brand text-white fw-bolder">
      {{ __('msg.cas_civil') }} / {{ __('msg.moi') }}
   </a>
   
@endsection