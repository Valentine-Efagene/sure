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
                                <th>Admin Admin</th>
                                <th>Password</th>
                                <th class="datatable-nosort">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($admins as $admin)
                                <tr>
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
                                                    href="{{ route('admins.edit', ['admin' => '1']) }}"><i
                                                        class="dw dw-edit2"></i>
                                                    Edit</a>
                                                <a class="dropdown-item"
                                                    href="{{ route('admins.destroy', ['admin' => $admin->id]) }}"><i
                                                        class="dw dw-delete-3"></i> Delete</a>
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
@endsection
