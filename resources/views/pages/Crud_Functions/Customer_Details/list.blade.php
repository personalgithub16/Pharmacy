
@extends('layouts.mother_layout')
@section('content')



<link rel="stylesheet" href="http://cdn.bootcss.com/toastr.js/latest/css/toastr.min.css">
<style>
  td.dynamic_value{
    text-align: center;
  }
  th.attribute_names{
    text-align: center;
  }
</style>


<!-- Page Sidebar Ends-->
<div class="page-body">
  <!-- Container-fluid starts-->
  <div class="container-fluid">
    <div class="row">
      <div class="col-sm-12">
        <div class="card">
          <div class="card-header pb-0">
            <h4>Customers List </h4>
            <span>
              <a href="{{route('Customer_Details.create')}}"><button class="btn btn-outline-success-2x" type="button" style="float: right;"><i class="fa-solid fa-plus"></i>  Add New Customer</button></a>
            </span>
          </div>
          <div class="card-body">
            <div class="dt-ext table-responsive">
              <table class="display" id="export-button" >
                <thead>
                  <tr>
                    <th class="attribute_names">Id</th>
                    <th class="attribute_names">Name</th>
                    <th class="attribute_names">Email</th>
                    <th class="attribute_names">Phone Number</th>
                    <th class="attribute_names">NID Card</th>
                    <th class="attribute_names">Total Debit</th>
                    <th class="attribute_names">Action</th>
                  </tr>
                </thead>
                <tbody>
                  @foreach ($Customer_Details as $key=>$CustomerInfo)
                  <tr>
                    <td class="dynamic_value">{{$key+1}}</td>
                    <td class="dynamic_value">{{$CustomerInfo->customer_name}}</td>
                    <td class="dynamic_value">{{$CustomerInfo->customer_email_address}}</td>
                    <td class="dynamic_value">{{$CustomerInfo->phone_number}}</td>
                    <td class="dynamic_value">{{$CustomerInfo->national_id_card}}</td>
                    <td class="dynamic_value">{{$CustomerInfo->total_debit}}</td>
                    <td>
                      <ul class="">
                       <div class="action_button" style="display:flex; justify-content:center">
                        <a href="{{route('Customer_Details.edit' , $CustomerInfo->id)}}" class="custom_image"  data-bs-original-title="Edit"style="padding: 4px;"><img style="height:30px; width:auto; text-align:center" src="{{asset('assets/images/edit.png')}}" alt=""></a>
                        <a href="{{route('Customer_Details.destroy', $CustomerInfo->id)}}" class="custom_image" data-bs-original-title="Delete" onclick="return confirm('Are you sure?')"   style="padding: 4px;"><img style="height:30px; width:auto;" src="{{asset('assets/images/delete.png')}}"></a>
                        <a href="{{route('Customer_Details.preview' , $CustomerInfo->id)}}" class="custom_image" data-bs-original-title="Show All" style="padding: 4px;"><img style="height:30px; width:auto;" src="{{asset('assets/images/file.png')}}" alt=""></a>
                       </div>
                    </td>
                  </tr>
                  @endforeach        
                </tbody>
                <tfoot>
                  <tr>
                    <th class="attribute_names">Total Balance</th>
                    {{-- <th class="attribute_names">{{ number_format($total_balance->total_debit, 2) }}</th> --}}
                  </tr>
                </tfoot>
              </table>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- Container-fluid Ends-->
</div>

<script src="http://cdn.bootcss.com/jquery/2.2.4/jquery.min.js"></script>
<script src="http://cdn.bootcss.com/toastr.js/latest/js/toastr.min.js"></script>
{!! Toastr::message() !!}


@endsection
     