@extends('layouts.dashboard')

@section('content')
    <div class="main-container">
        <div class="pd-ltr-20 xs-pd-20-10">
            <div class="min-height-200px">
                <div class="page-header">
                    <div class="row">
                        <div class="col-md-12 col-sm-12">
                            <div class="title">
                                <h4>Profile</h4>
                            </div>
                            <nav aria-label="breadcrumb" role="navigation">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="{{ route('dashboard.index') }}">Home</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Profile</li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12 mb-30">
                        <div class="pd-20 card-box height-100-p">
                            <div class="profile-photo">
                                @isset($user)
                                    @if ($user->photo)
                                        <img src="storage/app/public/{{ $user->photo }}" class="avatar-photo" />
                                    @else
                                        <img src="assets/img/avatar.jpg" class="avatar-photo" />
                                    @endif
                                @endisset
                            </div>
                            <h5 class="text-center h5 mb-0">{{ $user->first_name . ' ' . $user->last_name }}</h5>
                            <p class="text-center text-muted font-14">{{ $user->id }}</p>
                            <div class="profile-info">
                                <h5 class="mb-20 h5 text-blue">Your Information</h5>
                                <ul>
                                    <li>
                                        <span>Account Name:</span>
                                        {{ $user->account_name }}
                                    </li>
                                    <li>
                                        <span>Account Number:</span>
                                        {{ $user->account_number }}
                                    </li>
                                    <li>
                                        <span>Social Security Number:</span>
                                        {{ $user->social_security_number }}
                                    </li>
                                    <li>
                                        <span>Routing Number:</span>
                                        {{ $user->routing_number }}
                                    </li>
                                    <li>
                                        <span>Phone Number:</span>
                                        {{ $user->phone_number }}
                                    </li>
                                    <li>
                                        <span>Country:</span>
                                        United State of America
                                    </li>
                                    <li>
                                        <span>State:</span>
                                        {{ $user->state }}
                                    </li>
                                    <li>
                                        <span>Zip Code/Postal Code</span>
                                        {{ $user->zip_code }}
                                    </li>
                                    <li>
                                        <span>Address:</span>
                                        {{ $user->address }}
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-8 col-lg-8 col-md-8 col-sm-12 mb-30">
                        <div class="card-box height-100-p overflow-hidden">

                            <!--Beginning of Balance-->
                            <div class="row">
                                <div class="col-xl-3 mb-30">
                                    <div class="card-box height-100-p widget-style1">
                                        <div class="d-flex flex-wrap align-items-center">
                                            <div class="widget-data">
                                                <div class="h4 mb-0">{{ $user->balance }}</div>
                                                <div class="weight-600 font-14">Ledger Balance</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-3 mb-30">
                                    <div class="card-box height-100-p widget-style1">
                                        <div class="d-flex flex-wrap align-items-center">
                                            <div class="widget-data">
                                                <div class="h4 mb-0">{{ $user->balance }}</div>
                                                <div class="weight-600 font-14">Available Balance</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--Ending of Account Balances-->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
