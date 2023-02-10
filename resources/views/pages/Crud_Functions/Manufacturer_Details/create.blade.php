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
              <a href="{{route('Manufacturer_Details.list')}}"><button class="btn btn-outline-success-2x" type="button"
                  style="float: right;"><i class="fa-solid fa-list"></i> Manufacturer List </button></a>
            </span>
          </div>
          <div class="card-header pb-0">
            <div class="card-body">
              <form action="{{route('Manufacturer_Details.store')}}" method="POST" enctype="multipart/form-data">
                @csrf
                {{method_field('PUT')}}
                <div class="row g-3">

                  <!-- Manufacturer Name -->
                  <div class="col-md-12 mb-3">
                    <label class="form-label ">Manufacturer Name</label>
                    <input class="form-control" name="manufacturer_name"
                      value="{{ (old('manufacturer_name')?old('manufacturer_name'):'') }}" type="text"
                      autocomplete="off">
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
                      value="{{ (old('agent_national_id_card')?old('agent_national_id_card'):'') }}" autocomplete="off">
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
                      value="{{ (old('agent_mobile_number')?old('agent_mobile_number'):'') }}" type="text"
                      autocomplete="off">
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
                    <input class="form-control" name="debit_balance"
                      value="{{ (old('debit_balance')?old('debit_balance'):'') }}" type="text" autocomplete="off">
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
                <button class="btn btn-primary btn-lg" type="submit">Submit Manufacturer Information</button>
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