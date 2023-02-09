
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
            <h4>Manufacturer List </h4>
            <span>
              <a href="{{route('Manufacturer_Details.create')}}"><button class="btn btn-outline-success-2x" type="button" style="float: right;"><i class="fa-solid fa-plus"></i>  Add New Manufacturer</button></a>
            </span>
          </div>
          <div class="card-body">
            <div class="dt-ext table-responsive">
              <table class="display" id="export-button" >
                <thead>
                  <tr>
                    <th class="attribute_names">Id</th>
                    <th class="attribute_names">Name</th>
                    <th class="attribute_names">Phone Number</th>
                    <th class="attribute_names">NID Card</th>
                    <th class="attribute_names">Debit Balance</th>
                    <th class="attribute_names">Action</th>
                  </tr>
                </thead>
                <tbody>
                  @foreach ($Manufacturer_Details as $key=>$info)
                  <tr>
                    <td class="dynamic_value">{{$key+1}}</td>
                    <td class="dynamic_value">{{$info->manufacturer_name}}</td>
                    <td class="dynamic_value">{{$info->agent_national_id_card}}</td>
                    <td class="dynamic_value">{{$info->agent_mobile_number}}</td>
                    <td class="dynamic_value">{{$info->debit_balance}}</td>
                    <td>
                      <ul class="">
                       <div class="action_button" style="display:flex; justify-content:center">
                        <a href="{{route('Manufacturer_Details.edit' , $info->id)}}" class="custom_image"  data-bs-original-title="Edit"style="padding: 4px;"><img style="height:30px; width:auto; text-align:center" src="{{asset('assets/images/edit.png')}}" alt=""></a>
                        <a href="{{route('Manufacturer_Details.destroy', $info->id)}}" class="custom_image" data-bs-original-title="Delete" onclick="return confirm('Are you sure?')"   style="padding: 4px;"><img style="height:30px; width:auto;" src="{{asset('assets/images/delete.png')}}"></a>
                        <a href="{{route('Manufacturer_Details.preview' , $info->id)}}" class="custom_image" data-bs-original-title="Show All" style="padding: 4px;"><img style="height:30px; width:auto;" src="{{asset('assets/images/file.png')}}" alt=""></a>
                       </div>
                    </td>
                  </tr>
                  @endforeach        
                </tbody>
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
     