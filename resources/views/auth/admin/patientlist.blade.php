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
<div class="container table-responsive py-5">

    <div class="d-flex mb-3">
        <div class="p-2 fs-3">Patient List</div>

        <div class="ms-auto p-2">
            <button class="btn-success rounded-3" data-bs-toggle="modal" data-bs-target="#addPatientModal">
                <i class="fa-solid fa-plus"></i> Add Patient
            </button>
        </div>
    </div>

    <table class="table table-hover">
        <thead class="table-light">
            <tr>
                <th scope="col">First Name</th>
                <th scope="col">Middle Name</th>
                <th scope="col">Last Name</th>
                <th scope="col">Patient ID</th>
                <th scope="col">Birthday</th>
                <th scope="col">Age</th>
                <th scope="col">Mobile Number</th>
                <th scope="col">Gender</th>
                <th scope="col">Actions</th>
            </tr>
        </thead>
        @foreach ($user as $users )
        <tbody>
            <tr>
                <td>{{ $users->firstname}}</td>
                <td>{{ $users->middlename}}</td>
                <td>{{ $users->lastname}}</td>
                <td>{{ $users->patient_id}}</td>
                <td>{{ $users->bday}}</td>
                <td>{{ $users->age}}</td>
                <td>{{ $users->mobile_no}}</td>
                <td>{{ $users->gender}}</td>
                <td>
                    <div class="flex">
                        <a href="#"><button type="button" class="btn btn-primary" data-bs-toggle="modal"
                                data-bs-target="#editPatientModal">
                                <i class="fa-solid fa-pen-to-square"></i> Edit
                            </button></a>
                        {{--  <button type="button" class="btn btn-danger" data-bs-toggle="modal"
                            data-bs-target="#deleteModal">
                            <i class="fa-solid fa-trash"></i> Delete
                        </button>  --}}
                    </div>
                </td>
            </tr>
        </tbody>
        @endforeach
    </table>

   {{-- ADD Modal --}}
   <div class="modal fade" id="addPatientModal" tabindex="-1" aria-labelledby="addModallabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Add Patient</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form>
                    <div class="input-group flex-nowrap mb-2">
                        {{-- Edit First Name --}}
                        <input type="text" class="form-control" placeholder="First Name" aria-label="firstname"
                            aria-describedby="addon-wrapping" value="{{old('firstname')}}" name="firstname" id="firstname">
                    </div>

                    <div class="input-group flex-nowrap mb-2">
                        {{-- Edit Last Name --}}
                        <input type="text" class="form-control" placeholder="Middle Name" aria-label="middlename"
                            aria-describedby="addon-wrapping" value="{{old('middlename')}}" name="middlename" id="middlename">
                    </div>

                    <div class="input-group flex-nowrap mb-2">
                        {{-- Edit Hospital --}}
                        <input type="text" class="form-control" placeholder="Last Name" aria-label="lastname"
                            aria-describedby="addon-wrapping" value="{{old('lastname')}}" name="lastname" id="lastname">
                    </div>

                    <div class="input-group flex-nowrap mb-2">
                        {{-- Edit Hospital --}}
                        <input type="text" class="form-control" placeholder="Patient ID Name" aria-label="patient_id"
                            aria-describedby="addon-wrapping" value="{{old('patient_id')}}" name="patient_id" id="patient_id" readonly>
                    </div>

                    <div class="input-group flex-nowrap mb-2">
                        {{-- Edit Hospital --}}
                        <input type="date" name="bday" id="bday" placeholder="Birthday" class="form-control" value="{{old('bday')}}">
                    </div>

                    <div class="input-group flex-nowrap mb-2">
                        {{-- Edit Hospital --}}
                        <input type="text" name="age" id="age" placeholder="Age" class="form-control" value="{{old('age')}}" readonly  autofocus>
                    </div>

                    <div class="input-group flex-nowrap mb-2">
                        {{-- Edit Specialization --}}
                        <input type="text" class="form-control" placeholder="Mobile No." aria-label="mobile_no"
                            aria-describedby="addon-wrapping" name="mobile_no" id="mobile_no" value="{{old('mobile_no')}}">
                    </div>
                    <div class="input-group flex-nowrap mb-2">
                        <select class="form-select form-select-md @error('gender') is-invalid @enderror"
                                aria-label=".form-select-lg example" id="selgender" name="gender"
                                value="{{ old('gender') }}" required>
                                <option hidden>Choose Gender</option>
                                @foreach ($gender as $genders )
                                    <option value="{{$genders->name}}" {{old('gender') == $genders->name ? 'selected':''}}>{{$genders->name}}</option>
                                @endforeach
                            </select>
                    </div>

                    <button class="btn btn-success col-lg-4" type="submit">Submit</button>
                </form>
            </div>

        </div>
    </div>
</div>

   {{-- Edit Modal --}}
   @foreach ($user as $users )
   <div class="modal fade" id="editPatientModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Edit Patient Details</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form>
                    <div class="input-group flex-nowrap mb-2">
                        {{-- Edit First Name --}}
                        <input type="text" class="form-control" placeholder="First Name" aria-label="firstname"
                            aria-describedby="addon-wrapping" value="{{$users->firstname}}" name="firstname" id="firstname">
                    </div>

                    <div class="input-group flex-nowrap mb-2">
                        {{-- Edit Last Name --}}
                        <input type="text" class="form-control" placeholder="Middle Name" aria-label="middlename"
                            aria-describedby="addon-wrapping" value="{{$users->middlename}}" name="middlename" id="middlename">
                    </div>

                    <div class="input-group flex-nowrap mb-2">
                        {{-- Edit Hospital --}}
                        <input type="text" class="form-control" placeholder="Last Name" aria-label="lastname"
                            aria-describedby="addon-wrapping" value="{{$users->lastname}}" name="lastname" id="lastname">
                    </div>

                    <div class="input-group flex-nowrap mb-2">
                        {{-- Edit Hospital --}}
                        <input type="text" class="form-control" placeholder="Patient ID Name" aria-label="patient_id"
                            aria-describedby="addon-wrapping" value="{{$users->patient_id}}" name="patient_id" id="patient_id" readonly>
                    </div>

                    <div class="input-group flex-nowrap mb-2">
                        {{-- Edit Hospital --}}
                        <input type="date" name="bday" id="bday" placeholder="Birthday" class="form-control" value="{{ $users->bday }}">
                    </div>

                    <div class="input-group flex-nowrap mb-2">
                        {{-- Edit Age --}}
                        <input type="text" name="age" id="age" placeholder="Age" class="form-control" value="{{ $users->age }}" readonly  autofocus>
                    </div>

                    <div class="input-group flex-nowrap mb-2">
                        {{-- Edit Mobile No. --}}
                        <input type="text" class="form-control" placeholder="Mobile No." aria-label="mobile_no"
                            aria-describedby="addon-wrapping" name="mobile_no" id="mobile_no" value="{{ $users->mobile_no }}">
                    </div>
                    <div class="input-group flex-nowrap mb-2">
                        <select class="form-select form-select-md @error('gender') is-invalid @enderror"
                                aria-label=".form-select-lg example" id="selectGender" name="gender"
                                value="{{$users->gender}}" required>
                                <option hidden>{{$users->gender}}</option>
                                @foreach ($gender as $genders )
                                    <option value="{{$genders->name}}" {{old('gender') == $genders->name ? 'selected':''}}>{{$genders->name}}</option>
                                @endforeach
                            </select>
                    </div>

                    <button class="btn btn-success col-lg-4" type="submit">Submit Changes</button>
                </form>
            </div>
        </div>
    </div>
</div>
</div>
@endforeach
@endsection
