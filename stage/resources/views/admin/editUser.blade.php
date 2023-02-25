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
         <div class="col-md-7">
            <div class="card py-3">
               <form action='{{ URL('/admin/modiUser',$modiUser->id) }}' method="POST">
                  @csrf
                  @method('put')
                  <div class="row mb-3  mt-3 d-flex justify-content-center align-items-center">
                     <div class="col-7">
                        <input id="firstName" type="text" class="form-control text-end " value="{{ $modiUser->firstName }}" name="firstName"  />
                     </div>
                     <label for="code_type" class="col-3 col-form-label text-md-end">{{ __('msg.firstName') }}</label>
                  </div>
                  <div class="row mb-3  mt-3 d-flex justify-content-center align-items-center">
                     <div class="col-7">
                        <input id="lastName" type="text" class="form-control text-end " value="{{ $modiUser->lastName }}" name="lastName"  />
                     </div>
                     <label for="lastName" class="col-3 col-form-label text-md-end">{{ __('msg.lastName') }}</label>
                  </div>
                  
                  <div class="row mb-3  mt-3 d-flex justify-content-center align-items-center">
                     <div class="col-7">
                        <input id="userName" type="text" class="form-control text-end " value="{{ $modiUser->userName }}" name="userName"  />
                     </div>
                     <label for="userName" class="col-3 col-form-label text-md-end">{{ __('msg.userName') }}</label>
                  </div>
                  <div class="row mb-3  mt-3 d-flex justify-content-center align-items-center">
                     <div class="col-7">
                        <input id="email" type="email" class="form-control text-end " value="{{ $modiUser->email }}" name="email"  />
                     </div>
                     <label for="email" class="col-3 col-form-label text-md-end">{{ __('msg.email') }}</label>
                  </div>
                  <div class="row mb-3  mt-3 d-flex justify-content-center align-items-center">
                     <div class="col-7">
                        <select class="text-end form-select form-select-lg" name="role" id="role">
                           <option selected >{{ __('msg.choose1') }}</option>
                           <option value="1">{{ __('msg.admin') }}</option>
                           <option value="0">{{ __('msg.user') }}</option>
                        </select>
                     </div>
                     <label for="role" class="col-3 col-form-label text-md-end">{{ __('msg.role') }}</label>
                  </div>
                  <div class="row mb-0  mt-5 d-flex justify-content-center align-items-center">
                     <div class="col-7 offset-5">
                        <input type="submit" class="btn btn-primary" value={{ __('msg.modifier') }}>
                     </div>
                  </div>
                  </div>
               </form>
            </div>
         </div>
      </div>
   </div>
@endsection