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
              <a href="{{route('Medicine_Details.list')}}"><button class="btn btn-outline-success-2x" type="button"
                  style="float: right;"><i class="fa-solid fa-list"></i> Medicine List </button></a>
            </span>
            <span style="font-weight:bold; color:red; font-size:18px;">Medicine Details</span>
          </div>
        </div>
      </div>
    </div>

    <div class="row">
      <div class="col-sm-12">
        <div class="card">
          <div class="card-header pb-0">
            <h2 style="font-weight:bold;">Bar Code</h2>
          </div>
          <div class="card-body">
            <p class="mb-0 badge badge-secondary" style="font-size:18px;">{{$Medicine_Details->bar_code}}</p>
          </div>
        </div>
      </div>
    </div>

    <div class="row">
      <div class="col-sm-12">
        <div class="card">
          <div class="card-header pb-0">
            <h2 style="font-weight:bold;">Medicine Name</h2>
          </div>
          <div class="card-body">
            <p class="mb-0 badge badge-secondary" style="font-size:18px;">{{$Medicine_Details->medicine_name}}
            </p>
          </div>
        </div>
      </div>
    </div>


    <div class="row">
      <div class="col-sm-12">
        <div class="card">
          <div class="card-header pb-0">
            <h2 style="font-weight:bold;">Generic Name</h2>
          </div>
          <div class="card-body">
            <p class="mb-0 badge badge-secondary" style="font-size:18px;">{{$Medicine_Details->generic_name}}</p>
          </div>
        </div>
      </div>
    </div>


    <div class="row">
      <div class="col-sm-12">
        <div class="card">
          <div class="card-header pb-0">
            <h2 style="font-weight:bold;">VAT</h2>
          </div>
          <div class="card-body">
            <p class="mb-0 badge badge-secondary" style="font-size:18px;">{{$Medicine_Details->vat}}</p>
          </div>

        </div>
      </div>
    </div>


    <div class="row">
      <div class="col-sm-12">
        <div class="card">
          <div class="card-header pb-0">
            <h2 style="font-weight:bold;">Expire date of the medicine</h2>
          </div>
          <div class="card-body">
            <p class="mb-0 badge badge-secondary" style="font-size:18px;">{{ Carbon\Carbon::parse($Medicine_Details->expire_date_of_the_medicine)->format('d-m-Y') }}</p>
          </div>
        </div>
      </div>
    </div>
    
    <div class="row">
      <div class="col-sm-12">
        <div class="card">
          <div class="card-header pb-0">
            <h2 style="font-weight:bold;">Medicine Details</h2>
          </div>
          <div class="card-body">
            <p class="mb-0 badge badge-secondary" style="font-size:18px;">{{$Medicine_Details->medicine_details}}</p>
          </div>
        </div>
      </div>
    </div>

    <div class="row">
      <div class="col-sm-12">
        <div class="card">
          <div class="card-header pb-0">
            <h2 style="font-weight:bold;">Medicine Selling Price</h2>
          </div>
          <div class="card-body">
            <p class="mb-0 badge badge-secondary" style="font-size:18px;">{{$Medicine_Details->medicine_selling_price}}</p>
          </div>
        </div>
      </div>
    </div>

    <div class="row">
      <div class="col-sm-12">
        <div class="card">
          <div class="card-header pb-0">
            <h2 style="font-weight:bold;">Medicine Manufacturer Price</h2>
          </div>
          <div class="card-body">
            <p class="mb-0 badge badge-secondary" style="font-size:18px;">{{$Medicine_Details->medicine_manufacturer_price}}</p>
          </div>
        </div>
      </div>
    </div>

    <div class="row">
      <div class="col-sm-12">
        <div class="card">
          <div class="card-header pb-0">
            <h2 style="font-weight:bold;">Medicine Category</h2>
          </div>
          <div class="card-body">
            <p class="mb-0 badge badge-secondary" style="font-size:18px;">{{$Medicine_Details->get_category->category_name}}</p>
          </div>
        </div>
      </div>
    </div>


    <div class="row">
      <div class="col-sm-12">
        <div class="card">
          <div class="card-header pb-0">
            <h2 style="font-weight:bold;">Medicine Type</h2>
          </div>
          <div class="card-body">
            <p class="mb-0 badge badge-secondary" style="font-size:18px;">{{$Medicine_Details->get_medicine_type_id->medicine_type}}</p>
          </div>
        </div>
      </div>
    </div>

    <div class="row">
      <div class="col-sm-12">
        <div class="card">
          <div class="card-header pb-0">
            <h2 style="font-weight:bold;">Medicine Manufacturer Type</h2>
          </div>
          <div class="card-body">
            <p class="mb-0 badge badge-secondary" style="font-size:18px;">{{$Medicine_Details->get_manufacturer_id->manufacturer_name}}</p>
          </div>
        </div>
      </div>
    </div>


    <div class="row">
      <div class="col-sm-12">
        <div class="card">
          <div class="card-header pb-0">
            <h2 style="font-weight:bold;">Leaf Type</h2>
          </div>
          <div class="card-body">
            <p class="mb-0 badge badge-secondary" style="font-size:18px;">{{$Medicine_Details->get_leaftype_id->leaf_type}}</p>
          </div>
        </div>
      </div>
    </div>

    <div class="row">
      <div class="col-sm-12">
        <div class="card">
          <div class="card-header pb-0">
            <h2 style="font-weight:bold;">Unit</h2>
          </div>
          <div class="card-body">
            <p class="mb-0 badge badge-secondary" style="font-size:18px;">{{$Medicine_Details->get_medicineUnit_id->unit_name}}</p>
          </div>
        </div>
      </div>
    </div>



  </div>
  <!-- Container-fluid Ends-->
</div>
@endsection