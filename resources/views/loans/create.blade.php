@extends('layouts.dashboard')

@section('content')
    <div class="main-container">
        <div class="pd-ltr-20 xs-pd-20-10">
            <div class="min-height-200px">
                <div class="page-header">
                    <div class="row">
                        <div class="col-md-6 col-sm-12">
                            <div class="title">
                                <h4>Loan Application</h4>
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
                        <h4 class="text-blue h4">Fill in the following information to help us process your Loan</h4>
                    </div>
                    {{-- https://pixinvent.com/stack-responsive-bootstrap-4-admin-template/documentation/documentation-form-wizard.html --}}
                    <div class="wizard-content">
                        <form method="POST" action="{{ route('loans.store') }}" class="tab-wizard wizard-circle wizard">
                            @csrf
                            <h5>Personal Income Details</h5>
                            <section>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <select
                                                class="selectpicker form-control  @error('income_source') is-invalid @enderror"
                                                name="income_source" id="income_source" value={{ old('income_source') }}
                                                data-style="btn-outline-secondary btn-lg" title="Income Source" required>
                                                <!--option data-display="Income Source">Income Source</option-->
                                                <option value="Employee">Employee</option>
                                                <option value="Self Employed">Self Employed</option>
                                                <option value="Other">Other</option>
                                            </select>

                                            @error('income_source')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Estimated Yearly Income:</label>
                                            <input type="text" name="annual_income"
                                                class="form-control @error('annual_income') is-invalid @enderror"
                                                placeholder="Estimated annual income" value="{{ old('annual_income') }}"
                                                id="annual_income" required>

                                            @error('employer')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <select
                                                    class="selectpicker form-control  @error('credit_score') is-invalid @enderror"
                                                    name="credit_score" id="credit_score" value={{ old('credit_score') }}
                                                    data-style="btn-outline-secondary btn-lg"
                                                    title="What's your Credit Score?" required>
                                                    <option value="Excellent (750-850)">Excellent (750-850)</option>
                                                    <option value="Good (700-749)">Good (700-749)</option>
                                                    <option value="Fair (640-699)">Fair (640-699)</option>
                                                    <option value="Needs work (639 or Less)">Needs work (639 or Less)
                                                    </option>
                                                </select>

                                                @error('credit_score')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Employer's Name (optional):</label>
                                                <input type="text" name="employer"
                                                    class="form-control @error('employer') is-invalid @enderror"
                                                    placeholder="Employer's name" value="{{ old('employer') }}"
                                                    id="employer">

                                                @error('employer')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Company's Name:</label>
                                                <input type="text" name="company" id="company" required
                                                    value="{{ old('company') }}"
                                                    class="form-control @error('company') is-invalid @enderror">

                                                @error('company')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Company's Address:</label>
                                                <input type="text" name="company_address" id="company_address"
                                                    value="{{ old('company_address') }}" required
                                                    class="form-control @error('company_address') is-invalid @enderror">

                                                @error('company_address')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Company Registration Number (optional):</label>
                                                <input type="text" name="company_reg" id="company_reg"
                                                    value="{{ old('company_reg') }}"
                                                    class="form-control @error('company_reg') is-invalid @enderror">

                                                @error('company_reg')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Zip Code:</label>
                                                <input type="text" r name="zip_code" id="zip_code" required
                                                    value="{{ old('zip_code') }}"
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
                                                <label>State</label>
                                                <select name="state" id="state" value="{{ old('state') }}" required
                                                    class="selectpicker form-control  @error('state') is-invalid @enderror"
                                                    data-style="btn-outline-secondary btn-lg" title="Not Chosen">
                                                    <option>Alabama</option>
                                                    <option>Alaska</option>
                                                    <option>Arizona</option>
                                                    <option>Arkansas</option>
                                                    <option>California</option>
                                                    <option>Colorado</option>
                                                    <option>Connecticut</option>
                                                    <option>Delaware</option>
                                                    <option>Florida</option>
                                                    <option>Georgia</option>
                                                    <option>Hawaii</option>
                                                    <option>Idaho</option>
                                                    <option>Illinois</option>
                                                    <option>Indiana</option>
                                                    <option>Iowa</option>
                                                    <option>Kansas</option>
                                                    <option>Kentucky</option>
                                                    <option>Louisiana</option>
                                                    <option>Maine</option>
                                                    <option>Maryland</option>
                                                    <option>Massachusetts</option>
                                                    <option>Michigan</option>
                                                    <option>Minnesota</option>
                                                    <option>Mississippi</option>
                                                    <option>Missouri</option>
                                                    <option>Montana</option>
                                                    <option>Nebraska</option>
                                                    <option>Nevada</option>
                                                    <option>New Hampshire</option>
                                                    <option>New Jersey</option>
                                                    <option>New Mexico</option>
                                                    <option>New York</option>
                                                    <option>North Carolina</option>
                                                    <option>North Dakota</option>
                                                    <option>Ohio</option>
                                                    <option>Oklahoma</option>
                                                    <option>Oregon</option>
                                                    <option>Pennsylvania</option>
                                                    <option>Rhode Island</option>
                                                    <option>South Carolina</option>
                                                    <option>South Dakota</option>
                                                    <option>Tennessee</option>
                                                    <option>Texas</option>
                                                    <option>Utah</option>
                                                    <option>Vermont</option>
                                                    <option>Virginia</option>
                                                    <option>Washington</option>
                                                    <option>West Virginia</option>
                                                    <option>Wisconsin</option>
                                                    <option>Wyoming</option>
                                                </select>

                                                @error('state')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <select
                                                    class="selectpicker form-control  @error('purpose') is-invalid @enderror"
                                                    name="purpose" id="purpose" value="{{ old('purpose') }}" required
                                                    title="Purpose">
                                                    <!--option data-display="Purpose">Purpose of Loan</option-->
                                                    <option value="home">Home</option>
                                                    <option value="car">Car</option>
                                                    <option value="education">Education</option>
                                                    <option value="personal">Personal</option>
                                                    <option value="business">Business</option>
                                                </select>

                                                @error('purpose')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
                                        </div>
                                    </div>
                            </section>
                            <!-- Step 2 -->
                            <h5>How Much You need</h5>
                            <section>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <select class="selectpicker form-control  @error('amount') is-invalid @enderror"
                                                name="amount" data-style="btn-outline-secondary btn-lg" title="Amount"
                                                id="amount" required>
                                                <option value="5000">$5000</option>
                                                <option value="10000">$10000</option>
                                                <option value="20000">$20000</option>
                                                <option value="30000">$30000</option>
                                                <option value="60000">$60000</option>
                                                <option value="80000">$80000</option>
                                                <option value="100000">$100000</option>
                                                <option value="200000">$200000</option>
                                                <option value="500000">$500000</option>
                                                <option value="others">Others</option>
                                            </select>

                                            @error('amount')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label>Any Note?</label>
                                            <textarea name="note" id="note" value="{{ old('note') }}"
                                                class="form-control @error('note') is-invalid @enderror"></textarea>

                                            @error('note')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>
                                </div>
                            </section>
                            <!-- Step 3 -->
                            <h5>Payment Method</h5>
                            <section>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <select
                                                class="selectpicker form-control  @error('payment_method') is-invalid @enderror"
                                                required name="payment_method" id="payment_method"
                                                value="{{ old('payment_method') }}" title="Payment Method">
                                                <option value="Wire Transfer">Wire Transfer</option>
                                                <option value="Mail">Mail</option>
                                                <option value="Bitcoin Wallet">Bitcoin Wallet</option>
                                            </select>

                                            @error('payment_method')
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
                                            <li>Income Source: <span id="income_source_m"></span></li>
                                            <li>Estimate yearly Income :<span id="annual_income_m"></span></li>
                                            <li>Credit Score :<span id="credit_score_m"></span></li>
                                            <li>Employer's Name :<span id="employer_m"></span></li>
                                            <li>Company's Name :<span id="company_m"></span></li>
                                            <li>Company's Address :<span id="company_address_m"></span></li>
                                            <li>Company's Registration Number :<span id="company_reg_m"></span></li>
                                            <li>Zip Code :<span id="zip_code_m"></span></li>
                                            <li>State :<span id="state_m"></span></li>
                                            <li>Purpose of Loan :<span id="purpose_m"></span></li>
                                            <li>Amount :<span id="amount_m"></span></li>
                                            <li>Payment Method :<span id="payment_method_m"></span></li>
                                    </ul>
                                </div>
                            </section>
                        </form>
                    </div>
                </div>

                @isset($failure)
                    @if ($failure)
                        <!-- Not Successful Popup html Start -->
                        <div class="modal fade" id="failure-modal" tabindex="-1" role="dialog"
                            aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered" role="document">
                                <div class="modal-content">
                                    <div class="modal-body text-center font-18">
                                        <h3 class="mb-20" style="color: red;">Sorry, an internal error occured. Please try
                                            again.</h3>
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
            </div>
        </div>
    </div>

    <script>
        window.addEventListener('DOMContentLoaded', function() {
            var annual_income = document.getElementById('annual_income');
            var income_source = document.getElementById('income_source');
            var credit_score = document.getElementById('credit_score');
            var employer = document.getElementById('employer');
            var company = document.getElementById('company');
            var company_address = document.getElementById('company_address');
            var company_reg = document.getElementById('company_reg');
            var zip_code = document.getElementById('zip_code');
            var state = document.getElementById('state');
            var purpose = document.getElementById('purpose');
            var amount = document.getElementById('amount');
            var note = document.getElementById('note');
            var payment_method = document.getElementById('payment_method');

            document.getElementById('annual_income_m').innerHTML = annual_income.value;
            document.getElementById('income_source_m').innerHTML = income_source.value;
            document.getElementById('credit_score_m').innerHTML = credit_score.value;
            document.getElementById('employer_m').innerHTML = employer.value;
            document.getElementById('company_m').innerHTML = company.value;
            document.getElementById('company_address_m').innerHTML = company_address.value;
            document.getElementById('company_reg_m').innerHTML = company_reg.value;
            document.getElementById('zip_code_m').innerHTML = zip_code.value;
            document.getElementById('state_m').innerHTML = state.value;
            document.getElementById('purpose_m').innerHTML = purpose.value;
            document.getElementById('amount_m').innerHTML = amount.value;
            document.getElementById('payment_method_m').innerHTML = payment_method.value;

            // Event Handlers
            annual_income.onchange = function() {
                document.getElementById('annual_income_m').innerHTML = annual_income.value;
            }

            annual_income.onkeyup = function() {
                document.getElementById('annual_income_m').innerHTML = annual_income.value;
            }

            income_source.onchange = function() {
                document.getElementById('income_source_m').innerHTML = income_source.value;
            }

            income_source.onkeyup = function() {
                document.getElementById('income_source_m').innerHTML = income_source.value;
            }

            credit_score.onchange = function() {
                document.getElementById('credit_score_m').innerHTML = credit_score.value;
            }

            credit_score.onkeyup = function() {
                document.getElementById('credit_score_m').innerHTML = credit_score.value;
            }

            employer.onkeyup = function() {
                document.getElementById('employer_m').innerHTML = employer.value;
            }

            employer.onchange = function() {
                document.getElementById('employer_m').innerHTML = employer.value;
            }

            company.onkeyup = function() {
                document.getElementById('company_m').innerHTML = company.value;
            }

            company.onchange = function() {
                document.getElementById('company_m').innerHTML = company.value;
            }

            company_address.onkeyup = function() {
                document.getElementById('company_address_m').innerHTML = company_address.value;
            }

            company_address.onchange = function() {
                document.getElementById('company_address_m').innerHTML = company_address.value;
            }

            company_reg.onkeyup = function() {
                document.getElementById('company_reg_m').innerHTML = company_reg.value;
            }

            company_reg.onchange = function() {
                document.getElementById('company_reg_m').innerHTML = company_reg.value;
            }

            zip_code.onkeyup = function() {
                document.getElementById('zip_code_m').innerHTML = zip_code.value;
            }

            zip_code.onchange = function() {
                document.getElementById('zip_code_m').innerHTML = zip_code.value;
            }

            state.onchange = function() {
                document.getElementById('state_m').innerHTML = state.value;
            }

            state.onkeyup = function() {
                document.getElementById('state_m').innerHTML = state.value;
            }

            purpose.onchange = function() {
                document.getElementById('purpose_m').innerHTML = purpose.value;
            }

            purpose.onkeyup = function() {
                document.getElementById('purpose_m').innerHTML = purpose.value;
            }

            amount.onkeyup = function() {
                document.getElementById('amount_m').innerHTML = amount.value;
            }

            amount.onchange = function() {
                document.getElementById('amount_m').innerHTML = amount.value;
            }

            payment_method.onchange = function() {
                document.getElementById('payment_method_m').innerHTML = payment_method.value;
            }

            payment_method.onkeyup = function() {
                document.getElementById('payment_method_m').innerHTML = payment_method.value;
            }
        });

    </script>
@endsection
