@extends('layouts.admin')

@section('content')
    <div class="container table-responsive py-5">

        <div class="d-flex mb-3">
            <div class="p-2 fs-3">Doctors List</div>

            <div class="ms-auto p-2">
                <button class="btn-success rounded-3" data-bs-toggle="modal" data-bs-target="#addModal">
                    <i class="fa-solid fa-plus"></i> Add Doctor
                </button>
            </div>
        </div>

        <table class="table table-hover">
            <thead class="table-light">
                <tr>
                    <th scope="col">First Name</th>
                    <th scope="col">Last Name</th>
                    <th scope="col">Hospital</th>
                    <th scope="col">Specialization</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>Steven</td>
                    <td>Strange</td>
                    <td>Metro General Hospital</td>
                    <td>Cardiac Surgery</td>
                    <td>
                        <div class="flex">
                            <a href="#"><button type="button" class="btn btn-primary" data-bs-toggle="modal"
                                    data-bs-target="#editModal">
                                    <i class="fa-solid fa-pen-to-square"></i> Edit
                                </button></a>
                            <button type="button" class="btn btn-danger" data-bs-toggle="modal"
                                data-bs-target="#deleteModal">
                                <i class="fa-solid fa-trash"></i> Delete
                            </button>
                        </div>
                    </td>
                </tr>

            </tbody>
        </table>

        {{-- ADD Modal --}}
        <div class="modal fade" id="addModal" tabindex="-1" aria-labelledby="addModallabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Add Doctor</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <form>
                            <div class="input-group flex-nowrap mb-2">
                                {{-- Edit First Name --}}
                                <input type="text" class="form-control" placeholder="First Name" aria-label="firstname"
                                    aria-describedby="addon-wrapping">
                            </div>

                            <div class="input-group flex-nowrap mb-2">
                                {{-- Edit Last Name --}}
                                <input type="text" class="form-control" placeholder="Last Name" aria-label="lastname"
                                    aria-describedby="addon-wrapping">
                            </div>

                            <div class="input-group flex-nowrap mb-2">
                                {{-- Edit Hospital --}}
                                <input type="text" class="form-control" placeholder="Hospital" aria-label="hospital"
                                    aria-describedby="addon-wrapping">
                            </div>

                            <div class="input-group flex-nowrap mb-2">
                                {{-- Edit Specializaion --}}
                                <input type="text" class="form-control" placeholder="Specialization" aria-label="specialization"
                                    aria-describedby="addon-wrapping">
                            </div>

                            <button class="btn btn-success col-lg-4" type="submit">Submit</button>
                        </form>
                    </div>

                </div>
            </div>
        </div>

        {{-- Edit Modal --}}
        <div class="modal fade" id="editModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Edit Doctor Details</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <form>
                            <div class="input-group flex-nowrap mb-2">
                                {{-- Edit First Name --}}
                                <input type="text" class="form-control" placeholder="First Name" aria-label="firstname"
                                    aria-describedby="addon-wrapping">
                            </div>

                            <div class="input-group flex-nowrap mb-2">
                                {{-- Edit Last Name --}}
                                <input type="text" class="form-control" placeholder="Last Name" aria-label="lastname"
                                    aria-describedby="addon-wrapping">
                            </div>

                            <div class="input-group flex-nowrap mb-2">
                                {{-- Edit Hospital --}}
                                <input type="text" class="form-control" placeholder="Hospital" aria-label="hospital"
                                    aria-describedby="addon-wrapping">
                            </div>

                            <div class="input-group flex-nowrap mb-2">
                                {{-- Edit Specialization --}}
                                <input type="text" class="form-control" placeholder="Specialization" aria-label="specialization"
                                    aria-describedby="addon-wrapping">
                            </div>

                            <button class="btn btn-success col-lg-4" type="submit">Submit Changes</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>

        <!-- DELETE Modal -->
        <div class="modal fade" id="deleteModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Do you want to delete this record?</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-success">Yes</button>
                        <button type="button" class="btn btn-danger" data-bs-dismiss="modal">No</button>
                    </div>
                </div>
            </div>
        </div>


    </div>
@endsection
