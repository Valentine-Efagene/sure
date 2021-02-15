@extends('layouts.app')

@section('content')
    <!-- bradcam_area  -->
    <div class="bradcam_area bradcam_bg_2">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="bradcam_text">
                        <h3>About Us</h3>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--/ bradcam_area  -->


    <!-- about_area_start  -->
    <div class="about_area plus_padding">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 col-md-6">
                    <div class="about_img wow fadeInLeft" data-wow-duration="1s" data-wow-delay=".3s">
                        <img src="{{ asset('img/about/about.png') }}" alt="">
                    </div>
                </div>
                <div class="col-lg-6 col-md-6">
                    <div class="about_info pl-68">
                        <div class="section_title wow fadeInUp" data-wow-duration="1.2s" data-wow-delay=".3s">
                            <h3>We provide loan for any
                                purpose</h3>
                        </div>
                        <p class="wow fadeInUp" data-wow-duration="1.2s" data-wow-delay=".4s">Esteem spirit temper too
                            say adieus who direct esteem.It esteems luckily or picture placing drawing. Apartments
                            frequently or motionless on reasonable.</p>
                        <div class="about_list">
                            <ul>
                                <li class="wow fadeInRight" data-wow-duration="1s" data-wow-delay=".5s">Loans with quick
                                    approval.</li>
                                <li class="wow fadeInRight" data-wow-duration="1s" data-wow-delay=".6s">Customize a loan
                                    based on the amount.</li>
                                <li class="wow fadeInRight" data-wow-duration="1s" data-wow-delay=".7s">Good credit
                                    profile and you have built your loan.</li class="wow fadeInRight" data-wow-duration="1s"
                                    data-wow-delay=".8s">
                                <li class="wow fadeInRight" data-wow-duration="1s" data-wow-delay=".9s">We provide
                                    online instant cash loans.</li>
                            </ul>
                        </div>
                        <div class="about_btn wow fadeInRight" data-wow-duration="1.3s" data-wow-delay=".5s">
                            <a class="boxed-btn3" href="apply.html">Apply for Loan</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- about_area_end  -->

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
                        <a class="boxed-btn3" href="{{ route('contact') }}">Apply Now</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
