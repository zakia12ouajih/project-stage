@extends('admin.adminLayouts')

@section('content')
   <div class="row justify-content-center">
      <div class="col-md-8">
         <div class='row justify-content-between'>
            <div class="col-6">
               <a href="/admin/createUser" data-bs-toggle="modal" data-bs-target="#modalIdAdd"> <button class="btn btn-primary mb-3">{{ __('msg.ajouter_user') }}</button></a>
               @include('admin.user.userPopUpAdd')
            </div>
            <div class="col-6">
               <h4 class="fw-bolder text-end mb-3">{{ __('msg.voir_users') }}</h4>
            </div>
         </div>
            <table class="table table-hover table-bordered" name='cas_civil'>
               <thead >
                  <tr class="table-primary">
                     <th class="text-center" scope="col">{{ __('msg.supprimer') }}</th>
                     <th class="text-center" scope="col">{{ __('msg.modifier') }}</th>
                     <th class="text-center" scope="col">{{ __('msg.firstName') }}</th>
                     <th class="text-center" scope="col">{{ __('msg.lastName') }}</th>
                     <th class="text-center" scope="col">{{ __('msg.userName') }}</th>
                     <th class="text-center" scope="col">{{ __('msg.email') }}</th>
                     <th class="text-center" scope="col">{{ __('msg.role') }}</th>
                     
                  </tr>
               </thead>
               <tbody class="text-center">
                  @foreach ($data as $d)
                     <tr>
                        <td><a href="{{ URL('/admin/destroyUser',$d->id) }}"><button class='btn btn-danger'>{{ __('msg.supprimer') }}</button></a></td>
                        <td><a href="#modalIdEdit{{ $d->id }}"  data-bs-toggle="modal" ><button class='btn btn-primary'>{{ __('msg.modifier') }}</button></a></td>
                        <td>{{ $d->firstName}}</td> 
                        <td>{{ $d->lastName}}</td>
                        <td>{{ $d->userName }}</td>
                        <td>{{ $d->email }}</td>
                        <td>{{ $d->role }}</td>
                        @include('admin.user.userPopUpEdit')
                     </tr>
                  @endforeach
               </tbody>
            </table>
            <div class="justify-content-center align-items-center d-flex">{{ $data->links() }}</div>
      </div>
   </div>
   {{-- <h2>hello</h2> --}}
   
@endsection

@section('navbar2')
   <a  href="" class="fs navbar-brand text-white fw-bolder">
         {{ __('msg.users') }} / {{ __('msg.voir_user') }}
   </a>
   
@endsection