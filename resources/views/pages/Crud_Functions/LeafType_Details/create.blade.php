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
              <a href="{{route('LeafType_Details.list')}}"><button class="btn btn-outline-success-2x" type="button"
                  style="float: right;"><i class="fa-solid fa-list"></i> Leaf Type List </button></a>
            </span>
          </div>
          <div class="card-header pb-0">
            <div class="card-body">
              <form action="{{route('LeafType_Details.store')}}" method="POST" enctype="multipart/form-data">
                @csrf
                {{method_field('PUT')}}
                <div class="row g-3">

                  <!-- Form Input Start -->
                  <div class="col-md-12 mb-3">
                    <label class="form-label ">Leaf Type</label>
                    <input class="form-control" name="leaf_type" value="{{ (old('leaf_type')?old('leaf_type'):'') }}"
                      type="text" autocomplete="off">
                  </div>
                  <!-- Form Input End -->

                  <!-- Validation Start -->
                  @if($errors->first('leaf_type'))
                  <div class="alert alert-dark dark alert-dismissible fade show" role="alert">
                    <strong>{{$errors->first('leaf_type')}}</strong>
                    <button class="btn-close" type="button" data-bs-dismiss="alert" aria-label="Close"></button>
                  </div>
                  @endif
                  <!-- Validation End -->

                  <!-- Form Input Start -->
                  <div class="col-md-12 mb-3">
                    <label class="form-label ">Total Number Per Box</label>
                    <input class="form-control" name="total_number_per_box"
                      value="{{ (old('total_number_per_box')?old('total_number_per_box'):'') }}" type="text"
                      autocomplete="off">
                  </div>
                  <!-- Form Input End -->

                  <!-- Validation Start -->
                  @if($errors->first('total_number_per_box'))
                  <div class="alert alert-dark dark alert-dismissible fade show" role="alert">
                    <strong>{{$errors->first('total_number_per_box')}}</strong>
                    <button class="btn-close" type="button" data-bs-dismiss="alert" aria-label="Close"></button>
                  </div>
                  @endif
                  <!-- Validation End -->

                </div>
                <button class="btn btn-primary btn-lg" type="submit">Submit</button>
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