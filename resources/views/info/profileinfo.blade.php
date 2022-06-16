@extends('layouts.app')

@section('content')
    <div class="container mt-5">
        <div class="row">
            <div class="container rounded bg-white mt-5 mb-5">
                <div class="row">

                    {{-- LEFT SIDE WITH IMAGE --}}
                    <div class="col-md-3 border-right">
                        <div class="d-flex flex-column align-items-center text-center p-3 py-5">

                            <img class="rounded-circle mt-5" width="150px"
                                src="https://cdn.pixabay.com/photo/2015/10/05/22/37/blank-profile-picture-973460_640.png">

                            <span class="font-weight-bold p-2" style="font-size: 120%">{{ Auth::user()->fname }}
                                {{ Auth::user()->mname }} {{ Auth::user()->lname }}</span>
                            <span class="text-black-50">{{ Auth::user()->email }}</span>


                        </div>
                    </div>

                    {{-- MIDDLE SECTION --}}
                    <div class="col-md-5 border-right">
                        <div class="p-3 py-5">
                            <div class="d-flex justify-content-between align-items-center mb-3">
                                <h4 class="text-right">Your Profile</h4>
                            </div>

                            {{-- NAME --}}
                            <div class="row mt-2">

                                {{-- FIRST NAME --}}
                                <div class="col-md-6"><label class="labels">First Name</label>
                                    <input type="text" name="fname" id="fname" class="form-control"
                                        value="{{ Auth::user()->fname }}" disabled>
                                </div>

                                {{-- MIDDLE NAME --}}
                                <div class="col-md-6"><label class="labels">Middle Name</label>
                                    <input type="text" name="mname" id="mname" class="form-control"
                                        value="{{ Auth::user()->mname }}" disabled>
                                </div>

                                {{-- LAST NAME --}}
                                <div class="col-md-6 p-2"><label class="labels">Last Name</label>
                                    <input type="text" name="lname" id="lname" class="form-control"
                                        value="{{ Auth::user()->lname }}" disabled>
                                </div>

                                {{-- PATIENT ID --}}
                                <div class="col-md-6 p-2">
                                    <label class="labels">Patient ID</label>
                                    <span style="font-weight: bold"
                                        class="form-control">{{ Auth::user()->patient_id }}</span>
                                </div>

                            </div>

                            {{-- OTHER STUFF --}}
                            <div class="row mt-2">

                                {{-- BDAY --}}
                                <div class="col-md-6"><label class="labels">Birthday</label>
                                    <input type="date" name="bday" id="bday" class="form-control"
                                        value="{{ Auth::user()->bday }}" disabled>
                                </div>

                                {{-- SUFFIX --}}
                                <div class="col-md-6"><label class="labels">Suffix</label>
                                    <input type="text" name="suffix" id="suffix" class="form-control"
                                        value="{{ Auth::user()->suffix }}" disabled>
                                </div>

                                {{-- AGE --}}
                                <div class="col-md-6 p-2"><label class="labels">Age</label>
                                    <input type="text" name="age" id="age" class="form-control"
                                        value="{{ Auth::user()->age }}" disabled>
                                </div>

                                {{-- GENDER --}}
                                <div class="col-md-6 p-2"><label class="labels">Gender</label>
                                    <input type="text" name="gender" id="gender" class="form-control"
                                        value="{{ Auth::user()->gender }}" disabled>
                                </div>

                                {{-- TELEPHONE NUMBER --}}
                                <div class="col-md-6 p-2"><label class="labels">Tel (Home)</label>
                                    <input type="number" name="telno" id="telno" class="form-control"
                                        :value="old('telno')" disabled>
                                </div>

                                {{-- MOBILE NUMBER --}}
                                <div class="col-md-6 p-2"><label class="labels">Mobile No.</label>
                                    <input type="number" name="mobile_no" id="mobile_no" class="form-control"
                                        :value="old('mobile_no')" disabled>
                                </div>

                                {{-- TITLE --}}
                                <div class="col-md-6 p-2"><label class="labels">Title</label>
                                    <select id="selTitle" name="title" value="{{ Auth::user()->title }}"
                                        class="form-control" disabled>
                                        <option hidden>{{ Auth::user()->title }}</option>

                                    </select>

                                </div>



                            </div>

                            <div class="d-flex justify-content-between align-items-center mb-3">
                                <h4 class="text-right ">Address</h4>
                            </div>

                            {{-- ADRESS --}}
                            <div class="row mt-2">

                                {{-- STREET --}}
                                <div class="col-md-6"><label class="labels">Street</label>
                                    <input type="text" name="houseNo_streetName" id="houseNo_streetName"
                                        class="form-control" value="{{ Auth::user()->houseNo_streetName }}" disabled>
                                </div>

                                {{-- POSTAL CODE --}}
                                <div class="col-md-6"><label class="labels">Postal Code</label>
                                    <input type="text" name="postal_code" id="postal_code" class="form-control"
                                        value="{{ Auth::user()->postal_code }}" disabled>
                                </div>

                                {{-- BARANGAY --}}
                                <div class="col-md-6 p-2"><label class="labels">Barangay</label>
                                    <select name="brgy" id="selBrgy" class="form-control" disabled>
                                        <option hidden>{{ Auth::user()->brgy }}</option>

                                    </select>
                                </div>

                                {{-- mUNICIPALITY OR CITY --}}
                                <div class="col-md-6 p-2"><label class="labels">Municipality / City</label>
                                    <select class="form-control" id="selMunicipality" name="municipality" disabled>
                                        <option hidden>{{ Auth::user()->municipality }}</option>

                                    </select>

                                </div>

                                {{-- PROVINCE --}}
                                <div class="col-md-6 p-2"><label class="labels">Province</label>
                                    <select class="form-control" id="selProvince" name="province" disabled>
                                        <option hidden>{{ Auth::user()->province }}</option>

                                    </select>
                                </div>



                                {{-- COUNTRY --}}
                                <div class="col-md-6 p-2"><label class="labels">Country</label>
                                    <select class="form-control" id="selCountry" name="country" disabled>
                                        <option hidden>{{ Auth::user()->country }}</option>

                                    </select>
                                </div>



                            </div>
                        </div>
                    </div>

                    {{-- RIGHT SIDE (MEDICAL INFORMATION) --}}
                    <div class="col-md-4">
                        <div class="p-3 py-5">
                            <h4 class="text-right mb-3">Medical Information</h4>
                            {{-- <div class="d-flex justify-content-between align-items-center experience">

                            </div> --}}

                            <div class="row mt-2">

                                {{-- HEIGHT IN CENTIMETER --}}
                                <div class="col-md-6"><label class="labels">Height in Centimeter</label>
                                    <input type="number" name="centimeter" id="centimeter" class="form-control"
                                        style="width:85%" :value="old('centimeter')" step=".01" placeholder="cm" disabled>

                                </div>

                                {{-- HEIGHT IN INCHES --}}
                                <div class="col-md-6"><label class="labels">Height in Inches</label>
                                    <input type="number" name="inches" id="inch" class="form-control"
                                        :value="old('inch')" style=" width:85%" step=".01" placeholder="inches" disabled>

                                </div>

                                {{-- WEIGHT IN KILOGRAMS --}}
                                <div class="col-md-6 p-2"><label class="labels">Weight in Kilograms</label>
                                    <input type="number" name="kilogram" id="kg" class="form-control"
                                        value="{{ Auth::user()->kg }}" style=" width:85%" step=".01" placeholder="kg"
                                        disabled>

                                </div>

                                {{-- WEIGHT IN POUNDS --}}
                                <div class="col-md-6 p-2"><label class="labels">Weight in Pounds</label>
                                    <input type="number" name="pounds" id="lb" class="form-control"
                                        value="{{ Auth::user()->cm }}" style=" width:85%" step=".01" placeholder="lb"
                                        disabled>

                                </div>

                                {{-- BMI --}}
                                <div class="col-md-6 p-2"><label class="labels">BMI</label>
                                    <input type="number" name="bmi" id="bmi" class="form-control"
                                        value="{{ Auth::user()->bmi }}" disabled disabled style="width:85%">
                                </div>

                                <div class="py-3"></div>

                                <div class="row mt-2">

                                    {{-- PHILHEALTH NUMBER --}}
                                    <div class="col-md-6"><label class="labels"><b style="color: red">*</b>
                                            PhilHealth Number</label>
                                        <input type="number" name="philhealth_no" id="philhealth_no"
                                            class="form-control @error('philhealth_no') is-invalid @enderror"
                                            :value="old('philhealth_no')" placeholder="12-345678910-1" required disabled>


                                        @error('philhealth_no')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>

                                    {{-- MEMBER CATEGORY --}}
                                    <div class="col-md-6"><label class="labels"><b style="color: red">*</b>
                                            Member Category</label>
                                        <select name="member_category" id="selMemberCategory"
                                            class="form-select form-select-md @error('member_category') is-invalid @enderror"
                                            disabled>
                                            <option hidden>Choose Member Category</option>

                                        </select>
                                    </div>

                                    {{-- HEALTH INSURANCE --}}
                                    <div class="col-md-6 p-2"><label class="labels"><b style="color: red">*</b>
                                            Health Insurance</label>
                                        <input type="number" name="health_insurance" id="health_insurance"
                                            class="form-control @error('health_insurance') is-invalid @enderror"
                                            :value="old('health_insurance')" required disabled>
                                        @error('health_insurance')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>

                                    {{-- MEMBERSHIP NUMBER --}}
                                    <div class="col-md-6 p-2"><label class="labels"><b style="color: red">*</b>
                                            Membership Number</label>
                                        <input type="number" name="membership_no" id="membership_no"
                                            class="form-control @error('membership_no') is-invalid @enderror"
                                            :value="old('membership_no')" required disabled>
                                        @error('membership_no')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>

                                    {{-- PLAN NAME --}}
                                    <div class="col-md-6 p-2"><label class="labels"><b style="color: red">*</b>
                                            Plan Name</label>
                                        <input type="text" name="plan_name" id="plan_name"
                                            class="form-control @error('plan_name') is-invalid @enderror"
                                            :value="old('plan_name')" required disabled>
                                        @error('plan_name')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>

                                    {{-- APPROVAL NUMBER --}}
                                    <div class="col-md-6 p-2"><label class="labels"><b style="color: red">*</b>
                                            Approval Number</label>
                                        <input type="number" name="approval_number" id="approval_number"
                                            class="form-control @error('approval_number') is-invalid @enderror"
                                            :value="old('approval_number')" required disabled>
                                        @error('approval_number')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>

                                    <div class="row mb-0">
                                        <div class="col-md-6 offset-md-7 p-3">
                                            <a href="{{ route('info.profileinfoedit') }}"> <button type="submit"
                                                    id="btnEdit" class="btn btn-primary">
                                                    {{ __('Edit Information') }}
                                                </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endsection
