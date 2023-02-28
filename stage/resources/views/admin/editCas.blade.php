@extends('admin.adminLayouts')


@section('content')
   <div class="container position-relative">
      <div class="row justify-content-center  ">
         @if (Session::has('success'))
            <div class="alert alert-success alert-dismissible position-absolute"   role="alert">
               <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
               <strong>{{ __('msg.success') }}</strong> Alert Content
            </div>
            
         @endif
         <div class="col-md-8">
            <div class="card py-3">
               <form action='{{ URL('/admin/mod',$modi->id) }}' method="POST">
                  @csrf
                  @method('put')
                  <div class="row mb-3">
                     <label for="code_type" class="col-md-4 col-form-label text-md-end">{{ __('msg.code_type') }}</label>
                     <div class="col-md-6">
                        <input id="code_type" type="text" class="form-control " value="{{ $modi->code_type }}" name="code_type"  />
                     </div>
                  </div>
                  <div class="row mb-3">
                     <label for="nom_type" class="col-md-4 col-form-label text-md-end">{{ __('msg.nom_type') }}</label>
                     <div class="col-md-6">
                        <input id="nom_type" type="text" class="form-control " value="{{ $modi->nom_type }}" name="nom_type"  />
                     </div>
                  </div>
                  <div class="row mb-3">
                     <label for="genre" class="col-md-4 col-form-label text-md-end">{{ __('msg.genre') }}</label>
                     <div class="col-md-6">
                        <select class="form-select form-select-lg" name="genre" id="genre">
                           
                              <option value="civil">{{ __('msg.civil') }}</option>
                              <option value="delis">{{ __('msg.delis') }}</option>
                           
                        </select>
                     </div>
                  </div>
                  <div class="row mb-0">
                     <div class="col-md-8 offset-md-4">
                        <input type="submit" value={{ __('msg.modifier') }}>
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
         {{ __('msg.cas') }} / {{ __('msg.editCas') }} 
   </a>
   
@endsection