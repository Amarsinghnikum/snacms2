@include('header')

<!-- <section class="content-banner">

  <div class="container">
<div class="row d-flex justify-content-center">
  <div class="col-md-12">
    <div class="banner-con text-center">
      <p class="first-title">SNA Tech Solutions Pvd. Ltd. &amp; subscribe</p>
      <p class="banner-des">prototype,design,collaborate and design system all in mockplus</p>
      <a href="https://www.youtube.com/results?search/query=vishweb+design" target="_blank" class="banner-btn">Get started for free</a>
    </div>
</div>
</div>
</div>
</section> -->

<div class="page-wrapper">
        <!-- ============================================================== -->
        <!-- Container fluid  -->
        <!-- ============================================================== -->
        <div class="container-fluid">
          <div class="row">
            <div class="col-md-12">

          <!-- ============================================================== -->
          <!-- Bread crumb and right sidebar toggle -->
          <!-- ============================================================== -->
          <div class="row page-titles d-flex align-items-center">
            <div class="col-md-5 align-self-center">
              <h3 class="text-themecolor m-0">Dashboard</h3>
              <ol class="breadcrumb">
                <li class="breadcrumb-item">
                  <a href="{{url('index')}}">Home</a>
                </li>
                <li class="breadcrumb-item active">Dashboard</li>
              </ol>
            </div>
            <div class="col-md-7 ">
              
            </div>
          </div>
          <!-- ============================================================== -->
          <!-- End Bread crumb and right sidebar toggle -->
          <!-- ============================================================== -->
  

          <!-- ============================================================== -->
          <!-- Projects of the Month -->
          <!-- ============================================================== -->
          <div class="row">
            <!-- Column -->
            <div class="col-lg-6 d-flex align-items-stretch">
              <div class="card w-100">
                <div class="card-body">
                  <div class="d-flex">
                    <div>
                      <h5 class="card-title">Current Week Expected Payment</h5>
                    </div>
                  </div>
                  <form action="{{url('/orderplace')}}" method="POST">
                    @csrf
                  <div class="table-responsive mt-3 no-wrap">
                    <table class="table vm no-th-brd pro-of-month">
                      <thead>
                        <tr>
                          <th>Sr. No.</th>
                          <th>Client Name</th>
                          <th>Website</th>
                          <th>Expected Payment</th>
                          <th>Move to pending</th>
                        </tr>
                      </thead>
                      
                      <tbody>
                        @php $i=1; @endphp
                      @foreach($getcurrent as $key=>$val)
                        <tr>
                          <td>{{$i}}</td>
                          <td><h6>{{$val->client_name}}</h6></td>
                          <td>{{$val->website}}</td>
                          <td>{{$val->billingdate}}</td>
                        
                          <td>
                            <button type="submit" class="btn btn-danger">
                              <i class="fa fa-share" aria-hidden="true"></i>
                            </button>
                          </td>
                        </tr>
                        @php $i=$i+1; @endphp
                        @endforeach
                      </tbody>
                    </table>
                  </div>
                  </form>
                </div>
              </div>
            </div>
            <!-- Column -->
            <!-- Column -->
            <div class="col-lg-6 d-flex align-items-stretch">
              <div class="card w-100">
                <div class="card-body">
                  <div class="d-flex">
                    <div>
                      <h5 class="card-title">Pending Payment</h5>
                    </div>
                  </div>
                  <form action="{{url('/pending')}}" method="POST">
                  @csrf
                  <div class="table-responsive mt-3 no-wrap">
                    <table class="table vm no-th-brd pro-of-month">
                      <thead>
                        <tr>
                          <th>Client Name</th>
                          <th>Website</th>
                          <th>Billing Date</th>
                          <th>Remove</th>
                        </tr>
                      </thead>
                      <tbody>
                      @foreach($getpending as $val=>$key)
                        <tr>
                          <td>
                            <h6>{{$key->client_name}}</h6>
                          <td>{{$key->website}}</td>
                          <td>{{$key->billingdate}}</td>
                          <td>
                            <a href="{{ url('delete-pending/'.$key->id) }}" class="btn btn-danger">Delete</a>
                          </td>
                        </tr>
                        @endforeach
                        <!-- <tr class="active">
                          <td>
                            <span class="round"><img src="./img/user2.jpg" alt="user" width="50"></span>
                          </td>
                          <td>
                            <h6>Andrew</h6>
                            <small class="text-muted">Project Manager</small>
                          </td>
                          <td>Real Homes</td>
                          <td>$23.9K</td>
                        </tr> -->
                        
                      </tbody>
                    </table>
                  </div>
                  </form>
                </div>
              </div>
            </div>
          </div>
          <!-- ============================================================== -->
          <!-- End Projects of the Month -->
          <!-- ============================================================== -->
        </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
@include('footer')