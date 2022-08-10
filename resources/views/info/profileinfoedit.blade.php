@extends('layouts.app')

@section('content')
    <script src="{{ asset('js/app.js') }}"></script>
    <script src="{{ asset('js/jquery-1.11.1.js') }}"></script>
    <script src="{{ asset('js/jquery-1.11.1.min.js') }}"></script>
    <script src="{{ asset('js/careteq.js') }}"></script>
    <!-- Select2 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-beta.1/dist/css/select2.min.css" rel="stylesheet" />
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">

    <script src="{{ asset('js/jquery-3.6.0/js') }}"></script>
    <script src="{{ asset('js/jquery-3.6.0.min/js') }}"></script>

    {{-- Font Awesome --}}
    <script src="https://kit.fontawesome.com/83a0cd4555.js" crossorigin="anonymous"></script>

    <!-- Select2 JS -->
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-beta.1/dist/js/select2.min.js"></script>

    <style>
        .btn-text-right {
            text-align: right;
            border-radius: 50px;
        }
    </style>
    {{-- SUCCESS NOTIFICATION --}}
    @if (session()->has('message'))
        <div class="container mt-2 " id="successDialog">
            <div class="alert alert-success alert-dismissible fade show" role="alert" id="mySuccess">
                <div class="d-flex">
                    <div class="p-2 flex-fill"> <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32"
                            fill="currentColor" class="bi bi-check-circle-fill" viewBox="0 0 16 16">
                            <path
                                d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z" />
                        </svg>
                        <strong>Success!</strong> {{ session()->get('message') }}
                    </div>

                    <div class="p-2 flex-shrink-1"> <button type="button" class="btn" id="sucessBtnOkay"
                            name="sucessBtnOkay" onclick="sucessBtnOkay()"
                            style="background-color: rgb(4, 191, 104); font-weight:bold ">Okay</button></div>
                </div>
            </div>
        </div>
    @endif


    {{-- ERROR NOTIFICATION --}}
    @if (session()->has('error'))
        <div class="container mt-5" id="errorDialog">
            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                <div class="d-flex">
                    <div class="p-2 flex-fill">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                            class="bi bi-trash-fill" viewBox="0 0 16 16">
                            <path
                                d="M2.5 1a1 1 0 0 0-1 1v1a1 1 0 0 0 1 1H3v9a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V4h.5a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H10a1 1 0 0 0-1-1H7a1 1 0 0 0-1 1H2.5zm3 4a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 .5-.5zM8 5a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7A.5.5 0 0 1 8 5zm3 .5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 1 0z" />
                        </svg>
                        <strong>Error!</strong> {{ session()->get('error') }}
                    </div>

                    <div class="p-2 flex-shrink-1">
                        <button type="button" class="btn" id="errorBtnOkay"
                            name="errorBtnOkay" onclick="errorBtnOkay()"
                            style="background-color: rgb(229, 109, 109) font-weight:bold ">Okay</button>
                    </div>
                </div>
               
            </div>
        </div>

    @endif

    <form name="profileinfoedit" method="POST" action="{{ route('info.update') }}" enctype="multipart/form-data"
        class="py-2">
        @csrf

        <div class="container mt-5">
            <div class="row">
                <div class="container rounded bg-white mt-5 mb-5">
                    <div class="row">

                        {{-- LEFT SIDE WITH IMAGE --}}
                        <div class="col-md-3 border-right">
                            <div class="d-flex flex-column align-items-center text-center p-3 py-5">

                                <img class="rounded-circle mt-5" width="200px" height="200px"
                                    src="/images/uploads/avatars_userstable/{{ Auth::user()->avatar }}">
                                <div class="mt-2">
                                    <input type="file" name="avatar" id="avatar" class="form-control" required>
                                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                </div>
                                <span class="font-weight-bold p-2" style="font-size: 120%">{{ Auth::user()->firstname }}
                                    {{ Auth::user()->middlename }} {{ Auth::user()->lastname }}</span>
                                <span class="text-black-50">{{ Auth::user()->email }}</span>


                            </div>
                        </div>
    </form>

    {{-- MIDDLE SECTION --}}
    <div class="col-md-4 border-right">
        <div class="p-3 py-5">
            <div class="d-flex justify-content-between align-items-center mb-3">
                <h4 class="text-right">Your Profile</h4>
                <input type="text" name="user_id" id="user_id" style="visibility: hidden"
                    value="{{ Auth::user()->id }}" />
            </div>

            {{-- NAME --}}
            <div class="row mt-2">

                {{-- FIRST NAME --}}
                <div class="col-md-6 p-2"><label class="labels">First Name</label>
                    <input type="text" name="firstname" id="firstname"
                        class="form-control @error('firstname') is-invalid @enderror"
                        value="{{ Auth::user()->firstname }}" readonly>

                    @error('firstname')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>

                {{-- MIDDLE NAME --}}
                <div class="col-md-6 p-2"><label class="labels">Middle Name</label>
                    <input type="text" name="middlename" id="middlename" class="form-control"
                        value="{{ Auth::user()->middlename }}" readonly>
                </div>

                {{-- LAST NAME --}}
                <div class="col-md-6 p-2"><label class="labels">Last Name</label>
                    <input type="text" name="lastname" id="lastname" class="form-control"
                        value="{{ Auth::user()->lastname }}" readonly>
                </div>

                {{-- USER ID (HIDDEN) --}}
                <div class="center mt-2">
                    <input type="text" name="user_id" id="user_id" class="d-none form-co"
                        value="{{ Auth::user()->id }}">
                </div>
            </div>

            {{-- OTHER STUFF --}}
            <div class="row mt-2">

                {{-- PATIENT ID --}}
                <div class="col-md-6 p-2">
                    <label class="labels">Patient ID</label>
                    <input type="text" class="form-control" name="patient_id" id="patient_id"
                        style="font-weight:bold" value="{{ Auth::user()->patient_id }}" readonly />
                </div>

                {{-- BDAY --}}
                <div class="col-md-6 p-2"><label class="labels">Birthday</label>
                    <input type="date" name="bday" id="bday" class="form-control"
                        value="{{ Auth::user()->bday }}" style="background-color: white" autofocus>
                </div>

                {{-- SUFFIX --}}
                <div class="col-md-6 p-2"><label class="labels">Suffix</label>
                    <input type="text" name="suffix" id="suffix" class="form-control"
                        value="{{ Auth::user()->suffix }}" style="background-color: white" autofocus>
                </div>

                {{-- AGE --}}
                <div class="col-md-6 p-2"><label class="labels">Age</label>
                    <input type="text" name="age" id="age" class="form-control"
                        value="{{ Auth::user()->age }}" readonly autofocus>
                </div>



                {{-- TELEPHONE NUMBER --}}
                <div class="col-md-6 p-2"><label class="labels">Telephone No. (Home)</label>
                    <input type="text" name="telno" id="telno" class="form-control"
                        value="{{ Auth::user()->telno }}" style="background-color: white" autofocus>
                </div>

                {{-- MOBILE NUMBER --}}
                <div class="col-md-6 p-2"><label class="labels">Mobile No.</label>
                    <input type="text" name="mobile_no" id="mobile_no" class="form-control" :value="old('mobile_no')"
                        value="{{ Auth::user()->mobile_no }}" style="background-color: white" autofocus>
                </div>

                {{-- TITLE --}}
                <div class="col-md-6 p-2"><label class="labels">Title</label>
                    <select id="selTitle" name="title" value="{{ Auth::user()->title }}" class="form-control"
                        style="background-color: white" autofocus>
                        <option hidden>{{ Auth::user()->title }}</option>
                        @foreach ($title as $titles)
                            <option value="{{ $titles->name }}" {{ old('title') == $titles->name ? 'selected' : '' }}>
                                {{ $titles->name }}</option>
                        @endforeach
                    </select>

                </div>

                {{-- GENDER --}}
                <div class="col-md-6 p-2"><label class="labels">Gender</label>
                    <select name="gender" id="selGender" class="form-control" style="background-color: white"
                        autofocus>
                        <option hidden>{{ Auth::user()->gender }}</option>
                        @foreach ($gender as $genders)
                            <option value="{{ $genders->name }}" {{ old('gender') == $genders->name ? 'selected' : '' }}>
                                {{ $genders->name }}</option>
                        @endforeach
                    </select>
                </div>



            </div>

            <div class="d-flex justify-content-between align-items-center mb-3 mt-3">
                <h4 class="text-right ">Address</h4>
            </div>

            {{-- ADRESS --}}
            <div class="row mt-2">

                {{-- STREET --}}
                <div class="col-md-6"><label class="labels">Street</label>
                    <input type="text" name="houseNo_streetName" id="houseNo_streetName" class="form-control"
                        value="{{ Auth::user()->houseNo_streetName }}" style="background-color: white" autofocus>
                </div>

                {{-- POSTAL CODE --}}
                <div class="col-md-6"><label class="labels">Postal Code</label>
                    <input type="text" name="postal_code" id="zip_code" class="form-control"
                        value="{{ Auth::user()->postal_code }}" disabled>
                </div>

                {{-- BARANGAY --}}
                <div class="col-md-6 p-2"><label class="labels">Barangay</label>
                    <select name="brgy" id="barangay" class="form-control" style="background-color: white"
                        autofocus>
                        <option hidden>{{ Auth::user()->brgy }}</option>
                    </select>
                </div>

                {{-- mUNICIPALITY OR CITY --}}
                <div class="col-md-6 p-2"><label class="labels">Municipality / City</label>
                    <select class="form-control" id="municipality"name="municipality" style="background-color: white"
                        autofocus>
                        <option hidden>{{ Auth::user()->municipality }}</option>
                    </select>

                </div>

                {{-- PROVINCE --}}
                <div class="col-md-6 p-2"><label class="labels">Province</label>
                    <select class="form-control" id="province"name="province" style="background-color: white"
                        autofocus>
                        <option hidden>{{ Auth::user()->province }}</option>
                    </select>
                </div>



                {{-- COUNTRY --}}
                <div class="col-md-6 p-2"><label class="labels">Country</label>
                    <select class="form-control" id="country"name="country" style="background-color: white" autofocus>
                        <option hidden>{{ Auth::user()->country }}</option>
                        @foreach ($country as $countries)
                            <option value="{{ $countries->country_code }}"
                                {{ old('country') == $countries->country_code ? 'selected' : '' }}>
                                {{ $countries->country_name }}</option>
                        @endforeach
                    </select>
                </div>



            </div>
        </div>
    </div>

    {{-- RIGHT SIDE (MEDICAL INFORMATION) --}}
    <div class="col-md-4">
        <div class="p-3 py-5">
            <div class="d-flex justify-content-between align-items-center mb-3">
                <h4 class="text-right">Medical Information</h4>

            </div>

            <div class="row mt-2">

                {{-- HEIGHT IN CENTIMETER --}}
                <div class="col-md-6 p-2"><label class="labels">Height in Centimeter</label>
                    <input type="number" name="centimeter" id="centimeter" class="form-control"
                        style="background-color: white; width:85%" value="{{ Auth::user()->centimeter }}" step=".01"
                        placeholder="cm" autofocus>

                </div>

                {{-- HEIGHT IN INCHES --}}
                <div class="col-md-6 p-2"><label class="labels">Height in Inches</label>
                    <input type="number" name="inches" id="inch" class="form-control"
                        value="{{ Auth::user()->inches }}" style="background-color: white; width:85%" step=".01"
                        placeholder="inches" autofocus>

                </div>

                {{-- WEIGHT IN KILOGRAMS --}}
                <div class="col-md-6 p-2"><label class="labels">Weight in Kilograms</label>
                    <input type="number" name="kilogram" id="kg" class="form-control"
                        value="{{ Auth::user()->kilogram }}" style="background-color: white; width:85%" step=".01"
                        placeholder="kg" autofocus>

                </div>

                {{-- WEIGHT IN POUNDS --}}
                <div class="col-md-6 p-2"><label class="labels">Weight in Pounds</label>
                    <input type="number" name="pounds" id="lb" class="form-control"
                        value="{{ Auth::user()->pounds }}" style="background-color: white; width:85%" step=".01"
                        placeholder="lb" autofocus>

                </div>


                {{-- BMI --}}
                <div class="col-md-6 p-2"><label class="labels">BMI</label>
                    <input type="number" name="bmi" id="bmi" class="form-control" style=" width:85%"
                        value="{{ Auth::user()->bmi }}" readonly autofocus>
                </div>
            </div>

            <div class="row mt-2">

                {{-- PHILHEALTH NUMBER --}}
                <div class="col-md-6 p-2"><label class="labels"> PhilHealth Number</label>
                    <input type="number" name="philhealth_no" id="philhealth_no"
                        class="form-control @error('philhealth_no') is-invalid @enderror" :value="old('philhealth_no')"
                        value="{{ Auth::user()->philhealth_no }}" style="background-color: white"
                        placeholder="12-345678910-1" autofocus>


                    @error('philhealth_no')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>

                {{-- MEMBER CATEGORY --}}
                <div class="col-md-6 p-2"><label class="labels"> Member Category</label>
                    <select name="member_category" id="selMemberCategory"
                        class="form-select form-select-md @error('member_category') is-invalid @enderror"
                        style="background-color: white" value="{{ Auth::user()->member_category }}"
                        :value="old('member_category')" autofocus>

                        <option hidden>{{ Auth::user()->member_category }}</option>
                        @foreach ($member_category as $membercategory)
                            <option value="{{ $membercategory->membercategory_desc }}"
                                {{ old('member_category') == $membercategory->membercategory_desc ? 'selected' : '' }}>
                                {{ $membercategory->membercategory_desc }}</option>
                        @endforeach
                    </select>
                </div>

                {{-- HEALTH INSURANCE --}}
                <div class="col-md-6 p-2"><label class="labels"> Health Insurance</label>
                    <input type="number" name="health_insurance" id="health_insurance"
                        class="form-control @error('health_insurance') is-invalid @enderror"
                        :value="old('health_insurance')" value="{{ Auth::user()->health_insurance }}"
                        style="background-color: white" autofocus>
                    @error('health_insurance')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>

                {{-- MEMBERSHIP NUMBER --}}
                <div class="col-md-6 p-2"><label class="labels"> Membership Number</label>
                    <input type="number" name="membership_no" id="membership_no"
                        class="form-control @error('membership_no') is-invalid @enderror" :value="old('membership_no')"
                        style="background-color: white" value="{{ Auth::user()->membership_no }}" autofocus>
                    @error('membership_no')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>

                {{-- PLAN NAME --}}
                <div class="col-md-6 p-2"><label class="labels"> Plan Name</label>
                    <input type="text" name="plan_name" id="plan_name"
                        class="form-control @error('plan_name') is-invalid @enderror" :value="old('plan_name')"
                        style="background-color: white" value="{{ Auth::user()->plan_name }}" autofocus>
                    @error('plan_name')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>



                <div class="row mb-1">
                    <div class="col-md-8 ">
                        <button type="submit" id="btnEdit" class="btn btn-primary">
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
    </form>
@endsection
