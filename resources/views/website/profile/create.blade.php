@extends('website.master')



@section('selection')

    <div class="container-fluid pt-4 px-4">
        <div class="row g-4">
            <div class="col-sm-12 ">
                <div class="bg-light rounded h-100 p-4">
                    <h6 class="mb-4">Profile Edit</h6>
                    <form action="{{url('profile/store')}}" method="post" enctype="multipart/form-data">

                        @csrf

                        <div class="col-md-4 mb-3">
                            <label for="formFile" class="form-label">Choose Profile Picture</label>
                            <input class="form-control" type="file" name="profile_photo_path" id="formFile">
                        </div>
{{--                        <div class="col-md-12">--}}
{{--                            <div class="col-md-6 mb-3">--}}
{{--                                <label for="firstName" class="form-label">First Name</label>--}}
{{--                                <input type="text" class="form-control" name="firstname" id="" value="default value">--}}
{{--                            </div>--}}
{{--                            <div class="col-md-6 mb-3">--}}
{{--                                <label for="lastName" class="form-label">Last Name</label>--}}
{{--                                <input type="text" class="form-control" name="lastname" id="" value="">--}}
{{--                            </div>--}}
{{--                        </div>--}}
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

                        <button type="submit" class="btn btn-primary">Create Profile</button>
                    </form>
                </div>
            </div>

        </div>
    </div>
    <!-- Form End -->

@stop

