@extends('layouts.app')

@section('content')
    <div class="container mt-5">
        <div class="row">
            <div class="container rounded bg-white mt-5 mb-5">
                <div class="row">

                    {{-- LEFT SIDE WITH IMAGE --}}
                    <div class="col-md-3 border-right">
                        <div class="d-flex flex-column align-items-center text-center p-3 py-5"><img
                                class="rounded-circle mt-5" width="150px"
                                src="https://cdn.pixabay.com/photo/2015/10/05/22/37/blank-profile-picture-973460_640.png"><span
                                class="font-weight-bold">John Doe</span><span
                                class="text-black-50">john.doe@gmail.com</span><span> </span>
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
                                    <p class="card border-1 rounded-sm p-1">John</p>
                                </div>

                                {{-- MIDDLE NAME --}}
                                <div class="col-md-6"><label class="labels">Middle Name</label>
                                    <p class="card border-1 rounded-sm p-1">p</p>
                                </div>

                                {{-- LAST NAME --}}
                                <div class="col-md-6"><label class="labels">Last Name</label>
                                    <p class="card border-1 rounded-sm p-1">Doe</p>
                                </div>
                            </div>

                            {{-- OTHER STUFF --}}
                            <div class="row mt-2">

                                {{-- BDAY --}}
                                <div class="col-md-6"><label class="labels">Birthday</label>
                                    <p class="card border-1 rounded-sm p-1">1/1/2001</p>
                                </div>

                                {{-- SUFFIX --}}
                                <div class="col-md-6"><label class="labels">Suffix</label>
                                    <p class="card border-1 rounded-sm p-1">Mr</p>
                                </div>

                                {{-- AGE --}}
                                <div class="col-md-6"><label class="labels">Age</label>
                                    <p class="card border-1 rounded-sm p-1">22</p>
                                </div>

                                {{-- GENDER --}}
                                <div class="col-md-6"><label class="labels">Gender</label>
                                    <p class="card border-1 rounded-sm p-1">Male</p>
                                </div>

                                {{-- TITLE --}}
                                <div class="col-md-6"><label class="labels">Title</label>
                                    <p class="card border-1 rounded-sm p-1">title</p>
                                </div>

                            </div>

                            <div class="d-flex justify-content-between align-items-center mb-3">
                                <h4 class="text-right">Adress</h4>
                            </div>

                            {{-- ADRESS --}}
                            <div class="row mt-2">

                                {{-- STREET --}}
                                <div class="col-md-6"><label class="labels">Street</label>
                                    <p class="card border-1 rounded-sm p-1">Something Street</p>
                                </div>

                                {{-- BARANGAY --}}
                                <div class="col-md-6"><label class="labels">Barangay</label>
                                    <p class="card border-1 rounded-sm p-1">Something Barangay</p>
                                </div>

                                {{-- CITY --}}
                                <div class="col-md-6"><label class="labels">Municipality / City</label>
                                    <p class="card border-1 rounded-sm p-1">Something City</p>
                                </div>

                                {{-- PROVINCE --}}
                                <div class="col-md-6"><label class="labels">Province</label>
                                    <p class="card border-1 rounded-sm p-1">Something Province</p>
                                </div>

                                {{-- REGION --}}
                                <div class="col-md-6"><label class="labels">Region</label>
                                    <p class="card border-1 rounded-sm p-1">Something Region</p>
                                </div>

                                {{-- COUNTRY --}}
                                <div class="col-md-6"><label class="labels">Country</label>
                                    <p class="card border-1 rounded-sm p-1">Philippines</p>
                                </div>

                                {{-- POSTAL CODE --}}
                                <div class="col-md-6"><label class="labels">Postal Code</label>
                                    <p class="card border-1 rounded-sm p-1">1234</p>
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

                                {{-- HEIGHT --}}
                                <div class="col-md-6"><label class="labels">Height</label>
                                    <p class="card border-1 rounded-sm p-1">5'10 / 180 cm</p>

                                </div>

                                {{-- WEIGHT --}}
                                <div class="col-md-6"><label class="labels">Weight</label>
                                    <p class="card border-1 rounded-sm p-1">160 lbs / 73 kg</p>

                                </div>

                                {{-- BMI --}}
                                <div class="col-md-6"><label class="labels">BMI</label>
                                    <p class="card border-1 rounded-sm p-1">18.5</p>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
