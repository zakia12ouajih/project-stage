@extends('user.userLayouts')

@section('content')
   <div class="row justify-content-center">
        <div class="col-md-8">
            <h4 class="display-4 text-end mb-3">{{ __('msg.voir_cas_civil') }}</h4>
            <table class="table table-hover table-bordered">
                <thead >
                    <tr class="table-primary">
                        <th class="text-center" scope="col">{{ __('msg.cas1') }}</th>
                        <th class="text-center" scope="col">{{ __('msg.reste_derniere_session') }}</th>
                        <th class="text-center" scope="col">{{ __('msg.inscrit') }}</th>
                        <th class="text-center" scope="col">{{ __('msg.somme') }}</th>
                        <th class="text-center" scope="col">{{ __('msg.comdamne') }}</th>
                        <th class="text-center" scope="col">{{ __('msg.reste_sans_jugement') }}</th>
                        <th class="text-center" scope="col">{{ __('msg.date') }}</th>
                        <th class="text-center" scope="col">{{ __('msg.userName') }}</th>
                    </tr>
                </thead>
                {{-- {{ $data }} --}}
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
                            <td>{{ $d->data_user_enter }}</td>
                
                        </tr>
                    @endforeach
                </tbody>
            </table>
            <div class="d-flex justify-content-center align-items-center">{{ $data->links() }}</div>
        </div>
   </div>
@endsection
@section('navbar2')
    <a  href="" class="navbar-brand ">
        {{ __('msg.HomePage') }}
    </a>
    <a class="px-1">hi</a>

@endsection