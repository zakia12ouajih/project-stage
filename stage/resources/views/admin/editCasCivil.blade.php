@extends('admin.adminLayouts')

@section('content')
   <div class="container">
      <div class="row justify-content-center">
         @if (Session::has('success'))
            <div class="alert alert-success alert-dismissible position-absolute"   role="alert">
               <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
               <strong>{{ __('msg.success') }}</strong> Alert Content
            </div>
            
         @endif
         <div class="col-md-7">
            <div class="card py-4">
               <form action="{{ URL('/admin/modCivil', $modi->id) }}" method="POST">
                  @csrf
                  @method('put')
                  <div class="row mb-3  mt-3 d-flex justify-content-center align-items-center">
                     <div class="col-md-6">
                        <select class="form-select text-end " name="type" id="type" >
                           <option value=""  >{{ __('msg.choose') }}</option>
                           @foreach ($data as $d)
                           <option value="{{ $d->id }}" {{ $d->id == $modi->id_type ? 'selected':'' }} >{{ $d->nom_type }}</option>
                           @endforeach
                        </select>
                        
                     </div>
                     <label for="" class="col-3 col-form-label text-md-end">{{ __('msg.cas') }}</label>
                  </div>
                  <div class="row mb-3  mt-3 d-flex justify-content-center align-items-center">
                     <div class="col-md-6">
                        <input id="reste_derniere_session" value="{{ $modi->reste_derniere_session}}" type="number" class="text-end form-control " name="reste_derniere_session"  />
                     </div>
                     <label for="reste_derniere_session" class="col-3 col-form-label text-md-end">{{ __('msg.reste_derniere_session') }}</label>
                  </div>
                  <div class="row mb-3  mt-3 d-flex justify-content-center align-items-center">
                     <div class="col-md-6">
                        <input id="inscrit" type="number" class="form-control text-end "value="{{ $modi->inscrit}}"  name="inscrit"  />
                     </div>
                     <label for="inscrit" class="col-3 col-form-label text-md-end">{{ __('msg.inscrit') }}</label>
                  </div>
                  <div class="row mb-3  mt-3 d-flex justify-content-center align-items-center">
                     <div class="col-md-6">
                        <input id="comdamne" type="number" class="form-control text-end " name="comdamne"  value="{{ $modi->comdamne}}"/>
                     </div>
                     <label for="comdamne" class="col-3 col-form-label text-md-end">{{ __('msg.comdamne') }}</label>
                  </div>
                  
                  <div class="row mb-3  mt-3 d-flex justify-content-center align-items-center">
                     <div class="col-md-6">
                        <input id="date" type="date" class="form-control text-end " name="date" value="{{ $modi->date}}" />
                     </div>
                     <label for="date" class="col-3 col-form-label text-md-end">{{ __('msg.date') }}</label>
                  </div>
                  <div class="row mb-0  mt-3 d-flex justify-content-center align-items-center">
                     <div class="col-7 offset-5">
                        <input type="submit" class="btn btn-primary" value={{ __('msg.envoyer') }}>
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
         {{ __('msg.cas_civil') }} / {{ __('msg.editCasCivil') }} 
   </a>
   
@endsection