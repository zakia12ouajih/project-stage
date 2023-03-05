@extends('admin.adminLayouts')

@section('content')
   <div class="container">
      <div class="row justify-content-center">
         <div class="col-md-7">
            <div class="card py-4">
               <form action="/admin/data_civil/new" method="POST">
                  @csrf
                  <div class="row mb-3  mt-3 d-flex justify-content-center align-items-center">
                     <div class="col-7">
                        
                        <select class="form-select text-end " name="type" id="type">
                           <option value="" selected >{{ __('msg.choose') }}</option>
                           @foreach ($data as $d)
                           
                           <option value="{{ $d->id }}">{{ $d->nom_type }}</option>
                           @endforeach
                        </select>
                        
                     </div>
                     <label for="" class="col-3 col-form-label text-md-end">{{ __('msg.cas1') }}</label>
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