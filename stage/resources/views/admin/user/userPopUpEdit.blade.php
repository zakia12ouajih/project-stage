

<div class="modal fade" id="modalIdEdit{{ $d->id }}" tabindex="-1" data-bs-backdrop="static" data-bs-keyboard="false" role="dialog" aria-labelledby="modalTitleId" aria-hidden="true">
   <div class="modal-dialog " role="document">
      <div class="modal-content">
         <div class="modal-header">
            <h5 class="modal-title" id="modalTitleId">Modal title</h5>
               <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
         </div>
         <div class="modal-body">
            <form action='{{ URL('/admin/modiUser',$d->id) }}' method="POST">
                  @csrf
                  @method('put')
                  <div class="row mb-3  mt-3 d-flex justify-content-center align-items-center">
                     <div class="col-7">
                        <input id="firstName" type="text" class="form-control text-end " value="{{ $d->firstName }}" name="firstName"  />
                     </div>
                     <label for="code_type" class="col-3 col-form-label text-md-end">{{ __('msg.firstName') }}</label>
                  </div>
                  <div class="row mb-3  mt-3 d-flex justify-content-center align-items-center">
                     <div class="col-7">
                        <input id="lastName" type="text" class="form-control text-end " value="{{ $d->lastName }}" name="lastName"  />
                     </div>
                     <label for="lastName" class="col-3 col-form-label text-md-end">{{ __('msg.lastName') }}</label>
                  </div>
                  
                  <div class="row mb-3  mt-3 d-flex justify-content-center align-items-center">
                     <div class="col-7">
                        <input id="userName" type="text" class="form-control text-end " value="{{ $d->userName }}" name="userName"  />
                     </div>
                     <label for="userName" class="col-3 col-form-label text-md-end">{{ __('msg.userName') }}</label>
                  </div>
                  <div class="row mb-3  mt-3 d-flex justify-content-center align-items-center">
                     <div class="col-7">
                        <input id="email" type="email" class="form-control text-end " value="{{ $d->email }}" name="email"  />
                     </div>
                     <label for="email" class="col-3 col-form-label text-md-end">{{ __('msg.email') }}</label>
                  </div>
                  <div class="row mb-3  mt-3 d-flex justify-content-center align-items-center">
                     <div class="col-7">
                        <select  class="text-end form-select form-select-lg" name="role" id="role"> 
                           <option value="1" {{ $d->role == '1' ? 'selected="selected"' : '' }}>{{ __('msg.admin') }}</option>
                           <option value="0" {{ $d->role == '0' ? 'selected="selected"' : '' }}>{{ __('msg.user') }}</option>
                        </select>
                     </div> 
                     <label for="role" class="col-3 col-form-label text-md-end">{{ __('msg.role') }}</label>
                  </div>
                  
               </div>
               <div class="modal-footer">
                  <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">{{ __('msg.close') }}</button>
                  <input type="submit" class="btn btn-success" value={{ __('msg.modifier') }}>
               </div>
            </form> 
      </div>
   </div>
</div>


<!-- Optional: Place to the bottom of scripts -->
