@extends('layouts.dashboard')

@section('content')
    <!--Statement-->
    <div class="main-container">
        <div class="pd-ltr-20">

            <div class="card-box mb-30">
                <h2 class="h4 pd-20">Transaction State and History</h2>
                <table class="data-table table nowrap">
                    <thead>
                        <tr>
                            <th>Decription</th>
                            <th>Transaction Reference ID</th>
                            <th>Type</th>
                            <th>Amount</th>
                            <!--th>Transaction Status</th-->
                        </tr>
                    </thead>
                    <tbody>
                        @isset($transfers)
                            @if ($transfers)
                                @foreach ($transfers as $transfer)
                                    <tr>
                                        <td class="table-plus">{{ $transfer->purpose }}
                                        </td>
                                        <td>{{ $transfer->id }}
                                        </td>
                                        <td>{{ $transfer->type }}</td>
                                        <td>${{ $transfer->amount }}</td>
                                        <!--td>{{ $transfer->status }}</td-->
                                    </tr>
                                @endforeach
                            @endif
                        @endisset
                    </tbody>
                </table>
            </div>
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
            <div class="modal fade" id="success-modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle"
                aria-modal="true" role="dialog">
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
    <!--End of Statement-->
@endsection
