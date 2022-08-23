@extends('layouts.guest')
<script src="{{ asset('js/app.js') }}"></script>
<script src="{{ asset('js/jquery-1.11.1.js') }}"></script>
<script src="{{ asset('js/jquery-1.11.1.min.js') }}"></script>
<script src="{{ asset('js/careteq.js') }}"></script>

<!-- Select2 CSS -->
<link rel="stylesheet" href="{{ asset('css/select2.min.css') }}">

<script src="{{ asset('js/jquery-3.6.0/js') }}"></script>
<script src="{{ asset('js/jquery-3.6.0.min/js') }}"></script>

<!-- Select2 JS -->
<script src="{{ asset('js/select2.min.js') }}"></script>
<link rel="stylesheet" href="{{ asset('/jquery-ui-1.13.1.custom/jquery-ui.css') }}">
<link rel="stylesheet" href="{{ asset('/jquery-ui-1.13.1.custom/jquery-ui.min.css') }}">
<script type="text/javascript" src="{{ asset('/jquery-ui-1.13.1.custom/jquery-ui.js') }}"></script>
<script type="text/javascript" src="{{ asset('/jquery-ui-1.13.1.custom/jquery-ui.min.js') }}"></script>

<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery.inputmask/3.3.4/inputmask/inputmask.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery.inputmask/3.3.4/inputmask/inputmask.extensions.min.js"></script>
{{--  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.2/jquery.validate.min.js"></script>  --}}
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.0/jquery.validate.js"></script>
<style>
    <style>
        form .error {
            color: #ff0000;
          }
     </style>
</style>
@section('content')

    <div class="container">
        <div class="container mt-5">
            <div class="row">

                {{-- GRID --}}
                <div class="col-lg-7 col-sm-7 col-md-6 m-auto ">
                    <div class="text-center display-2 ">REGISTER</div>

                    {{-- CARD --}}
                    <div class="card border-1 shadow rounded-lg">
                        <div class="card-body " style="100px">
                            {{-- insert logo image here --}}

                            {{-- REGISTER FORM --}}
                            <form method="POST" class="py-2" action="{{ route('register') }}" id="register_form">
                                @csrf
                                <div id='result'></div>
                                {{-- FIRST NAME, LAST NAME, MIDDLE NAME --}}
                                <div class="mb-2 fs-4 text-center">Personal Information</div>

                                <div class="row">

                                    {{-- FIRST NAME --}}
                                    <div class="col">
                                        <div class="mb-3">
                                            <input type="hidden" name="user_role" id="user_role" value="0">
                                            <label for="firstname" class="form-label"><b style="color: red">*</b>
                                                {{ __('First Name') }} <span class="firstname-validation validation-error"></span> </label>
                                            <input id="firstname" name="firstname" type="text"
                                                class="form-control  @error('fname') is-invalid @enderror autofocus "
                                                value="{{ old('firstname') }}" onblur="validate()">

                                        </div>
                                        @error('firstname')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>

                                    {{-- MIDDLE NAME --}}
                                    <div class="col">
                                        <div class="mb-3">
                                            <div class="mb-3">
                                                <label for="middlename" class="form-label">{{ __('Middle Name') }}</label>
                                                <input id="middlename" name="middlename" type="text"
                                                    class="form-control autofocus" value="{{ old('middlename') }}">
                                            </div>

                                        </div>
                                    </div>

                                    {{-- LAST NAME --}}
                                    <div class="col">
                                        <div class="mb-3">
                                            <div class="mb-3">
                                                <label for="lastname" class="form-label"><b style="color: red">*</b>
                                                    {{ __('Last Name') }}</label>
                                                <input id="lastname" name="lastname" type="text"
                                                    class="form-control  @error('lastname') is-invalid @enderror autofocus"
                                                    value="{{ old('lastname') }}" onblur="validate()">
                                            </div>
                                            @error('lastname')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>

                                </div>

                                {{-- BDAY, AGE --}}

                                <div class="row">

                                    {{-- BDAY --}}
                                    <div class="col">
                                        <div class="mb-3">
                                            <label for="bday" class="form-label"><b style="color: red">*</b>
                                                {{ __('Birthday') }}</label>
                                            <input type="text"
                                                class="form-control  @error('bday') is-invalid @enderror datepicker"
                                                id="bday" name="bday" value="{{ old('bday') }}"
                                                placeholder="mm/dd/yyy" onblur="validate()">
                                        </div>
                                        @error('bday')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>

                                    {{-- AGE --}}
                                    <div class="col">
                                        <div class="mb-3">
                                            <label for="age" class="form-label">{{ __('Age') }}</label>
                                            <input class="form-control" type="text" readonly id="age"
                                                name="age" value="{{ old('age') }}" autocomplete="age">
                                        </div>

                                    </div>


                                </div>

                                {{-- SEX, SUFFIX --}}

                                <div class="row">

                                    {{-- SUFFIX --}}
                                    <div class="col">
                                        <div class="mb-3">
                                            <label for="suffix" class="form-label">{{ __('Suffix') }}</label>
                                            <input id="suffix" name="suffix" type="text" style="height: 28px"
                                                class="form-control  @error('suffix') is-invalid @enderror autofocus"
                                                value="{{ old('suffix') }}">
                                        </div>
                                    </div>

                                    {{-- SEX --}}
                                    <div class="col">
                                        <div class="mb-3">
                                            <label for="sex" class="form-label"><b style="color: red">*</b>
                                                {{ __('Sex') }}</label>
                                            <select
                                                class="form-select form-select-md  @error('gender') is-invalid @enderror"
                                                id="selGender" name="gender" aria-label=".form-select-lg example"
                                                value="{{ old('$item->name') }}" onblur="validate()">
                                                <option hidden>Choose Sex</option>
                                                @foreach ($gender as $genders)
                                                    <option value="{{ $genders->name }}"
                                                        {{ old('gender') == $genders->name ? 'selected' : '' }}>
                                                        {{ $genders->name }}</option>
                                                @endforeach
                                            </select>
                                            @error('gender')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror

                                        </div>
                                    </div>

                                    {{-- TITLE --}}
                                    <div class="col">
                                        <div class="mb-3">
                                            <label for="title" class="form-label"><b style="color: red">*</b>
                                                {{ __('Title') }}</label>
                                            <select class="form-select form-select-md @error('title') is-invalid @enderror"
                                                aria-label=".form-select-lg example" id="selTitle" name="title"
                                                value="{{ old('$item->name') }}">
                                                <option hidden>Choose Title</option>
                                                @foreach ($title as $titles)
                                                    <option value="{{ $titles->name }}"
                                                        {{ old('title') == $titles->name ? 'selected' : '' }}>
                                                        {{ $titles->name }}</option>
                                                @endforeach
                                            </select>
                                            @error('title')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror

                                        </div>
                                    </div>

                                </div>

                                <div class="py-1"></div>

                                <div class="mb-2 fs-4 text-center">Address</div>

                                <div class="row">

                                    {{-- COUNTRY --}}
                                    <div class="col">
                                        <div class="mb-3">
                                            <label for="country" class="form-label"><b style="color: red">*</b>
                                                {{ __('Country') }}</label>
                                            <select
                                                class="form-select form-select-md @error('country') is-invalid @enderror"
                                                aria-label=".form-select-lg example" id="country" name="country"
                                                value="{{ old('$item->name') }}">
                                                <option hidden>Choose Country</option>
                                                @foreach ($country as $countries)
                                                    <option value="{{ $countries->country_name }}"
                                                        {{ old('country') == $countries->country_name ? 'selected' : '' }}>
                                                        {{ $countries->country_name }}</option>
                                                @endforeach
                                            </select>
                                            @error('country')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>

                                    {{-- Province --}}
                                    <div class="col">
                                        <div class="mb-3">
                                            <label for="province" class="form-label"><b style="color: red">*</b>
                                                {{ __('Province') }}</label>
                                            <select
                                                class="form-select form-select-md  @error('province') is-invalid @enderror"
                                                aria-label=".form-select-lg example" id="province" name="province"
                                                value="{{ old('$item->name') }}">
                                            </select>

                                            @error('province')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>

                                    {{-- Municipality --}}
                                    <div class="col">
                                        <div class="mb-3">
                                            <label for="municipality" class="form-label"><b style="color: red">*</b>
                                                {{ __('Municipality/City') }}</label>
                                            <select
                                                class="form-select form-select-md  @error('municipality') is-invalid @enderror"
                                                aria-label=".form-select-lg example" id="municipality"
                                                name="municipality" value="{{ old('$item->name') }}">
                                            </select>
                                            @error('municipality')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>

                                    {{-- BARANGAY --}}
                                    <div class="col">
                                        <div class="mb-3">
                                            <label for="barangay" class="form-label"><b style="color: red">*</b>
                                                {{ __('Barangay') }}</label>
                                            <select class="form-select form-select-md  @error('brgy') is-invalid @enderror"
                                                aria-label=".form-select-lg example" id="barangay" name="brgy"
                                                value="{{ old('brgy') }}">
                                            </select>
                                        </div>
                                        @error('brgy')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="row">
                                    {{-- HOUSE NO AND STREET --}}
                                    <div class="col">
                                        <div class="mb-3">
                                            <label for="houseNo_streetName" class="form-label"><b
                                                    style="color: red">*</b> {{ __('House No. & Street') }}</label>
                                            <input id="houseNo_streetName" name="houseNo_streetName" type="text"
                                                class="form-control  @error('houseNo_streetName') is-invalid @enderror autofocus"
                                                value="{{ old('houseNo_streetName') }}" onblur="validate()">
                                        </div>
                                        @error('houseNo_streetName')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>

                                    {{-- Postal Code --}}
                                    <div class="col">
                                        <div class="mb-3">
                                            <label for="postal_code" class="form-label">{{ __('Postal Code') }}</label>
                                            <input id="zip_code" name="postal_code" type="text"
                                                class="form-control  @error('postal_code') is-invalid @enderror autofocus"
                                                value="{{ old('postal_code') }}" readonly>
                                        </div>
                                        @error('postal_code')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>

                                </div>

                                <div class="py-1"></div>

                                <div class="mb-2 fs-4 text-center">Account Details</div>

                                <div class="row">

                                    <div class="mb-3">
                                        <label for="email" class="form-label"><b style="color: red">*</b>
                                            {{ __('E-Mail') }}</label>
                                        <input id="email" type="email"
                                            class="form-control error" name="email"
                                            value="{{ old('email') }}" required autocomplete="email">

                                    </div>
                                </div>

                                <div class="row">
                                    {{-- PASSWORD --}}
                                    <div class="col">
                                        <label for="password" class="form-label"><b style="color: red">*</b>
                                            {{ __('Password') }}</label>
                                        <div class="input-group mb-3">
                                            <input type="password"
                                                class="form-control  @error('password') is-invalid @enderror"
                                                id="password" name="password" onkeyup="return validatepass()">
                                            <button class="btn btn-outline-dark" type="button" id="showPassword" name="showPassword"><i
                                                    class="fa-solid fa-eye"></i></button>

                                            @error('password')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                        <div class="errors">
                                            <ul>
                                                <li id="upper"> At least one uppercase</li>
                                                <li id="lower"> At least one lowercase</li>
                                                <li id="special_char"> At least one special character or symbol</li>
                                                <li id="number"> At least one number</li>
                                                <li id="length"> At least 8 characters</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>

                                {{-- PASSWORD CONFIRM --}}
                                <div class="row">

                                    <div class="col">
                                        <label for="password_confirmation" class="form-label"><b style="color: red">*</b>
                                            {{ __('Password Confirm') }}</label>
                                        <div class="input-group mb-3">
                                            <input type="password" class="form-control" id="password_confirmation"
                                                name="password_confirmation">
                                            <button class="btn btn-outline-dark" type="button" id="showConfirmPassword" name="showConfirmPassword"><i
                                                    class="fa-solid fa-eye"></i></button>
                                            @error('password_confirmation')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>
                                </div>

                                <div style="margin-top: 7px;" id="CheckPasswordMatch"></div>
                                {{-- EMAIL --}}

                                <div class="row">

                                    {{-- NEW & EXISTING PATIENT --}}

                                    <div class="row mb-2">
                                        <div class="col ">

                                            <div class="mt-3">
                                                {{-- NEW PATIENT --}}
                                                <input type="checkbox" class="form-check-input" type="checkbox"
                                                    name="status" id="new_patient" value="New Patient"
                                                    {{ old('status') == 'New Patient' ? 'checked' : '' }}>
                                                <label class="form-check-label" for="status">
                                                    {{ __('New Patient') }}</label>
                                                <div class="col">
                                                    {{-- EXISTING PATIENT --}}
                                                    <input type="checkbox" class="form-check-input" type="checkbox"
                                                        name="status" id="existing_patient" value="Existing Patient"
                                                        {{ old('status') == 'Existing Patient' ? 'checked' : '' }}>
                                                    <label class="form-check-label" for="status">
                                                        {{ __('Existing Patient') }}</label>
                                                </div>


                                            </div>

                                        </div>

                                        {{-- PATIENT ID --}}
                                        <div class="col">
                                            <div class="mb-3">
                                                <label for="patient_id1" class="form-label" id="patient_id1"
                                                    style="display: none">{{ __('Patient ID') }}</label>
                                                <input id="patient_id" name="patient_id" type="text"
                                                    class="form-control autofocus" style="display: none"
                                                    value="{{ old('patient_id') }}">
                                                </ul>
                                            </div>
                                        </div>
                                        @error('patient_id')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>

                                </div>

                                <div class="row">
                                    {{-- ID TYPE --}}
                                    <div class="col">
                                        <div class="mb-3">
                                            <label for="id_type" class="form-label"><b style="color: red">*</b>
                                                {{ __('Id Type') }}</label>
                                            <select
                                                class="form-select form-select-md  @error('id_type') is-invalid @enderror"
                                                aria-label=".form-select-lg example" id="selID_Type" name="id_type"
                                                value="{{ old('$item->name') }}">
                                                <option value="">Select ID Type</option>
                                                @foreach ($id_type as $id_types)
                                                    <option value="{{ $id_types->name }}"
                                                        {{ old('id_type') == $id_types->name ? 'selected' : '' }}>{{ $id_types->name }}
                                                    </option>
                                                @endforeach
                                            </select>
                                            @error('id_type')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>

                                    {{-- ID NUMBER AND UPLOAD ID FILE --}}
                                    <div class="col">
                                        <div class="mb-2">
                                            <label for="id_no" class="form-label"><b style="color: red">*</b>
                                                {{ __('Id Number') }}</label>
                                            <input id="id_no" name="id_no" type="text"
                                                class="form-control  @error('id_no') is-invalid @enderror autofocus" value="{{ old('id_no') }}" onblur="validate()">
                                            </ul>
                                        </div>
                                        @error('id_no')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="col">
                                    <div class="mb-3">
                                        <label for="upload_id" class="form-label"><b style="color: red">*</b>
                                            {{ __('Upload ID') }}</label>
                                        <input id="upload_id" name="upload_id" type="file"
                                            class="form-control  @error('upload_id') is-invalid @enderror autofocus"
                                            value="{{ old('upload_id') }}" accept="image/png, image/jpeg, application/pdf "
                                            onblur="validate()" onchange="return filevalidate()" style="display: none" >
                                            <input type="button" class="btn btn-primary form-control" class="demoInputBox" name="btnUploadID" id="btnUploadID" onclick="openUploadID()" value="Select a File or Photo"/>
                                            <br><span id="file_error"></span>
                                            <br><span id="extension_error"></span>
                                    </div>
                                    @error('upload_id')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>

                        </div>
                        {{-- SUBMIT --}}
                        <div class="text-center d-flex items-center p-3">
                            <button type="submit" id="btnSignUp" name="btnSignUp" class="btn btn-secondary col-lg-12" disabled="disabled">Register</button>
                        </div>
                    </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    </div>

    <script>
        $('#register_form').validate({
            errorClass: 'errors',
        // Specify validation rules
        rules: {
         firstname: {
           required: true,
          },
          email: {
           required: true,
           email: true,

           remote:'/validate-email'
           },
           password: {
           required: true,
            minlength: 8
           },
        },

        // Specify validation Error messages
        messages: {
         firstname: {
           required: "Please enter your name",
         },
         email: {
           required: "Please enter your email" ,
           remote:"Email already exist",
         },
         password: {
           required: "Please enter password",
         },
        },

        submitHandler: function(form) {
         form.submit();
        }
        });
    </script>

    <script>

    </script>
@endsection
