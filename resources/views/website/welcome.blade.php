@extends('website.master')



@section('selection')


    <!-- Blank Start -->
    <div class="container-fluid pt-4 px-4">

        @if(Session::get('status'))
            <div class="alert alert-success">
                {{ Session::get('status') }}
            </div>
        @endif

        <div class="row vh-100 bg-light rounded align-items-center justify-content-center mx-0">
            <div class="col-md-6 text-center">
                <h3>Welcome to your Account @ {{Auth()->user()['firstname']}}</h3>
                <p> Please create your profile</p>
            </div>
        </div>
    </div>
    <!-- Blank End -->




@stop
