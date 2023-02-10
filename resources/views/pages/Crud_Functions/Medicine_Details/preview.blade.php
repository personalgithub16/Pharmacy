@extends('layouts.mother_layout')
@section('content')
<div class="page-body">
    <!-- Container-fluid starts-->
    <div class="container-fluid">

        <div class="row">
            <div class="col-sm-12">
              <div class="card">
                <div class="card-header">
                    <span>
                        <a href="{{route('Customer_Details.list')}}"><button class="btn btn-outline-success-2x" type="button" style="float: right;"><i class="fa-solid fa-list"></i>       Customer List    </button></a>
                      </span>
                    <span style="font-weight:bold; color:red; font-size:18px;">Customer Details</span>
                </div>
              </div>
            </div>
          </div>

      <div class="row">
        <div class="col-sm-12">
          <div class="card">
            <div class="card-header pb-0">
              <h2 style="font-weight:bold;">Customer Name</h2>
            </div>
            <div class="card-body">
              <p class="mb-0 badge badge-secondary" style="font-size:18px;">{{$Customer_Details->customer_name}}</p>
            </div>
          </div>
        </div>
      </div>


      <div class="row">
        <div class="col-sm-12">
          <div class="card">
            <div class="card-header pb-0">
              <h2 style="font-weight:bold;">Customer Email Address</h2>
            </div>
            <div class="card-body">
                <p class="mb-0 badge badge-secondary" style="font-size:18px;">{{$Customer_Details->customer_email_address}}</p>
              </div>
          </div>
        </div>
      </div>


      <div class="row">
        <div class="col-sm-12">
          <div class="card">
            <div class="card-header pb-0">
              <h2 style="font-weight:bold;">Customer Phone Number</h2>
            </div>
            <div class="card-body">
              <p class="mb-0 badge badge-secondary" style="font-size:18px;">{{$Customer_Details->phone_number}}</p>
            </div>
          </div>
        </div>
      </div>


      <div class="row">
        <div class="col-sm-12">
          <div class="card">
            <div class="card-header pb-0">
                <h2 style="font-weight:bold;">Customer National ID Card</h2>
              </div>
              <div class="card-body">
                <p class="mb-0 badge badge-secondary" style="font-size:18px;">{{$Customer_Details->national_id_card}}</p>
              </div>

          </div>
        </div>
      </div>


      <div class="row">
        <div class="col-sm-12">
          <div class="card">
            <div class="card-header pb-0">
                <h2 style="font-weight:bold;">Customer Birth Certificate</h2>
              </div>
              <div class="card-body">
                <p class="mb-0 badge badge-secondary" style="font-size:18px;">{{$Customer_Details->birth_certificate}}</p>
              </div>
          </div>
        </div>
      </div>


      <div class="row">
        <div class="col-sm-12">
          <div class="card">
            <div class="card-header pb-0">
                <h2 style="font-weight:bold;">Customer Address</h2>
              </div>
              <div class="card-body">
                <p class="mb-0 badge badge-secondary" style="font-size:18px;">{{$Customer_Details->address}}</p>
              </div>
          </div>
        </div>
      </div>


      <div class="row">
        <div class="col-sm-12">
          <div class="card">
            <div class="card-header pb-0">
                <h2 style="font-weight:bold;">Customer City</h2>
              </div>
              <div class="card-body">
                <p class="mb-0 badge badge-secondary" style="font-size:18px;">{{$Customer_Details->city}}</p>
              </div>
          </div>
        </div>
      </div>


      <div class="row">
        <div class="col-sm-12">
          <div class="card">
            <div class="card-header pb-0">
                <h2 style="font-weight:bold;">Customer Country</h2>
              </div>
              <div class="card-body">
                <p class="mb-0 badge badge-secondary" style="font-size:18px;">{{$Customer_Details->country}}</p>
              </div>
          </div>
        </div>
      </div>


      <div class="row">
        <div class="col-sm-12">
          <div class="card">
            <div class="card-header pb-0">
                <h2 style="font-weight:bold;">Customer Mobile Number</h2>
              </div>
              <div class="card-body">
                <p class="mb-0 badge badge-secondary" style="font-size:18px;">{{$Customer_Details->mobile_number}}</p>
              </div>
          </div>
        </div>
      </div>
      

      <div class="row">
        <div class="col-sm-12">
          <div class="card">
            <div class="card-header pb-0">
                <h2 style="font-weight:bold;">Customer's Country ZipCode</h2>
              </div>
              <div class="card-body">
                <p class="mb-0 badge badge-secondary" style="font-size:18px;">{{$Customer_Details->zipcode}}</p>
              </div>
          </div>
        </div>
      </div>


      <div class="row">
        <div class="col-sm-12">
          <div class="card">
            <div class="card-header pb-0">
                <h2 style="font-weight:bold;">Customer's Debit Balance</h2>
              </div>
              <div class="card-body">
                <p class="mb-0 badge badge-secondary" style="font-size:18px;">{{$Customer_Details->debit_balance}}</p>
              </div>
          </div>
        </div>
      </div>

    </div>
    <!-- Container-fluid Ends-->
  </div>
@endsection