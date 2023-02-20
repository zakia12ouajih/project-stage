@extends('user.userlayouts')

@section('content')
<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card">
                <div class="card-body ">
                    <form method="POST" action="/user/form/add">
                        @csrf
                        <div class="row mb-3 mt-3 d-flex justify-content-center align-items-center ">
                            <div class="col-8 ">
                                <input id="code_type" type="text" class=" text-end form-control " name="code_type"/>
                            </div>
                            <label for="code_type" class="col-3 col-form-label text-end">code type</label>
                        </div>
                        <div class="row mb-3  d-flex justify-content-center align-items-center">
                            <div class="col-8">
                                <input id="nom_type" type="text" class="text-end form-control " name="nom_type" >
                            </div>
                            <label for="nom_type" class="col-3 col-form-label text-end">nom type</label>
                        </div>
                        <div class="row mb-3 mt-3 d-flex justify-content-center align-items-center ">
                            <div class="col-8 ">
                                <input type="submit" value="envoyer"/>
                            </div>
                        </div>
                    </form>    
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
