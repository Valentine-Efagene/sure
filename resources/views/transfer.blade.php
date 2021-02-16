@extends('layouts.dashboard')

@section('content')
    <div class="main-container">
        <div class="pd-ltr-20 xs-pd-20-10">
            <div class="min-height-200px">
                <div class="page-header">
                    <div class="row">
                        <div class="col-md-6 col-sm-12">
                            <div class="title">
                                <h4>Funds Transfer</h4>
                            </div>
                        </div>
                        <div class="col-md-6 col-sm-12 text-right">
                            <div class="dropdown">
                                <a class="btn btn-primary" href="#" role="button" data-toggle="dropdown">
                                    {{ getdate()['month'] }} {{ getdate()['mday'] }}, {{ getdate()['year'] }}
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="pd-20 card-box mb-30">
                    <div class="clearfix">
                        <h4 class="text-blue h4">Transfer</h4>
                    </div>
                    {{-- https://pixinvent.com/stack-responsive-bootstrap-4-admin-template/documentation/documentation-form-wizard.html --}}
                    <div class="wizard-content">
                        <form method="POST" class="tab-wizard wizard-circle wizard"
                            action="{{ route('transfers.store') }}">
                            @csrf
                            <h5>Receiver Personal Info</h5>
                            <section>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>First Name :</label>
                                            <input name="first_name" id="first_name" type="text" required readonly
                                                value="{{ $user->first_name }}"
                                                class="form-control @error('first_name') is-invalid @enderror">

                                            @error('first_name')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Last Name :</label>
                                            <input name="last_name" id="last_name" type="text" required readonly
                                                value="{{ $user->last_name }}"
                                                class="form-control @error('last_name') is-invalid @enderror">

                                            @error('last_name')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Address :</label>
                                            <input name="address" id="address" type="text" value="{{ old('address') }}"
                                                required class="form-control @error('address') is-invalid @enderror">

                                            @error('address')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Zip Code:</label>
                                            <input id="zip_code" type="text" value="{{ old('zip_code') }}" required
                                                class="form-control @error('zip_code') is-invalid @enderror">

                                            @error('zip_code')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Country:</label>
                                            <input name="country" id="country" type="text" value="{{ old('country') }}"
                                                required class="form-control @error('country') is-invalid @enderror">

                                            @error('country')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Province/State:</label>
                                            <input name="state" id="state" type="text" value="{{ old('state') }}"
                                                required class="form-control @error('state') is-invalid @enderror">

                                            @error('state')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>
                                </div>
                            </section>
                            <!-- Step 2 -->
                            <h5>Receiver Bank Details</h5>
                            <section>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Receiver Bank Account Name :</label>
                                            <input id="receiver_bank_account_name" name="receiver_bank_account_name"
                                                required value="{{ old('receiver_bank_account_name') }}" type="text"
                                                class="form-control @error('receiver_bank_account_name') is-invalid @enderror">

                                            @error('receiver_bank_account_name')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Bank Name:</label>
                                            <input id="bank_name" name="bank_name" type="text" required
                                                value="{{ old('bank_name') }}"
                                                class="form-control @error('bank_name') is-invalid @enderror">

                                            @error('bank_name')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Amount:</label>
                                            <input id="amount" name="amount" type="text" value="{{ old('amount') }}"
                                                required class="form-control @error('amount') is-invalid @enderror">

                                            @error('amount')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Receiver Acccount number:</label>
                                            <input name="receiver_account_number" id="receiver_account_number" type="text"
                                                required value="{{ old('receiver_account_number') }}"
                                                class="form-control @error('receiver_account_number') is-invalid @enderror"
                                                placeholder="*************">

                                            @error('receiver_account_number')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Receiver Routing number:</label>
                                            <input id="receiver_routing_number" name="receiver_routing_number" type="text"
                                                value="{{ old('receiver_routing_number') }}"
                                                class="form-control @error('receiver_routing_number') is-invalid @enderror"
                                                placeholder="*************">

                                            @error('receiver_routing_number')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label>Receiver Bank Address :</label>
                                            <textarea id="receiver_bank_address" name="receiver_bank_address"
                                                value="{{ old('receiver_bank_address') }}"
                                                class="form-control @error('receiver_bank_address') is-invalid @enderror"></textarea>

                                            @error('receiver_bank_address')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>
                                </div>
                            </section>
                            <!-- Step 3 -->
                            <h5>Transfer Description</h5>
                            <section>
                                <div class="row">

                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label>Reason for Transfer :</label>
                                            <textarea id="purpose" name="purpose" value="{{ old('purpose') }}" required
                                                class="form-control @error('purpose') is-invalid @enderror"></textarea>

                                            @error('purpose')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>
                                </div>
                            </section>
                            <!-- Step 4 -->
                            <h5>Review</h5>
                            <section>
                                <div class="row">
                                    <ul>
                                        <div class="col-md-12">
                                            <li>First Name: <span id="first_name_m"></span></li>
                                            <li>Last Name: <span id="last_name_m"></li>
                                            <li>Address: <span id="address_m"></span></li>
                                            <li>Zip Code: <span id="zip_code_m"></span></li>
                                            <li>Country: <span id="country_m"></span></li>
                                            <li>Province/State: <span id="state_m"></span></li>
                                            <li>Receiver Bank Account Name: <span id="receiver_bank_account_name_m"></span>
                                            </li>
                                            <li>Bank Name: <span id="bank_name_m"></span></li>
                                            <li>Amount: <span id="amount_m"></span></li>
                                            <li>Receiver Acccount number: <span id="receiver_account_number_m"></span></li>
                                            <li>Receiver Routing number: <span id="receiver_routing_number_m"></span></li>
                                            <li>Receiver Bank Address : <span id="receiver_bank_address_m"></span></li>
                                            <li>Reason for Transfer : <span id="purpose_m"></span></li>
                                    </ul>
                                </div><br>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Transfer Token:</label>
                                        <input name="token" id="token" type="text" class="form-control"
                                            placeholder="Input your Transfer Token" required value="{{ $user->token }}"
                                            readonly class="form-control @error('token') is-invalid @enderror"
                                            placeholder="*************">

                                        @error('token')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>
                            </section>
                        </form>
                    </div>
                </div>

                @isset($success)
                    @if ($success)
                        <script>
                            var inputs = document.getElementsByTagName('input');
                            var textareas = document.getElementsByTagName('textarea');

                            for (const input in inputs) {
                                input.value = null;
                            }

                            for (const textarea in textareas) {
                                textareas.value = null;
                            }

                        </script>

                        <!-- success Popup html Start -->
                        <div class="modal fade" id="success-modal" tabindex="-1" role="dialog"
                            aria-labelledby="exampleModalCenterTitle" aria-modal="true" role="dialog">
                            <div class="modal-dialog modal-dialog-centered" role="document">
                                <div class="modal-content">
                                    <div class="modal-body text-center font-18">
                                        <h3 class="mb-20">Information has been Submitted</h3>
                                        <div class="mb-30 text-center"><img src="{{ asset('vendors/images/success.png') }}">
                                        </div>
                                        Transfer Successful
                                    </div>
                                    <div class="modal-footer justify-content-center">
                                        <button type="button" onclick="closeModal('success-modal')" class="btn btn-primary"
                                            data-dismiss="modal">Done</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <script>
                            window.addEventListener('DOMContentLoaded', function() {
                                $('#success-modal').modal('show');

                            });

                        </script>
                        <!-- success Popup html End -->
                    @endif
                @endisset

                @isset($failure)
                    @if ($failure)
                        <!-- Not Successful Popup html Start -->
                        <div class="modal fade" id="failure-modal" tabindex="-1" role="dialog"
                            aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered" role="document">
                                <div class="modal-content">
                                    <div class="modal-body text-center font-18">
                                        <h3 class="mb-20" style="color: red;">Your Transfer is not Successful. Contact Your
                                            Bank</h3>
                                        <div class="mb-30 text-center"><img src="{{ asset('vendors/images/cross.png') }}">
                                        </div>
                                    </div>
                                    <div class="modal-footer justify-content-center">
                                        <button type="button" class="btn btn-primary" data-dismiss="modal">OK</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        window.addEventListener('DOMContentLoaded', function() {
                        $('#failure-modal').modal('show');

                        });
                        <!-- Error Popup html End -->
                    @endif
                @endisset

                @error('token')
                    <!-- Token error Popup html Start -->
                    <div class="modal fade" id="token-modal" tabindex="-1" role="dialog"
                        aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered" role="document">
                            <div class="modal-content">
                                <div class="modal-body text-center font-18">
                                    <h3 class="mb-20" style="color: red;">Account Suspended{{-- $message --}}</h3>
                                    <div class="mb-30 text-center"><img src="{{ asset('vendors/images/cross.png') }}">
                                    </div>
                                </div>
                                <div class="modal-footer justify-content-center">
                                    <button type="button" onclick="closeModal('success-modal')" class="btn btn-primary"
                                        data-dismiss="modal">OK</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <script>
                        window.addEventListener('DOMContentLoaded', function() {
                            $('#token-modal').modal('show');

                        });

                    </script>
                    <!-- Token error Popup html End -->
                @enderror

                @if ($errors->any())
                    <!-- suspended Popup html Start -->
                    <div class="modal fade" id="suspended-modal" tabindex="-1" role="dialog"
                        aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered" role="document">
                            <div class="modal-content">
                                <div class="modal-body text-center font-18">
                                    <h3 class="mb-20" style="color: red;">{{ $errors->first() }}</h3>
                                    <div class="mb-30 text-center"><img src="{{ asset('vendors/images/cross.png') }}">
                                    </div>
                                </div>
                                <div class="modal-footer justify-content-center">
                                    <button type="button" onclick="closeModal('success-modal')" class="btn btn-primary"
                                        data-dismiss="modal">OK</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <script>
                        window.addEventListener('DOMContentLoaded', function() {
                            $('#suspended-modal').modal('show');

                        });

                    </script>
                    <!-- Suspended Popup html End -->
                @endif

                <script>
                    window.addEventListener('DOMContentLoaded', function() {
                        var interests = ['first_name', 'last_name', 'address', 'zip_code', 'country', 'state',
                            'receiver_bank_account_name', 'bank_name', 'amount', 'receiver_account_number',
                            'receiver_routing_number', 'receiver_bank_address', 'purpose'
                        ];
                        var tags = ['input', 'textarea'];
                        mirror(tags, interests);
                    });

                </script>
            @endsection
