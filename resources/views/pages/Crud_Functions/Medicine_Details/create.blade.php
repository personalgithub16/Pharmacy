@extends('layouts.mother_layout')
@section('content')

<style>
  b.label_font_size {
    font-size: 16px;
  }
</style>

<div class="page-body">
  <!-- Container-fluid start-->
  <div class="container-fluid">
    <div class="row">
      <div class="col-sm-12">
        <div class="card">
          <div class="card-header pb-0">
            <span>
              <a href="{{route('Medicine_Details.list')}}"><button class="btn btn-outline-success-2x" type="button"
                  style="float: right;"><i class="fa-solid fa-list"></i> Medicine List </button></a>
            </span>
          </div>
          <div class="card-header pb-0">
            <div class="card-body">
              <form action="{{route('Medicine_Details.store')}}" method="POST" enctype="multipart/form-data">
                @csrf
                {{method_field('PUT')}}
                <div class="row g-3">
                  <div class="col-md-6">

                    <!-- Form Input Start -->
                    <div class="col-md-12 mb-3">
                      <label class="form-label "> <b class="label_font_size">Bar Code</b> </label>
                      <input class="form-control" name="bar_code" value="{{ (old('bar_code')?old('bar_code'):'') }}"
                        type="text" autocomplete="off">
                    </div>
                    <!-- Form Input End -->

                    <!-- Validation Start  -->
                    @if($errors->first('bar_code'))
                    <div class="alert alert-dark dark alert-dismissible fade show" role="alert">
                      <strong>{{$errors->first('bar_code')}}</strong>
                      <button class="btn-close" type="button" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                    @endif
                    <!-- Validation End  -->

                    <!-- Form Input Start -->
                    <div class="col-md-12 mb-3">
                      <label class="form-label"> <b class="label_font_size"> Medicine Name </b></label>
                      <input class="form-control" name="medicine_name" type="text"
                        value="{{ (old('medicine_name')?old('medicine_name'):'') }}" autocomplete="off">
                    </div>
                    <!-- Form Input End -->

                    <!-- Validation Start -->
                    @if($errors->first('medicine_name'))
                    <div class="alert alert-dark dark alert-dismissible fade show" role="alert">
                      <strong>{{$errors->first('medicine_name')}}</strong>
                      <button class="btn-close" type="button" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                    @endif
                    <!-- Validation End  -->

                    <!-- Form Input Start -->
                    <div class="col-md-12 mb-3">
                      <label class="form-label"> <b class="label_font_size"> Generic Name </b></label>
                      <input class="form-control" name="generic_name"
                        value="{{ (old('generic_name')?old('generic_name'):'') }}" type="text" autocomplete="off">
                    </div>
                    <!-- Form Input End -->

                    <!-- Validation Start  -->
                    @if($errors->first('generic_name'))
                    <div class="alert alert-dark dark alert-dismissible fade show" role="alert">
                      <strong>{{$errors->first('generic_name')}}</strong>
                      <button class="btn-close" type="button" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                    @endif
                    <!-- Validation End -->

                    <!-- Form Input Start -->
                    <div class="col-md-12 mb-3">
                      <label class="form-label"> <b class="label_font_size"> VAT </b></label>
                      <input class="form-control" name="vat" value="{{ (old('vat')?old('vat'):'') }}" type="text"
                        autocomplete="off">
                    </div>
                    <!--Form Input End -->


                    <!-- Validation Start -->
                    @if($errors->first('vat'))
                    <div class="alert alert-dark dark alert-dismissible fade show" role="alert">
                      <strong>{{$errors->first('vat')}}</strong>
                      <button class="btn-close" type="button" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                    @endif
                    <!-- Validation End -->

                    <!-- Form Input Start -->
                    <div class="col-md-12 mb-3">
                      <label class="form-label"> <b class="label_font_size"> Expire Date </b></label>
                      <input class="datepicker-here form-control digits" name="expire_date_of_the_medicine" type="text"
                        data-language="en">
                    </div>
                    <!-- Form Input End -->

                    <!-- Validation Start  -->
                    @if($errors->first('expire_date_of_the_medicine'))
                    <div class="alert alert-dark dark alert-dismissible fade show" role="alert">
                      <strong>{{$errors->first('expire_date_of_the_medicine')}}</strong>
                      <button class="btn-close" type="button" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                    @endif
                    <!-- Validation End-->

                    <!-- Form Input Start -->
                    <div class="col-md-12 mb-3">
                      <label class="form-label"> <b class="label_font_size"> Medicine Details </b></label>
                      <input class="form-control" name="medicine_details"
                        value="{{ (old('medicine_details')?old('medicine_details'):'') }}" type="text"
                        autocomplete="off">
                    </div>
                    <!--  Address Input End -->


                    <!-- Validation Start -->
                    @if($errors->first('medicine_details'))
                    <div class="alert alert-dark dark alert-dismissible fade show" role="alert">
                      <strong>{{$errors->first('medicine_details')}}</strong>
                      <button class="btn-close" type="button" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                    @endif
                    <!-- Validation End -->

                    <!-- Form Input Start -->
                    <div class="col-md-12 mb-3">
                      <label class="form-label"> <b class="label_font_size"> Medicine Selling Price </b></label>
                      <input class="form-control" name="medicine_selling_price"
                        value="{{ (old('medicine_selling_price')?old('medicine_selling_price'):'') }}" type="text"
                        autocomplete="off">
                    </div>
                    <!-- Form Input End -->


                    <!-- Validation Start  -->
                    @if($errors->first('medicine_selling_price'))
                    <div class="alert alert-dark dark alert-dismissible fade show" role="alert">
                      <strong>{{$errors->first('medicine_selling_price')}}</strong>
                      <button class="btn-close" type="button" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                    @endif
                    <!-- Validation End -->

                  </div>

                  <div class="col-md-6">


                    <!-- Form Input Start -->
                    <div class="col-md-12 mb-3">
                      <label class="form-label"> <b class="label_font_size"> Medicine Manufacturer Price </b></label>
                      <input class="form-control" name="medicine_manufacturer_price"
                        value="{{ (old('medicine_manufacturer_price')?old('medicine_manufacturer_price'):'') }}"
                        type="text" autocomplete="off">
                    </div>
                    <!-- Form Input End -->


                    <!-- Validation Start -->
                    @if($errors->first('medicine_manufacturer_price'))
                    <div class="alert alert-dark dark alert-dismissible fade show" role="alert">
                      <strong>{{$errors->first('medicine_manufacturer_price')}}</strong>
                      <button class="btn-close" type="button" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                    @endif
                    <!-- Validation End -->




                    <div class=" col-md-12 mb-3 col-form-label">
                      <label class="form-label"><b class="label_font_size"> Select Category </b></label>
                      <select class="js-example-basic-single col-sm-12" name="category_id">
                        <option class="disabled">Select Options</option>
                        @foreach ($categorylist as $category)
                        <option value="{{ $category->id }}">{{ $category->category_name }}
                        </option>
                        @endforeach
                      </select>
                    </div>

                    <div class=" col-md-12 mb-3 col-form-label">
                      <label class="form-label"><b class="label_font_size">Select Medicine Type </b></label>
                      <select class="js-example-basic-single col-sm-12" name="medicine_type_id">
                        <option class="disabled">Select Options</option>
                        @foreach ($medicine_type_list as $info)
                        <option value="{{ $info->id }}">{{ $info->medicine_type }}
                        </option>
                        @endforeach
                      </select>
                    </div>

                    <div class=" col-md-12 mb-3 col-form-label">
                      <label class="form-label"><b class="label_font_size">Select Unit Type </b></label>
                      <select class="js-example-basic-single col-sm-12" name="unit_id">
                        <option class="disabled">Select Options</option>
                        @foreach ($medicine_unit_list as $info)
                        <option value="{{ $info->id }}">{{ $info->unit_name }}
                        </option>
                        @endforeach
                      </select>
                    </div>

                    <div class=" col-md-12 mb-3 col-form-label">
                      <label class="form-label"><b class="label_font_size">Select Manufacturer Company </b></label>
                      <select class="js-example-basic-single col-sm-12" name="manufacturer_id">
                        <option class="disabled">Select Options</option>
                        @foreach ($manufacturer_list as $info)
                        <option value="{{ $info->id }}">{{ $info->manufacturer_name }}
                        </option>
                        @endforeach
                      </select>
                    </div>

                    <div class=" col-md-12 mb-3 col-form-label">
                      <label class="form-label"><b class="label_font_size">Select Leaf Type </b></label>
                      <select class="js-example-basic-single col-sm-12" name="leaftype_id">
                        <option class="disabled">Select Options</option>
                        @foreach ($leaftype_list as $info)
                        <option value="{{ $info->id }}">{{ $info->leaf_type }}
                        </option>
                        @endforeach
                      </select>
                    </div>

                  </div>

                </div>
                <button class="btn btn-success btn-lg" type="submit">Submit Medicine Information</button>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Container-fluid Ends-->
  </div>
</div>
  <!-- Container-fluid ends-->

@endsection