@extends('layouts.mother_layout')
@section('content')

<div class="page-body">
  <div class="container-fluid">
    <div class="page-title">
      <div class="row">
        <div class="col-sm-6">
          <h3>Customer Create</h3>
        </div>
      </div>
    </div>
  </div>

  <!-- Container-fluid starts-->
  <div class="container-fluid">
    <div class="row">
      <div class="col-sm-12">
        <div class="card">
          <div class="card-header pb-0">
            <div class="card-body">
              <form action="{{route('Manufacturer_Details.update',$Manufacturer_Details->id)}}" method="POST"
                enctype="multipart/form-data">
                @csrf
                <div class="row g-3">

                  <!-- Manufacturer Name -->
                  <div class="col-md-12 mb-3">
                    <label class="form-label ">Manufacturer Name</label>
                    <input class="form-control" name="manufacturer_name"
                      value="{{ $Manufacturer_Details->manufacturer_name }}" type="text" autocomplete="off">
                  </div>
                  <!-- Manufacturer Name -->

                  <!-- Validation Start -->
                  @if($errors->first('manufacturer_name'))
                  <div class="alert alert-dark dark alert-dismissible fade show" role="alert">
                    <strong>{{$errors->first('manufacturer_name')}}</strong>
                    <button class="btn-close" type="button" data-bs-dismiss="alert" aria-label="Close"></button>
                  </div>
                  @endif
                  <!-- Validation End -->

                  <!-- Form Input Start -->
                  <div class="col-md-12 mb-3">
                    <label class="form-label">Agent's National ID Card Number</label>
                    <input class="form-control" name="agent_national_id_card" type="text"
                      value="{{ $Manufacturer_Details->agent_national_id_card }}" autocomplete="off">
                  </div>
                  <!-- Form Input End -->

                  <!-- Validation Start  -->
                  @if($errors->first('agent_national_id_card'))
                  <div class="alert alert-dark dark alert-dismissible fade show" role="alert">
                    <strong>{{$errors->first('agent_national_id_card')}}</strong>
                    <button class="btn-close" type="button" data-bs-dismiss="alert" aria-label="Close"></button>
                  </div>
                  @endif
                  <!-- Validation End -->

                  <!-- Form Input Start -->
                  <div class="col-md-12 mb-3">
                    <label class="form-label">Agent Mobile Number</label>
                    <input class="form-control" name="agent_mobile_number"
                      value="{{ $Manufacturer_Details->agent_mobile_number }}" type="text" autocomplete="off">
                  </div>
                  <!-- Form Input End -->

                  <!-- Validation Start -->
                  @if($errors->first('agent_mobile_number'))
                  <div class="alert alert-dark dark alert-dismissible fade show" role="alert">
                    <strong>{{$errors->first('agent_mobile_number')}}</strong>
                    <button class="btn-close" type="button" data-bs-dismiss="alert" aria-label="Close"></button>
                  </div>
                  @endif
                  <!-- Validation End -->

                  <!-- Form Input Start -->
                  <div class="col-md-12 mb-3">
                    <label class="form-label">Debit Balance</label>
                    <input class="form-control" name="debit_balance" value="{{ $Manufacturer_Details->debit_balance }}"
                      type="text" autocomplete="off">
                  </div>
                  <!-- Form Input End -->

                  <!-- Validation Start -->
                  @if($errors->first('debit_balance'))
                  <div class="alert alert-dark dark alert-dismissible fade show" role="alert">
                    <strong>{{$errors->first('debit_balance')}}</strong>
                    <button class="btn-close" type="button" data-bs-dismiss="alert" aria-label="Close"></button>
                  </div>
                  @endif
                  <!-- Validation End -->
                </div>
                <button class="btn btn-success btn-lg" type="submit">Update Manufacturer Details</button>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Container-fluid Ends-->
  </div>
  <!-- Container-fluid ends-->
</div>

  @endsection