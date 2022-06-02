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

                    <div class="col-md-8">
                        <div class="p-3 py-5">
                            <h4 class="text-center">Your Prescription</h4>

                            <div class="row mt-2">
                                    <div class="card border-1 p-2 shadow-md">
                                            {{-- PDF WOULD GO HERE --}}
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
