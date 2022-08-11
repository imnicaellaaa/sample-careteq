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
                    <th scope="col">Item Code</th>
                    <th scope="col">Item Description</th>
                    <th scope="col">Dosage</th>
                    <th scope="col">Instruction </th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            @foreach ( $prescription as $prescription )
            <tbody>
                <tr>
                    <td>{{$prescription->item_code}}</td>
                    <td>{{$prescription->item_description}}</td>
                    <td>{{$prescription->dosage}}</td>
                    <td>{{$prescription->instruction}}</td>
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
            @endforeach
        </table>

        <form name="addPresciption" action="{{ route('admin.addPrescription')}}" method="POST">
            @csrf
        <div class="modal fade" id="addPrescription" tabindex="-1" role="dialog" aria-labelledby="addModallabel" aria-hidden="true" data-backdrop="static">
            <div class="modal-dialog" >
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Add Prescription</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">

                            <div class="input-group flex-nowrap mb-2">
                                {{-- Add Item Code --}}
                                <input type="text" class="form-control" placeholder="Item Code"
                                    aria-label="prescriptionItemCode" aria-describedby="addon-wrapping"
                                     id="prescriptionItemCode" name="prescriptionItemCode" required>
                            </div>
                            <div class="input-group flex-nowrap mb-2">
                                {{-- Add Prescription Name --}}
                                <input type="text" class="form-control" placeholder="Prescription Name"
                                    aria-label="prescriptionName" aria-describedby="addon-wrapping"
                                    id="prescriptionItemDescription" name="prescriptionItemDescription">
                            </div>

                            <div class="input-group flex-nowrap mb-2">
                                {{-- Add Dosage --}}
                                <input type="text" class="form-control" placeholder="Dosage" aria-label="dosage"
                                    aria-describedby="addon-wrapping" id="dosage" name="dosage">
                            </div>

                            <div class="input-group flex-nowrap mb-2">
                                {{-- Add Instruction --}}
                                <input type="text" class="form-control" placeholder="Instruction" aria-label="instruction"
                                    aria-describedby="addon-wrapping" id="instruction" name="instruction">
                            </div>

                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                <button type="submit" class="btn btn-primary">Save changes</button>
                    </div>
                </div>
            </div>
        </div>
        </form>

        {{-- EDIT PRESCRIPTION MODAL --}}

        <form name="editPrescription" method="POST" action="">
        <div class="modal fade" id="editModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Edit Prescription Details</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">

                            <div class="input-group flex-nowrap mb-2">
                                {{-- Edit First Name --}}

                                <input type="text" class="form-control" value=""
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



                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="button" class="btn btn-primary">Save changes</button>
                    </div>
                </div>
            </div>
        </div>
    </form>





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
