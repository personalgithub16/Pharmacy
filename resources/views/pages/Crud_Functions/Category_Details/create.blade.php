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
              <a href="{{route('Category_Details.list')}}"><button class="btn btn-outline-success-2x" type="button"
                  style="float: right;"><i class="fa-solid fa-list"></i> Category List </button></a>
            </span>
          </div>
          <div class="card-header pb-0">
            <div class="card-body">
              <form action="{{route('Category_Details.store')}}" method="POST" enctype="multipart/form-data">
                @csrf
                {{method_field('PUT')}}
                <div class="row g-3">

                  <!-- Form Input Start -->
                  <div class="col-md-12 mb-3">
                    <label class="form-label ">Category Name</label>
                    <input class="form-control" name="category_name"
                      value="{{ (old('category_name')?old('category_name'):'') }}" type="text" autocomplete="off">
                  </div>
                  <!-- Form Input End -->

                  <!-- Validation Start -->
                  @if($errors->first('category_name'))
                  <div class="alert alert-dark dark alert-dismissible fade show" role="alert">
                    <strong>{{$errors->first('category_name')}}</strong>
                    <button class="btn-close" type="button" data-bs-dismiss="alert" aria-label="Close"></button>
                  </div>
                  @endif
                  <!-- Validation End -->
                </div>
                <button class="btn btn-success btn-lg" type="submit">Submit Category</button>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Container-fluid Ends-->
  </div>
  <!-- footer start-->
</div>

@endsection