@extends('layouts.app')

@section('content')
    <div class="container mt-5">
        <div class="row">
            <div class="col-md-3 border-right">
                <div class="d-flex flex-column align-items-center text-center p-3 py-5"><img class="rounded-circle mt-5"
                        width="150px"
                        src="https://cdn.pixabay.com/photo/2015/10/05/22/37/blank-profile-picture-973460_640.png"><span
                        class="font-weight-bold">John Doe</span><span class="text-black-50">john.doe@gmail.com</span><span>
                    </span></div>
            </div>
            <div class="col-md-8 border-right">
                <div class="p-3 py-5">
                    <div class="d-flex justify-content-center align-items-center mb-3">
                        <h4 class="text-right">Test Results</h4>
                    </div>
                    <div class="row mt-2">
                        {{-- Appointment Stuff --}}
                        <div class="col">

                            {{-- Appointment Reference Number --}}
                            <label for="">Appointment Reference Number:</label>
                            <h4 class=" card border-2 rounded-md p-2 ">0000</h4>

                            {{-- Appointment Date --}}
                            <label for="">Appointment Reference Number:</label>
                            <h4 class=" card border-2 rounded-md p-2 ">1/1/2001</h4>

                            {{-- Appointment Time --}}
                            <label for="">Appointment Reference Number:</label>
                            <h4 class=" card border-2 rounded-md p-2 ">13:00</h4>

                            {{-- Doctor --}}
                            <label for="">Doctor's Name:</label>
                            <h4 class=" card border-2 rounded-md p-2 ">Dr. Strange</h4>

                            {{-- Speciality --}}
                            <label for="">Speciality:</label>
                            <h4 class=" card border-2 rounded-md p-2 ">Internal Medicine</h4>
                        </div>
                    </div>
                    <div class="flex">
                        <button class="btn btn-secondary">Start Meeting</button>
                    </div>

                </div>
            </div>
        </div>
    </div>
@endsection
