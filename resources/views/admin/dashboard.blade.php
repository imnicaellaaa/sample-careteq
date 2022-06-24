@extends('layouts.admin')

@section('content')
    <div class="container mt-5">
        <div class="row">
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
    </div>
    </div>
@endsection
