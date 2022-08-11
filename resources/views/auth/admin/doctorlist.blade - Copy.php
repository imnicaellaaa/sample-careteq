@extends('layouts.admin')
<script src="{{ asset('js/app.js') }}"></script>

<!-- Select2 CSS -->
<link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-beta.1/dist/css/select2.min.css" rel="stylesheet" />


<script src="{{ asset('js/jquery-3.6.0/js') }}"></script>
<script src="{{ asset('js/jquery-3.6.0.min/js') }}"></script>
<script src="{{ asset('js/jquery-1.11.1.js') }}"></script>
<script src="{{ asset('js/jquery-1.11.1.min.js') }}"></script>
<script src="{{ asset('js/careteq.js') }}"></script>

<!-- Select2 JS -->
<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-beta.1/dist/js/select2.min.js"></script>
@section('content')

<style>
    .btn-text-right{
        text-align: right;
        border-radius: 50px;
    }
</style>
@if(session()->has('message'))
<div class="container mt-5" id="successDoctorDialog">
<div class="alert alert-success alert-dismissible fade show" role="alert" id="mySuccess">
    <strong>Success!</strong> {{ session()->get('message') }}
    <hr>
    <div class="btn-text-right">
        <button type="button" class="btn" id="sucessBtnDoctor" name="sucessBtnDoctor" onclick="sucessBtnDoctor()" style="background-color: rgb(4, 191, 104); font-weight:bold ">Okay</button>
    </div>
    <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
</div>
</div>
@endif


@if(session()->has('error'))
<div class="container mt-5" id="errorDoctorDialog">
<div class="alert alert-danger alert-dismissible fade show  " role="alert">
    <strong>Error!</strong> {{ session()->get('error') }}
    <hr>
    <div class="btn-text-right">
        <button type="button" class="btn" id="errorBtnDoctor" name="errorBtnDoctor" onclick="errorBtnDoctor()" style="background-color: rgb(229, 109, 109); font-weight:bold ">Okay</button>
    </div>
    <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
