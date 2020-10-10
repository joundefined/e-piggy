<!-- extend from tempate -->
@extends('layouts.app')

@section('style')
<link href="{{ asset('sass/piggy.css') }}" rel="stylesheet">
@endsection

@section('content')

<body>
    <h4>Accounts Table</h4>
    <table class="table">
        <thead>
            <tr>
                <th scope="col">Bank Account</th>
                <th scope="col">Account Balance</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>Bank Account A</td>
                <td>1,000,000</td>
            </tr>
            <tr>
                <td>Bank Account B</td>
                <td>2,000</td>
            </tr>
            <tr>
                <td>Bank Account C</td>
                <td>71,000</td>
            </tr>
        </tbody>
    </table>
</body>

@endsection