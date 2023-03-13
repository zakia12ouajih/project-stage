@extends('admin.adminLayouts')

@section('content')
   <div class="row justify-content-center">
      <div class="col-md-8">
         <div id="printableArea">
            <h4 class="fw-bolder text-center mb-3">{{ __('msg.statistic_cas_civil') }}</h4>
            <table class="table table-hover table-bordered" name='cas_civil'>
               <thead >
                  <tr class="table-primary">
                     <th class="text-center" scope="col">{{ __('msg.reste_sans_jugement') }}</th>
                     <th class="text-center" scope="col">{{ __('msg.comdamne') }}</th>
                     <th class="text-center" scope="col">{{ __('msg.somme') }}</th>
                     <th class="text-center" scope="col">{{ __('msg.inscrit') }}</th>
                     <th class="text-center" scope="col">{{ __('msg.reste_derniere_session') }}</th>
                     <th class="text-center" scope="col">{{ __('msg.code_type') }}</th>
                     <th class="text-center" scope="col">{{ __('msg.cas1') }}</th>
                  </tr>
               </thead>
               <tbody class="text-center">
                  @foreach ($data as $d)
                  <tr>
                     <td>{{ $d->sumRSJ}}</td> 
                     <td>{{ $d->sumComdamne }}</td>
                     <td>{{ $d->sumSum }}</td>
                     <td>{{ $d->sumInscrit }}</td>
                     <td>{{ $d->sumRest}}</td>
                     <td>{{ $d->cas_type->code_type}}</td> 
                     <td>{{ $d->cas_type->nom_type}}</td> 
                     </tr>
                     @endforeach
               </tbody>
            </table>
            <table class="table table-hover table-bordered mt-3">
               <thead >
                  <tr class="table-primary">
                     <th class="text-center" scope="col">{{ __('msg.reste_sans_jugement') }}</th>
                     <th class="text-center" scope="col">{{ __('msg.comdamne') }}</th>
                     <th class="text-center" scope="col">{{ __('msg.somme') }}</th>
                     <th class="text-center" scope="col">{{ __('msg.inscrit') }}</th>
                     <th class="text-center" scope="col">{{ __('msg.reste_derniere_session') }}</th>
                  </tr>
               </thead>
               <tbody class="text-center">
                  @foreach ($somme as $s)
                     <tr>
                        <td>{{ $s->finalRSJ }}</td>
                        <td>{{ $s->finalComdamne }}</td>
                        <td>{{ $s->finalSomme  }}</td>
                        <td>{{ $s->finalInscrit }}</td>
                        <td>{{$s->finalRest }}</td> 
                     </tr>
                  @endforeach
               </tbody>
            </table> 
         </div>
      </div>
      <div class="row justify-content-center">
         <div class="col-md-8  d-flex justify-content-center align-items-center">
            <button  class=" btn bg-primary bg-opacity-100 fw-bolder text-light"type="button" onclick="printableDiv('printableArea')" >{{ __('msg.Print') }}</button>
         </div>
      </div>
   </div>
   
   
@endsection


@section('navbar2')
   <a  href="" class="fs navbar-brand text-white fw-bolder">
         {{ __('msg.statistique') }} / {{ __('msg.statistic_cas_civil') }}
   </a>
   
@endsection

<script>
   function printableDiv(printableAreaDivId) {
      var printContents = document.getElementById(printableAreaDivId).innerHTML;
      var originalContents = document.body.innerHTML;
      document.body.innerHTML = printContents;
      window.print();
      document.body.innerHTML = originalContents;
   }
</script>