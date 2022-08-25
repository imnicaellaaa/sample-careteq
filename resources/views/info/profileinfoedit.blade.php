@extends('layouts.app')

@section('content')
    <script src="{{ asset('js/app.js') }}"></script>
    <script src="{{ asset('js/jquery-1.11.1.js') }}"></script>
    <script src="{{ asset('js/jquery-1.11.1.min.js') }}"></script>
    <script src="{{ asset('js/careteq.js') }}"></script>
    <!-- Select2 CSS -->
    <link rel="stylesheet" href="{{ asset('css/select2.min.css') }}">
    <!-- CSS only -->
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}"
    integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">

    <script src="{{ asset('js/jquery-3.6.0/js') }}"></script>
    <script src="{{ asset('js/jquery-3.6.0.min/js') }}"></script>

    {{-- Font Awesome --}}
    <script src="{{ asset('js/font.js') }}" crossorigin="anonymous"></script>

    <!-- Select2 JS -->
    <script src="{{ asset('js/select2.min.js') }}"></script>

    <link rel="stylesheet" href="{{ asset('/jquery-ui-1.13.1.custom/jquery-ui.css') }}">
    <link rel="stylesheet" href="{{ asset('/jquery-ui-1.13.1.custom/jquery-ui.min.css') }}">
    <script type="text/javascript" src="{{ asset('/jquery-ui-1.13.1.custom/jquery-ui.js') }}"></script>
    <script type="text/javascript" src="{{ asset('/jquery-ui-1.13.1.custom/jquery-ui.min.js') }}"></script>

    {{--  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>  --}}
    <script src="{{ asset('js/inputmask.min.js') }}"></script>
    <script src="{{ asset('js/inputmask.extensions.min.js') }}"></script>


    <style>
        .btn-text-right {
            text-align: right;
            border-radius: 50px;
        }

        /* Chrome, Safari, Edge, Opera */
        input::-webkit-outer-spin-button,
        input::-webkit-inner-spin-button {
            -webkit-appearance: none;
            margin: 0;
        }

        /* Firefox */
        input[type=number] {
            -moz-appearance: textfield;
        }
    </style>

    <div class="contianer rounded bg-white mt-5 ">
        <div class="row py-2">

            {{-- ERROR NOTIFICATION --}}

            @if (session()->has('error'))
                <div class="container col-md-12 " id="errorDialog">
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
                                <button type="button" class="btn" id="errorBtnOkay" name="errorBtnOkay"
                                    onclick="errorBtnOkay()"
                                    style="background-color: rgb(229, 109, 109) font-weight:bold ">Okay</button>
                            </div>
                        </div>

                    </div>
                </div>
            @endif

        </div>

        {{-- SUCCESS NOTIFICATION --}}
        <div class="container">
            @if (session()->has('message'))
                <div class="container  " id="successDialog">
                    <div class="alert alert-success alert-dismissible fade show" role="alert" id="mySuccess">
                        <div class="d-flex">
                            <div class="p-2 flex-fill"> <svg xmlns="http://www.w3.org/2000/svg" width="32"
                                    height="32" fill="currentColor" class="bi bi-check-circle-fill" viewBox="0 0 16 16">
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
        </div>


        {{-- Start of Edit Form --}}
        <div class="container">
            <form name="profileinfoedit" method="POST" action="{{ route('info.update') }}" enctype="multipart/form-data"
                class="py-2">
                @csrf
                <div class="row">
                    <div class="col-md-4">
                        <div class="d-flex flex-column align-items-center text-center p-3 py-5">
                            {{-- Profile Image --}}
                            @foreach($profileinfo as $profileinfo)
                            <img class="rounded-circle mt-5" width="200px" height="200px" style="object-fit: cover" id="preview-image"
                                src="/images/uploads/avatars_userstable/{{$profileinfo->avatar}}">
                                @endforeach
                            <div class="mt-2">
                                <input type="text" style="display: none" name="hiddenavatar" id="hiddenavatar" value="{{ $profileinfo->avatar }}"  class="form-control"
                                    placeholder="{{ Auth::user()->avatar }}" >
                                {{-- Profile Image Upload --}}
                                <input type="file" name="avatar" id="avatar" style="display: none" onchange="return filevalidate()" class="form-control"
                                    placeholder="{{ Auth::user()->avatar }}" accept="image/png, image/jpeg">

                                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                <input type="button" class="btn btn-primary" id="btnAttachment" onclick="openAttachment()"
                                 onchange="return profileValidate()" value="Select a Photo" style="word-wrap: break-word; white-space: normal;" class="demoInputBox"/>
                                 <br><span id="profile_error"></span>
                            </div>
                            {{-- Name and Email --}}
                            <span class="font-weight-bold p-2" style="font-size: 120%">{{ $profileinfo->firstname }}
                                {{ $profileinfo->middlename }} {{ $profileinfo->lastname }}</span>
                            <span class="text-black-50">{{ Auth::user()->email }}</span>

                            <div class="col-md-8 mt-2">
                            </div>
                        </div>
                    </div>

                    <div class="col-md-8">
                        <div class="p-3 py-5">
                            <div class="row mt-2">
                                <div class="d-flex justify-content-between align-items-center mb-3">
                                    <h4 class="text-right">Edit Profile</h4>
                                </div>

                                {{-- Full Name --}}
                                <div class="col-md-6 p-2 ">
                                    {{-- Full Name --}}
                                    <label class="labels ">Full Name</label>
                                    <input type="text" class="form-control fs-5 "
                                        value="{{ $profileinfo->firstname }} {{ $profileinfo->middlename }} {{ $profileinfo->lastname }} {{ $profileinfo->suffix }}"
                                        name="patient_fullname" id="patient_fullname" readonly>
                                </div>

                                {{-- BDAY --}}
                                <div class="col-md-3 p-2"><label class="labels">Birthday</label>
                                    <input type="date" name="bday" id="bday" class="form-control fs-5 "
                                        value="{{ $profileinfo->bday }}" readonly>
                                </div>

                                {{-- AGE --}}
                                <div class="col-md-3 p-2"><label class="labels">Age</label>
                                    <input type="text" name="age" id="age" class="form-control fs-5"
                                        value="{{ $profileinfo->age }}" readonly>
                                </div>

                            </div>

                            <div class="row mt-2">

                                {{-- USER ID (HIDDEN) --}}
                                <div class="center mt-2">
                                    <input type="text" name="user_id" id="user_id" class="d-none form-control"
                                        value="{{ $profileinfo->id }}">
                                </div>

                                {{-- TELEPHONE NUMBER --}}

                                <div class="col-md-6 p-2"><label class="labels">Telephone No. (Home)</label>
                                    <input type="text" name="telno" id="telno" class="form-control fs-5"
                                        value="{{ $profileinfo->telno }}" style="background-color: white "
                                        width="100%" autofocus>
                                </div>


                                {{-- MOBILE NUMBER --}}
                                <div class="col-md-6 p-2"><label class="labels">Mobile No.</label>
                                    <input type="text" name="mobile_no" id="mobile_no" class="form-control fs-5"
                                        :value="old('mobile_no')" value="{{ $profileinfo->mobile_no }}"
                                        style="background-color: white" autofocus>
                                </div>
                            </div>

                            <div class="row mt-2">
                                {{-- HEIGHT IN CENTIMETER --}}
                                <div class="col-md-3 p-2"><label class="labels">Height in Centimeter</label>
                                    <input type="number" name="centimeter" id="centimeter" class="form-control"
                                        value="{{ $profileinfo->centimeter }}" step=".01" min="145" max="192.5"
                                        style="background-color: white;" placeholder="cm" >

                                </div>

                                {{-- HEIGHT IN INCHES --}}
                                <div class="col-md-3 p-2"><label class="labels">Height in Inches</label>
                                    <input type="number" name="inches" id="inch" class="form-control"
                                        value="{{ $profileinfo->inches }}" step=".01"
                                        style="background-color: white;" placeholder="inches" >

                                </div>

                                {{-- TITLE --}}
                                <div class="col-md-3 p-2"><label class="labels">Title</label>
                                    <input type="text" name="title" id="title" class="form-control"
                                        class="form-select" value="{{ $profileinfo->title }}" readonly>
                                    {{-- <input type="text" name="title" id="title" value="{{ Auth::user()->title }}"  class="form-select" disabled> --}}
                                    {{-- <select  name="title" value="{{ Auth::user()->title }}"
        value="{{ Auth::user()->title }}" style="background-color: white" autofocus disable> --}}
                                    {{-- <option hidden>{{ Auth::user()->title }}</option> --}}
                                    {{-- @foreach ($title as $titles)
            <option class="form-select" value="{{ $titles->name }}"
                {{ old('title') == $titles->name ? 'selected' : '' }}>
                {{ $titles->name }}</option>
        @endforeach --}}
                                    </select>

                                </div>

                                {{-- Sex --}}
                                <div class="col-md-3 p-2"><label class="labels">Sex</label>
                                    <input type="text" name="gender" id="gender" class="form-control"
                                        value="{{ $profileinfo->gender }}" readonly>
                                    {{-- <select name="gender" id="selGender" class="form-control"
            style="background-color: white" autofocus> --}}
                                    {{-- <option hidden>{{ Auth::user()->gender }}</option>
            @foreach ($gender as $genders)
                <option value="{{ $genders->name }}"
                    {{ old('gender') == $genders->name ? 'selected' : '' }}>
                    {{ $genders->name }}</option>
            @endforeach --}}
                                    </select>
                                </div>

                            </div>
                        </div>
                    </div>

                    <div class="row">

                        <div class="d-flex justify-content-between align-items-center ">
                            <h4 class="text-right ">Address</h4>
                        </div>

                        {{-- COUNTRY --}}
                        <div class="col-md-4 p-2"><label class="labels">Country</label>
                            <select class="form-control" id="country"name="countryname" style="background-color: white"
                                autofocus>
                                <option hidden>{{ $profileinfo->country }}</option>
                                @foreach ($country as $countries)
                                    <option value="{{ $countries->country_name }}"
                                        {{ old('country') == $countries->country_name ? 'selected' : '' }}>
                                        {{ $countries->country_name }}</option>
                                @endforeach
                            </select>
                        </div>

                        {{-- PROVINCE --}}
                        <div class="col-md-4 p-2"><label class="labels">Province</label>
                            <select class="form-control" id="province"name="provincename" style="background-color: white"
                                autofocus>
                                <option hidden>{{ $profileinfo->province }}</option>
                            </select>
                        </div>

                        {{-- MUNICIPALITY OR CITY --}}
                        <div class="col-md-4 p-2"><label class="labels">Municipality / City</label>
                            <select class="form-control" id="municipality"name="municipalityname"
                                style="background-color: white" autofocus>
                                <option hidden>{{ $profileinfo->municipality }}</option>
                            </select>

                        </div>


                    </div>

                    <div class="row">

                        {{-- BARANGAY --}}
                        <div class="col-md-4 p-2"><label class="labels">Barangay</label>
                            <select name="brgyname" id="barangay" class="form-control form-select form-select-md"
                                style="background-color: white" autofocus>
                                <option hidden>{{ $profileinfo->brgy }}</option>
                            </select>
                        </div>

                        {{-- STREET --}}
                        <div class="col-md-4 p-2"><label class="labels">Street</label>
                            <input type="text" name="houseNo_streetName" id="houseNo_streetName" class="form-control"
                                value="{{ $profileinfo->houseNo_streetName }}" style="background-color: white" autofocus>
                        </div>

                        {{-- POSTAL CODE --}}
                        <div class="col-md-4 p-2"><label class="labels">Postal Code</label>
                            <input type="text" name="postal_codee" id="zip_code" class="form-control"
                                value="{{ $profileinfo->postal_code }}" readonly>
                        </div>
                    </div>

                    {{-- MEIDCAL ROW --}}
                    <div class="row">
                        <div class="d-flex justify-content-between align-items-center ">
                            <h4 class="text-right ">Medical Information</h4>
                        </div>

                        {{-- WEIGHT IN KILOGRAMS --}}
                        <div class="col-md-2 p-2"><label class="labels">Weight in Kilograms</label>
                            <input type="number" name="kilogram" id="kg" class="form-control"
                                value="{{ $profileinfo->kilogram }}" style="background-color: white;" step=".01"
                                placeholder="kg" autofocus>

                        </div>

                        {{-- WEIGHT IN POUNDS --}}
                        <div class="col-md-2 p-2"><label class="labels">Weight in Pounds</label>
                            <input type="number" name="pounds" id="lb" class="form-control"
                                value="{{ $profileinfo->pounds }}" style="background-color: white; " step=".01"
                                placeholder="lb" autofocus>
                        </div>

                        {{-- BMI --}}
                        <div class="col-md-4 p-2"><label class="labels">BMI</label>
                            <input type="number" name="bmi" id="bmi" class="form-control" style=" "
                                value="{{ $profileinfo->bmi }}" readonly autofocus>
                        </div>

                        {{-- PHILHEALTH NUMBER --}}
                        <div class="col-md-2 p-2"><label class="labels" for="philhealth_no"> PhilHealth Number</label>
                            <input type="number" name="philhealth_no" id="philhealth_no"
                                class="form-control @error('philhealth_no') is-invalid @enderror"
                                :value="old('philhealth_no')" value="{{ $profileinfo->philhealth_no }}"
                                style="background-color: white" placeholder="##-#########-#" autofocus>


                            @error('philhealth_no')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        {{-- MEMBER CATEGORY --}}
                        <div class="col-md-2 p-2"><label class="labels"> Philhealth Member Category</label>
                            <select name="member_category" id="selMemberCategory"
                                class="form-select form-select-md @error('member_category') is-invalid @enderror"
                                style="background-color: white" value="{{ $profileinfo->member_category }}"
                                :value="old('member_category')" autofocus>

                                <option hidden>{{ $profileinfo->member_category }}</option>
                                @foreach ($member_category as $membercategory)
                                    <option value="{{ $membercategory->membercategory_desc }}"
                                        {{ old('member_category') == $membercategory->membercategory_desc ? 'selected' : '' }}>
                                        {{ $membercategory->membercategory_desc }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>

                    <div class="row">
                        {{-- HEALTH INSURANCE --}}
                        <div class="col-md-4 p-2"><label class="labels">Health Insurance</label>
                            <select class="form-control" id="hmo"name="hmo" style="background-color: white"
                                autofocus>
                                <option hidden>{{ $profileinfo->health_insurance }}</option>
                                @foreach ($hmo as $hmo)
                                    <option value="{{ $hmo->HMO_NAME }}"
                                        {{ old('hmo') == $hmo->HMO_NAME ? 'selected' : '' }}>
                                        {{ $hmo->HMO_NAME }}</option>
                                @endforeach
                            </select>
                        </div>

                        {{-- MEMBERSHIP NUMBER --}}
                        <div class="col-md-4 p-2"><label class="labels"> Membership Number</label>
                            <input type="number" name="membership_no" id="membership_no"
                                class="form-control @error('membership_no') is-invalid @enderror"
                                :value="old('membership_no')" style="background-color: white"
                                value="{{ $profileinfo->membership_no }}" autofocus>
                            @error('membership_no')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        {{-- PLAN NAME --}}
                        <div class="col-md-4 p-2"><label class="labels"> Plan Name</label>
                            <input type="text" name="plan_name" id="plan_name"
                                class="form-control @error('plan_name') is-invalid @enderror" :value="old('plan_name')"
                                style="background-color: white" value="{{ $profileinfo->plan_name }}" autofocus>
                            @error('plan_name')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                    </div>
                    <div class="d-flex justify-content-end py-4">
                        <button type="submit " class="btn btn-primary" id="btnEdit" class="btn btn-primary btn-lg">
                            {{ __('Update Changes') }}
                        </button>
                    </div>
            </form>
        </div>
    </div>
    {{--  <script type="text/javascript">
        $(document).ready(function() {
        $(function () {
            var inputmask = new Inputmask("##-#########-#");
            inputmask.mask($('[id*=philhealth_no]'));
        })
    });
    </script>  --}}
    <script>
        $('#avatar').change(function(){

            let reader = new FileReader();
            reader.onload = (e) => {
              $('#preview-image').attr('src', e.target.result);
            }
            reader.readAsDataURL(this.files[0]);

           });
    </script>
@endsection
