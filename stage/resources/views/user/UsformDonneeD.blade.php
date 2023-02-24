@extends('user.userLayouts')

@section('content')
   <div class="container">
      <div class="row justify-content-center">
         <div class="col-md-6">
            <div class="card py-4">
               <form action="/user/data_delis/add" method="POST">
                  @csrf
                  <div class="row  mb-3 mt-3 d-flex justify-content-center align-items-center">
                     <div class="col-md-6">
                        <select class="form-select text-end" name="type" id="type">
                           <option value="" selected >{{ __('msg.choose') }}</option>
                           @foreach ($data as $d)
                              <option value="{{ $d->id }}">{{ $d->nom_type }}</option>
                           @endforeach
                        </select>
                        
                     </div>
                     <label for="" class="col-md-3 col-form-label text-md-end">{{ __('msg.cas1') }}</label>
                  </div>
                  <div class="row  mb-3 mt-3 d-flex justify-content-center align-items-center">
                     <div class="col-md-6 ">
                        <input id="reste_derniere_session" type="number" class="form-control text-end " name="reste_derniere_session"  />
                     </div>
                     <label for="reste_derniere_session" class="col-md-3 col-form-label text-md-end">{{ __('msg.reste_derniere_session') }}</label>
                  </div>
                  <div class="row  mb-3 mt-3 d-flex justify-content-center align-items-center">
                     <div class="col-md-6">
                        <input id="inscrit" type="number" class="form-control text-end" name="inscrit"  />
                     </div>
                     <label for="inscrit" class="col-md-3 col-form-label text-md-end">{{ __('msg.inscrit') }}</label>
                  </div>
                  <div class="row  mb-3 mt-3 d-flex justify-content-center align-items-center">
                     <div class="col-md-6">
                        <input id="comdamne" type="number" class="form-control text-end " name="comdamne"  />
                     </div>
                     <label for="comdamne" class="col-md-3 col-form-label text-md-end">{{ __('msg.comdamne') }}</label>
                  </div>
                  <div class="row  mb-3 mt-3 d-flex justify-content-center align-items-center">
                     <div class="col-md-6">
                        <input id="reste_sans_jugement" type="number" class="form-control text-end " name="reste_sans_jugement"  />
                     </div>
                     <label for="reste_sans_jugement" class="col-md-3 col-form-label text-md-end">{{ __('msg.reste_sans_jugement') }}</label>
                  </div>
                  <div class="row mb-3 mt-3 d-flex justify-content-center align-items-center">
                     <div class="col-md-6">
                        <input id="date" type="date" class="form-control " name="date"  />
                     </div>
                     <label for="date" class="col-md-3 col-form-label text-md-end">{{ __('msg.date') }}</label>
                  </div>
                  <div class="row   mt-3 d-flex justify-content-center align-items-center">
                     <div class="col-md-6 offset-md-4 justify-content-center align-items-center">
                        <input class="btn bg-success text-white"type="submit" value={{ __('msg.envoyer') }}>
                     </div>
                  </div>
               </form>
            </div>
         </div>
      </div>
   </div>
@endsection
@section('navbar2')
    <a  href="" class="navbar-brand text-light fw-bolder">
        {{ __('msg.Entrer_le resultat_du mois') }}   / {{ __('msg.Delis') }} 
    </a>
    <a class="px-1">de</a>

@endsection