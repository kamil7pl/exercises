@extends('layouts.app')
@section('content')
<h1 style="text-align: center">Your order</h1>
<div class="container">
    <div class="row">
      <div class="col-12 col-sm-4 border">
        <p style="text-align: center"><b>Name</b></p>
      </div>
      <div class="col-12 col-sm-4 border">
       <p style="text-align: center"><b>Price</b></p>
      </div>
      <div class="col-12 col-sm-4 border">
        <p style="text-align: center"><b>Quantity</b></p>
      </div>
    </div>
    <div class="row">
        <div class="col-12 col-sm-4 border">
            <p>radio</p>
        </div>
        <div class="col-12 col-sm-4 border">
            <p>200</p>
        </div>
        <div class="col-12 col-sm-4 border">
            <p>30</p>
        </div>
      </div>
  </div>
@endsection