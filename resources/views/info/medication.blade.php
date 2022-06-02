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
                        <h4 class="text-right">Your Medication</h4>
                    </div>
                    <div class="row mt-2">
                        {{-- Table --}}
                        <table class="table table-striped table-bordered table-sm table-responsive-sm">
                            <thead>
                                <tr>
                                    <th scope="col">Date</th>
                                    <th scope="col">Medicine</th>
                                    <th scope="col">Quantity</th>
                                    <th scope="col">Instruction</th>
                                    <th scope="col">Doctor</th>
                                </tr>
                            </thead>
                            {{-- Table Content --}}
                            <tbody>
                                <tr>
                                    <td>02/03/2022</th>
                                    <td>simvastatin</td>
                                    <td>14</td>
                                    <td>Twice a Day</td>
                                    <td>Dr. Strange</td>
                                </tr>

                                <tr>
                                    <td>02/03/2022</th>
                                    <td>simvastatin</td>
                                    <td>14</td>
                                    <td>Twice a Day</td>
                                    <td>Dr. Strange</td>
                                </tr>

                                <tr>
                                    <td>02/03/2022</th>
                                    <td>simvastatin</td>
                                    <td>14</td>
                                    <td>Twice a Day</td>
                                    <td>Dr. Strange</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
