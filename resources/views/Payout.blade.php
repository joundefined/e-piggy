<!-- extend from tempate -->
@extends('layouts.app')

@section('content')
<h1>Make a Payment</h1>
<div class="form-group">
    <label for="account">Account</label>
    <select id="accounts" name="accounts">
    <option value="Current Account #1">Current Account #1</option>
    <option value="Savings Account #1">Savings Account #1</option>
    <option value="Savings Account #2">Savings Account #2</option>
    <option value="Secret Account">Secret Account</option>
  </select>
  </div>
  <div class="form-group">
    <label for="beneficiary">Beneficiary</label>
    <select id="beneficiaries" name="beneficx">
    <option value="Benef #1">Benef #1</option>
    <option value="Benef #2">Benef #2</option>
    <option value="Benef #3">Benef #3</option>
    <option value="Treasury">Treasury</option>
  </select>
  </div>
  <div class="form-group">
  <label for="amount">Amount</label>
  <input type="text" name="amount">

  </div>
  <div class="form-group">
  <label for="msg">Message</label>
  <textarea name ="message" name="message" cols="40" rows="8">Observations</textarea>

  </div>
  
  <button type="submit" class="btn btn-primary">Submit</button>
@endsection