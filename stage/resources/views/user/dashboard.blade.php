@extends('user.userlayouts')

@section('content')
<div class="container">
    <div class="row box    d-flex justify-content-center align-items-center">
        <div class="col-3 skyblue rounded text-end  mx-4"  >
            <p>{{ __('msg.inscrit') }}</p>
            <h3>:{{ __('msg.somme') }}</h3>
            <p></p>
        </div>
        <div class="col-3 red rounded  mx-4 text-end"  >
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
    <a  href="" class="fs navbar-brand text-white fw-bolder">
         {{ __('msg.HomePage') }} 
    </a>
    <h2 class="px-1 text-white"><svg xmlns="http://www.w3.org/2000/svg" width="19" height="19" fill="currentColor" class="bi bi-house-fill" viewBox="0 0 16 16">
        <path d="M8.707 1.5a1 1 0 0 0-1.414 0L.646 8.146a.5.5 0 0 0 .708.708L8 2.207l6.646 6.647a.5.5 0 0 0 .708-.708L13 5.793V2.5a.5.5 0 0 0-.5-.5h-1a.5.5 0 0 0-.5.5v1.293L8.707 1.5Z"/>
        <path d="m8 3.293 6 6V13.5a1.5 1.5 0 0 1-1.5 1.5h-9A1.5 1.5 0 0 1 2 13.5V9.293l6-6Z"/>
      </svg>
    </h2>
@endsection
