@extends('user.userLayouts')

@section('content')
   <div class="row justify-content-center">
        <div class="col-md-8">
            <h4 class="display-8 text-center mb-3">{{ __('msg.voir_cas_civil') }}</h4>
            <table class="table table-hover table-bordered">
                <thead >
                    <tr class="table-primary">
                        <th class="text-center" scope="col">{{ __('msg.reste_sans_jugement') }}</th>
                        <th class="text-center" scope="col">{{ __('msg.comdamne') }}</th>
                        <th class="text-center" scope="col">{{ __('msg.somme') }}</th>
                        <th class="text-center" scope="col">{{ __('msg.inscrit') }}</th>
                        <th class="text-center" scope="col">{{ __('msg.reste_derniere_session') }}</th>
                        <th class="text-center" scope="col">{{ __('msg.cas1') }}</th>
                        <th class="text-center" scope="col">{{ __('msg.date') }}</th>
                        
                    </tr>
                </thead>
                {{-- {{ $data }} --}}
                <tbody class="text-center">
                    @foreach ($data as $d)
                        <tr>
                            <td>{{ $d->reste_sans_jugement }}</td>
                            <td>{{ $d->comdamne }}</td>
                            <td>{{ $d->somme }}</td>
                            <td>{{ $d->inscrit }}</td>
                            <td>{{ $d->reste_derniere_session }}</td>
                            <td>{{ $d->cas_type->nom_type}}</td> 
                            <td>{{ $d->date }}</td>
                            
                            
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
   </div>
@endsection
@section('navbar2')
    <a  href="" class="fs navbar-brand text-light fw-bolder ">
        {{ __('msg.cas_civil') }}  / {{ __('msg.voir_cas_civil') }}
    </a>
    <a class="px-1">hi</a>

@endsection