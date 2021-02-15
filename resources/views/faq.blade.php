@extends('layouts.app')

@section('content')
    <!-- bradcam_area  -->
    <div class="bradcam_area bradcam_bg_1">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="bradcam_text">
                        <h3>FAQ</h3>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--/ bradcam_area  -->



    <!-- accordion_area_start  -->
    <div class="accordion_area">
        <div class="container">
            <div class="row justify-content-end">
                <div class="col-lg-6">
                    <div class="faq_ask pl-68">
                        <h3 class="wow fadeInRight" data-wow-duration="1s" data-wow-delay=".3s">Frequently ask</h3>
                        <div id="accordion">
                            <div class="card wow fadeInUp" data-wow-duration="1.1s" data-wow-delay=".3s">
                                <div class="card-header" id="headingOnee">
                                    <h5 class="mb-0">
                                        <button class="btn btn-link" data-toggle="collapse" data-target="#collapseOnee"
                                            aria-expanded="true" aria-controls="collapseOnee">
                                            How do I access my account?
                                        </button>
                                    </h5>
                                </div>

                                <div id="collapseOnee" class="collapse show" aria-labelledby="headingOnee"
                                    data-parent="#accordion">
                                    <div class="card-body">
                                        You can bank or access your Loan account from anywhere with your Account ID given by
                                        the bank on successful application. To enrol, simply signup by providing your
                                        information to our help desk.
                                    </div>
                                </div>
                            </div>
                            <div class="card wow fadeInUp" data-wow-duration="1.2s" data-wow-delay=".4s">
                                <div class="card-header" id="headingOne">
                                    <h5 class="mb-0">
                                        <button class="btn btn-link collapsed" data-toggle="collapse"
                                            data-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
                                            When will my Debit/ATM card arrive?
                                        </button>
                                    </h5>
                                </div>
                                <div id="collapseOne" class="collapse" aria-labelledby="headingOne" data-parent="#accordion"
                                    style="">
                                    <div class="card-body">Your card will arrive within 3 to 7 days after opening your new
                                        account if you are banking.
                                    </div>
                                </div>
                            </div>
                            <div class="card wow fadeInUp" data-wow-duration="1.3s" data-wow-delay=".5s">
                                <div class="card-header" id="headingThree">
                                    <h5 class="mb-0">
                                        <button class="btn btn-link collapsed" data-toggle="collapse"
                                            data-target="#collapseThree" aria-expanded="false"
                                            aria-controls="collapseThree">
                                            How do you activate your debit/ATM Card?
                                        </button>
                                    </h5>
                                </div>
                                <div id="collapseThree" class="collapse" aria-labelledby="headingThree"
                                    data-parent="#accordion" style="">
                                    <div class="card-body">Contact our customer support for assistant.
                                    </div>
                                </div>
                            </div>
                            <div class="card wow fadeInUp" data-wow-duration="1.4s" data-wow-delay=".6s">
                                <div class="card-header" id="headingThree4">
                                    <h5 class="mb-0">
                                        <button class="btn btn-link collapsed" data-toggle="collapse"
                                            data-target="#collapseThree4" aria-expanded="false"
                                            aria-controls="collapseThree4">
                                            How long does it takes my loan to be approved?
                                        </button>
                                    </h5>
                                </div>
                                <div id="collapseThree4" class="collapse" aria-labelledby="headingThree4"
                                    data-parent="#accordion" style="">
                                    <div class="card-body">Your loan application takes 3 to 24 hours to be reviewed and 1
                                        day to 3 days to be paid in your preferred payment method.
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--/ accordion_area_end  -->
@endsection
