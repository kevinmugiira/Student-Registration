<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">


{{--                @extends('website.master')--}}



{{--                @section('selection')--}}


{{--                    <div class="container-fluid pt-4 px-4">--}}
{{--                        <div class="row g-4">--}}
{{--                            <div class="col-sm-12 ">--}}
{{--                                <div class="bg-light rounded h-100 p-4">--}}
{{--                                    <h6 class="mb-4">View Profile</h6>--}}


{{--                                    <div class="panel-body">--}}
{{--                                        <div class="col-md-4 mb-4">--}}



{{--                                            --}}{{--                            @if(auth()->user()->image)--}}
{{--                                            <img src="{{asset('asset/img/toons.jpg')}}" width="260px" height="260px" />--}}
{{--                                            --}}{{--                            @else--}}
{{--                                            <img src="{{asset('asset/profile/dummy2.jpg')}}" width="100%" />--}}
{{--                                            --}}{{--                            @endif--}}
{{--                                        </div>--}}

{{--                                        <hr>--}}

{{--                                        <div class="col-md-4 mt-4 float-left">--}}
{{--                                            <p> <b>Firstname: </b>{{ $user->firstname }}</p>--}}
{{--                                            <p> <b>Lastname: </b>{{ $user->lastname }}</p>--}}
{{--                                        </div>--}}

{{--                                        --}}{{--                        @foreach($profile as $prof)--}}
{{--                                        <div class="col-md-12">--}}

{{--                                            <p> <b>Date Of Birth: </b>{{$profile->date_of_birth}}</p>--}}
{{--                                            <hr>--}}
{{--                                            <p> <b>Course: </b>{{$profile->course}}</p>--}}
{{--                                            <p> <b>Student ID: </b>{{$profile->student_id}}</p>--}}
{{--                                            <p> <b>Department: </b>{{$profile->department}}</p>--}}
{{--                                            <p><b>Email: </b>{{ $user->email }}</p>--}}
{{--                                            <p><b>Phone: </b> {{$profile->phone}}</p>--}}
{{--                                            <hr>--}}
{{--                                            <p><b>Country: </b>{{$profile->country}} </p>--}}
{{--                                            <p><b>City/Town: </b> {{$profile->city}} </p>--}}
{{--                                            <p><b>P.O BOX: </b> {{$profile->address}} </p>--}}
{{--                                            <p><b>Postal code: </b> {{$profile->zip}} </p>--}}

{{--                                            --}}{{--                                <a href=" {{url('profile/edit')}}" class="btn btn-info pull-right">Edit Profile</a>--}}
{{--                                        </div>--}}
{{--                                        --}}{{--                        @endforeach--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                            </section>--}}
{{--                        </div>--}}
{{--                    </div>--}}



{{--                @stop--}}




            </div>
        </div>
    </div>
</x-app-layout>
