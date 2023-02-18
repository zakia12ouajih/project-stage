@extends('admin.adminLayouts')

@section('content')
<div class="row justify-content-center">
   <div class="col-md-8">
      <h4 class="display-4 text-end mb-3">{{ __('msg.voir_cas') }}</h4>
      <table class="table table-hover table-bordered">
         <thead >
            <tr class="table-primary">
               <th class="text-center" scope="col">{{ __('msg.code_type') }}</th>
               <th class="text-center" scope="col">{{ __('msg.nom_type') }}</th>
               <th class="text-center" scope="col">{{ __('msg.modifier') }}</th>
               <th class="text-center" scope="col">{{ __('msg.supprimer') }}</th>
         </tr>
         </thead>
         <tbody class="text-center">
            @foreach ($data as $d)
               <tr>
                  <td>{{ $d->code_type }}</td>
                  <td>{{ $d->nom_type }}</td>
                  <td><a href="{{ URL('/admin/edit',$d->id) }}"><button class='btn btn-primary'>{{ __('msg.modifier') }}</button></a></td>
                  <td><a href="{{ URL('/admin/destroy',$d->id) }}"><button class='btn btn-danger'>{{ __('msg.supprimer') }}</button></a></td>
               </tr>
            @endforeach
         </tbody>
      </table>
      <div class="justify-content-center align-items-center d-flex">{{ $data->links() }}</div>
   </div>
</div>


@endsection