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
                                <th scope="col">Bank</th>
                                <th scope="col">Account Type</th>
                                <th scope="col">IBAN</th>
                                <th scope="col">Currency</th>
                                <th scope="col">Balance</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($accounts as $account)
                            <tr>
                                <td>{{ $account->bank }}</td>
                                <td>{{ $account->accounttype }}</td>
                                <td>{{ $account->iban }}</td>
                                <td>{{ $account->currency }}</td>
                                <td>{{ $account->balance }}</td>
                            </tr>
                            @endforeach
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