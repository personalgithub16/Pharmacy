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
                        <a href="{{route('Manufacturer_Details.list')}}"><button class="btn btn-outline-success-2x" type="button" style="float: right;"><i class="fa-solid fa-list"></i>    Manufacturer List   </button></a>
                      </span>
                    <span style="font-weight:bold; color:red; font-size:18px;">Manufacturer Details</span>
                </div>
              </div>
            </div>
          </div>
      <div class="row">
        <div class="col-sm-12">
          <div class="card">
            <div class="card-header pb-0">
              <h2 style="font-weight:bold;">Manufacturer Name</h2>
            </div>
            <div class="card-body">
              <p class="mb-0 badge badge-secondary" style="font-size:18px;">{{$Manufacturer_Details->manufacturer_name}}</p>
            </div>
          </div>
        </div>
      </div>


      <div class="row">
        <div class="col-sm-12">
          <div class="card">
            <div class="card-header pb-0">
              <h2 style="font-weight:bold;">Agent NID</h2>
            </div>
            <div class="card-body">
                <p class="mb-0 badge badge-secondary" style="font-size:18px;">{{$Manufacturer_Details->agent_national_id_card}}</p>
              </div>
          </div>
        </div>
      </div>

      <div class="row">
        <div class="col-sm-12">
          <div class="card">
            <div class="card-header pb-0">
              <h2 style="font-weight:bold;">Agent Mobile Number</h2>
            </div>
            <div class="card-body">
              <p class="mb-0 badge badge-secondary" style="font-size:18px;">{{$Manufacturer_Details->agent_mobile_number}}</p>
            </div>
          </div>
        </div>
      </div>

      <div class="row">
        <div class="col-sm-12">
          <div class="card">
            <div class="card-header pb-0">
                <h2 style="font-weight:bold;">Debit Balance</h2>
              </div>
              <div class="card-body">
                <p class="mb-0 badge badge-secondary" style="font-size:18px;">{{$Manufacturer_Details->debit_balance}}</p>
              </div>

          </div>
        </div>
      </div>

      <div class="row">
        <div class="col-sm-12">
          <div class="card">
            <div class="card-header pb-0">
                <h2 style="font-weight:bold;">Total Debit</h2>
              </div>
              <div class="card-body">
                <p class="mb-0 badge badge-secondary" style="font-size:18px;">{{number_format((float)$total_balance , 2, '.', '');}}</p>
              </div>
          </div>
        </div>
      </div>

    </div>
    <!-- Container-fluid Ends-->
  </div>
@endsection