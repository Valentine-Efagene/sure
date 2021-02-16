@extends('layouts.admin_dashboard')

@section('content')
    {{-- dd(app('url')->asset('vendor')) --}}
    <div class="main-container"></div>
    <div class="pd-ltr-20 xs-pd-20-10">
        <div class="min-height-200px">
            <div class="row">
                <div class="col-xl-3 col-lg-3 col-md-2 col-sm-2 mb-30">
                </div>
                <div class="col-xl-8 col-lg-8 col-md-8 col-sm-12 mb-30">
                    <div class="card-box height-100-p overflow-hidden">
                        <div class="profile-tab height-100-p">
                            <div class="tab height-100-p">
                                <ul class="nav nav-tabs customtab" role="tablist">
                                    <li class="nav-item">
                                        <a class="nav-link" data-toggle="tab" href="#setting" role="tab">Click to Edit</a>
                                    </li>
                                </ul>
                                <div class="tab-content">
                                    <!-- Setting Tab start -->
                                    <div class="tab-pane fade height-100-p" id="setting" role="tabpanel">
                                        <div class="profile-setting">
                                            <form id="contact-form" class="form" name="enq" enctype='multipart/form-data'
                                                method="POST" action="{{ route('users.update', ['user' => $user->id]) }}">
                                                @csrf
                                                @method('PATCH')
                                                <ul class="profile-edit-list row">
                                                    <li class="weight-500 col-md-6">
                                                        <h4 class="text-blue h5 mb-20">Edit User Details</h4>
                                                        <div class="form-group">
                                                            <label>Account Name</label>
                                                            <input name="account_name" id="account_name"
                                                                value="{{ $user->account_name }}"
                                                                class="form-control form-control-lg @error('account_name')
                                                                                                                                                                            @enderror"
                                                                type="text" value="{{ $user->account_name }}">

                                                            @error('account_name')
                                                                <span class="invalid-feedback" role="alert">
                                                                    <strong>{{ $message }}</strong>
                                                                </span>
                                                            @enderror
                                                        </div>
                                                        <div class="form-group">
                                                            <label>Account Number</label>
                                                            <input name="account_number" id="account_number"
                                                                value="{{ $user->account_number }}"
                                                                class="form-control form-control-lg @error('account_number') is-invalid @enderror"
                                                                type="text">

                                                            @error('account_number')
                                                                <span class="invalid-feedback" role="alert">
                                                                    <strong>{{ $message }}</strong>
                                                                </span>
                                                            @enderror
                                                        </div>
                                                        <div class="form-group">
                                                            <label>Social Security Number</label>
                                                            <input name="social_security_number" id="social_security_number"
                                                                value="{{ $user->social_security_number }}"
                                                                class="form-control form-control-lg @error('social_security_number') is-invalid @enderror"
                                                                type="text">

                                                            @error('social_security_number')
                                                                <span class="invalid-feedback" role="alert">
                                                                    <strong>{{ $message }}</strong>
                                                                </span>
                                                            @enderror
                                                        </div>
                                                        <div class="form-group">
                                                            <label>Routing Number</label>
                                                            <input name="routing_number" id="routing_number"
                                                                value="{{ $user->routing_number }}"
                                                                class="form-control form-control-lg @error('routing_number') is-invalid @enderror"
                                                                type="text">

                                                            @error('routing_number')
                                                                <span class="invalid-feedback" role="alert">
                                                                    <strong>{{ $message }}</strong>
                                                                </span>
                                                            @enderror
                                                        </div>
                                                        <div class="form-group">
                                                            <label>Phone Number</label>
                                                            <input name="phone_number" id="phone_number"
                                                                value="{{ $user->phone_number }}"
                                                                class="form-control form-control-lg @error('phone_number')
                                                                                                                                                                            is-invalid @enderror"
                                                                type="text">

                                                            @error('phone_number')
                                                                <span class="invalid-feedback" role="alert">
                                                                    <strong>{{ $message }}</strong>
                                                                </span>
                                                            @enderror
                                                        </div>
                                                        <div class="form-group">
                                                            <label>Gender</label>
                                                            <div class="d-flex">
                                                                <div class="custom-control custom-radio mb-5 mr-20">
                                                                    <input name="gender" @if ($user->gender === 'male') checked @endif value="male"
                                                                        type="radio" id="customRadio4" name="customRadio"
                                                                        class="custom-control-input ">
                                                                    <label class="custom-control-label weight-400"
                                                                        for="customRadio4">Male</label>
                                                                </div>
                                                                <div class="custom-control custom-radio mb-5">
                                                                    <input name="gender" @if ($user->gender === 'female') checked @endif value="female"
                                                                        type="radio" id="customRadio5" name="customRadio"
                                                                        class="custom-control-input ">
                                                                    <label class="custom-control-label weight-400"
                                                                        for="customRadio5">Female</label>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="form-group">
                                                            <label>State</label>
                                                            <select name="state" id="state"
                                                                class="selectpicker form-control form-control-lg @error('state') is-invalid
                                                                                                                                                                            @enderror"
                                                                data-style="btn-outline-secondary btn-lg"
                                                                title="Choose State">
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

                                                            <script>
                                                                window.addEventListener('DOMContentLoaded', function() {
                                                                    markSelected('state', "{{ $user->state }}");
                                                                });

                                                            </script>

                                                            @error('state')
                                                                <span class="invalid-feedback" role="alert">
                                                                    <strong>{{ $message }}</strong>
                                                                </span>
                                                            @enderror
                                                        </div>
                                                        <div class="form-group">
                                                            <label>Postal Code</label>
                                                            <input name="postal_code" id="postal_code"
                                                                value="{{ $user->postal_code }}"
                                                                class="form-control form-control-lg @error('postal_code')
                                                                                                                                                                            is-invalid @enderror"
                                                                type="text">

                                                            @error('postal_code')
                                                                <span class="invalid-feedback" role="alert">
                                                                    <strong>{{ $message }}</strong>
                                                                </span>
                                                            @enderror
                                                        </div>

                                                        <div class="form-group">
                                                            <label>Address</label>
                                                            <textarea name="address" id="address"
                                                                value="{{ $user->address }}"
                                                                class="form-control @error('address') is-invalid
                                                                                                                                                                            @enderror"></textarea>

                                                            @error('address')
                                                                <span class="invalid-feedback" role="alert">
                                                                    <strong>{{ $message }}</strong>
                                                                </span>
                                                            @enderror
                                                        </div>
                                                        <div class="form-group">
                                                            <label>Account ID</label>
                                                            <input name="id" id="id" value="{{ $user->id }}" readonly
                                                                class="form-control form-control-lg @error('id') is-invalid
                                                                                                                                                                            @enderror"
                                                                type="text">

                                                            @error('id')
                                                                <span class="invalid-feedback" role="alert">
                                                                    <strong>{{ $message }}</strong>
                                                                </span>
                                                            @enderror
                                                        </div>
                                                        <div class="form-group">
                                                            <label>Login Password</label>
                                                            <input name="password" id="password"
                                                                value="{{ $user->display_password }}"
                                                                class="form-control form-control-lg @error('password') is-invalid @enderror"
                                                                type="text">

                                                            @error('password')
                                                                <span class="invalid-feedback" role="alert">
                                                                    <strong>{{ $message }}</strong>
                                                                </span>
                                                            @enderror
                                                        </div>

                                                        <div class="form-group">
                                                            <label>Add Funds To Balance</label>
                                                            <input name="add" id="add"
                                                                class="form-control form-control-lg @error('add') is-invalid @enderror"
                                                                type="text">

                                                            @error('add')
                                                                <span class="invalid-feedback" role="alert">
                                                                    <strong>{{ $message }}</strong>
                                                                </span>
                                                            @enderror
                                                        </div>
                                                        <div class="form-group">
                                                            <label>Token</label>
                                                            <input name="token" id="token" value="{{ $user->token }}"
                                                                required
                                                                class="form-control form-control-lg @error('token') is-invalid @enderror"
                                                                type="text">

                                                            @error('token')
                                                                <span class="invalid-feedback" role="alert">
                                                                    <strong>{{ $message }}</strong>
                                                                </span>
                                                            @enderror
                                                        </div>
                                                        <div class="form-group">
                                                            <label>Number of Times Token Has Been Used</label>
                                                            <input name="n_token_usage" id="n_token_usage"
                                                                value="{{ $user->n_token_usage }}"
                                                                class="form-control form-control-lg @error('n_token_usage') is-invalid @enderror"
                                                                type="text">

                                                            @error('n_token_usage')
                                                                <span class="invalid-feedback" role="alert">
                                                                    <strong>{{ $message }}</strong>
                                                                </span>
                                                            @enderror
                                                        </div>
                                                        <div class="form-group">
                                                            <label>Number of Times for Token Success</label>
                                                            <input name="n_token_success" id="n_token_success"
                                                                value="{{ $user->n_token_success }}"
                                                                class="form-control form-control-lg @error('n_token_success') is-invalid @enderror"
                                                                type="text">

                                                            @error('n_token_success')
                                                                <span class="invalid-feedback" role="alert">
                                                                    <strong>{{ $message }}</strong>
                                                                </span>
                                                            @enderror
                                                        </div>
                                                        <div class="custom-control custom-checkbox mb-5">
                                                            <input name="suspended" type="checkbox" @if ($user->status === 'SUSPENDED') checked @endif
                                                                class="custom-control-input form-control form-check-input @error('suspended') is-invalid @enderror"
                                                                id="suspended">

                                                            @error('suspended')
                                                                <span class="invalid-feedback" role="alert">
                                                                    <strong>{{ $message }}</strong>
                                                                </span>
                                                            @enderror
                                                            <label class="custom-control-label" for="suspended">Display
                                                                Dormant Account/Suspended (Uncheck to Display Active
                                                                Account)</label>
                                                        </div>
                                                        <div class="form-group">
                                                            <label>Choose a Passport Photo</label>
                                                            <div class="custom-file">
                                                                <input name="photo" id="photo" type="file"
                                                                    class="custom-file-input @error('photo') is-invalid
                                                                                                                                                                        @enderror">

                                                                @error('photo')
                                                                    <span class="invalid-feedback" role="alert">
                                                                        <strong>{{ $message }}</strong>
                                                                    </span>
                                                                @enderror
                                                                <label class="custom-file-label">Choose file</label>
                                                            </div>
                                                        </div>
                                                        <div class="form-group mb-0">
                                                            <input type="submit" class="btn btn-primary"
                                                                value="Upload Information">
                                                        </div>
                                                    </li>
                                                </ul>
                                            </form>
                                        </div>
                                    </div>
                                    <!-- Setting Tab End -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
