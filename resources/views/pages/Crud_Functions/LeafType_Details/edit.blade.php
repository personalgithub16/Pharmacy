@extends('layouts.mother_layout')
@section('content')

<div class="page-body">
  <div class="container-fluid">
    <div class="page-title">
      <div class="row">
        <div class="col-sm-6">
          <h3>Leaf Type Details Update</h3>
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
              <form action="{{route('LeafType_Details.update',$LeafTypeDetails->id)}}" method="POST"
                enctype="multipart/form-data">
                @csrf
                <div class="row g-3">
                  <!-- Form Input Start -->
                  <div class="col-md-12 mb-3">
                    <label class="form-label ">Category Name</label>
                    <input class="form-control" name="leaf_type" value="{{ $LeafTypeDetails->leaf_type }}" type="text"
                      autocomplete="off">
                  </div>
                  <!-- Form Input End -->

                  <!-- Validation Start -->
                  @if($errors->first('leaf_type'))
                  <div class="alert alert-dark dark alert-dismissible fade show" role="alert">
                    <strong>{{$errors->first('leaf_type')}}</strong>
                    <button class="btn-close" type="button" data-bs-dismiss="alert" aria-label="Close"></button>
                  </div>
                  @endif
                  <!-- Validation End  -->

                  <!-- Form Input Start -->
                  <div class="col-md-12 mb-3">
                    <label class="form-label ">Total Number Per Box</label>
                    <input class="form-control" name="total_number_per_box"
                      value="{{ $LeafTypeDetails->total_number_per_box }}" type="text" autocomplete="off">
                  </div>
                  <!-- Form Input End -->

                  <!-- Validation Start -->
                  @if($errors->first('total_number_per_box'))
                  <div class="alert alert-dark dark alert-dismissible fade show" role="alert">
                    <strong>{{$errors->first('total_number_per_box')}}</strong>
                    <button class="btn-close" type="button" data-bs-dismiss="alert" aria-label="Close"></button>
                  </div>
                  @endif
                  <!-- Validation End  -->
                </div>
                <button class="btn btn-success btn-lg" type="submit">Update Leaf Type</button>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Container-fluid Ends-->
  </div>

</div>

  @endsection