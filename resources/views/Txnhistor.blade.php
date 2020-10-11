<!-- extend from tempate -->
@extends('layouts.app')

@section('content')
<h1>Transaction History</h1>

<table class="table">
    <thead>
        <tr>
            <th scope="col">Date</th>
            <th scope="col">Transaction Type</th>
            <th scope="col">Beneficiary</th>
            <th scope="col">Currency</th>
            <th scope="col">Amount</th>
        </tr>
    </thead>
    <tbody>
        @foreach($txnhistors as $txnhistor)
        <tr>
            <td>{{ $txnhistor->txndate }}</td>
            <td>{{ $txnhistor->txntype }}</td>
            <td>{{ $txnhistor->beneficiary }}</td>
            <td>{{ $txnhistor->currency }}</td>
            <td>{{ $txnhistor->txnamount }}</td>
        </tr>
        @endforeach
    </tbody>
</table>
@endsection