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
                            <!--th>Expiration of Loan</th-->
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
                                    <!--td>N/A</td-->
                                    <td>{{ $loan->status }}</td>
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
                {{ $loans->links() }}
            </div>
            <!--End of Active Loans-->
            @isset($success)
                @if ($success)
                    <!-- success Popup html Start -->
                    <div class="modal fade" id="success-modal" tabindex="-1" role="dialog"
                        aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered" role="document">
                            <div class="modal-content">
                                <div class="modal-body text-center font-18">
                                    <h3 class="mb-20">Your Loan Application has been Submitted</h3>
                                    <div class="mb-30 text-center"><img src="{{ asset('vendors/images/success.png') }}">
                                    </div>
                                    Processing May take up to 30 minutes to 2 hours. Please Check your Email Address for
                                    more
                                    information on Approval of loan.
                                </div>
                                <div class="modal-footer justify-content-center">
                                    <button type="button" class="btn btn-primary" data-dismiss="modal">Done</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- success Popup html End -->
                    <script>
                        window.addEventListener('DOMContentLoaded', function() {
                            $('#success-modal').modal('show');

                        });

                    </script>
                @endif
            @endisset
        </div>
    </div>
@endsection
