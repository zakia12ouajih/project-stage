@extends('admin.adminLayouts')

@section('content')
   <div class="container">
      <div class="row justify-content-center">
         @if (Session::has('success'))
            <div class="alert alert-success alert-dismissible " role="alert">
               <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
               <strong>{{ __('msg.success') }}</strong> Alert Content
            </div>
            
         @endif
         <div class="col-md-8">
            <div class="card py-4">
               <form action="/admin/data_civil/add" method="POST">
                  @csrf
                  <div class="row mb-3">
                     <label for="" class="col-md-4 col-form-label text-md-end">{{ __('msg.cas1') }}</label>
                     <div class="col-md-6">
                        
                           <select class="form-select " name="type" id="type">
                              <option value="" selected >{{ __('msg.choose') }}</option>
                              @foreach ($data as $d)
                                 
                              <option value="{{ $d->id }}">{{ $d->nom_type }}</option>
                              @endforeach
                           </select>
                        
                     </div>
                  </div>
                  <div class="row mb-3">
                     <label for="reste_derniere_session" class="col-md-4 col-form-label text-md-end">{{ __('msg.reste_derniere_session') }}</label>
                     <div class="col-md-6">
                        <input id="reste_derniere_session" type="number" class="form-control " name="reste_derniere_session"  />
                     </div>
                  </div>
                  <div class="row mb-3">
                     <label for="inscrit" class="col-md-4 col-form-label text-md-end">{{ __('msg.inscrit') }}</label>
                     <div class="col-md-6">
                        <input id="inscrit" type="number" class="form-control " name="inscrit"  />
                     </div>
                  </div>
                  <div class="row mb-3">
                     <label for="comdamne" class="col-md-4 col-form-label text-md-end">{{ __('msg.comdamne') }}</label>
                     <div class="col-md-6">
                        <input id="comdamne" type="number" class="form-control " name="comdamne"  />
                     </div>
                  </div>
                  <div class="row mb-3">
                     <label for="reste_sans_jugement" class="col-md-4 col-form-label text-md-end">{{ __('msg.reste_sans_jugement') }}</label>
                     <div class="col-md-6">
                        <input id="reste_sans_jugement" type="number" class="form-control " name="reste_sans_jugement"  />
                     </div>
                  </div>
                  <div class="row mb-3">
                     <label for="date" class="col-md-4 col-form-label text-md-end">{{ __('msg.date') }}</label>
                     <div class="col-md-6">
                        <input id="date" type="date" class="form-control " name="date"  />
                     </div>
                  </div>
                  <div class="row mb-0">
                     <div class="col-md-8 offset-md-4">
                        <input type="submit" value={{ __('msg.envoyer') }}>
                     </div>
                  </div>
               </form>
            </div>
         </div>
      </div>
   </div>
@endsection