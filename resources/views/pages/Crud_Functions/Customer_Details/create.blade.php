@extends('layouts.mother_layout')
@section('content')

<div class="page-body">
  <!-- Container-fluid starts-->
  <div class="container-fluid">
    <div class="row">
      <div class="col-sm-12">
        <div class="card">
          <div class="card-header pb-0">
            <span>
              <a href="{{route('Customer_Details.list')}}"><button class="btn btn-outline-success-2x" type="button" style="float: right;"><i class="fa-solid fa-list"></i>       Customer List    </button></a>
            </span>
          </div>
          <div class="card-header pb-0">
            <div class="card-body">
              <form action="{{route('Customer_Details.store')}}" method="POST" enctype="multipart/form-data">
                @csrf
                {{method_field('PUT')}}
                <div class="row g-3">

                  <!-- Customer Name Form Input Start -->
                  <div class="col-md-12 mb-3">
                    <label class="form-label ">Customer Name</label>
                    <input class="form-control" name="customer_name" value="{{ (old('customer_name')?old('customer_name'):'') }}" type="text" autocomplete="off">
                  </div>
                  <!-- Customer Name Form Input End -->

                  <!-- Validation Start of Customer Name -->
                  @if($errors->first('customer_name'))
                  <div class="alert alert-dark dark alert-dismissible fade show" role="alert">
                    <strong>{{$errors->first('customer_name')}}</strong>
                    <button class="btn-close" type="button" data-bs-dismiss="alert" aria-label="Close"></button>
                  </div>
                  @endif
                  <!-- Validation End of Customer Name -->
                  
                  <!-- Email Address Form Input Start -->
                  <div class="col-md-12 mb-3">
                    <label class="form-label">Email Address</label>
                    <input class="form-control" name="customer_email_address" type="email" value="{{ (old('customer_email_address')?old('customer_email_address'):'') }}" autocomplete="off">
                  </div>
                  <!-- Email Address Form Input End -->

                  <!-- Validation Start of Customer's Email Address -->
                  @if($errors->first('customer_email_address'))
                  <div class="alert alert-dark dark alert-dismissible fade show" role="alert">
                    <strong>{{$errors->first('customer_email_address')}}</strong>
                    <button class="btn-close" type="button" data-bs-dismiss="alert" aria-label="Close"></button>
                  </div>
                  @endif
                  <!-- Validation End of Customer's Email Address -->

                  <!-- Phone Number Form Input Start -->
                  <div class="col-md-12 mb-3">
                    <label class="form-label">Phone Number</label>
                    <input class="form-control" name="phone_number" value="{{ (old('phone_number')?old('phone_number'):'') }}" type="text" autocomplete="off">
                  </div>
                  <!-- Phone Number Form Input End -->
                  
                  <!-- Validation Start Of Customer's Phone Number -->
                  @if($errors->first('phone_number'))
                  <div class="alert alert-dark dark alert-dismissible fade show" role="alert">
                    <strong>{{$errors->first('phone_number')}}</strong>
                    <button class="btn-close" type="button" data-bs-dismiss="alert" aria-label="Close"></button>
                  </div>
                  @endif
                  <!-- Validation End of Customer's Phone Number -->

                  <!-- NID Card Form Input Start -->
                  <div class="col-md-12 mb-3">
                    <label class="form-label">NID Card Number</label>
                    <input class="form-control" name="national_id_card" value="{{ (old('national_id_card')?old('national_id_card'):'') }}" type="text" autocomplete="off">
                  </div>
                  <!-- NID Card Form Input End -->


                  <!-- Validation Start of Customer's NID Card -->
                  @if($errors->first('national_id_card'))
                  <div class="alert alert-dark dark alert-dismissible fade show" role="alert">
                    <strong>{{$errors->first('national_id_card')}}</strong>
                    <button class="btn-close" type="button" data-bs-dismiss="alert" aria-label="Close"></button>
                  </div>
                  @endif
                  <!-- Validation End of Customer's NID Card -->

                  <!-- Birth Certificate Form Input Start -->
                  <div class="col-md-12 mb-3">
                    <label class="form-label">Birth Certificate</label>
                    <input class="form-control" name="birth_certificate" value="{{ (old('birth_certificate')?old('birth_certificate'):'') }}" type="text" autocomplete="off">
                  </div>
                  <!-- Birth Certificate Form Input End -->


                  <!-- Validation Start of Birth Certificate -->
                  @if($errors->first('birth_certificate'))
                  <div class="alert alert-dark dark alert-dismissible fade show" role="alert">
                    <strong>{{$errors->first('birth_certificate')}}</strong>
                    <button class="btn-close" type="button" data-bs-dismiss="alert" aria-label="Close"></button>
                  </div>
                  @endif
                  <!-- Validation End of Birth Certificate-->


                  <!--  Address Input Start -->
                  <div class="col-md-12 mb-3">
                    <label class="form-label">Address</label>
                    <input class="form-control" name="address" value="{{ (old('address')?old('address'):'') }}" type="text" autocomplete="off">
                  </div>
                  <!--  Address Input End -->


                  <!-- Validation Start of Customer's Address -->
                  @if($errors->first('address'))
                  <div class="alert alert-dark dark alert-dismissible fade show" role="alert">
                    <strong>{{$errors->first('address')}}</strong>
                    <button class="btn-close" type="button" data-bs-dismiss="alert" aria-label="Close"></button>
                  </div>
                  @endif
                  <!-- Validation End of Customer's Address -->

                  <!--  City Input Start -->
                  <div class="col-md-12 mb-3">
                    <label class="form-label">City</label>
                    <input class="form-control" name="city" value="{{ (old('city')?old('city'):'') }}" type="text" autocomplete="off">
                  </div>
                  <!--  City Input End -->


                  <!-- Validation Start of City -->
                  @if($errors->first('city'))
                  <div class="alert alert-dark dark alert-dismissible fade show" role="alert">
                    <strong>{{$errors->first('city')}}</strong>
                    <button class="btn-close" type="button" data-bs-dismiss="alert" aria-label="Close"></button>
                  </div>
                  @endif
                  <!-- Validation End -->

                  <!--  Country Input Start -->
                  <div class="col-md-12 mb-3">
                    <label class="form-label">Country</label>
                    <input class="form-control" name="country" value="{{ (old('country')?old('country'):'') }}" type="text" autocomplete="off">
                  </div>
                  <!--  Country Input End -->


                  <!-- Validation Start -->
                  @if($errors->first('country'))
                  <div class="alert alert-dark dark alert-dismissible fade show" role="alert">
                    <strong>{{$errors->first('country')}}</strong>
                    <button class="btn-close" type="button" data-bs-dismiss="alert" aria-label="Close"></button>
                  </div>
                  @endif
                  <!-- Validation End -->


                  <!--  Mobile Input Start -->
                  <div class="col-md-12 mb-3">
                    <label class="form-label">Mobile Number</label>
                    <input class="form-control" name="mobile_number" value="{{ (old('mobile_number')?old('mobile_number'):'') }}" type="text" autocomplete="off">
                  </div>
                  <!--  Mobile Input End -->

                  
                  <!-- Validation Start -->
                  @if($errors->first('mobile_number'))
                  <div class="alert alert-dark dark alert-dismissible fade show" role="alert">
                    <strong>{{$errors->first('mobile_number')}}</strong>
                    <button class="btn-close" type="button" data-bs-dismiss="alert" aria-label="Close"></button>
                  </div>
                  @endif
                  <!-- Validation End -->

                  <!--  Zip Code Input Start -->
                  <div class="col-md-12 mb-3">
                    <label class="form-label">Zip Code</label>
                    <input class="form-control" name="zipcode" value="{{ (old('zipcode')?old('zipcode'):'') }}" type="text" autocomplete="off">
                  </div>
                  <!--  Zip Code Input End -->


                  <!-- Validation Start -->
                  @if($errors->first('zipcode'))
                  <div class="alert alert-dark dark alert-dismissible fade show" role="alert">
                    <strong>{{$errors->first('zipcode')}}</strong>
                    <button class="btn-close" type="button" data-bs-dismiss="alert" aria-label="Close"></button>
                  </div>
                  @endif
                  <!-- Validation End -->

                   <!--  Debit Code Input Start -->
                   <div class="col-md-12 mb-3">
                    <label class="form-label">Debit</label>
                    <input class="form-control" name="debit_balance" value="{{ (old('debit_balance')?old('debit_balance'):'') }}" type="text" autocomplete="off">
                  </div>
                  <!--  Zip Code Input End -->


                  <!-- Validation Start -->
                  @if($errors->first('debit_balance'))
                  <div class="alert alert-dark dark alert-dismissible fade show" role="alert">
                    <strong>{{$errors->first('debit_balance')}}</strong>
                    <button class="btn-close" type="button" data-bs-dismiss="alert" aria-label="Close"></button>
                  </div>
                  @endif
                  <!-- Validation End -->


                </div>
                <button class="btn btn-primary btn-lg" type="submit">Submit Customer Information</button>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Container-fluid Ends-->
  </div>
  <!-- footer start-->

  @endsection