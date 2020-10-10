@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('My Accounts') }}</div>

                <div class="card-body">
                    @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                    @endif
                    <!-- {{ __('You are logged in!') }}<br /><br /> -->
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

                    <form action="/providers">
                        <input type="submit" value="Go to Providers" />
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection