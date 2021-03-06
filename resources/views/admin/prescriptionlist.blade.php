@extends('layouts.admin')

@section('content')
    <div class="container table-responsive py-5">

        <div class="d-flex mb-3">
            <div class="p-2 fs-3">Prescription List</div>

            <div class="ms-auto p-2">
                <button class="btn-success rounded-3" data-bs-target="#addPrescription " data-bs-toggle="modal">
                    <i class="fa-solid fa-plus"></i> Add Prescription
                </button>
            </div>
        </div>

        <table class="table table-hover">
            <thead class="table-light">
                <tr>
                    <th scope="col">Prescription Name</th>
                    <th scope="col">Amount</th>
                    <th scope="col">Instruction </th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>Colace </td>
                    <td>100mg</td>
                    <td>1 tab per 90 days</td>
                    <td>
                        <div class="flex">
                            <a href="#"><button type="button" class="btn btn-primary" data-bs-toggle="modal"
                                    data-bs-target="#editModal">
                                    <i class="fa-solid fa-pen-to-square"></i> Edit
                                </button></a>
                            <a href="#"><button class="btn btn-danger" data-bs-toggle="modal"
                                    data-bs-target="#deleteModal"><i class="fa-solid fa-trash"></i>
                                    Delete</button></a>
                        </div>
                    </td>
                </tr>

            </tbody>
        </table>

        {{-- EDIT PRESCRIPTION MODAL --}}
        <div class="modal fade" id="editModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Edit Prescription Details</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <form>
                            <div class="input-group flex-nowrap mb-2">
                                {{-- Edit First Name --}}
                                <input type="text" class="form-control" placeholder="Prescription Name"
                                    aria-label="firstname" aria-describedby="addon-wrapping">
                            </div>

                            <div class="input-group flex-nowrap mb-2">
                                {{-- Edit Last Name --}}
                                <input type="text" class="form-control" placeholder="Amount" aria-label="lastname"
                                    aria-describedby="addon-wrapping">
                            </div>

                            <div class="input-group flex-nowrap mb-2">
                                {{-- Edit Hospital --}}
                                <input type="text" class="form-control" placeholder="Instruction" aria-label="hospital"
                                    aria-describedby="addon-wrapping">
                            </div>

                            <button class="btn btn-success" type="submit">Submit Changes</button>
                        </form>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="button" class="btn btn-primary">Save changes</button>
                    </div>
                </div>
            </div>
        </div>

        <div class="modal fade" id="addPrescription">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Add Prescription</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <form>
                            <div class="input-group flex-nowrap mb-2">
                                {{-- Edit First Name --}}
                                <input type="text" class="form-control" placeholder="Prescription Name"
                                    aria-label="firstname" aria-describedby="addon-wrapping">
                            </div>

                            <div class="input-group flex-nowrap mb-2">
                                {{-- Edit Last Name --}}
                                <input type="text" class="form-control" placeholder="Amount" aria-label="lastname"
                                    aria-describedby="addon-wrapping">
                            </div>

                            <div class="input-group flex-nowrap mb-2">
                                {{-- Edit Hospital --}}
                                <input type="text" class="form-control" placeholder="Instruction" aria-label="hospital"
                                    aria-describedby="addon-wrapping">
                            </div>

                            <button class="btn btn-success" type="submit">Submit Changes</button>
                        </form>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="button" class="btn btn-primary">Save changes</button>
                    </div>
                </div>
            </div>
        </div>

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
