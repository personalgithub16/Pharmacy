@extends('layouts.mother_layout')
@section('content')


<div class="page-body">
  <!-- Container-fluid starts-->
  <div class="container-fluid dashboard-default">
    <div class="row">
      <div class="col-xxl-12 col-xl-12 col-lg-12 col-md-12 dash-45 box-col-40">
        <div class="card profile-greeting">
          <div class="card-body">
            <div class="d-sm-flex d-block justify-content-between">
              <div class="badge-group">
                <div class="badge badge-light-primary f-12"> <i class="fa fa-clock-o"></i><span id="txt"></span>
                </div>
              </div>
            </div>
            <div class="greeting-user">
              <div class="profile-vector">
                <ul class="dots-images">
                  <li class="dot-small bg-info dot-1"></li>
                  <li class="dot-medium bg-primary dot-2"></li>
                  <li class="dot-medium bg-info dot-3"></li>
                  <li class="semi-medium bg-primary dot-4"></li>
                  <li class="dot-small bg-info dot-5"></li>
                  <li class="dot-big bg-info dot-6"></li>
                  <li class="dot-small bg-primary dot-7"></li>
                  <li class="semi-medium bg-primary dot-8"></li>
                  <li class="dot-big bg-info dot-9"></li>
                </ul><img class="img-fluid" src="../assets/images/dashboard/default/profile.png" alt="">
                <ul class="vector-image">
                  <li> <img src="../assets/images/dashboard/default/ribbon1.png" alt=""></li>
                  <li> <img src="../assets/images/dashboard/default/ribbon3.png" alt=""></li>
                  <li> <img src="../assets/images/dashboard/default/ribbon4.png" alt=""></li>
                  <li> <img src="../assets/images/dashboard/default/ribbon5.png" alt=""></li>
                  <li> <img src="../assets/images/dashboard/default/ribbon6.png" alt=""></li>
                  <li> <img src="../assets/images/dashboard/default/ribbon7.png" alt=""></li>
                </ul>
              </div>
              <h4><a href="user-profile.html"><span>Welcome Back</span> {{ Auth::user()->name; }} </a><span class="right-circle"><i
                    class="fa fa-check-circle font-primary f-14 middle"></i></span></h4>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- Container-fluid Ends-->
</div>


@endsection