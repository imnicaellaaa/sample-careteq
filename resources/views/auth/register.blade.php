@extends('layouts.app')

@section('content')
    <div class="container mt-5">
        <div class="row">

            {{-- GRID --}}
            <div class="col-lg-7 col-sm-7 col-md-6 m-auto ">
                <div class="text-center display-2  ">LOGIN</div>

                {{-- CARD --}}
                <div class="card border-1 shadow rounded-lg">
                    <div class="card-body  ">
                        {{-- insert logo image here --}}


                        {{-- REGISTER FORM --}}
                        <form method="POST" class="py-2" action="{{ route('register') }}">
                            @csrf

                            {{-- FIRST NAME, LAST NAME, MIDDLE NAME --}}
                            <div class="mb-2 fs-4 text-center">Personal Information</div>

                            <div class="row">

                                {{-- FIRST NAME --}}
                                <div class="col">
                                    <div class="mb-3">
                                        <label for="fname" class="form-label">{{ __('First Name') }}</label>
                                        <input id="fname" type="text" class="form-control autofocus">
                                    </div>
                                </div>

                                {{-- MIDDLE NAME --}}
                                <div class="col">
                                    <div class="mb-3">
                                        <div class="mb-3">
                                            <label for="mname" class="form-label">{{ __('Middle Name') }}</label>
                                            <input id="mname" type="text" class="form-control autofocus">
                                        </div>

                                    </div>
                                </div>

                                {{-- LAST NAME --}}
                                <div class="col">
                                    <div class="mb-3">
                                        <div class="mb-3">
                                            <label for="lname" class="form-label">{{ __('Last Name') }}</label>
                                            <input id="lname" type="text" class="form-control autofocus">
                                        </div>

                                    </div>
                                </div>

                            </div>

                            {{-- BDAY, AGE --}}

                            <div class="row">

                                {{-- BDAY --}}
                                <div class="col">
                                    <div class="mb-3">
                                        <label for="bday" class="form-label">{{ __('Birthday') }}</label>
                                        <input type="date" class="form-control" id="bday">
                                    </div>
                                </div>

                                {{-- AGE --}}
                                <div class="col">
                                    <div class="mb-3">
                                        <label for="age" class="form-label">{{ __('Age') }}</label>
                                        <input class="form-control" type="text" value="" aria-label="age disabled id"
                                            readonly id="age">
                                    </div>
                                </div>


                            </div>

                            {{-- TITLE, SUFFIX --}}

                            <div class="row">

                                {{-- SUFFIX --}}
                                <div class="col">
                                    <div class="mb-3">
                                        <label for="suffix" class="form-label">{{ __('Suffix') }}</label>
                                        <input id="suffix" type="text" class="form-control autofocus">
                                    </div>
                                </div>

                                {{-- GENDER --}}
                                <div class="col">
                                    <div class="mb-3">
                                        <label for="gender" class="form-label">{{ __('Gender') }}</label>
                                        <select class="form-select form-select-md" aria-label=".form-select-lg example">
                                            <option selected>Select Gender</option>
                                            <option value="1">One</option>
                                            <option value="2">Two</option>
                                            <option value="3">Three</option>
                                        </select>
                                    </div>
                                </div>

                                {{-- TITLE --}}
                                <div class="col">
                                    <div class="mb-3">
                                        <label for="title" class="form-label">{{ __('TITLE') }}</label>
                                        <select class="form-select form-select-md" aria-label=".form-select-lg example">
                                            <option selected>Select Title</option>
                                            <option value="1">One</option>
                                            <option value="2">Two</option>
                                            <option value="3">Three</option>
                                        </select>
                                    </div>
                                </div>

                            </div>

                            <div class="py-1"></div>

                            <div class="mb-2 fs-4 text-center">Address</div>

                            <div class="row">

                                {{-- COUNTRY --}}
                                <div class="col">
                                    <div class="mb-3">
                                        <label for="country" class="form-label">{{ __('Country') }}</label>
                                        <select class="form-select form-select-md" aria-label=".form-select-lg example">
                                            <option selected>Select Country</option>
                                            <option value="1">One</option>
                                            <option value="2">Two</option>
                                            <option value="3">Three</option>
                                        </select>
                                    </div>
                                </div>


                                {{-- Municipality --}}
                                <div class="col">
                                    <div class="mb-3">
                                        <label for="region" class="form-label">{{ __('Municipality') }}</label>
                                        <select class="form-select form-select-md" aria-label=".form-select-lg example">
                                            <option selected>Select Municipality</option>
                                            <option value="1">One</option>
                                            <option value="2">Two</option>
                                            <option value="3">Three</option>
                                        </select>
                                    </div>
                                </div>


                                {{-- Province --}}
                                <div class="col">
                                    <div class="mb-3">
                                        <label for="province" class="form-label">{{ __('Province') }}</label>
                                        <select class="form-select form-select-md" aria-label=".form-select-lg example">
                                            <option selected>Select Province</option>
                                            <option value="1">One</option>
                                            <option value="2">Two</option>
                                            <option value="3">Three</option>
                                        </select>
                                    </div>
                                </div>

                                {{-- BARANGAY --}}
                                <div class="col">
                                    <div class="mb-3">
                                        <label for="barangay" class="form-label">{{ __('Barangay') }}</label>
                                        <select class="form-select form-select-md" aria-label=".form-select-lg example">
                                            <option selected>Select Barangay</option>
                                            <option value="1">One</option>
                                            <option value="2">Two</option>
                                            <option value="3">Three</option>
                                        </select>
                                    </div>
                                </div>
                            </div>


                            <div class="row">
                                {{-- STREET --}}
                                <div class="col">
                                    <div class="mb-3">
                                        <label for="street" class="form-label">{{ __('Street') }}</label>
                                        <input id="street" type="text" class="form-control autofocus">
                                    </div>
                                </div>


                                {{-- Postal Code --}}
                                <div class="col">
                                    <div class="mb-3">
                                        <label for="code" class="form-label">{{ __('Postal Code') }}</label>
                                        <input id="code" type="text" class="form-control autofocus">
                                    </div>
                                </div>

                            </div>

                            <div class="py-1"></div>

                            <div class="mb-2 fs-4 text-center">Account Details</div>

                            <div class="row">

                                {{-- EMAIL --}}

                                <div class="mb-3">
                                    <label for="code" class="form-label">{{ __('E-Mail') }}</label>
                                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror"
                                        name="email" value="{{ old('email') }}" required autocomplete="email">

                                    @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>

                                {{-- PASSWORD --}}
                                <div class="col">
                                    <div class="mb-3">
                                        <label for="password" class="form-label">{{ __('Password') }}</label>
                                        <input type="password" class="form-control" id="exampleInputPassword1">

                                        @error('password')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>

                                </div>

                                {{-- PASSWORD CONFIRM --}}
                                <div class="col">
                                    <div class="mb-3">
                                        <label for="password" class="form-label">{{ __('Password Confirm') }}</label>
                                        <input type="password" class="form-control" id="exampleInputPassword1">

                                        @error('password')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>

                            </div>

                            {{-- NEW & EXISTING PATIENT --}}

                            <div class="row mb-2">
                                <div class="col">

                                    <div class="mb-3">
                                        {{-- NEW PATIENT --}}
                                        <input type="checkbox" class="form-check-input" type="checkbox" name="newpatient"
                                            id="newpatient" id="newpatient">
                                        <label class="form-check-label" for="exampleCheck1">
                                            {{ __('New Patient') }}</label>

                                        {{-- EXISTING PATIENT --}}
                                        <input type="checkbox" class="form-check-input" type="checkbox"
                                            name="existingpatient" id="remember" id="existingpatient">
                                        <label class="form-check-label" for="existingpatient">
                                            {{ __('Existing Patient') }}</label>

                                    </div>

                                </div>

                                {{-- PATIENT ID --}}
                                <div class="col">
                                    <div class="mb-3">
                                        <label for="idtype" class="form-label">{{ __('Patient ID') }}</label>
                                        <input id="code" type="text" class="form-control autofocus">
                                        </ul>
                                    </div>
                                </div>

                            </div>

                            <div class="row">
                                {{-- BARANGAY --}}
                                <div class="col">
                                    <div class="mb-3">
                                        <label for="idtype" class="form-label">{{ __('Id Type') }}</label>
                                        <select class="form-select form-select-md" aria-label=".form-select-lg example">
                                            <option selected>Select ID Type</option>
                                            <option value="1">One</option>
                                            <option value="2">Two</option>
                                            <option value="3">Three</option>
                                        </select>
                                    </div>
                                </div>

                                {{-- BARANGAY --}}
                                <div class="col">
                                    <div class="mb-3">
                                        <label for="idtype" class="form-label">{{ __('Id Number') }}</label>
                                        <input id="code" type="text" class="form-control autofocus">
                                        </ul>
                                    </div>
                                </div>
                            </div>

                            <div class="col">
                                <div class="mb-3">
                                    <label for="idtype" class="form-label">{{ __('Id Type') }}</label>
                                    <select class="form-select form-select-md" aria-label=".form-select-lg example">
                                        <option selected>Select ID Type</option>
                                        <option value="1">One</option>
                                        <option value="2">Two</option>
                                        <option value="3">Three</option>
                                    </select>
                                </div>
                            </div>

                            {{-- SUBMIT --}}
                            <div class="text-center d-flex items-center">
                                <button type="submit" class="btn btn-primary col-lg-12">Submit</button>
                            </div>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
