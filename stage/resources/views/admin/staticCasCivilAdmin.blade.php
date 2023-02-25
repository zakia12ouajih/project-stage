@extends('admin.adminLayouts')

@section('content')
   <div class="row justify-content-center">
      <div class="col-md-8">
         <div id="printableArea">
            <h4 class="fw-bolder text-center mb-3">{{ __('msg.statistic_cas_civil') }}</h4>
            <table class="table table-hover table-bordered" name='cas_civil'>
               <thead >
                  <tr class="table-primary">
                     <th class="text-center" scope="col">{{ __('msg.cas1') }}</th>
                     <th class="text-center" scope="col">{{ __('msg.reste_derniere_session') }}</th>
                     <th class="text-center" scope="col">{{ __('msg.inscrit') }}</th>
                     <th class="text-center" scope="col">{{ __('msg.somme') }}</th>
                     <th class="text-center" scope="col">{{ __('msg.comdamne') }}</th>
                     <th class="text-center" scope="col">{{ __('msg.reste_sans_jugement') }}</th>
                     <th class="text-center" scope="col">{{ __('msg.date') }}</th>
                  </tr>
               </thead>
               {{-- {{ $sommerest }} --}}
               <tbody class="text-center">
                  @foreach ($data as $d)
                     <tr>
                        <td>{{ $d->cas_type->nom_type}}</td> 
                        <td>{{ $d->reste_derniere_session }}</td>
                        <td>{{ $d->inscrit }}</td>
                        <td>{{ $d->somme }}</td>
                        <td>{{ $d->comdamne }}</td>
                        <td>{{ $d->reste_sans_jugement }}</td>
                        <td>{{ $d->date }}</td>
                     </tr>
                  @endforeach
               </tbody>
            </table>
            <table class="table table-hover table-bordered">
               <thead >
                  <tr class="table-primary">
                     <th class="text-center" scope="col">{{ __('msg.reste_derniere_session') }}</th>
                     <th class="text-center" scope="col">{{ __('msg.inscrit') }}</th>
                     <th class="text-center" scope="col">{{ __('msg.somme') }}</th>
                     <th class="text-center" scope="col">{{ __('msg.comdamne') }}</th>
                     <th class="text-center" scope="col">{{ __('msg.reste_sans_jugement') }}</th>
                  </tr>
               </thead>
               {{-- {{ $sommerest }} --}}
               <tbody class="text-center">
                  <tr>
                     <td>{{$sommerest }}</td>
                     <td>{{ $sommeinscrit }}</td>
                     <td>{{ $sommeSum  }}</td>
                     <td>{{ $sommecomdamne }}</td>
                     <td>{{ $sommeRSJ }}</td>
                  </tr>
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

<script>
   function printableDiv(printableAreaDivId) {
      var printContents = document.getElementById(printableAreaDivId).innerHTML;
      var originalContents = document.body.innerHTML;
      document.body.innerHTML = printContents;
      window.print();
      document.body.innerHTML = originalContents;
   }
</script>