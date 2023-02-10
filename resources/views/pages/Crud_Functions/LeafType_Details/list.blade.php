@extends('layouts.mother_layout')
@section('content')
<link rel="stylesheet" href="http://cdn.bootcss.com/toastr.js/latest/css/toastr.min.css">
<style>
  td.dynamic_value {
    text-align: center;
  }

  th.attribute_names {
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
            <h4> Leaf Type Details List </h4>
            <span>
              <a href="{{route('LeafType_Details.create')}}"><button class="btn btn-outline-success-2x" type="button"
                  style="float: right;"><i class="fa-solid fa-plus"></i> Add New Leaf Type </button></a>
            </span>
          </div>
          <div class="card-body">
            <div class="dt-ext table-responsive">
              <table class="display" id="export-button">
                <thead>
                  <tr>
                    <th class="attribute_names">Id</th>
                    <th class="attribute_names">Leaf Type</th>
                    <th class="attribute_names">Total Number Per Box</th>
                    <th class="attribute_names">Action</th>
                  </tr>
                </thead>
                <tbody>
                  @foreach ($LeafTypeDetails as $key=>$info)
                  <tr>
                    <td class="dynamic_value">{{$key+1}}</td>
                    <td class="dynamic_value">{{$info->leaf_type}}</td>
                    <td class="dynamic_value">{{$info->total_number_per_box}}</td>
                    <td>
                      <ul class="">
                        <div class="action_button" style="display:flex; justify-content:center">
                          <a href="{{route('LeafType_Details.edit' , $info->id)}}" class="custom_image"
                            data-bs-original-title="Edit" style="padding: 4px;"><img
                              style="height:30px; width:auto; text-align:center"
                              src="{{asset('assets/images/edit.png')}}" alt=""></a>
                          <a href="{{route('LeafType_Details.destroy', $info->id)}}" class="custom_image"
                            data-bs-original-title="Delete" onclick="return confirm('Are you sure?')"
                            style="padding: 4px;"><img style="height:30px; width:auto;"
                              src="{{asset('assets/images/delete.png')}}"></a>
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