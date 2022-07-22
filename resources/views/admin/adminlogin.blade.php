@extends('layouts.guestadmin')

@section('content')
    <div class="container mt-5 pt5 p-4">
        <div class="row">
            <div class="col-md-12 col-sm-7 col-md-6 m-auto" style="width:40rem">
                <div class="text-center display-2 ">{{ __('ADMIN LOGIN') }}</div>
                <div class="card border-1 shadow rounded-lg" style="height:23rem">
                    <div class="card-body ">
                        {{-- insert logo image here --}}

                        <form method="POST" class="py-4" action="{{ route('admin.adminloginFunction') }}">
                            @csrf

                            {{-- EMAIL --}}
                            <div class="mb-3">
                                <label for="email" class="form-label">{{ __('Email Address') }}</label>
                                <div class="input-group">
                                    <div class="input-group-text"><i class="fa fa-user"></i></div>
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror"
                                    name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror

                            </div>
                            </div>

                            {{-- PASSWORD --}}
                            <div class="mb-3">
                                <label for="password" class="form-label">{{ __('Password') }}</label>
                                <div class="input-group">
                                    <div class="input-group-text"><i class="fa fa-unlock-alt"></i></div>
                                <input type="password" class="form-control" id="password" name="password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            </div>

                            {{-- REMEMBER ME --}}
                            <div class="mb-3 form-check">
                                <input type="checkbox" class="form-check-input" type="checkbox" name="remember"
                                    id="remember" id="exampleCheck1">
                                <label class="form-check-label" for="exampleCheck1"> {{ __('Remember Me') }}</label>
                            </div>

                            {{-- SUBMIT --}}
                            <button type="submit" class="btn btn-secondary col-lg-12">Submit</button>

                            @if (Route::has('password.request'))
                            <a class="btn btn-link" href="{{ route('password.request') }}">
                                {{ __('Forgot Your Password?') }}
                            </a>
                        @endif


                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
