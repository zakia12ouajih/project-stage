@extends('user.userlayouts')

@section('content')
<div class="container">
    <div class="row box    d-flex justify-content-center align-items-center">
        <div class="col-3 skyblue rounded text-end  mx-4"  >
            <p>{{ __('msg.inscrit') }}</p>
            <h3>:{{ __('msg.somme') }}</h3>
            <p></p>
        </div>
        <div class="col-3 purple rounded  mx-4 text-end"  >
            <p>{{ __('msg.reste_derniere_session') }}</p>
            <h3>:{{ __('msg.somme') }}</h3>
            <p></p>
        </div>
        <div class="col-3 yellow rounded mx-4 text-end"  >
            <p>{{ __('msg.comdamne') }}</p>
            <h3>:{{ __('msg.somme') }}</h3>
            <p></p>
        </div>
        

        </div>
    </div>
</div>
@endsection
@section('navbar2')
    <a  href="" class="navbar-brand ">
        {{ __('msg.HomePage') }}
    </a>
    <a class="px-1">hi</a>

@endsection
