@extends('admin.adminLayouts')

@section('content')
   <div class="row justify-content-center">
   <div class="col-md-8">
      <h4 class="fw-bolder text-center mb-3">{{ __('msg.voir_cas_delis') }}</h4>
      <table class="table table-hover table-bordered">
         <thead >
            <tr class="table-primary">
               <th class="text-center" scope="col">{{ __('msg.supprimer') }}</th>
               <th class="text-center" scope="col">{{ __('msg.modifier') }}</th>
               <th class="text-center" scope="col">{{ __('msg.reste_sans_jugement') }}</th>
               <th class="text-center" scope="col">{{ __('msg.comdamne') }}</th>
               <th class="text-center" scope="col">{{ __('msg.somme') }}</th>
               <th class="text-center" scope="col">{{ __('msg.inscrit') }}</th>
               <th class="text-center" scope="col">{{ __('msg.reste_derniere_session') }}</th>
               <th class="text-center" scope="col">{{ __('msg.date') }}</th>
               <th class="text-center" scope="col">{{ __('msg.userName') }}</th>
               <th class="text-center" scope="col">{{ __('msg.cas1') }}</th>
         </tr>
         </thead>
         <tbody class="text-center">
            @foreach ($data as $d)
               <tr>
                  <td><a href="{{ URL('/admin/destroyDelis',$d->id) }}"><button class='btn btn-danger'>{{ __('msg.supprimer') }}</button></a></td>
                  <td><a href="{{ URL('/admin/editDelis',$d->id) }}"><button class='btn btn-primary'>{{ __('msg.modifier') }}</button></a></td>
                  <td>{{ $d->reste_sans_jugement }}</td>
                  <td>{{ $d->comdamne }}</td>
                  <td>{{ $d->somme }}</td>
                  <td>{{ $d->inscrit }}</td>
                  <td>{{ $d->reste_derniere_session }}</td>
                  <td>{{ $d->date }}</td>
                  <td>{{ $d->data_user_enter }}</td>
                  <td>{{ $d->cas_type->nom_type}}</td>
                  
                  

               </tr>
            @endforeach
         </tbody>
      </table>
      {{-- <div class="d-flex justify-content-center align-items-center">
         {{ $data->links() }}
      </div> --}}
   </div>
</div>
@endsection