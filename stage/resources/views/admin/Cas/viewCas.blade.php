@extends('admin.adminLayouts')

@section('content')
<div class="row justify-content-center">
   <div class="col-md-8">
      <div class='row justify-content-between'>
            <div class="col-6">
               <a href="/admin/form" data-bs-toggle="modal" data-bs-target="#modalCasFrom"> <button class="btn btn-primary mb-3">{{ __('msg.ajouter_cas') }}</button></a>
               @include('admin.cas.formCas')
            </div>
            <div class="col-6">
               <h4 class="fw-bolder text-end">{{ __('msg.cas') }}</h4>
            </div>
         </div>
      <table class="table table-hover table-bordered">
         <thead >
            <tr class="table-primary">
               <th class="text-center" scope="col">{{ __('msg.supprimer') }}</th>
               <th class="text-center" scope="col">{{ __('msg.modifier') }}</th>
               <th class="text-center" scope="col">{{ __('msg.code_type') }}</th>
               <th class="text-center" scope="col">{{ __('msg.nom_type') }}</th>
               <th class="text-center" scope="col">{{ __('msg.genre') }}</th>
         </tr>
         </thead>
         <tbody class="text-center">
            @foreach ($data as $d)
               <tr>
                  <td><a href="{{ URL('/admin/destroy',$d->id) }}"><button class='btn btn-danger'>{{ __('msg.supprimer') }}</button></a></td>
                  <td><a href="#modalCasEdit{{ $d->id }}"  data-bs-toggle="modal" ><button class='btn btn-primary'>{{ __('msg.modifier') }}</button></a></td>
                  <td>{{ $d->code_type }}</td>
                  <td>{{ $d->nom_type }}</td>
                  <td>{{ $d->genre }}</td>
                  @include('admin.cas.editCas')
               </tr>
            @endforeach
         </tbody>
      </table>
      <div class="justify-content-center align-items-center d-flex">{{ $data->links() }}</div>
   </div>
</div>


@endsection

@section('navbar2')
   <a  href="" class="fs navbar-brand text-white fw-bolder">
         {{ __('msg.voir_cas') }} 
   </a>
   
@endsection