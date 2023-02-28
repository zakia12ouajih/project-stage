@extends('admin.adminLayouts')


@section('content')
   <div class="container">
      <div class="row justify-content-center">
         <div class="col-md-7">
            <div class="card  py-4">
               @if (Session::has('success'))
                  <div class="alert alert-success alert-dismissible " role="alert">
                     <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                     <strong>{{ __('msg.operation_accomplie_ave_Success') }}</strong> 
                  </div>
               @endif
               <form action="/admin/form/add" method="POST">
                  @csrf
                  <div class="row mb-3 mt-3 d-flex justify-content-center align-items-center ">
                     <div class="col-7">
                        <input id="code_type" type="text" class="form-control text-end" name="code_type"  />
                     </div>
                     <label for="code_type" class="col-3 col-form-label text-md-end">{{ __('msg.code_type') }}</label>
                  </div>
                  <div class="row mb-3 mt-3 d-flex justify-content-center align-items-center">
                     <div class="col-7">
                        <input id="nom_type" type="text" class="form-control text-end " name="nom_type"  />
                     </div>
                     <label for="nom_type" class="col-3 col-form-label text-md-end">{{ __('msg.nom_type') }}</label>
                  </div>
                  <div class="row mb-5 mt-3 d-flex justify-content-center align-items-center">
                     <div class="col-7">
                           <select class="form-select form-select-lg text-end" name="genre" id="genre">
                              <option  value="civil">{{ __('msg.civil') }}</option>
                              <option  value="delis">{{ __('msg.delis') }}</option>
                           </select>
                     </div>
                     <label for="genre" class="col-3 col-form-label text-md-end">{{ __('msg.genre') }}</label>
                  </div>
                  <div class="row mb-2  d-flex justify-content-center align-items-center">
                     <div class="col-6 offset-3">
                        <input class="btn btn-primary" type="submit" value={{ __('msg.envoyer') }}>
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
      {{ __('msg.cas') }} / {{ __('msg.ajouter_cas') }}
   </a>
   
@endsection