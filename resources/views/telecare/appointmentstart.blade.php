@extends('layouts.app')

@section('content')
    <div class="container mt-5">
        <div class="row">
           
                <div class="p-3 py-5 align-content-center">
                    <div class="d-flex justify-content-center align-items-center mb-3">
                        <h2 class="text-right">Begin Appointment</h2>
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
    @endsection
