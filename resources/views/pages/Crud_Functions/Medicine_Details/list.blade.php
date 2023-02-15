@extends('layouts.mother_layout')
@section('content')
<link href="https://gitcdn.github.io/bootstrap-toggle/2.2.2/css/bootstrap-toggle.min.css" rel="stylesheet">
<link rel="stylesheet" href="http://cdn.bootcss.com/toastr.js/latest/css/toastr.min.css">

<style>
  td.dynamic_value {
    text-align: center;
  }
  th.attribute_names {
    text-align: center;
  }
  label.btn.btn-default.active.toggle-off{
    background:cadetblue;
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
            <h4>Medicine List </h4>
            <span>
              <a href="{{route('Medicine_Details.create')}}"><button class="btn btn-outline-success-2x" type="button"
                  style="float: right;"><i class="fa-solid fa-plus"></i> Add New Medicine</button></a>
            </span>
          </div>
          <div class="card-body">
            <div class="dt-ext table-responsive">
              <table class="display" id="export-button">
                <thead>
                  <tr>
                    <th class="attribute_names">Id</th>
                    <th class="attribute_names">Barcode</th>
                    <th class="attribute_names">Medicine Name</th>
                    <th class="attribute_names">Generic Name</th>
                    <th class="attribute_names">VAT</th>
                    <th class="attribute_names">Status</th>
                    <th class="attribute_names">Action</th>
                  </tr>
                </thead>
                <tbody>
                  @foreach ($Medicine_Details as $key=>$info)
                  <tr>
                    <td class="dynamic_value">{{$key+1}}</td>
                    <td class="dynamic_value">{{$info->bar_code}}</td>
                    <td class="dynamic_value">{{$info->medicine_name}}</td>
                    <td class="dynamic_value">{{$info->generic_name}}</td>
                    <td class="dynamic_value">{{$info->vat}}</td>
                    <td>
                       <input type="checkbox" class="toggle-class" data-id="{{ $info->id }}" data-toggle="toggle" data-style="slow" data-on="Enabled" data-off="Disabled" {{ $info->status == true ? 'checked':''}}>
                    </td> 
                    <td>
                      <ul class="">
                        <div class="action_button" style="display:flex; justify-content:center">
                          <a href="{{route('Medicine_Details.edit' , $info->id)}}" class="custom_image"
                            data-bs-original-title="Edit" style="padding: 4px;"><img
                              style="height:30px; width:auto; text-align:center"
                              src="{{asset('assets/images/edit.png')}}" alt=""></a>

                          <a href="{{route('Medicine_Details.destroy', $info->id)}}" class="custom_image"
                            data-bs-original-title="Delete" onclick="return confirm('Are you sure?')"
                            style="padding: 4px;"><img style="height:30px; width:auto;"
                              src="{{asset('assets/images/delete.png')}}"></a>

                          <a href="{{route('Medicine_Details.preview' , $info->id)}}" class="custom_image"
                            data-bs-original-title="Show All" style="padding: 4px;"><img
                              style="height:30px; width:auto;" src="{{asset('assets/images/file.png')}}" alt=""></a>
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

<script
 src="http://code.jquery.com/jquery-3.5.1.js"
 integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc="
 crossorigin="anonymous"></script>
 <script src="https://gitcdn.github.io/bootstrap-toggle/2.2.2/js/bootstrap-toggle.min.js"></script>

 <script>
     $('.toggle-class').on('change', function() {
         var status = $(this).prop('checked') == true ? 1 : 0;
         var medicine_id = $(this).data('id');
         $.ajax({
             type: 'GET'
             , dataType: 'JSON'
             , url: "{{ route('changeStatus') }}"
             , data: {
                 'status': status
                 , 'medicine_id': medicine_id
             }
             , success: function(data) {
                 $('#notifDiv').fadeIn();
                 $('#notifDiv').css('background', 'green');
                 $('#notifDiv').text('Status Updated Successfully');
                 setTimeout(() => {
                     $('#notifDiv').fadeOut();
                 }, 3000);
             }
         });
     });

 </script>


@endsection