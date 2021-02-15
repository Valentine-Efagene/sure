@extends('layouts.app')

@section('content')
    <!-- bradcam_area  -->
    <div class="bradcam_area bradcam_bg_1">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="bradcam_text">
                        <h3>Our Loan Services</h3>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--/ bradcam_area  -->

    <!-- service_area_start  -->
    <div class="service_area">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section_title text-center mb-90">
                        <span class="wow fadeInUp" data-wow-duration="1s" data-wow-delay=".1s"></span>
                        <h3 class="wow fadeInUp" data-wow-duration="1s" data-wow-delay=".2s">What we offer for you</h3>
                        <p class="wow fadeInUp" data-wow-duration="1s" data-wow-delay=".3s">We provide online instant cash
                            loans with quick approval that suit your term</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4 col-md-6">
                    <div class="single_service wow fadeInLeft" data-wow-duration="1.2s" data-wow-delay=".5s">
                        <div class="service_icon_wrap text-center">
                            <div class="service_icon ">
                                <img src="{{ asset('img/svg_icon/service_1.png') }}" alt="">
                            </div>
                        </div>
                        <div class="info text-center">
                            <span>Home Loan</span>
                        </div>
                        <div class="service_content">
                            <ul>
                                <li> Borrow Up to $100,000 for your home loan</li>
                            </ul>
                            <div class="apply_btn">
                                <button class="boxed-btn3" type="submit"><a href="{{ route('loans.create') }}"> Apply
                                        Now</a></button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="single_service wow fadeInLeft" data-wow-duration="1.2s" data-wow-delay=".5s">
                        <div class="service_icon_wrap text-center">
                            <div class="service_icon ">
                                <img src="{{ asset('img/svg_icon/service_1.png') }}" alt="">
                            </div>
                        </div>
                        <div class="info text-center">
                            <span>Personal Loan</span>
                        </div>
                        <div class="service_content">
                            <ul>
                                <li> Borrow up to $50,000 for your Personal Loan</li>
                            </ul>
                            <div class="apply_btn">
                                <button class="boxed-btn3" type="submit"><a href="{{ route('loans.create') }}"> Apply
                                        Now</a></button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="single_service wow fadeInLeft" data-wow-duration="1.2s" data-wow-delay=".5s">
                        <div class="service_icon_wrap text-center">
                            <div class="service_icon ">
                                <img src="{{ asset('img/svg_icon/service_3.png') }}" alt="">
                            </div>
                        </div>
                        <div class="info text-center">
                            <span>Education Loan</span>
                        </div>
                        <div class="service_content">
                            <ul>
                                <li>Borrow up to $45,000 of your education Loan</li>
                            </ul>
                            <div class="apply_btn">
                                <button class="boxed-btn3" type="submit"><a href="{{ route('loans.create') }}">Apply
                                        Now</a></button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="single_service wow fadeInUp" data-wow-duration="1s" data-wow-delay=".3s">
                        <div class="service_icon_wrap text-center">
                            <div class="service_icon ">
                                <img src="{{ asset('img/svg_icon/service_2.png') }}" alt="">
                            </div>
                        </div>
                        <div class="info text-center">
                            <span>Car Loan</span>
                        </div>
                        <div class="service_content">
                            <ul>
                                <li> Borrow up to $25,000 for your car loan</li>
                            </ul>
                            <div class="apply_btn">
                                <button class="boxed-btn3" type="submit"><a href="{{ route('loans.create') }}">Apply
                                        Now</a></button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="single_service wow fadeInRight" data-wow-duration="1.2s" data-wow-delay=".5s">
                        <div class="service_icon_wrap text-center">
                            <div class="service_icon ">
                                <img src="{{ asset('img/svg_icon/service_3.png') }}" alt="">
                            </div>
                        </div>
                        <div class="info text-center">
                            <span>Other</span>
                        </div>
                        <div class="service_content">
                            <ul>
                                <li> Borrow up to $20,000 for your needs</li>
                            </ul>
                            <div class="apply_btn">
                                <button class="boxed-btn3" type="submit"><a href="{{ route('loans.create') }}">Apply
                                        Now</a></button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="single_service wow fadeInRight" data-wow-duration="1.2s" data-wow-delay=".5s">
                        <div class="service_icon_wrap text-center">
                            <div class="service_icon ">
                                <img src="{{ asset('img/svg_icon/service_3.png') }}" alt="">
                            </div>
                        </div>
                        <div class="info text-center">
                            <span>Company Loan</span>
                        </div>
                        <div class="service_content">
                            <ul>
                                <li> Borrow up to $500,000 for your company Loan</li>
                            </ul>
                            <div class="apply_btn">
                                <button class="boxed-btn3" type="submit"><a href="{{ route('loans.create') }}">Apply
                                        Now</a></button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- service_area_end  -->


    <!-- works_area_start  -->
    <div class="works_area">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section_title text-center mb-90">
                        <span class="wow lightSpeedIn" data-wow-duration="1s" data-wow-delay=".1s"></span>
                        <h3 class="wow fadeInUp" data-wow-duration="1s" data-wow-delay=".2s">How our Loan Works</h3>
                        <p class="wow fadeInUp" data-wow-duration="1s" data-wow-delay=".3s">We provide online instant cash
                            loans with quick approval that suit your term.</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6 col-lg-4">
                    <div class="single_works wow fadeInUp" data-wow-duration="1s" data-wow-delay=".4s">
                        <span>
                            01
                        </span>
                        <h3>Apply for loan</h3>
                        <p>We will customize a loan based on the
                            amount of cash your company need term</p>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="single_works wow fadeInUp" data-wow-duration="1s" data-wow-delay=".5s">
                        <span>
                            02
                        </span>
                        <h3>Application review</h3>
                        <p>Your Application will be reviewed within 3 to 24 hours after submission.</p>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="single_works wow fadeInUp" data-wow-duration="1s" data-wow-delay=".6s">
                        <span>
                            03
                        </span>
                        <h3>Get funding fast</h3>
                        <p>Your Loan would be creditted to you via bank transfer or mailing or bitcoin (cryptocurrency
                            wallet of your choice).</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- works_area_end  -->

    <!-- apply_loan_start  -->
    <div class="apply_loan overlay">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-8 col-md-7">
                    <div class="loan_text wow fadeInLeft" data-wow-duration="1s" data-wow-delay=".3s">
                        <h3>Apply for a Loan for your startup,
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
@endsection
