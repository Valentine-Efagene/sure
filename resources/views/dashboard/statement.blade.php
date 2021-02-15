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
                            <th>Credit</th>
                            <th>Debit</th>
                            <th>Transaction Status</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td class="table-plus">Transfer to other Banks
                            </td>
                            <td>124343434
                            </td>
                            <td>3454541</td>
                            <td></td>
                            <td>Successful/Fail</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <!--End of Statement-->
@endsection
