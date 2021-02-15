@extends('layouts.app')

@section('content')
    <!-- slider_area_start -->
    <div class="slider_area">
        <div class="single_slider  d-flex align-items-center slider_bg_1">
            <div class="container">
                <div class="row align-items-center justify-content-center">
                    <div class="col-lg-7 col-md-6">
                        <div class="slider_text">
                            <h3 class="wow fadeInRight" data-wow-duration="1s" data-wow-delay=".1s">Open an account with us
                                today and experience our provision of financial freedom.</h3>
                            <div class="sldier_btn wow fadeInLeft" data-wow-duration="1s" data-wow-delay=".2s">
                                <a href="{{ route('users.create') }}" class="boxed-btn3">Get Started</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-5 col-md-6">
                        <div class="payment_form white-bg wow fadeInDown" data-wow-duration="1.2s" data-wow-delay=".2s">
                            <div class="info text-center">
                                <h4>Account Login</h4>
                            </div>
                            <div class="form">
                                <div class="row">
                                    <div class="form">
                                        <form id="form" class="form" name="enq" method="POST"
                                            action="{{ route('login') }}">
                                            @csrf
                                            <div class="row">
                                                <div class="form-group col-12 mb-3">
                                                    <label>Account ID</label>
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
                                                    <input name="password"
                                                        class="form-control @error('password') is-invalid @enderror"
                                                        id="password" required="required" type="password">
                                                    @error('password')
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                    @enderror
                                                </div>
                                                <div class="form-group col-lg-12 mb-0 text-center"
                                                    style="margin-bottom:30px">
                                                </div>
                                            </div>
                                            <div class="form-group col-12 mb-3">
                                                <div class="checkbox">
                                                    <input class="form-control form-check-input" type="checkbox"
                                                        name="remember" id="remember"
                                                        {{ old('remember') ? 'checked' : '' }} />

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

    <!-- service_area_start  -->
    <div class="service_area">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section_title text-center mb-90">
                        <span class="wow fadeInUp" data-wow-duration="1s" data-wow-delay=".1s"></span>
                        <h3 class="wow fadeInUp" data-wow-duration="1s" data-wow-delay=".2s">What we offer for you banking
                            with us.</h3>
                        <p class="wow fadeInUp" data-wow-duration="1s" data-wow-delay=".3s">We provide one of the best
                            online banking system for private individuals, business owners and companies.</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-6 col-md-6">
                    <div class="single_service wow fadeInLeft" data-wow-duration="1.2s" data-wow-delay=".5s">
                        <div class="service_icon_wrap text-center">
                            <div class="service_icon ">
                                <img src="{{ asset('img/svg_icon/logo.png') }}" alt="">
                            </div>
                        </div>
                        <div class="info text-center">
                            <span>Sure Finance Bank High Interest Checking Services</span>
                        </div>
                        <div class="service_content">
                            <ul>
                                <li>No Fees</li>
                                <p>We don't charge ATM fees or annual fees. Keep your Balance above $1000 and you won't hear
                                    from us. It's your money; you should keep it.
                                </p>
                                <li>"24/7 Account Access</li>
                                <p>With Sure Finance Bank, you can see all of your account information any time, day or
                                    night.</p>
                                <li>Free Visa Debit Card</li>
                                <p>Open an account with us for a High-Interest Earning Checking account and receive a free
                                    Visa Debit Card Upon approval and account open.
                                </p>
                                <li>Sure Finance Online Banking</li>
                                <p>Check your balance, move money between accounts, manage your automatic bill payments.
                                </p>
                                <li>Savings</li>
                                <p>It's never too early to begin saving. Open a Savings account or open a certificate of
                                    Deposit and start saving your money.
                                </p>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6">
                    <div class="single_service wow fadeInRight" data-wow-duration="1.2s" data-wow-delay=".5s"><img
                            src="{{ asset('img/svg_icon/SFBATM.png') }}" alt="sfb DEBIT">

                        <div class="info text-center">
                            <span>SureFinanceBank Debit Card
                            </span>
                        </div>
                        <div class="service_content">
                            <p>Need help with your current SureFinanceBank Debit Card? Contact Customer Care.</p>
                        </div>
                    </div>

                    <div class="row align-items-center">
                        <div class="col-lg-6 col-md-6">
                            <div class="loan_btn wow fadeInUp" data-wow-duration="1.2s" data-wow-delay=".4s">
                                <a class="boxed-btn3" href="{{ route('register') }}">Open an Account</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
    <!-- service_area_end  -->

    <!-- apply_loan_start  -->
    <div class="apply_loan overlay">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-8 col-md-7">
                    <div class="loan_text wow fadeInLeft" data-wow-duration="1s" data-wow-delay=".3s">
                        <h3>Apply for a Loan for your startup business,
                            education or company</h3>
                    </div>
                </div>
                <div class="col-lg-4 col-md-5">
                    <div class="loan_btn wow fadeInUp" data-wow-duration="1.2s" data-wow-delay=".4s">
                        <a class="boxed-btn3" href="{{ route('loans.create') }}">Apply Now</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- apply_loan_end  -->
    <!-- testimonial_area  -->
    <div class="testimonial_area  ">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="testmonial_active owl-carousel">
                        <div class="single_carousel">
                            <div class="row">
                                <div class="col-lg-11">
                                    <div class="single_testmonial d-flex align-items-center">
                                        <div class="thumb">
                                            <img src="{{ asset('img/testmonial/author.png') }}" alt="">
                                            <div class="quote_icon">
                                                <i class="Flaticon flaticon-quote"></i>
                                            </div>
                                        </div>
                                        <div class="info">
                                            <p>"SureFinanceBank is ideal for individuals like me for easy and secure fund
                                                transaction for my business. I will recommend as an individual or a company
                                                to have a private account with SureFinanceBank.</p>
                                            <span>- Baron</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="single_carousel">
                            <div class="row">
                                <div class="col-lg-11">
                                    <div class="single_testmonial d-flex align-items-center">
                                        <div class="thumb">
                                            <img src="{{ asset('img/testmonial/author.png') }}" alt="">
                                            <div class="quote_icon">
                                                <i class=" Flaticon flaticon-quote"></i>
                                            </div>
                                        </div>
                                        <div class="info">
                                            <p>"Thanks to Sure SureFinanceBank for my house Loan. They are superb on their
                                                loan rates.</p>
                                            <span>- Saffell</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="single_carousel">
                            <div class="row">
                                <div class="col-lg-11">
                                    <div class="single_testmonial d-flex align-items-center">
                                        <div class="thumb">
                                            <img src="{{ asset('img/testmonial/author.png') }}" alt="">
                                            <div class="quote_icon">
                                                <i class="Flaticon flaticon-quote"></i>
                                            </div>
                                        </div>
                                        <div class="info">
                                            <p>"SureFinanceBank has been one of my best experince in banking for my company.
                                            </p>
                                            <span>- Spoor</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="single_carousel">
                            <div class="row">
                                <div class="col-lg-11">
                                    <div class="single_testmonial d-flex align-items-center">
                                        <div class="thumb">
                                            <img src="{{ asset('img/testmonial/author.png') }}" alt="">
                                            <div class="quote_icon">
                                                <i class="Flaticon flaticon-quote"></i>
                                            </div>
                                        </div>
                                        <div class="info">
                                            <p>"Thanks to SurefinanceBank for my Education loan. I never knew I can get such
                                                a quick loan online for my tutor fees.</p>
                                            <span>- Maria</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @isset($success)
        @if ($success)
            <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-modal="true"
                role="dialog">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Successful</h5>
                            <button type="button" class="close" aria-label="Close" onclick="closeModal()">
                                <span aria-hidden="true">×</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            Your application has been submitted. Please await confirmation.
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-primary" onclick="closeModal()">OK</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-backdrop fade show" id="backdrop" style="display: none;">
            </div>

            <script>
                openModal();

                function openModal() {
                    document.getElementById("backdrop").style.display = "block"
                    document.getElementById("exampleModal").style.display = "block"
                    document.getElementById("exampleModal").className += "show"
                }

                function closeModal() {
                    document.getElementById("backdrop").style.display = "none"
                    document.getElementById("exampleModal").style.display = "none"
                    document.getElementById("exampleModal").className += document
                        .getElementById("exampleModal").className.replace("show", "")
                }
                // Get the modal
                var modal = document.getElementById('exampleModal');

                // When the user clicks anywhere outside of the modal, close it
                window.onclick = function(event) {
                    if (event.target == modal) {
                        closeModal()
                    }
                }

            </script>
        @endif
    @endisset
@endsection
