@extends('layouts.app')

@section('content')
    <div class="container mt-5">
        <div class="row">
            <div class="container rounded mt-5 mb-5">
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
