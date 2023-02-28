@extends('admin.adminLayouts')

@section('content')
   <div class="row justify-content-center">
      <div class="col-md-8">
         <h4 class="fw-bolder text-center mb-3">{{ __('msg.voir_users') }}</h4>
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
                        <td><a href="{{ URL('/admin/editUser',$d->id) }}"><button class='btn btn-primary'>{{ __('msg.modifier') }}</button></a></td>
                        <td>{{ $d->firstName}}</td> 
                        <td>{{ $d->lastName}}</td>
                        <td>{{ $d->userName }}</td>
                        <td>{{ $d->email }}</td>
                        <td>{{ $d->role }}</td>
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