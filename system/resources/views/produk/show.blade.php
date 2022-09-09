@extends('template.base')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12 mt-5"></div>
    </div>
    <div class="card">
        <div class="card-header">
            Detail Data User
        </div>
        <div class="card-body">
            <h3>{{$produk->nama}}</h3>
            <hr>
            <p>
                {{"@".$produk->username}} |
                Email : {{$produk->email}} |
                
            </p>
        </div>
    </div>
</div>
@endsection