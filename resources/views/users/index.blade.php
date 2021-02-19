@extends('layouts.admin_dashboard')

@section('content')
    <!--Welcome Note to user-->
    <div class="main-container">
        <div class="pd-ltr-20">
            <div class="card-box pd-20 height-100-p mb-30">
                <div class="row align-items-center">
                    <div class="col-md-4">
                        <img src="{{ asset('vendors/images/banner-img.png') }}" alt="">
                    </div>
                    <div class="col-md-8">
                        <h4 class="font-20 weight-500 mb-10 text-capitalize">
                            Welcome back <div class="weight-600 font-30 text-blue">
                                {{ auth('admin')->user()->first_name . ' ' . auth('admin')->user()->last_name }}</div>
                        </h4>
                        <p class="font-18 max-width-600"></p>
                    </div>
                </div>
            </div>
            <!--Add User. This is just to create a new table row. After creating the row, we can use the edit button to update others informations-->
            <div class="pd-ltr-20">
                <div class="col-md-4 col-sm-12 text-right">
                    <a href="{{ route('users.create') }}" class="bg-light-blue btn text-blue weight-500"><i
                            class="ion-plus-round"></i> Add New
                        User/Account</a>
                </div>
            </div>
            <!--Add User Ends-->

            <div class="pd-ltr-20">
                <div class="card-box mb-30">
                    <h2 class="h4 pd-20">Added Client/User/Approved</h2>
                    <table class="data-table table nowrap">
                        <thead>
                            <tr>
                                <th>Account Name</th>
                                <th>Account ID</th>
                                <th>Password</th>
                                <th>Tranfer Token</th>
                                <th class="datatable-nosort">Action</th>
                            </tr>
                        </thead>
                        @isset($users)
                            @foreach ($users as $user)
                                <tbody>
                                    <tr>
                                        <td class="table-plus">{{ $user->first_name }} {{ $user->last_name }}
                                        </td>
                                        <td>{{ $user->id }}
                                        </td>
                                        <td>{{ $user->display_password }}</td>
                                        <td>{{ $user->token }}</td>
                                        <td>
                                            <div class="dropdown">
                                                <a class="btn btn-link font-24 p-0 line-height-1 no-arrow dropdown-toggle"
                                                    href="#" role="button" data-toggle="dropdown">
                                                    <i class="dw dw-more"></i>
                                                </a>
                                                <div class="dropdown-menu dropdown-menu-right dropdown-menu-icon-list">
                                                    <a class="dropdown-item"
                                                        href="{{ route('users.edit', ['user' => $user->id]) }}"><i
                                                            class="dw dw-edit2"></i> Edit</a>
                                                    <a class="dropdown-item" href=""
                                                        onclick="credit(event, {{ $user->id }})"><i class="dw dw-money"></i>
                                                        Add
                                                        fund</a>
                                                    <a class="dropdown-item"
                                                        onclick="confirmDelete(event, {{ $user->id }})" href=""><i
                                                            class="dw dw-delete-3"></i> Delete</a>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                </tbody>
                            @endforeach
                        @endisset
                    </table>
                </div>
            </div>
            <!--End of Statement-->
        </div>
    </div>

    <!-- Delete Popup html Start -->
    <div class="modal fade" id="delete-modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle"
        aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Error</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <p style="color: red;">Are you sure you want to delete this account?</p>
                    <form method="POST" id="frm-delete" class="apply_form">
                        @csrf
                        @method('DELETE')
                        <input name="delete_user_id" id="delete_user_id" hidden />
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">No</button>
                    <button type="button" onclick="document.getElementById('frm-delete').submit();"
                        class="btn btn-primary">Yes</button>
                </div>
            </div>
        </div>
    </div>
    <!-- Delete Popup html End -->

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
            <div class="modal fade" id="success-modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle"
                aria-modal="true" role="dialog">
                <div class="modal-dialog modal-dialog-centered" role="document">
                    <div class="modal-content">
                        <div class="modal-body text-center font-18">
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
            <div class="modal fade" id="failure-modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle"
                aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title">Token Error</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <p style="color: red;">Your transfer was unsuccessful. Please try again.</p>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">ok</button>
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

    <!-- Credit Popup html Start -->
    <div class="modal fade" id="credit-modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle"
        aria-modal="true" role="dialog">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-body">
                    <form method="POST" action="{{ route('transfers.credit') }}" class="apply_form">
                        @csrf
                        <div class="form-group">
                            <label>Amount:</label>
                            <input id="amount" name="amount" type="text" value="{{ old('amount') }}" required
                                class="form-control @error('amount') is-invalid @enderror">

                            @error('amount')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label>Description:</label>
                            <textarea id="purpose" name="purpose" value="{{ old('purpose') }}" required
                                class="form-control @error('purpose') is-invalid @enderror"></textarea>

                            @error('purpose')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <input name="user_id" id="user_id" hidden />
                        <div class="form-group">
                            <div class="submit_btn">
                                <button class="form-control btn btn-primary" type="submit">Submit</button>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="modal-footer justify-content-center">
                    <button type="button" onclick="closeModal('success-modal')" class="btn btn-secondary"
                        data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
    <!-- Credit Popup html End -->

    <script>
        function credit(e, user_id) {
            e.preventDefault();
            $('#user_id').val(user_id);
            $('#credit-modal').modal('show');
        }

        function confirmDelete(e, user_id) {
            e.preventDefault();
            var route = "{{ route('users.index') }}" + '/' + user_id;
            document.getElementById('frm-delete').action = route;
            $('#delete_user_id').val(user_id);
            $('#delete-modal').modal('show');
        }

        window.addEventListener('DOMContentLoaded', function() {

        });

    </script>
@endsection
