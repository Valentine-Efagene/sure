@extends('layouts.dashboard')

@section('content')
    <!--Welcome Note to user-->
    <div class="main-container">
        <div class="pd-ltr-20">
            <div class="card-box pd-20 height-100-p mb-30">
                <div class="row align-items-center">
                    <div class="col-md-4">
                        <img src="vendors/images/banner-img.png" alt="">
                    </div>
                    <div class="col-md-8">
                        <h4 class="font-20 weight-500 mb-10 text-capitalize">
                            <div class="weight-600 font-30 text-blue">
                                {{ $user->first_name . ' ' . $user->last_name }}</div>
                        </h4>
                        <p class="font-18 max-width-600"></p>
                    </div>
                </div>
            </div>
            <!--Welcome Note Ends-->

            <!--Begining of Balance-->
            <div class="row">
                <div class="col-xl-3 mb-30">
                    <div class="card-box height-100-p widget-style1">
                        <div class="d-flex flex-wrap align-items-center">
                            <div class="widget-data">
                                <div class="h4 mb-0">${{ $ledger_balance }}</div>
                                <div class="weight-600 font-14">Ledger Balance</div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 mb-30">
                    <div class="card-box height-100-p widget-style1">
                        <div class="d-flex flex-wrap align-items-center">
                            <div class="widget-data">
                                <div class="h4 mb-0">${{ $available_balance }}</div>
                                <div class="weight-600 font-14">Available Balance</div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 mb-30">
                    <div class="card-box height-100-p widget-style1">
                        <div class="d-flex flex-wrap align-items-center">
                            <div class="widget-data">
                                <div class="h4 mb-0">${{ $credit_today }}</div>
                                <div class="weight-600 font-14">Today's Credit</div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 mb-30">
                    <div class="card-box height-100-p widget-style1">
                        <div class="d-flex flex-wrap align-items-center">
                            <div class="widget-data">
                                <div class="h4 mb-0">${{ $debit_today }}</div>
                                <div class="weight-600 font-14">Today's Debit</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--Ending of Account Balances-->
@endsection
