@extends('website.master')



@section('selection')


    <div class="container-fluid pt-4 px-4">
        <div class="row g-4">
            <div class="col-sm-12 ">

                @if(Session::get('status'))
                    <div class="alert alert-success">
                        {{ Session::get('status') }}
                    </div>
                @endif

                <div class="bg-light rounded h-100 p-4">
                    <h6 class="mb-4">View Profile</h6>


                    <div class="panel-body">
                        <div class="col-md-4 mb-4">



                           @if(Auth()->user()->profile->profile_photo_path)
                               <img src="{{asset('uploads/'. Auth()->user()->profile->profile_photo_path)}}" width="260px" height="260px" />
{{--                                <img src="{{asset($profile->profile_photo_path)}}" width="260px" height="260px" />--}}
                            @else
                               <img src="{{asset('asset/img/dummy2.jpg')}}" width="70%" />
                            @endif
                        </div>

                        <hr>

                        <div class="col-md-4 mt-4 float-left">
                            <p> <b>Firstname: </b>{{ Auth()->user()['firstname'] }}</p>
                            <p> <b>Lastname: </b>{{ Auth()->user()['lastname'] }}</p>
                        </div>

{{--                        @foreach($profile as $prof)--}}
                        <div class="col-md-12">

                            <p> <b>Date Of Birth: </b>{{Auth()->user()->profile->date_of_birth}}</p>
                            <hr>
                            <p> <b>Course: </b>{{Auth()->user()->profile->course}}</p>
                            <p> <b>Student ID: </b>{{Auth()->user()->profile->student_id}}</p>
                            <p> <b>Department: </b>{{Auth()->user()->profile->department}}</p>
                            <p><b>Email: </b>{{ Auth()->user()->email }}</p>
                            <p><b>Phone: </b> {{Auth()->user()->profile->phone}}</p>
                            <hr>
                            <p><b>Country: </b>{{Auth()->user()->profile->country}} </p>
                            <p><b>City/Town: </b> {{Auth()->user()->profile->city}} </p>
                            <p><b>P.O BOX: </b> {{Auth()->user()->profile->address}} </p>
                            <p><b>Postal code: </b> {{Auth()->user()->profile->zip}} </p>

                            <a href=" {{url('edit/'.auth()->user()->id)}}" class="btn btn-info pull-right">Edit Profile</a>
                            <a href=" {{url('delete/'.auth()->user()->id)}}" class="btn btn-danger pull-right">Delete Profile</a>
                        </div>
{{--                        @endforeach--}}
                    </div>
                </div>
            </div>
            </section>
        </div>
    </div>



@stop



