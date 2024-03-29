@extends('layouts.app')

@section('content')
    <script src="{{ asset('js/app.js') }}"></script>
    <script src="{{ asset('js/jquery-1.11.1.js') }}"></script>
    <script src="{{ asset('js/jquery-1.11.1.min.js') }}"></script>


    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    {{-- Font Awesome --}}
    <script src="https://kit.fontawesome.com/83a0cd4555.js" crossorigin="anonymous"></script>



    <div class="container rounded bg-white mt-5 ">
        <div class="row py-2">

            @foreach($profileinfo as $profileinfo)
            {{-- PROFILE ROW --}}
            <div class="col-md-4 ">
                <div class="d-flex flex-column align-items-center text-center p-3 py-5">
                    <img class="rounded-circle mt-5" width="200px" height="200px" style="object-fit: cover"
                        src="/images/uploads/avatars_profileinfotable/{{ $profileinfo->avatar }}">
                        @endforeach
                    <span class="font-weight-bold">
                        {{ $profileinfo->firstname }} {{ $profileinfo->middlename }} {{ $profileinfo->lastname }}
                    </span></span><span>{{ Auth::user()->email }}</span>

                    <a href="{{ route('info.profileinfoedit') }}"><button class="btn btn-primary round mt-2 ">Edit
                            Profile </button></a>

                </div>
            </div>

            <div class="col-md-8 ">
                <div class="p-3 py-5">
                    <div class="row mt-2">
                        <div class="d-flex justify-content-between align-items-center mb-3">
                            <h4 class="text-right">Profile</h4>
                        </div>

                        <div class="col-md-6 p-2 ">
                            {{-- Full Name --}}
                            <label class="labels ">Full Name</label>
                            <input type="text" class="form-control fs-5"
                                value="{{ $profileinfo->firstname }} {{ $profileinfo->middlename }} {{ $profileinfo->lastname }} {{ $profileinfo->suffix }}"
                                disabled>
                        </div>
                        {{-- Birthday --}}
                        <div class="col-md-3 p-2"><label class="labels">Birthday</label>
                            <input type="date" name="bday" id="bday" class="form-control fs-5"
                                value="{{$profileinfo->bday}}"disabled>
                        </div>

                        {{-- Age --}}

                        <div class="col-md-3 p-2 ">
                            <label class="labels fs-6">Age</label><input type="text" name="age" id="age"
                                class="form-control fs-5" value="{{ $profileinfo->age }}" disabled>
                        </div>

                    </div>
                    <div class="row mt-2">

                        {{-- Mobile Number --}}
                        <div class="col-md-6 p-2">
                            <label class="labels fs-6">Mobile Number</label><input type="text" name="mobile_no"
                                id="mobile_no" class="form-control fs-5" value="{{ $profileinfo->mobile_no }}" disabled>
                        </div>

                        {{-- Telephone Number --}}
                        <div class="col-md-6 p-2"><label class="labels fs-6">Telephone Number</label><input type="text"
                                name="telno" id="telno" class="form-control fs-5" value="{{ $profileinfo->telno }}"
                                disabled></div>

                    </div>

                    {{-- HEIGHT IN CENTIMETER --}}
                    <div class="row mt-3">
                        <div class="col-md-3 p-2"><label class="labels">Height in Centimeter</label>
                            <input type="number" name="centimeter" id="centimeter" class="form-control fs-5"
                                style="width: 100%" value="{{ $profileinfo->centimeter }}" step=".01" placeholder="cm"
                                disabled>
                        </div>

                        {{-- HEIGHT IN INCHES --}}
                        <div class="col-md-3 p-2"><label class="labels">Height in Inches</label>
                            <input type="number" name="inches" id="inch" class="form-control fs-5"
                                style="width: 100%" value="{{ $profileinfo->inches }}" style=" width:100%" step=".01"
                                placeholder="inches" disabled>

                        </div>

                        {{-- Title --}}
                        <div class="col-md-3 p-2"><label class="labels">Title</label> <select id="selTitle" name="title"
                                style=" width:100%" value="{{ $profileinfo->title }}" class="form-control fs-5" disabled>
                                <option hidden>{{ $profileinfo->title }}</option>
                            </select></div>

                        {{-- Gender --}}
                        <div class="col-md-3 p-2"><label class="labels">Sex</label><select name="gender" id="selGender"
                                style=" width:100%" class="form-control fs-5" disabled>
                                <option hidden>{{ $profileinfo->gender }}</option>

                            </select></div>

                    </div>


                </div>
            </div>
        </div>


        {{-- ADDRESS ROW --}}
        <div class="row d-flex align-items-center">
            <div class="d-flex justify-content-between align-items-center">
                <h4 class="text-right">Address</h4>
            </div>

            {{-- STREET --}}
            <div class="col-md-4 p-2"><label class="labels">Street</label>
                <input type="text" name="houseNo_streetName" id="houseNo_streetName" class="form-control"
                    value="{{ $profileinfo->houseNo_streetName }}" disabled>
            </div>

            {{-- BARANGAY --}}
            <div class="col-md-4 p-2"><label class="labels">Barangay</label>
                <select name="brgy" id="barangay" class="form-control" disabled>
                    <option hidden>{{ $profileinfo->brgy }}</option>

                </select>
            </div>

            {{-- Municipality OR CITY --}}
            <div class="col-md-4 p-2"><label class="labels">Municipality / City</label>
                <select class="form-control" id="municipality"name="municipality" disabled>
                    <option hidden>{{ $profileinfo->municipality }}</option>

                </select>
            </div>


        </div>

        <div class="row d-flex py-2 align-items-center">

            {{-- PROVINCE --}}
            <div class="col-md-4 p-2"><label class="labels">Province</label>
                <select class="form-control" id="province"name="province" disabled>
                    <option hidden>{{ $profileinfo->province }}</option>

                </select>
            </div>

            {{-- COUNTRY --}}
            <div class="col-md-4 p-2"><label class="labels">Country</label>
                <select class="form-control" id="country"name="country" disabled>
                    <option hidden>{{ $profileinfo->country }}</option>

                </select>
            </div>

            {{-- POSTAL CODE --}}
            <div class="col-md-4 p-2"><label class="labels">Postal Code</label>
                <input type="text" name="postal_code" id="postal_code" class="form-control"
                    value="{{ $profileinfo->postal_code }}" disabled>
            </div>

        </div>

        {{-- MEDICAL ROW --}}
        <div class="row d-flex">
            <div class="d-flex justify-content-between align-items-center">
                <h4 class="text-right">Medical Information</h4>
            </div>

            {{-- WEIGHT IN KILOGRAMS --}}
            <div class="col-md-2 p-2"><label class="labels">Weight in Kilograms</label>
                <input type="number" name="kilogram" id="kg" class="form-control "
                    value="{{ $profileinfo->kilogram }}" step=".01" placeholder="kg" disabled>

            </div>

            {{-- WEIGHT IN POUNDS --}}
            <div class="col-md-2 p-2 "><label class="labels">Weight in Pounds</label>
                <input type="number" name="pounds" id="lb" class="form-control "
                    value="{{ $profileinfo->pounds }}" step=".01" placeholder="lb" disabled>

            </div>

            {{-- BMI --}}
            <div class="col-md-3 p-2"><label class="labels">BMI</label>
                <input type="number" name="bmi" id="bmi" class="form-control"
                    value="{{ $profileinfo->bmi }}" disabled disabled>
            </div>


            {{-- PHILHEALTH NUMBER --}}
            <div class="col-md-3 p-2"><label class="labels"><b style="color: red">*</b>
                    PhilHealth Number</label>
                <input type="number" name="philhealth_no" id="philhealth_no"
                    class="form-control @error('philhealth_no') is-invalid @enderror"
                    value="{{ $profileinfo->philhealth_no }}" placeholder="##-#########-#" required disabled>


                @error('philhealth_no')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>

            {{-- MEMBER CATEGORY --}}
            <div class="col-md-2 p-2"><label class="labels"><b style="color: red">*</b> Member
                    Category</label>
                <select name="member_category" id="selMemberCategory"
                    class="form-select form-select-md @error('member_category') is-invalid @enderror" disabled>

                    <option hidden>{{ $profileinfo->member_category }}</option>
                    {{-- @if ($query == null){
                        <option hidden>Choose Member Category</option>
                    }
                    @else{
                        <option hidden>{{ Auth::user()->member_category }}</option>
                    }
                    @endif --}}
                </select>
            </div>



            {{-- HEALTH INSURANCE --}}
            <div class="col-md-4 p-2"><label class="labels"><b style="color: red">*</b> Health
                    Insurance</label>
                <input type="number" name="health_insurance" id="health_insurance"
                    class="form-control @error('health_insurance') is-invalid @enderror"
                    value="{{ $profileinfo->health_insurance }}" required disabled>
                @error('health_insurance')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>



            {{-- MEMBER Number --}}
            <div class="col-md-3 p-2"><label class="labels"><b style="color: red">*</b>
                    Membership Number</label>
                <input type="number" name="membership_no" id="membership_no"
                    class="form-control @error('membership_no') is-invalid @enderror"
                    value="{{ $profileinfo->membership_no }}" required disabled>
                @error('membership_no')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>

            {{-- PLAN NAME --}}
            <div class="col-md-3 p-2"><label class="labels"><b style="color: red">*</b> Plan
                    Name</label>
                <input type="text" name="plan_name" id="plan_name"
                    class="form-control @error('plan_name') is-invalid @enderror" value="{{ $profileinfo->plan_name }}"
                    required disabled>
                @error('plan_name')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
        </div>



    </div>
@endsection
