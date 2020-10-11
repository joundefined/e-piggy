<!-- extend from tempate -->
@extends('layouts.app')

@section('content')
<h1>Make a Payment</h1>
<div class="container">
<div class="row">
	<div class="col col-lg-2">
    <label for="account">Account</label>
	</div>
	<div class="col">
    <select id="accounts" name="accounts">
    <option value="Current Account #1">Current Account #1</option>
    <option value="Savings Account #1">Savings Account #1</option>
    <option value="Savings Account #2">Savings Account #2</option>
    <option value="Secret Account">Secret Account</option>
  </select>
 </div>
  </div>
  <div class="row">
  <div class="col col-lg-2">
    <label for="beneficiary">Beneficiary</label>
	</div>
	<div class="col">
    <select id="beneficiaries" name="beneficx">
    <option value="Benef #1">Benef #1</option>
    <option value="Benef #2">Benef #2</option>
    <option value="Benef #3">Benef #3</option>
    <option value="Treasury">Treasury</option>
  </select>
  </div>
  </div>
  <div class="row">
  <div class="col col-lg-2">
  <label for="amount">Amount</label>
  </div>
  <div class="col">
  <input type="text" name="amount">
 </div>
  </div>
  <div class="row">
  <div class="col col-lg-2">
  <label for="msg">Message</label>
  </div>
  <div class="col">
  <textarea name ="message" name="message" cols="40" rows="8">Observations</textarea>
</div>
  </div>
  </div>
  <div class="row">
  <div class="col col-lg-2">
  &nbsp;
  </div>
  <div class="col col-lg-2">
  <button type="submit" class="btn btn-primary">Submit</button>
  </div>
  </div>
@endsection