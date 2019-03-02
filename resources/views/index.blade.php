@extends('layouts.app')

@section('title', 'Home')

@section('contents')
   
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-md-10 mx-auto">
                <div class="btn-group-lg text-center">
                    @foreach ($datas as $data)
                    <a class="btn btn-primary" href="detail/{{$data['id']}}">{{ $data['name'] }}</a>                       
                    @endforeach
                </div>
            </div>
        </div>
    </div>
    <br><br>

@endsection