</div>
</div>
@endif
    <div class="container table-responsive py-5">

        <div class="d-flex mb-3">
            <div class="p-2 fs-3">Doctors List</div>

            <div class="ms-auto p-2">
                <button class="btn-success rounded-3" data-bs-toggle="modal" data-bs-target="#addModal">
                    <i class="fa-solid fa-plus"></i> Add Doctor
                </button>
            </div>
        </div>

        <table class="table table-hover" id="doctorsTable">
            <thead class="table-light">
                <tr>
                    <th scope="col">License No.</th>
                    <th scope="col">Title</th>
                    <th scope="col">First Name</th>
                    <th scope="col">Last Name</th>
                    <th scope="col">Email</th>
                    <th scope="col">Contact Number</th>
                    <th scope="col">Hospital</th>
                    <th scope="col">Specialization</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            @foreach ($doctor as $doctors )
            <tbody>
                <tr>
                    <td hidden ><input type="text" name="doctors_id" id="doctors_id" style="visibility:  hidden" value="{{$doctors->id}}"></input></td>
                    <td >{{$doctors->license_no}}</td>
                    <td>{{$doctors->title}}</td>
                    <td>{{$doctors->firstname}}</td>
                    <td>{{$doctors->lastname}}</td>
                    <td>{{$doctors->email}}</td>
                    <td>{{$doctors->contact_no}}</td>
                    <td>{{$doctors->hospital_name}}</td>
                    <td>{{$doctors->specialization}}</td>
                    <td>
                        <div class="flex">
                            <a href="#editModaledit/{{$doctors->id}}"><button type="button" class="btn btn-primary" data-bs-toggle="modal"
                                    data-bs-target="#editModal" name="editButtonDoctor[]" id="{{$doctors->id}}">
                                    <i class="fa-solid fa-pen-to-square" ></i> Edit
                                </button></a>
                            {{--  <button type="button" class="btn btn-danger" data-bs-toggle="modal"
                                data-bs-target="#deleteModal" >
                                <i class="fa-solid fa-trash"></i> Delete
                            </button>  --}}
                        </div>
                    </td>

                </tr>

            </tbody>
            @endforeach
        </table>


        {{-- ADD Modal --}}
        <form name="addDoctor" action="{{ route('admin.addDoctor') }}" method="POST">
            @csrf
            <div id='result'></div>
        <div class="modal fade" id="addModal" tabindex="-1" role="dialog" aria-labelledby="addModallabel" aria-hidden="true" data-backdrop="static">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Add Doctor</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">

                            <div class="input-group flex-nowrap mb-2">
                                {{-- Edit Ttile --}}

                                <select class="form-select form-select-md @error('abbreviation') is-invalid @enderror"
                                                aria-label=".form-select-lg example" id="abbreviation" name="abbreviation"
                                                value="" required>
                                                <option hidden>Choose Abbreviation</option>
                                                @foreach ($abbreviation as $abbreviations )
                                                    <option value="{{$abbreviations->abbreviation}}" {{old('abbreviation') == $abbreviations->abbreviation ? 'selected':''}}>{{$abbreviations->abbreviation}}</option>
                                                @endforeach
                                            </select>
                            </div>

                            <div class="input-group flex-nowrap mb-2">
                                {{-- Edit License Number --}}
                                <input type="text" class="form-control" placeholder="example: 123456-89" aria-label="firstname"
                                    aria-describedby="addon-wrapping" name="license_no" id="license_no" >
                            </div>

                            <div class="input-group flex-nowrap mb-2">
                                {{-- Edit First Name --}}
                                <input type="text" class="form-control" placeholder="First Name" aria-label="firstname"
                                    aria-describedby="addon-wrapping" name="firstname" id="firstname" required>
                            </div>

                            <div class="input-group flex-nowrap mb-2">
                                {{-- Edit Last Name --}}
                                <input type="text" class="form-control" placeholder="Last Name" aria-label="lastname"
                                    aria-describedby="addon-wrapping" name="lastname" id="lastname" required>
                            </div>

                            <div class="input-group flex-nowrap mb-2">
                                {{-- Edit Email --}}
                                <input type="text" class="form-control" placeholder="email@gmail.com" aria-label="lastname"
                                    aria-describedby="addon-wrapping" name="email" id="email" required>
                            </div>

                            <div class="input-group flex-nowrap mb-2">
                                {{-- Edit Contact Number --}}
                                <input type="text" class="form-control" placeholder="ex: 09123456789" aria-label="lastname"
                                    aria-describedby="addon-wrapping" name="contact_no" id="contact_no" required>
                            </div>

                            <div class="input-group flex-nowrap mb-2">
                                {{-- Edit Hospital --}}
                                <input type="text" class="form-control" placeholder="Hospital" aria-label="hospital"
                                    aria-describedby="addon-wrapping" name="hospital_name" id="hospital_name" required >
                            </div>

                            <div class="input-group flex-nowrap mb-2">
                                <select class="form-select form-select-md @error('specialization') is-invalid @enderror"
                                aria-label=".form-select-lg example" id="specialization" name="specialization"
                                value="{{ old('$item->description') }}" required>
                                <option hidden>Choose Specialization</option>
                                @foreach ($specialization as $specializations )
                                    <option value="{{$specializations->description}}" {{old('specialization') == $specializations->description ? 'selected':''}}>{{$specializations->description}}</option>
                                @endforeach
                            </select>
                            </div>

                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                <button type="submit" class="btn btn-primary">Save changes</button>
                            </div>
                        </form>
                    </div>

                </div>
            </div>
        </div>

        {{-- Edit Modal --}}
        {{--  @foreach ($doctor as $doctors)  --}}
        <form name="editDoctorInformation" action="{{ route('admin.editDoctorInformation', $doctors->id ) }}" method="POST" id="editFormDoctors">
            @csrf

        <div class="modal fade" id="editModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">

            <div class="modal-dialog">
                <div class="modal-content">

                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Edit Doctor Details</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">

                            <div class="input-group flex-nowrap mb-2">
                                <input type="hidden" name="doctors_id" id="doctors_id" style="visibility: hidden " value="{{$doctors->id}}"></input>
                                {{-- Edit Abbreviation --}}
                                <select class="form-select form-select-md @error('abbreviation') is-invalid @enderror"
                                                aria-label=".form-select-lg example" id="selabbreviation" name="abbreviation"
                                                value="{{$doctors->title}}" required>
                                                <option hidden>{{ $doctors->title }}</option>
                                                @foreach ($abbreviation as $abbreviations )
                                                    <option value="{{$abbreviations->abbreviation}}" {{old('abbreviation') == $abbreviations->abbreviation ? 'selected':''}}>{{$abbreviations->abbreviation}}</option>
                                                @endforeach
                                            </select>


                            </div>

                            <div class="input-group flex-nowrap mb-2">
                                {{-- Edit License Number --}}

                                <input type="text" class="form-control" placeholder="example: 123456-89" aria-label="firstname"
                                    aria-describedby="addon-wrapping" name="license_no" id="license_no" value="{{ $doctors->license_no }}">
                            </div>

                            <div class="input-group flex-nowrap mb-2">
                                {{-- Edit First Name --}}

                                <input type="text" class="form-control" placeholder="First Name" aria-label="firstname"
                                    aria-describedby="addon-wrapping" name="firstname" id="firstname" value="{{ $doctors->firstname }}">

                            </div>

                            <div class="input-group flex-nowrap mb-2">
                                {{-- Edit Last Name --}}
                                <input type="text" class="form-control" placeholder="Last Name" aria-label="lastname"
                                    aria-describedby="addon-wrapping" name="lastname" id="lastname" value="{{ $doctors->lastname }}" >
                            </div>

                            <div class="input-group flex-nowrap mb-2">
                                {{-- Edit Email --}}
                                <input type="text" class="form-control" placeholder="email@gmail.com" aria-label="email"
                                    aria-describedby="addon-wrapping" name="email" id="email" value="{{ $doctors->email }}">
                            </div>

                            <div class="input-group flex-nowrap mb-2">
                                {{-- Edit Contact Number --}}
                                <input type="text" class="form-control" placeholder="ex: 09123456789" aria-label="conact_no"
                                    aria-describedby="addon-wrapping" name="contact_no" id="contact_no" value="{{ $doctors->contact_no }}">
                            </div>

                            <div class="input-group flex-nowrap mb-2">
                                {{-- Edit Hospital --}}
                                <input type="text" class="form-control" placeholder="Hospital" aria-label="hospital"
                                    aria-describedby="addon-wrapping" name="hospital_name" id="hospital_name" value="{{ $doctors->hospital_name }}">
                            </div>

                            <div class="input-group flex-nowrap mb-2">
                                <select class="form-select form-select-md @error('specialization') is-invalid @enderror"
                                aria-label=".form-select-lg example" id="selSpecialization" name="specialization">
                                <option hidden>{{ $doctors->specialization }}</option>
                                @foreach ($specialization as $specializations )
                                    <option value="{{$specializations->description}}" {{old('specialization') == $specializations->description ? 'selected':''}}>{{$specializations->description}}</option>
                                @endforeach
                            </select>
                            </div>

                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                <button type="submit" class="btn btn-primary">Save changes</button>
                            </div>

                    </div>
                </div>
            </div>
        </div>
    </form>
    {{--  @endforeach  --}}

        {{--  <!-- DELETE Modal -->
        @foreach ($doctor as $doctors)
        <form name="deleteDoctorsInformation" action="" method="POST"  >
            @csrf
            @method('DELETE')
        <div class="modal fade" id="deleteModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Do you want to delete this record?</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-success" href="{{ route('admin.deleteDoctorsInformation', $doctors->id) }}"
                        onclick="event.preventDefault();document.getElementById('delete-form-{{$doctors->id}}').submit();">Yes</button>
                        <button type="button" class="btn btn-danger" data-bs-dismiss="modal" name="deleteNoDoctorBtn" id="deleteNoDoctorBtn">No</button>
                    </div>
                </div>
            </div>
        </div>
        @endforeach

    </div>  --}}
@endsection
