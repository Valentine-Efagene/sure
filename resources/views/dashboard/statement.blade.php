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
    <!--End of Statement-->
@endsection
