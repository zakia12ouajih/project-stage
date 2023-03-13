

<div class="modal fade" id="modalCasFrom" tabindex="-1" data-bs-backdrop="static" data-bs-keyboard="false" role="dialog" aria-labelledby="modalTitleId" aria-hidden="true">
   <div class="modal-dialog " role="document">
      <div class="modal-content">
         <div class="modal-header">
            <h5 class="modal-title" id="modalTitleId">Modal title</h5>
               <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
         </div>
         <div class="modal-body">
            <form action="/admin/form/add" method="POST">
                  @csrf
                  <div class="row mb-3 mt-3 d-flex justify-content-center align-items-center ">
                     <div class="col-7">
                        <input id="code_type" type="text" placeholder="{{ __('msg.enter_code_type') }}" class="form-control text-end" name="code_type"  />
                     </div>
                     <label for="code_type" class="col-3 col-form-label text-md-end">{{ __('msg.code_type') }}</label>
                  </div>
                  <div class="row mb-3 mt-3 d-flex justify-content-center align-items-center">
                     <div class="col-7">
                        <input id="nom_type" type="text" placeholder="{{ __('msg.enter_nom_type') }}" class="form-control text-end " name="nom_type"  />
                     </div>
                     <label for="nom_type" class="col-3 col-form-label text-md-end">{{ __('msg.nom_type') }}</label>
                  </div>
                  <div class="row mb-5 mt-3 d-flex justify-content-center align-items-center">
                     <div class="col-7">
                           <select class="form-select form-select-lg text-end" name="genre" id="genre">
                              <option  value="civil">{{ __('msg.civil') }}</option>
                              <option  value="delis">{{ __('msg.delis') }}</option>
                           </select>
                     </div>
                     <label for="genre" class="col-3 col-form-label text-md-end">{{ __('msg.genre') }}</label>
                  </div>
                  
               </div>
               <div class="modal-footer">
                  <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">{{ __('msg.close') }}</button>
                  <input class="btn btn-success" type="submit" value={{ __('msg.envoyer') }}>   
               </div>
            </form>
      </div>
   </div>
</div>


<!-- Optional: Place to the bottom of scripts -->
