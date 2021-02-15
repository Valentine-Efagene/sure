@extends('layouts.app')

@section('content')
    <!-- bradcam_area  -->
    <div class="bradcam_area bradcam_bg_3">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="bradcam_text">
                        <h3>Apply Now</h3>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--/ bradcam_area  -->

    <!-- apply_form_area -->
    <div class="apply_form_area">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <form method="POST" action="{{ route('register') }}" class="apply_form">
                        @csrf
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="apply_info_text text-center">
                                    <h3>Submit Your Basic Data And Open an Online Account</h3>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="single_field">
                                    <input type="text" id="first_name" value="{{ old('first_name') }}" name="first_name"
                                        @error('first_name') @enderror placeholder="First name" required>

                                    @error('first_name')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="single_field">
                                    <input id="last_name" name="last_name" value="{{ old('last_name') }}"
                                        @error('last_name') @enderror type="text" placeholder="Last Name" required>

                                    @error('last_name')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="single_field">
                                    <input id="phone_number" name="phone_number" value="{{ old('phone_number') }}"
                                        @error('phone_number') @enderror type="tel" placeholder="Phone no." required>

                                    @error('phone_number')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="single_field">
                                    <input type="email" id="email" name="email" value="{{ old('email') }}" @error('email')
                                        @enderror placeholder="Email" required>

                                    @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="col-md-12">
                                <div class="submit_btn">
                                    <button class="boxed-btn3" type="submit">Submit</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!--/ apply_form_area -->
@endsection
