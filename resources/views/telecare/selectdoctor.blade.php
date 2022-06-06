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
                        <h4 class="text-right">Schedule an appointment</h4>
                    </div>

                    <div class="row mt-2">
                        {{-- Search Bars --}}

                        <div class="col">
                            <div class="input-group mb-3">
                                <span class="input-group-text" id="basic-addon1"><i
                                        class="fa-solid fa-magnifying-glass"></i></span>
                                <input type="text" class="form-control" placeholder="Doctor's Name" aria-label="Username"
                                    aria-describedby="basic-addon1">
                            </div>
                        </div>

                        <div class="col">
                            <div class="input-group mb-3">
                                <span class="input-group-text" id="basic-addon1"><i
                                        class="fa-solid fa-magnifying-glass"></i></span>
                                <input type="text" class="form-control" placeholder="Hospital" aria-label="Username"
                                    aria-describedby="basic-addon1">
                            </div>
                        </div>

                    </div>

                    <div class="row mt-2 ">

                        <div class="col">
                            <div class="input-group mb-3">
                                <span class="input-group-text" id="basic-addon1"><i
                                        class="fa-solid fa-magnifying-glass"></i></span>
                                <input type="text" class="form-control" placeholder="Specialization" aria-label="Username"
                                    aria-describedby="basic-addon1">
                            </div>
                        </div>

                        <div class="col">
                            <div class="input-group mb-3">
                                <span class="input-group-text" id="basic-addon1"><i
                                        class="fa-solid fa-magnifying-glass"></i></span>
                                <input type="text" class="form-control" placeholder="HMO Accredited" aria-label="Username"
                                    aria-describedby="basic-addon1">
                            </div>
                        </div>
                    </div>

                    <div class="row input-group">

                        <div class="col">
                            <label class="form-label">{{ __('Reason for checkup') }}</label>
                            <input id="email" type="email" class="form-control" name="email" autofocus>
                        </div>

                        <div class="col mt-4 btn-group ">
                            <button class="btn btn-secondary">search</button>
                        </div>

                    </div>
                </div>

                <div class="row mt-2 gap-1">

                    <div class="card" style="width: 18rem;">
                        <img src="https://media.istockphoto.com/vectors/doctor-icon-or-avatar-physician-with-stethoscope-medicine-symbol-vector-id1150502263?k=20&m=1150502263&s=612x612&w=0&h=s2_jO-vB7I_Jd5UqFIacb5hpXrTFjOFpOTABRiVg40A="
                            class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Dr. Strange</h5>
                            <ul class="list-group">
                                <li class="list-group-item">Clinic Schedule:</li>
                                <li class="list-group-item">Monday-Friday</li>
                                <li class="list-group-item">7:00am - 12noon</li>
                                <button class="btn btn-secondary mt-2">Book an appointment</button>
                            </ul>
                        </div>
                    </div>


                    <div class="card" style="width: 18rem;">
                        <img src="https://media.istockphoto.com/vectors/doctor-icon-or-avatar-physician-with-stethoscope-medicine-symbol-vector-id1150502263?k=20&m=1150502263&s=612x612&w=0&h=s2_jO-vB7I_Jd5UqFIacb5hpXrTFjOFpOTABRiVg40A="
                            class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Dr. Strange</h5>
                            <ul class="list-group">
                                <li class="list-group-item">Clinic Schedule:</li>
                                <li class="list-group-item">Monday-Friday</li>
                                <li class="list-group-item">7:00am - 12noon</li>
                                <button class="btn btn-secondary mt-2">Book an appointment</button>
                            </ul>
                        </div>
                    </div>


                    <div class="card" style="width: 18rem;">
                        <img src="https://media.istockphoto.com/vectors/doctor-icon-or-avatar-physician-with-stethoscope-medicine-symbol-vector-id1150502263?k=20&m=1150502263&s=612x612&w=0&h=s2_jO-vB7I_Jd5UqFIacb5hpXrTFjOFpOTABRiVg40A="
                            class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Dr. Strange</h5>
                            <ul class="list-group">
                                <li class="list-group-item">Clinic Schedule:</li>
                                <li class="list-group-item">Monday-Friday</li>
                                <li class="list-group-item">7:00am - 12noon</li>
                                <button class="btn btn-secondary mt-2">Book an appointment</button>
                            </ul>
                        </div>
                    </div>
                </div>


            </div>
        </div>
    </div>
@endsection
