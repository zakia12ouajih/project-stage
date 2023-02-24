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
               <form action='{{ URL('/admin/modiUser',$modiUser->id) }}' method="POST">
                  @csrf
                  @method('put')
                  <div class="row mb-3">
                     <label for="code_type" class="col-md-4 col-form-label text-md-end">{{ __('msg.firstName') }}</label>
                     <div class="col-md-6">
                        <input id="firstName" type="text" class="form-control " value="{{ $modiUser->firstName }}" name="firstName"  />
                     </div>
                  </div>
                  <div class="row mb-3">
                     <label for="lastName" class="col-md-4 col-form-label text-md-end">{{ __('') }}</label>
                     <div class="col-md-6">
                        <input id="lastName" type="text" class="form-control " value="{{ $modiUser->lastName }}" name="lastName"  />
                     </div>
                  </div>
                  
                  <div class="row mb-3">
                     <label for="userName" class="col-md-4 col-form-label text-md-end">{{ __('msg.userName') }}</label>
                     <div class="col-md-6">
                        <input id="userName" type="text" class="form-control " value="{{ $modiUser->userName }}" name="userName"  />
                     </div>
                  </div>
                  <div class="row mb-3">
                     <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('msg.email') }}</label>
                     <div class="col-md-6">
                        <input id="email" type="email" class="form-control " value="{{ $modiUser->email }}" name="email"  />
                     </div>
                  </div>
                  <div class="row mb-3">
                     <label for="role" class="col-md-4 col-form-label text-md-end">{{ __('msg.role') }}</label>
                     <div class="col-md-6">
                        <div class="mb-3">
                           <select class="form-select form-select-lg" name="role" id="role">
                              <option selected>{{ __('msg.choose1') }}</option>
                              <option value="1">{{ __('msg.admin') }}</option>
                              <option value="0">{{ __('msg.user') }}</option>
                              
                           </select>
                        </div>
                        <input id="role" type="number" class="form-control " value="{{ $modiUser->role }}" name="role"  />
                     </div>
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