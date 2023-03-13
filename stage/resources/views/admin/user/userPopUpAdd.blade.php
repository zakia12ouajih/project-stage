

   <!-- Modal Body -->
   <!-- if you want to close by clicking outside the modal, delete the last endpoint:data-bs-backdrop and data-bs-keyboard -->
   <div class="modal fade" id="modalIdAdd" tabindex="-1" data-bs-backdrop="static" data-bs-keyboard="false" role="dialog" aria-labelledby="modalTitleId" aria-hidden="true">
      <div class="modal-dialog " role="document">
         <div class="modal-content">
            <div class="modal-header">
               <h5 class="modal-title" id="modalTitleId">Modal title</h5>
                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
               <form method="POST" action="/admin/addUser">
                           @csrf

                           <div class="row mb-3 mt-3 justify-content-center align-items-center">
                              
                              <div class="col-6 d-flex">
                                 <input id="firstName" type="text" placeholder="{{ __('msg.enter_fName') }}" class=" text-end form-control @error('firstName') is-invalid @enderror" name="firstName" value="{{ old('firstName') }}" required autocomplete="firstName" autofocus>
                                 
                                 @error('firstName')
                                 <span class="invalid-feedback" role="alert">
                                       <strong>{{ $message }}</strong>
                                 </span>
                                 @enderror
                              </div>
                              <label for="firstName" class="col-3 col-form-label text-md-end">{{ __('msg.firstName') }}</label>
                           </div>
                           <div class="row mb-3 justify-content-center align-items-center">
                              
                              <div class="col-6 d-flex">
                                 <input id="lastName" type="text" placeholder="{{ __('msg.enter_lName') }}" class=" text-end form-control @error('lastName') is-invalid @enderror" name="lastName" value="{{ old('lastName') }}" required autocomplete="lastName" autofocus>
                                 
                                 @error('lastName')
                                 <span class="invalid-feedback" role="alert">
                                       <strong>{{ $message }}</strong>
                                 </span>
                                 @enderror
                              </div>
                              <label for="lastName" class="col-3 col-form-label text-md-end">{{ __('msg.lastName') }}</label>
                           </div>
                           <div class="row mb-3  justify-content-center align-items-center">
                              
                              <div class="col-6 d-flex">
                                 <input id="userName" type="text"placeholder='{{ __('msg.enter_userName') }}' class=" text-end form-control @error('userName') is-invalid @enderror" name="userName" value="{{ old('userName') }}" required autocomplete="userName" autofocus>
                                 
                                 @error('userName')
                                 <span class="invalid-feedback" role="alert">
                                       <strong>{{ $message }}</strong>
                                 </span>
                                 @enderror
                              </div>
                              <label for="userName" class="col-3 col-form-label text-md-end">{{ __('msg.userName') }}</label>
                           </div>

                           <div class="row mb-3 justify-content-center align-items-center">
                              
                              <div class="col-6 ">
                                 <input id="email" type="email" placeholder="{{ __('msg.enter_email') }}" class=" text-end form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">
                                 
                                 @error('email')
                                 <span class="invalid-feedback text-end" role="alert">
                                       <strong>{{ __('msg.emailTakken') }}</strong>
                                 </span>
                                 @enderror
                              </div>
                              <label for="email" class="col-3 col-form-label text-md-end">{{ __('msg.email') }}</label>
                           </div>

                           <div class="row mb-3 justify-content-center align-items-center">
                              
                              <div class="col-6 d-flex">
                                 <input id="password" type="password" placeholder="{{ __('msg.enter_password') }}" class=" text-end form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">
                                 
                                 @error('password')
                                 <span class="invalid-feedback" role="alert">
                                       <strong>{{ $message }}</strong>
                                 </span>
                                 @enderror
                              </div>
                              <label for="password" class="col-3 col-form-label text-md-end">{{ __('msg.password') }}</label>
                           </div>

                           <div class="row mb-5 justify-content-center align-items-center">
                              
                              <div class="col-6 d-flex">
                                 <input id="password-confirm" type="password" placeholder="{{ __('msg.enterConfim_password') }}" class="  text-end form-control" name="password_confirmation" required autocomplete="new-password">
                              </div>
                              <label for="password-confirm" class="col-3 col-form-label text-md-end">{{ __('msg.confirm-password') }}</label>
                           </div>

                           <div class="row mb-3 justify-content-center align-items-center">
                              <div class="col-md-6 offset-md-4">
                                 
                              </div>
                           </div>
                        </div>
                        <div class="modal-footer">
                           <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">{{ __('msg.close') }}</button>
                           <button type="submit" class="btn btn-success">
                              {{ __('msg.register') }}
                           </button>                     
                        </div>
                     </form>
         </div>
      </div>
   </div>


   <!-- Optional: Place to the bottom of scripts -->
