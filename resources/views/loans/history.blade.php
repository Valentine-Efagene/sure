@extends('layouts.dashboard')

@section('content')
    <!--Statement-->
    <!--Active Loans-->
    <div class="main-container">
        <div class="pd-ltr-20">

            <div class="card-box mb-30">
                <h2 class="h4 pd-20">Loan History</h2>
                <table class="data-table table nowrap">
                    <thead>
                        <tr>
                            <th class="table-plus datatable-nosort">Application Date</th>
                            <th>Decription/Reason for Loan</th>
                            <th>Loan Reference ID</th>
                            <th>Payment Method</th>
                            <th>Expiration of Loan</th>
                            <th>Status</th>
                        </tr>
                    </thead>
                    <tbody>
                        @isset($loans)
                            @foreach ($loans as $loan)
                                <tr>
                                    <td class="table-plus">
                                        {{ $loan->created_at }}
                                    </td>
                                    <td>
                                        {{ $loan->purpose }}
                                    </td>
                                    <td>{{ $loan->id }}</td>
                                    <td>{{ $loan->payment_method }}</td>
                                    <td>8989585</td>
                                    <td>Paid/Active/Declined</td>
                                    <td>
                                        <div class="dropdown">
                                            <a class="btn btn-link font-24 p-0 line-height-1 no-arrow dropdown-toggle" href="#"
                                                role="button" data-toggle="dropdown">
                                                <i class="dw dw-more"></i>
                                            </a>
                                            <div class="dropdown-menu dropdown-menu-right dropdown-menu-icon-list">
                                                <a class="dropdown-item" href="#"><i class="dw dw-eye"></i> View Details</a>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                            @endforeach
                        @endisset
                    </tbody>
                </table>
            </div>
            <!--End of Active Loans-->
        </div>
    </div>
@endsection
