@extends('layouts.app')

@section('content')
    <!-- slider_area_start -->
    <div class="slider_area">
        <div class="single_slider  d-flex align-items-center slider_bg_1">
            <div class="container">
                <div class="col-sm-8 col-md-8 col-lg-6 mx-auto">
                    <div class="payment_form white-bg wow fadeInDown" data-wow-duration="1.2s" data-wow-delay=".2s">
                        <div class="info text-center">
                            <h4>Admin Login</h4>
                        </div>
                        <div class="form">
                            <div class="row">
                                <div class="form">
                                    <form id="form" class="form" name="enq" method="POST"
                                        action="{{ route('admins.login') }}">
                                        @csrf
                                        <div class="row">
                                            <div class="form-group col-12 mb-3">
                                                <label>ID</label>
                                                <input name="id" class="form-control @error('id') is-invalid
                                                                        @enderror" id="id" value="{{ old('id') }}"
                                                    required="required" type="text">

                                                @error('id')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
                                            <div class="form-group col-12 mb-3">
                                                <label>Password</label>
                                                <input name="password" class="form-control @error('password')
                                                                        is-invalid @enderror" id="password"
                                                    required="required" type="password">
                                                @error('password')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
                                            <div class="form-group col-lg-12 mb-0 text-center" style="margin-bottom:30px">
                                            </div>
                                        </div>
                                        <div class="form-group col-12 mb-3">
                                            <div class="checkbox">
                                                <input class="form-control form-check-input" type="checkbox" name="remember"
                                                    id="remember" {{ old('remember') ? 'checked' : '' }} />

                                                <label class="form-check-label" for="remember">
                                                    {{ __('Remember Me') }}
                                                </label>
                                            </div>
                                        </div>
                                        <div class="submit_btn">
                                            <button class="boxed-btn3" type="submit">Login</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
    <!-- slider_area_end -->

@endsection
