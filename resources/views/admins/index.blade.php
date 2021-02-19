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
                            Welcome back <div class="weight-600 font-30 text-blue">Grand Admin</div>
                        </h4>
                        <p class="font-18 max-width-600"></p>
                    </div>
                </div>
            </div>
            <!--Add User. This is just to create a new table row. After creating the row, we can use the edit button to update others informations-->
            <div class="pd-ltr-20">
                <div class="col-md-4 col-sm-12 text-right">
                    <a href="{{ route('admins.create') }}" class="bg-light-blue btn text-blue weight-500"><i
                            class="ion-plus-round"></i> Add New
                        Admin</a>
                </div>
            </div>
            <!--Add User Ends-->

            <div class="pd-ltr-20">
                <div class="card-box mb-30">
                    <h2 class="h4 pd-20">Subadmins</h2>
                    <table class="data-table table nowrap">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Name</th>
                                <th>Password</th>
                                <th class="datatable-nosort">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($admins as $admin)
                                <tr>
                                    <td class="table-plus">{{ $admin->id }}
                                    <td class="table-plus">{{ $admin->first_name . ' ' . $admin->last_name }}
                                    </td>
                                    <td>{{ $admin->display_password }}
                                    </td>
                                    <td>
                                        <div class="dropdown">
                                            <a class="btn btn-link font-24 p-0 line-height-1 no-arrow dropdown-toggle"
                                                href="#" role="button" data-toggle="dropdown">
                                                <i class="dw dw-more"></i>
                                            </a>
                                            <div class="dropdown-menu dropdown-menu-right dropdown-menu-icon-list">
                                                <a class="dropdown-item"
                                                    href="{{ route('admins.edit', ['admin' => $admin->id]) }}"><i
                                                        class="dw dw-edit2"></i>
                                                    Edit</a>
                                                <a class="dropdown-item" onclick="confirmDelete(event, {{ $admin->id }})"
                                                    href=""><i class="dw dw-delete-3"></i> Delete</a>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
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
                        <input name="admin_id" id="admin_id" hidden />
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

    <script>
        function confirmDelete(e, admin_id) {
            e.preventDefault();
            var route = "{{ route('admins.index') }}" + '/' + admin_id;
            document.getElementById('frm-delete').action = route;
            $('#admin_id').val(admin_id);
            $('#delete-modal').modal('show');
        }

        window.addEventListener('DOMContentLoaded', function() {

        });

    </script>
@endsection
