@extends('admin.admin_layouts')

@section('admin_content')
 <!-- ########## START: MAIN PANEL ########## -->
 <div class="sl-mainpanel">
    <nav class="breadcrumb sl-breadcrumb">
      <a class="breadcrumb-item" href="index.html">Admin</a>
      <span class="breadcrumb-item active">Dashboard</span>
    </nav>

    <div class="sl-pagebody">

      <div class="row row-sm">
        <div class="col-sm-6 col-xl-3">
          <div class="card pd-20 bg-primary">
            <div class="d-flex justify-content-between align-items-center mg-b-10">
              <h6 class="tx-11 tx-uppercase mg-b-0 tx-spacing-1 tx-white">Messages d'Aujourdhui</h6>
              <a href="" class="tx-white-8 hover-white"><i class="icon ion-android-more-horizontal"></i></a>
            </div><!-- card-header -->
            <div class="d-flex align-items-center justify-content-between">
              <span class="sparkline2">5,3,9,6,5,9,7,3,5,2</span>
            <h3 class="mg-b-0 tx-white tx-lato tx-bold">{{ $count = App\Message::whereDate('created_at',Carbon\Carbon::today())->count() }} <h6 class="mg-b-0 tx-white tx-lato tx-bold">Messages</h6></h3> 
            </div><!-- card-body -->
            <div class="d-flex align-items-center justify-content-between mg-t-15 bd-t bd-white-2 pd-t-10">
             
            </div><!-- -->
          </div><!-- card -->
        </div><!-- col-3 -->
        <div class="col-sm-6 col-xl-3 mg-t-20 mg-sm-t-0">
          <div class="card pd-20 bg-info">
            <div class="d-flex justify-content-between align-items-center mg-b-10">
              <h6 class="tx-11 tx-uppercase mg-b-0 tx-spacing-1 tx-white">Messages de cette semaine</h6>
              <a href="" class="tx-white-8 hover-white"><i class="icon ion-android-more-horizontal"></i></a>
            </div><!-- card-header -->
            <div class="d-flex align-items-center justify-content-between">
              <span class="sparkline2">5,3,9,6,5,9,7,3,5,2</span>
              <h3 class="mg-b-0 tx-white tx-lato tx-bold"> {{ $count = App\Message::whereDate('created_at',[Carbon\Carbon::now()->startOfWeek(), Carbon\Carbon::now()->endOfWeek()])->count() }} <h6 class="mg-b-0 tx-white tx-lato tx-bold">Messages</h6></h3> 
            </div><!-- card-body -->
            <div class="d-flex align-items-center justify-content-between mg-t-15 bd-t bd-white-2 pd-t-10">
            
            </div><!-- -->
          </div><!-- card -->
        </div><!-- col-3 -->
        <div class="col-sm-6 col-xl-3 mg-t-20 mg-xl-t-0">
          <div class="card pd-20 bg-purple">
            <div class="d-flex justify-content-between align-items-center mg-b-10">
              <h6 class="tx-11 tx-uppercase mg-b-0 tx-spacing-1 tx-white">MESSAGES DE CE mois</h6>
              <a href="" class="tx-white-8 hover-white"><i class="icon ion-android-more-horizontal"></i></a>
            </div><!-- card-header -->
            <div class="d-flex align-items-center justify-content-between">
              <span class="sparkline2">5,3,9,6,5,9,7,3,5,2</span>
              <h3 class="mg-b-0 tx-white tx-lato tx-bold">{{ $count = App\Message::whereYear('created_at', Carbon\Carbon::now()->year) ->whereMonth('created_at', Carbon\Carbon::now()->month) ->count() }} <h6 class="mg-b-0 tx-white tx-lato tx-bold">Messages</h6>
</h3>-
            </div><!-- card-body -->
            <div class="d-flex align-items-center justify-content-between mg-t-15 bd-t bd-white-2 pd-t-10">
             
            </div><!-- -->
          </div><!-- card -->
        </div><!-- col-3 -->
        <div class="col-sm-6 col-xl-3 mg-t-20 mg-xl-t-0">
          <div class="card pd-20 bg-sl-primary">
            <div class="d-flex justify-content-between align-items-center mg-b-10">
              <h6 class="tx-11 tx-uppercase mg-b-0 tx-spacing-1 tx-white">Messages de cette année</h6>
              <a href="" class="tx-white-8 hover-white"><i class="icon ion-android-more-horizontal"></i></a>
            </div><!-- card-header -->
            <div class="d-flex align-items-center justify-content-between">
              <span class="sparkline2">5,3,9,6,5,9,7,3,5,2</span>
            <h3 class="mg-b-0 tx-white tx-lato tx-bold">{{ $count = App\Message::whereYear('created_at', Carbon\Carbon::now()->year)->count() }} <h6 class="mg-b-0 tx-white tx-lato tx-bold">Messages</h6></h3>
            </div><!-- card-body -->
            <div class="d-flex align-items-center justify-content-between mg-t-15 bd-t bd-white-2 pd-t-10">
              
            </div><!-- -->
          </div><!-- card -->
        </div><!-- col-3 -->
      </div><!-- row -->

    


  </div><!-- sl-mainpanel -->
  <!-- ########## END: MAIN PANEL ########## -->
@endsection
