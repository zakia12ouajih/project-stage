@extends('admin.adminLayouts')


@section('content')
   <div class="container">
      <div class="row justify-content-center">
         <div class="col-md-6">
            <div class="card  py-4">
               <form action="/admin/form/add" method="POST">
                  @csrf
                  <div class="row mb-3">
                     <label for="code_type" class="col-md-4 col-form-label text-md-end">{{ __('msg.code_type') }}</label>
                     <div class="col-md-6">
                        <input id="code_type" type="text" class="form-control " name="code_type"  />
                     </div>
                  </div>
                  <div class="row mb-5">
                     <label for="nom_type" class="col-md-4 col-form-label text-md-end">{{ __('msg.nom_type') }}</label>
                     <div class="col-md-6">
                        <input id="nom_type" type="text" class="form-control " name="nom_type"  />
                     </div>
                  </div>
                  <div class="row mb-0 ">
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