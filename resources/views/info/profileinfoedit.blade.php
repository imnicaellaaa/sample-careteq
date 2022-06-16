@extends('layouts.app')

@section('content')
<script src="{{ asset('js/app.js') }}"></script>
<script src="{{ asset('js/jquery-1.11.1.js') }}"></script>
<script src="{{ asset('js/jquery-1.11.1.min.js') }}"></script>
<script src="{{ asset('js/careteq.js') }}"></script>
<!-- Select2 CSS -->
<link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-beta.1/dist/css/select2.min.css" rel="stylesheet" />

<script src="{{ asset('js/jquery-3.6.0/js') }}"></script>
<script src="{{ asset('js/jquery-3.6.0.min/js') }}"></script>

<!-- Select2 JS -->
<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-beta.1/dist/js/select2.min.js"></script>



<form action="POST" action="{{ route('info.profileinfoedit') }}" class="py-2">
    @csrf
    <div class="container mt-5">
        <div class="row">
            <div class="container rounded bg-white mt-5 mb-5">
                <div class="row">

                    {{-- LEFT SIDE WITH IMAGE --}}
                    <div class="col-md-3 border-right">
                        <div class="d-flex flex-column align-items-center text-center p-3 py-5">

                            <img class="rounded-circle mt-5" width="150px"
                                src="https://cdn.pixabay.com/photo/2015/10/05/22/37/blank-profile-picture-973460_640.png">

                                <span class="font-weight-bold p-2" style="font-size: 120%">{{ Auth::user()->fname }} {{ Auth::user()->mname }} {{ Auth::user()->lname }}</span>
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
                                    <input type="text" name="fname" id="fname" class="form-control" value="{{ Auth::user()->fname }}" style="background-color: white"  autofocus>
                                </div>

                                {{-- MIDDLE NAME --}}
                                <div class="col-md-6"><label class="labels">Middle Name</label>
                                    <input type="text" name="mname" id="mname" class="form-control" value="{{ Auth::user()->mname }}"  style="background-color: white" autofocus>
                                </div>

                                {{-- LAST NAME --}}
                                <div class="col-md-6 p-2"><label class="labels">Last Name</label>
                                    <input type="text" name="lname" id="lname" class="form-control" value="{{ Auth::user()->lname }}" style="background-color: white"  autofocus>
                                </div>



                            </div>

                            {{-- OTHER STUFF --}}
                            <div class="row mt-2">

                                 {{-- PATIENT ID --}}
                                 <div class="col-md-6">
                                    <label class="labels">Patient ID</label>
                                    <span style="font-weight: bold" class="form-control" id="patient_id" name="patient_id">{{ Auth::user()->patient_id }}</span>
                                </div>

                                {{-- BDAY --}}
                                <div class="col-md-6"><label class="labels">Birthday</label>
                                    <input type="date" name="bday" id="bday" class="form-control" value="{{ Auth::user()->bday }}" style="background-color: white"  autofocus>
                                </div>

                                {{-- SUFFIX --}}
                                <div class="col-md-6"><label class="labels">Suffix</label>
                                    <input type="text" name="suffix" id="suffix" class="form-control" value="{{ Auth::user()->suffix }}" style="background-color: white"  autofocus>
                                </div>

                                {{-- AGE --}}
                                <div class="col-md-6 p-2"><label class="labels">Age</label>
                                    <input type="text" name="age" id="age" class="form-control" value="{{ Auth::user()->age }}" style="background-color: white"  autofocus>
                                </div>



                                {{-- TELEPHONE NUMBER --}}
                                <div class="col-md-6 p-2"><label class="labels">Tel (Home)</label>
                                    <input type="number" name="telno" id="telno" class="form-control" :value="old('telno')" style="background-color: white" autofocus>
                                </div>

                                {{-- MOBILE NUMBER --}}
                                <div class="col-md-6 p-2"><label class="labels">Mobile No.</label>
                                    <input type="number" name="mobile_no" id="mobile_no" class="form-control" :value="old('mobile_no')" style="background-color: white" autofocus>
                                </div>

                                 {{-- TITLE --}}
                                 <div class="col-md-6 p-2"><label class="labels">Title</label>
                                    <select id="selTitle" name="title" value="{{ Auth::user()->title }}" class="form-control" style="background-color: white"  autofocus>
                                           <option hidden>{{ Auth::user()->title }}</option>
                                        @foreach ($title as $titles )
                                                    <option value="{{$titles->name}}" {{old('title') == $titles->name ? 'selected':''}}>{{$titles->name}}</option>
                                                @endforeach
                                    </select>

                                </div>

                                {{-- GENDER --}}
                                <div class="col-md-6 p-2"><label class="labels">Gender</label>
                                    <select name="gender" id="selGender"  class="form-control" style="background-color: white" autofocus >
                                    <option hidden>{{ Auth::user()->gender }}</option>
                                    @foreach ($gender as $genders)
                                    <option value="{{$genders->name}}" {{old('gender') == $genders->name ? 'selected':''}}>{{ $genders->name}}</option>
                                    @endforeach
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
                                    <input type="text" name="houseNo_streetName" id="houseNo_streetName" class="form-control"
                                    value="{{ Auth::user()->houseNo_streetName }}" style="background-color: white"  autofocus>
                                </div>

                                 {{-- POSTAL CODE --}}
                                 <div class="col-md-6"><label class="labels">Postal Code</label>
                                    <input type="text" name="postal_code" id="postal_code" class="form-control"
                                    value="{{ Auth::user()->postal_code }}" style="background-color: white" autofocus>
                                </div>

                                {{-- BARANGAY --}}
                                <div class="col-md-6 p-2"><label class="labels">Barangay</label>
                                    <select name="brgy" id="selBrgy" class="form-control" style="background-color: white" autofocus>
                                    <option hidden>{{ Auth::user()->brgy }}</option>
                                                @foreach ($brgy as $barangay)
                                                    <option value="{{$barangay->name}}" {{old('brgy') == $barangay->name ? 'selected':''}}>{{ $barangay->name }}</option>
                                                @endforeach
                                            </select>
                                </div>

                                {{-- mUNICIPALITY OR CITY --}}
                                <div class="col-md-6 p-2"><label class="labels">Municipality / City</label>
                                    <select class="form-control" id="selMunicipality"name="municipality" style="background-color: white"  autofocus>
                                            <option hidden>{{ Auth::user()->municipality }}</option>
                                                @foreach ($municipality as $municipalities)
                                                    <option value="{{$municipalities->name}}" {{old('municipality') == $municipalities->name ? 'selected':''}}>{{ $municipalities->name }}</option>
                                                @endforeach
                                            </select>

                                </div>

                                {{-- PROVINCE --}}
                                <div class="col-md-6 p-2"><label class="labels">Province</label>
                                    <select class="form-control" id="selProvince"name="province" style="background-color: white"  autofocus>
                                        <option hidden>{{ Auth::user()->province }}</option>
                                            @foreach ($province as $provinces)
                                                <option value="{{$provinces->name}}" {{old('province') == $provinces->name ? 'selected':''}}>{{ $provinces->name }}</option>
                                            @endforeach
                                        </select>
                                </div>



                                {{-- COUNTRY --}}
                                <div class="col-md-6 p-2"><label class="labels">Country</label>
                                    <select class="form-control" id="selCountry"name="country" style="background-color: white"  autofocus>
                                        <option hidden>{{ Auth::user()->country }}</option>
                                            @foreach ($country as $countries)
                                                <option value="{{$countries->name}}" {{old('country') == $countries->name ? 'selected':''}}>{{ $countries->name }}</option>
                                            @endforeach
                                        </select>
                                </div>



                            </div>
                        </div>
                    </div>

                    {{-- RIGHT SIDE (MEDICAL INFORMATION) --}}
                    <div class="col-md-4">
                        <div class="p-3 py-5">
                            <h4 class="text-right">Medical Information</h4>
                            {{-- <div class="d-flex justify-content-between align-items-center experience">

                            </div> --}}

                            <div class="row mt-2">

                                {{-- HEIGHT IN CENTIMETER --}}
                                <div class="col-md-6"><label class="labels">Height in Centimeter</label>
                                    <input type="number" name="centimeter" id="centimeter" class="form-control"
                                     style="background-color: white; width:85%" :value="old('centimeter')"
                                    step=".01" placeholder="cm" autofocus>

                                </div>

                                {{-- HEIGHT IN INCHES --}}
                                <div class="col-md-6"><label class="labels">Height in Inches</label>
                                    <input type="number" name="inches" id="inch" class="form-control"
                                    :value="old('inch')" style="background-color: white; width:85%"
                                    step=".01" placeholder="inches" autofocus>

                                </div>

                                {{-- WEIGHT IN KILOGRAMS --}}
                                <div class="col-md-6 p-2"><label class="labels">Weight in Kilograms</label>
                                    <input type="number" name="kilogram" id="kg" class="form-control"
                                    value="{{ Auth::user()->kg }}" style="background-color: white; width:85%"
                                    step=".01" placeholder="kg" autofocus>

                                </div>

                                {{-- WEIGHT IN POUNDS --}}
                                <div class="col-md-6 p-2"><label class="labels">Weight in Pounds</label>
                                    <input type="number" name="pounds" id="lb" class="form-control"
                                    value="{{ Auth::user()->cm }}" style="background-color: white; width:85%"
                                    step=".01" placeholder="lb" autofocus>

                                </div>

                                {{-- BMI --}}
                                <div class="col-md-6"><label class="labels">BMI</label>
                                    <input type="number" name="bmi" id="bmi" class="form-control"
                                    value="{{ Auth::user()->bmi }}" style="background-color: white" disabled autofocus>
                                </div>

                                <div class="row mt-2">

                                    {{-- PHILHEALTH NUMBER --}}
                                <div class="col-md-6"><label class="labels"><b style="color: red">*</b> PhilHealth Number</label>
                                    <input type="number" name="philhealth_no" id="philhealth_no" class="form-control @error('philhealth_no') is-invalid @enderror"
                                    :value="old('philhealth_no')" style="background-color: white" placeholder="12-345678910-1"
                                    required autofocus>


                                    @error('philhealth_no')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                </div>

                                {{-- MEMBER CATEGORY --}}
                                <div class="col-md-6"><label class="labels"><b style="color: red">*</b> Member Category</label>
                                    <select name="member_category" id="selMemberCategory" class="form-select form-select-md @error('member_category') is-invalid @enderror"
                                    style="background-color: white">
                                        <option hidden>Choose Member Category</option>
                                        @foreach ($member_category as $membercategory )
                                            <option value="{{ $membercategory->membercategory_desc}}" {{ old('member_category') ==  $membercategory->membercategory_desc ? 'selected' : ''}}>{{ $membercategory->membercategory_desc}}</option>
                                        @endforeach
                                    </select>
                                </div>

                                  {{-- HEALTH INSURANCE --}}
                                  <div class="col-md-6 p-2"><label class="labels"><b style="color: red">*</b> Health Insurance</label>
                                    <input type="number" name="health_insurance" id="health_insurance" class="form-control @error('health_insurance') is-invalid @enderror"
                                    :value="old('health_insurance')" style="background-color: white"
                                    required autofocus>
                                    @error('health_insurance')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                </div>

                                 {{-- MEMBERSHIP NUMBER --}}
                                 <div class="col-md-6 p-2"><label class="labels"><b style="color: red">*</b> Membership Number</label>
                                    <input type="number" name="membership_no" id="membership_no" class="form-control @error('membership_no') is-invalid @enderror"
                                    :value="old('membership_no')" style="background-color: white"
                                    required autofocus>
                                    @error('membership_no')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                </div>

                                {{-- PLAN NAME --}}
                                <div class="col-md-6 p-2"><label class="labels"><b style="color: red">*</b> Plan Name</label>
                                    <input type="text" name="plan_name" id="plan_name" class="form-control @error('plan_name') is-invalid @enderror"
                                    :value="old('plan_name')" style="background-color: white"
                                    required autofocus>
                                    @error('plan_name')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                </div>

                                {{-- APPROVAL NUMBER --}}
                                <div class="col-md-6 p-2"><label class="labels"><b style="color: red">*</b> Approval Number</label>
                                    <input type="number" name="approval_number" id="approval_number" class="form-control @error('approval_number') is-invalid @enderror"
                                    :value="old('approval_number')" style="background-color: white"
                                    required autofocus>
                                    @error('approval_number')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                </div>

                                <div class="row mb-0">
                                    <div class="col-md-8 offset-md-7 p-4">
                                        <button type="submit" id="btnEdit" class="btn btn-primary" >
                                            {{ __('Update Changes') }}
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
</form>
@endsection
