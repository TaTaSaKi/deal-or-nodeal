@extends('layouts.app')
@section('title', 'profile')

@section('contents')
   
    
    <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-5 text-center">
                    <img class="img-profile rounded-circle" src="{{asset($picture)}}">       
                </div>
                <div class="col-md-5 align-self-center text-center">
                    <div>
                        {{$name}}
                    </div>
                    <div>
                        {{$email}}
                    </div>
                </div>

                
            </div>
    </div>
@endsection