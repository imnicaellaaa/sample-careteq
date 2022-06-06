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
                        <h4 class="text-right">Appointments</h4>
                    </div>
                    <div class="row mt-2">
                        {{-- Table --}}
                        <table class="table table-striped table-bordered table-sm table-responsive-sm">
                            <thead>
                                <tr>
                                    <th scope="col">Appointment Reference Number</th>
                                    <th scope="col">Date</th>
                                    <th scope="col">Time</th>
                                    <th scope="col">Doctor</th>
                                    <th scope="col">Reason of checkup</th>
                                    <th scope="col">Description</th>
                                </tr>
                            </thead>
                            {{-- Table Content --}}
                            <tbody>
                                <tr>
                                    <td>06880324</th>
                                    <td>12/08/2021</td>
                                    <td>2:00pm</td>
                                    <td>Dr. Strange</td>
                                    <td>Flu</td>
                                    <td>Rendered</td>
                                </tr>

                                <tr>
                                    <td>06880324</th>
                                    <td>12/08/2021</td>
                                    <td>2:00pm</td>
                                    <td>Dr. Strange</td>
                                    <td>Flu</td>
                                    <td>Rendered</td>
                                </tr>

                                <tr>
                                    <td>06880324</th>
                                    <td>12/08/2021</td>
                                    <td>2:00pm</td>
                                    <td>Dr. Strange</td>
                                    <td>Flu</td>
                                    <td>Rendered</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>

                <div class="flex">
                    <button class="btn btn-secondary ">Schedule appointment</button>
                </div>
            </div>
        </div>
    </div>
@endsection
