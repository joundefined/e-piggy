<!-- extend from tempate -->
@extends('layouts.app')

@section('content')
<h1>Open Banking Providers</h1>

<table class="table">
    <thead>
        <tr>
            <th scope="col">Logo</th>
            <th scope="col">BIC</th>
            <th scope="col">Provider</th>
            <th scope="col">Consent Model</th>
            <th scope="col">Health</th>
            <th scope="col">More Information</th>
        </tr>
    </thead>
    <tbody>
        @foreach($providers as $provider)
        <tr>
            <td>{{ $provider->logo }}</td>
            <td>{{ $provider->bic }}</td>
            <td>{{ $provider->provider }}</td>
            <td>{{ $provider->consent }}</td>
            <td>{{ $provider->health }}</td>
            <td>{{ $provider->info }}</td>
        </tr>
        @endforeach
    </tbody>
</table>
@endsection