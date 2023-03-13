

<!-- Modal Body -->
<div class="modal fade" id="modalId{{ $d->id }}" tabindex="-1" data-bs-backdrop="static" data-bs-keyboard="false" role="dialog" aria-labelledby="modalTitleId" aria-hidden="true">
   <div class="modal-dialog " role="document">
      <div class="modal-content">
         <div class="modal-header">
            <h5 class="modal-title" id="modalTitleId">Modal title</h5>
               <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
         </div>
         <div class="modal-body">
            <form action="{{ URL('/admin/modDelis', $d->id) }}" method="POST">
                  @csrf
                  @method('put')
                  <div class="row mb-3  mt-3 d-flex justify-content-center align-items-center">
                     <div class="col-7">
                        <input id="reste_derniere_session" value="{{ $d->reste_derniere_session}}" type="number" class="text-end form-control " name="reste_derniere_session"  />
                     </div>
                     <label for="reste_derniere_session" class="col-3 col-form-label text-md-end">{{ __('msg.reste_derniere_session') }}</label>
                  </div>
                  <div class="row mb-3  mt-3 d-flex justify-content-center align-items-center">
                     <div class="col-7">
                        <input id="inscrit" type="number" class="text-end form-control "value="{{ $d->inscrit}}"  name="inscrit"  />
                     </div>
                     <label for="inscrit" class="col-3 col-form-label text-md-end">{{ __('msg.inscrit') }}</label>
                  </div>
                  <div class="row mb-3  mt-3 d-flex justify-content-center align-items-center">
                     <div class="col-7">
                        <input id="comdamne" type="number" class="form-control text-end " name="comdamne"  value="{{ $d->comdamne}}"/>
                     </div>
                     <label for="comdamne" class="col-3 col-form-label text-md-end">{{ __('msg.comdamne') }}</label>
                  </div>
                  
                  <div class="row mb-3  mt-3 d-flex justify-content-center align-items-center">
                     <div class="col-7">
                        <input id="date" type="date" class="form-control text-end " name="date" value="{{ $d->date}}" />
                     </div>
                     <label for="date" class="col-3 col-form-label text-md-end">{{ __('msg.date') }}</label>
                  </div>
               </div>
               <div class="modal-footer">
                  <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">{{ __('msg.close') }}</button>
                  <input type="submit" class="btn btn-success" value="{{ __('msg.envoyer') }}">
               </div>
            </form>
      </div>
   </div>
</div>


