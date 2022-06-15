@extends('layouts.app')

@section('content')
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

                                {{-- GENDER --}}
                                <div class="col-md-6 p-2"><label class="labels">Gender</label>
                                    <input type="text" name="gender" id="gender" class="form-control" value="{{ Auth::user()->gender }}"  style="background-color: white" autofocus>
                                </div>

                                {{-- TITLE --}}
                                <div class="col-md-6"><label class="labels">Title</label>
                                    <input type="text" name="title" id="title" class="form-control" value="{{ Auth::user()->title }}" style="background-color: white"  autofocus>
                                </div>

                            </div>

                            <div class="d-flex justify-content-between align-items-center mb-3">
                                <h4 class="text-right ">Address</h4>
                            </div>

                            {{-- ADRESS --}}
                            <div class="row mt-2">

                                {{-- STREET --}}
                                <div class="col-md-6"><label class="labels">Street</label>
                                    <input type="text" name="houhouseNo_streetNamese" id="houseNo_streetName" class="form-control"
                                    value="{{ Auth::user()->houseNo_streetName }}" style="background-color: white"  autofocus>
                                </div>

                                {{-- BARANGAY --}}
                                <div class="col-md-6"><label class="labels">Barangay</label>
                                    <input type="text" name="brgy" id="selBrgy" class="form-control"
                                    value="{{ Auth::user()->brgy }}" style="background-color: white" autofocus>
                                </div>

                                {{-- CITY --}}
                                <div class="col-md-6 p-2"><label class="labels">Municipality / City</label>
                                    <input type="text" name="municipality" id="municipality" class="form-control"
                                    value="{{ Auth::user()->municipality }}" style="background-color: white"  autofocus>
                                </div>

                                {{-- PROVINCE --}}
                                <div class="col-md-6 p-2"><label class="labels">Province</label>
                                    <input type="text" name="province" id="province" class="form-control"
                                    value="{{ Auth::user()->province }}" style="background-color: white"  autofocus>
                                </div>



                                {{-- COUNTRY --}}
                                <div class="col-md-6 p-2"><label class="labels">Country</label>
                                    <input type="text" name="country" id="country" class="form-control"
                                    value="{{ Auth::user()->country }}" style="background-color: white"  autofocus>
                                </div>

                                {{-- POSTAL CODE --}}
                                <div class="col-md-6 p-2"><label class="labels">Postal Code</label>
                                    <input type="text" name="postal_code" id="postal_code" class="form-control"
                                    value="{{ Auth::user()->postal_code }}" style="background-color: white" autofocus>
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
                                    <input type="text" name="centimeter" id="centimeter" class="form-control"
                                    value="{{ Auth::user()->cm }}" style="background-color: white; width:85%" autofocus>

                                </div>

                                {{-- HEIGHT IN INCHES --}}
                                <div class="col-md-6"><label class="labels">Height in Inches</label>
                                    <input type="text" name="inch" id="inch" class="form-control"
                                    value="{{ Auth::user()->cm }}" style="background-color: white; width:85%" autofocus>

                                </div>

                                {{-- WEIGHT IN KILOGRAMS --}}
                                <div class="col-md-6 p-2"><label class="labels">Weight in Kilograms</label>
                                    <input type="text" name="kg" id="kg" class="form-control"
                                    value="{{ Auth::user()->cm }}" style="background-color: white; width:85%" autofocus>

                                </div>

                                {{-- WEIGHT IN POUNDS --}}
                                <div class="col-md-6 p-2"><label class="labels">Weight in Pounds</label>
                                    <input type="text" name="kg" id="kg" class="form-control"
                                    value="{{ Auth::user()->cm }}" style="background-color: white; width:85%" autofocus>

                                </div>

                                {{-- BMI --}}
                                <div class="col-md-6"><label class="labels">BMI</label>
                                    <input type="text" name="bmi" id="bmi" class="form-control"
                                    value="{{ Auth::user()->bmi }}" style="background-color: white"  autofocus>
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
