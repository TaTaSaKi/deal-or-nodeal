@extends('layouts.app')

@section('title', 'Detail')

@section('contents')
   
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-md-10 mx-auto">
                <div class="btn-group-lg text-center">  
                    <p>{{ $datafound['description']}}</p>
                </div>
            </div>
        </div>
@endsection