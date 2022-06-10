   {{-- THIS IS WHERE DOCTOR WOULD CREATE / EDIT PRESCRIPTION --}}
   @extends('layouts.app')

   @section('content')
       <div class="container mt-5">
           <div class="row">
               <div class="col">
                   <h1 class="text-center">Dr. Stephen Strange</h1>
                   <p class="text-center">this is an adress here</p>
                   <p class="text-center">tel no. 000000000</p>
               </div>
           </div>
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
                               <h4 class="text-center">Create Prescription</h4>

                               <div class="row mt-2">
                                   <div class="card border-1 p-2 shadow-md">
                                       <div class="row p-2">
                                           <div class="col">
                                               <label for="" class="form-label">{{ __('Name') }}</label>
                                               <input id="" name="" type="text" class="form-control  ">
                                           </div>
                                       </div>
                                       <div class="row p-2">
                                           <div class="col">
                                               <label for="" class="form-label">{{ __('Address') }}</label>
                                               <input id="" name="" type="text" class="form-control  ">
                                           </div>
                                       </div>
                                       <div class="row p-2">
                                           <div class="col">
                                               <label for="" class="form-label">{{ __('Age') }}</label>
                                               <input id="" name="" type="text" class="form-control  ">
                                           </div>
                                           <div class="col">
                                               <label for="" class="form-label">{{ __('Sex') }}</label>
                                               <select class="form-select">
                                                   <option>Male</option>
                                                   <option>Female</option>
                                               </select>
                                           </div>
                                           <div class="col">
                                               <label for="" class="form-label">{{ __('Date') }}</label>
                                               <input id="" name="" type="date" class="form-control  ">
                                           </div>
                                       </div>
                                   </div>

                                   {{-- Prescription Table --}}
                                   <table class="table table-striped table-bordered table-sm table-responsive-sm mt-4">
                                       <thead>
                                           <tr>
                                               <th scope="col">Medicine</th>
                                               <th scope="col">Qty</th>
                                               <th scope="col">Instruction</th>
                                               <th scope="col">Action</th>

                                           </tr>
                                       </thead>
                                       {{-- Table Content --}}
                                       <tbody>
                                           <tr>
                                               <td>Simvastatin</th>
                                               <td>13</td>
                                               <td>Twice a Day</td>
                                               <td>
                                                   <button class="btn btn-success"><i
                                                           class="fa-solid fa-circle-plus p-1"></i>Add</button>
                                                   <button class="btn btn-danger"><i
                                                           class="fa-solid fa-trash-can p-1"></i>Delete</button>
                                               </td>

                                           </tr>


                                       </tbody>
                                   </table>
                               </div>
                           </div>
                       </div>
                   </div>

               </div>
           </div>
       </div>
       </div>
   @endsection
