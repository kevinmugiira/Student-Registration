@extends('website.master')



@section('selection')


    <div class="container-fluid pt-4 px-4">
        <div class="row g-4">
            <div class="col-sm-12 ">
                <div class="bg-light rounded h-100 p-4">
                    <h6 class="mb-4">Edit Profile</h6>


{{--                    <div class="panel-body">--}}
{{--                        <div class="col-md-4 mb-4">--}}

                            @if(Session::has('message'))
                                <div class="alert alert-success" role="alert"> {{Session::get('message')}}</div>
                            @endif

                            <form action="{{url('/update/' . auth()->user()->id)}}"   method="POST" enctype="multipart/form-data">

                                @csrf

                                @method('PUT')

                                <div class="col-md-4">
                                    {{--                                    @if($newimage)--}}
                                    {{--                                        <img src="{{$newimage->temporaryUrl()}}" width="100%" />--}}

                                    @if(auth()->user()->profile->profile_photo_path)
                                        <img src="{{asset('uploads/'. auth()->user()->profile->profile_photo_path)}}" width="70%" />
                                    @else
                                        <img src="{{asset('asset/img/dummy2.jpg')}}" width="70%" />
                                    @endif
                                    <input type="file" name="profile_photo_path" class="fa-file form-control" wire:model="newimage">
                                </div>


                                                                <div class="col-md-6 mb-3">
                                                                    <label for="firstName" class="form-label">First Name</label>
                                                                    <input type="text" class="form-control" name="firstname" id="" value="">
                                                                </div>
                                                                <div class="col-md-6 mb-3">
                                                                    <label for="lastName" class="form-label">Last Name</label>
                                                                    <input type="text" class="form-control" name="lastname" id="" value="">
                                                                </div>


                                                                    <div class="col-md-6 mb-3">
                                                                        <label for="dateOfBirth" class="form-label">Date Of Birth</label>
                                                                        <input type="date" class="form-control" name="date_of_birth" id="" required>
                                                                    </div>
                                                                    <div class="col-md-6 mb-3">
                                                                        <label for="course" class="form-label">Course</label>
                                                                        <input type="text" class="form-control" name="course" id="" required>
                                                                    </div>
                                                                    <div class="col-md-6 mb-3">
                                                                        <label for="studentId" class="form-label">Student ID</label>
                                                                        <input type="text" class="form-control" name="student_id" id="" required>
                                                                    </div>
                                                                    <div class="col-md-6 mb-3">
                                                                        <label for="department" class="form-label">Department</label>
                                                                        <input type="text" class="form-control" name="department" id="" required>
                                                                    </div>

                                                                    <div class="col-md-6 mb-3">
                                                                        <label for="phone" class="form-label">Phone</label>
                                                                        <input type="text" class="form-control" name="phone" id="" required>
                                                                    </div>
                                                                    <div class="col-md-6 mb-3">
                                                                        <label for="country" class="form-label">Country</label>
                                                                        <input type="text" class="form-control" name="country" id="" required>
                                                                    </div>
                                                                    <div class="col-md-6 mb-3">
                                                                        <label for="city" class="form-label">City</label>
                                                                        <input type="text" class="form-control" name="city" id="" required>
                                                                    </div>
                                                                    <div class="col-md-6 mb-3">
                                                                        <label for="postAddress" class="form-label">P.O Box</label>
                                                                        <input type="number" class="form-control" name="address" id="" required>
                                                                    </div>
                                                                    <div class="col-md-6 mb-3">
                                                                        <label for="postalCode" class="form-label">Postal Code</label>
                                                                        <input type="number" class="form-control" name="zip" id="" required>
                                                                    </div>



                                                                    {{--                                <div class="col-md-8">--}}
{{--                                    <p><b>Firstname: </b>--}}
{{--                                    <div class="input-group">--}}
{{--												<span class="input-group-addon">--}}
{{--													<i class="fa fa-user"></i></span>--}}
{{--                                        <input type="text"--}}
{{--                                               name="firstname"--}}
{{--                                               class="form-control1"--}}
{{--                                               placeholder="Firstname"--}}
{{--                                               value="{{ auth()->user()->firstname }}"--}}
{{--                                               wire:model="firstname"> @error('firstname') <span>{{$message}}</span> @enderror--}}
{{--                                    </div></p>--}}
{{--                                    <p <b>Lastname: </b>--}}
{{--                                    <div class="input-group">--}}
{{--												<span class="input-group-addon">--}}
{{--													<i class="fa fa-user"></i></span>--}}
{{--                                        <input type="text"--}}
{{--                                               name="lastname"--}}
{{--                                               class="form-control1"--}}
{{--                                               placeholder="Lastname"--}}
{{--                                               value="{{ auth()->user()->lastname }}"--}}
{{--                                               wire:model="lastname">@error('lastname') <span>{{$message}}</span> @enderror--}}
{{--                                    </div></p>--}}
{{--                                    <p><b>Email: </b>--}}
{{--                                    <div class="input-group">--}}
{{--												<span class="input-group-addon">--}}
{{--													<i class="fa fa-envelope-o"></i></span>--}}
{{--                                        <input type="text"--}}
{{--                                               class="form-control1"--}}
{{--                                               placeholder="Email Address"--}}
{{--                                               value="{{auth()->user()->email}}">--}}
{{--                                    </div></p>--}}
{{--                                    <p><b>Phone: </b>--}}
{{--                                    <div class="input-group">--}}
{{--												<span class="input-group-addon">--}}
{{--													<i class="fa fa-mobile-phone"></i></span>--}}
{{--                                        <input type="text"--}}
{{--                                               name="phone"--}}
{{--                                               class="form-control1"--}}
{{--                                               placeholder="Phone"--}}
{{--                                               value="{{ auth()->user()->mobile }}"--}}
{{--                                               required--}}
{{--                                               wire:model="mobile">@error('mobile') <span>{{$message}}</span> @enderror--}}
{{--                                    </div></p>--}}
{{--                                    <hr>--}}
{{--                                    <p><b>Line1: </b>--}}
{{--                                    <div class="input-group">--}}
{{--												<span class="input-group-addon">--}}
{{--													<i class="fa fa-phone-square"></i></span>--}}
{{--                                        <input type="text"--}}
{{--                                               name="line1"--}}
{{--                                               class="form-control1"--}}
{{--                                               placeholder="Line 1"--}}
{{--                                               required--}}
{{--                                               wire:model="line1">@error('line1') <span>{{$message}}</span> @enderror--}}
{{--                                    </div> </p>--}}
{{--                                    <p><b>Line2: </b>--}}
{{--                                    <div class="input-group">--}}
{{--												<span class="input-group-addon">--}}
{{--													<i class="fa fa-phone-square"></i></span>--}}
{{--                                        <input type="text"--}}
{{--                                               name="line2"--}}
{{--                                               class="form-control1"--}}
{{--                                               placeholder="Line 2"--}}
{{--                                               wire:model="line2">--}}
{{--                                    </div> </p>--}}
{{--                                    <p><b>City/Town: </b>--}}
{{--                                    <div class="input-group">--}}
{{--												<span class="input-group-addon">--}}
{{--													<i class="fa fa-home"></i></span>--}}
{{--                                        <input type="text"--}}
{{--                                               name="city"--}}
{{--                                               class="form-control1"--}}
{{--                                               placeholder="City"--}}
{{--                                               required--}}
{{--                                               wire:model="city">@error('city') <span>{{$message}}</span> @enderror--}}
{{--                                    </div> </p>--}}
{{--                                    <p><b>County: </b>--}}
{{--                                    <div class="input-group">--}}
{{--												<span class="input-group-addon">--}}
{{--													<i class="fa fa-h-square"></i></span>--}}
{{--                                        <input type="text"--}}
{{--                                               name="county"--}}
{{--                                               class="form-control1"--}}
{{--                                               placeholder="County"--}}
{{--                                               required--}}
{{--                                               wire:model="county">@error('county') <span>{{$message}}</span> @enderror--}}
{{--                                    </div> </p>--}}
{{--                                    <p><b>Postal code: </b>--}}
{{--                                    <div class="input-group">--}}
{{--                                        <span class="input-group-addon"><i class="fa fa-map-pin"></i></span>--}}
{{--                                        <input type="text"--}}
{{--                                               name="postcode"--}}
{{--                                               class="form-control1"--}}
{{--                                               placeholder="Postal code"--}}
{{--                                               wire:model="postcode">@error('postcode') <span>{{$message}}</span> @enderror--}}
{{--                                    </div> </p>--}}
                                    <div class="pull-right" style="padding-top: 6px">
                                        <button type="submit" class="btn btn-info btn-default">Update</button>
                                    </div>

                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@stop
