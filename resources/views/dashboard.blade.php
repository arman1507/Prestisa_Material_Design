@extends('layouts.app', ['activePage' => 'dashboard', 'titlePage' => __('Dashboard')])

@section('content')
  <div class="content">
    <!--<div class="container-fluid">
      <div class="row">
        <div class="col-lg-3 col-md-6 col-sm-6">
          <div class="card card-stats">
            <div class="card-header card-header-warning card-header-icon">
              <div class="card-icon">
                <i class="material-icons">content_copy</i>
              </div>
              <p class="card-category">Used Space</p>
              <h3 class="card-title">49/50
                <small>GB</small>
              </h3>
            </div>
            <div class="card-footer">
              <div class="stats">
                <i class="material-icons text-danger">warning</i>
                <a href="#pablo">Get More Space...</a>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-3 col-md-6 col-sm-6">
          <div class="card card-stats">
            <div class="card-header card-header-success card-header-icon">
              <div class="card-icon">
                <i class="material-icons">store</i>
              </div>
              <p class="card-category">Revenue</p>
              <h3 class="card-title">$34,245</h3>
            </div>
            <div class="card-footer">
              <div class="stats">
                <i class="material-icons">date_range</i> Last 24 Hours
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-3 col-md-6 col-sm-6">
          <div class="card card-stats">
            <div class="card-header card-header-danger card-header-icon">
              <div class="card-icon">
                <i class="material-icons">info_outline</i>
              </div>
              <p class="card-category">Fixed Issues</p>
              <h3 class="card-title">75</h3>
            </div>
            <div class="card-footer">
              <div class="stats">
                <i class="material-icons">local_offer</i> Tracked from Github
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-3 col-md-6 col-sm-6">
          <div class="card card-stats">
            <div class="card-header card-header-info card-header-icon">
              <div class="card-icon">
                <i class="fa fa-twitter"></i>
              </div>
              <p class="card-category">Followers</p>
              <h3 class="card-title">+245</h3>
            </div>
            <div class="card-footer">
              <div class="stats">
                <i class="material-icons">update</i> Just Updated
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-md-4">
          <div class="card card-chart">
            <div class="card-header card-header-success">
              <div class="ct-chart" id="dailySalesChart"></div>
            </div>
            <div class="card-body">
              <h4 class="card-title">Daily Sales</h4>
              <p class="card-category">
                <span class="text-success"><i class="fa fa-long-arrow-up"></i> 55% </span> increase in today sales.</p>
            </div>
            <div class="card-footer">
              <div class="stats">
                <i class="material-icons">access_time</i> updated 4 minutes ago
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="card card-chart">
            <div class="card-header card-header-warning">
              <div class="ct-chart" id="websiteViewsChart"></div>
            </div>
            <div class="card-body">
              <h4 class="card-title">Email Subscriptions</h4>
              <p class="card-category">Last Campaign Performance</p>
            </div>
            <div class="card-footer">
              <div class="stats">
                <i class="material-icons">access_time</i> campaign sent 2 days ago
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="card card-chart">
            <div class="card-header card-header-danger">
              <div class="ct-chart" id="completedTasksChart"></div>
            </div>
            <div class="card-body">
              <h4 class="card-title">Completed Tasks</h4>
              <p class="card-category">Last Campaign Performance</p>
            </div>
            <div class="card-footer">
              <div class="stats">
                <i class="material-icons">access_time</i> campaign sent 2 days ago
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-lg-6 col-md-12">
          <div class="card">
            <div class="card-header card-header-tabs card-header-primary">
              <div class="nav-tabs-navigation">
                <div class="nav-tabs-wrapper">
                  <span class="nav-tabs-title">Tasks:</span>
                  <ul class="nav nav-tabs" data-tabs="tabs">
                    <li class="nav-item">
                      <a class="nav-link active" href="#profile" data-toggle="tab">
                        <i class="material-icons">bug_report</i> Bugs
                        <div class="ripple-container"></div>
                      </a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="#messages" data-toggle="tab">
                        <i class="material-icons">code</i> Website
                        <div class="ripple-container"></div>
                      </a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="#settings" data-toggle="tab">
                        <i class="material-icons">cloud</i> Server
                        <div class="ripple-container"></div>
                      </a>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
            <div class="card-body">
              <div class="tab-content">
                <div class="tab-pane active" id="profile">
                  <table class="table">
                    <tbody>
                      <tr>
                        <td>
                          <div class="form-check">
                            <label class="form-check-label">
                              <input class="form-check-input" type="checkbox" value="" checked>
                              <span class="form-check-sign">
                                <span class="check"></span>
                              </span>
                            </label>
                          </div>
                        </td>
                        <td>Sign contract for "What are conference organizers afraid of?"</td>
                        <td class="td-actions text-right">
                          <button type="button" rel="tooltip" title="Edit Task" class="btn btn-primary btn-link btn-sm">
                            <i class="material-icons">edit</i>
                          </button>
                          <button type="button" rel="tooltip" title="Remove" class="btn btn-danger btn-link btn-sm">
                            <i class="material-icons">close</i>
                          </button>
                        </td>
                      </tr>
                      <tr>
                        <td>
                          <div class="form-check">
                            <label class="form-check-label">
                              <input class="form-check-input" type="checkbox" value="">
                              <span class="form-check-sign">
                                <span class="check"></span>
                              </span>
                            </label>
                          </div>
                        </td>
                        <td>Lines From Great Russian Literature? Or E-mails From My Boss?</td>
                        <td class="td-actions text-right">
                          <button type="button" rel="tooltip" title="Edit Task" class="btn btn-primary btn-link btn-sm">
                            <i class="material-icons">edit</i>
                          </button>
                          <button type="button" rel="tooltip" title="Remove" class="btn btn-danger btn-link btn-sm">
                            <i class="material-icons">close</i>
                          </button>
                        </td>
                      </tr>
                      <tr>
                        <td>
                          <div class="form-check">
                            <label class="form-check-label">
                              <input class="form-check-input" type="checkbox" value="">
                              <span class="form-check-sign">
                                <span class="check"></span>
                              </span>
                            </label>
                          </div>
                        </td>
                        <td>Flooded: One year later, assessing what was lost and what was found when a ravaging rain swept through metro Detroit
                        </td>
                        <td class="td-actions text-right">
                          <button type="button" rel="tooltip" title="Edit Task" class="btn btn-primary btn-link btn-sm">
                            <i class="material-icons">edit</i>
                          </button>
                          <button type="button" rel="tooltip" title="Remove" class="btn btn-danger btn-link btn-sm">
                            <i class="material-icons">close</i>
                          </button>
                        </td>
                      </tr>
                      <tr>
                        <td>
                          <div class="form-check">
                            <label class="form-check-label">
                              <input class="form-check-input" type="checkbox" value="" checked>
                              <span class="form-check-sign">
                                <span class="check"></span>
                              </span>
                            </label>
                          </div>
                        </td>
                        <td>Create 4 Invisible User Experiences you Never Knew About</td>
                        <td class="td-actions text-right">
                          <button type="button" rel="tooltip" title="Edit Task" class="btn btn-primary btn-link btn-sm">
                            <i class="material-icons">edit</i>
                          </button>
                          <button type="button" rel="tooltip" title="Remove" class="btn btn-danger btn-link btn-sm">
                            <i class="material-icons">close</i>
                          </button>
                        </td>
                      </tr>
                    </tbody>
                  </table>
                </div>
                <div class="tab-pane" id="messages">
                  <table class="table">
                    <tbody>
                      <tr>
                        <td>
                          <div class="form-check">
                            <label class="form-check-label">
                              <input class="form-check-input" type="checkbox" value="" checked>
                              <span class="form-check-sign">
                                <span class="check"></span>
                              </span>
                            </label>
                          </div>
                        </td>
                        <td>Flooded: One year later, assessing what was lost and what was found when a ravaging rain swept through metro Detroit
                        </td>
                        <td class="td-actions text-right">
                          <button type="button" rel="tooltip" title="Edit Task" class="btn btn-primary btn-link btn-sm">
                            <i class="material-icons">edit</i>
                          </button>
                          <button type="button" rel="tooltip" title="Remove" class="btn btn-danger btn-link btn-sm">
                            <i class="material-icons">close</i>
                          </button>
                        </td>
                      </tr>
                      <tr>
                        <td>
                          <div class="form-check">
                            <label class="form-check-label">
                              <input class="form-check-input" type="checkbox" value="">
                              <span class="form-check-sign">
                                <span class="check"></span>
                              </span>
                            </label>
                          </div>
                        </td>
                        <td>Sign contract for "What are conference organizers afraid of?"</td>
                        <td class="td-actions text-right">
                          <button type="button" rel="tooltip" title="Edit Task" class="btn btn-primary btn-link btn-sm">
                            <i class="material-icons">edit</i>
                          </button>
                          <button type="button" rel="tooltip" title="Remove" class="btn btn-danger btn-link btn-sm">
                            <i class="material-icons">close</i>
                          </button>
                        </td>
                      </tr>
                    </tbody>
                  </table>
                </div>
                <div class="tab-pane" id="settings">
                  <table class="table">
                    <tbody>
                      <tr>
                        <td>
                          <div class="form-check">
                            <label class="form-check-label">
                              <input class="form-check-input" type="checkbox" value="">
                              <span class="form-check-sign">
                                <span class="check"></span>
                              </span>
                            </label>
                          </div>
                        </td>
                        <td>Lines From Great Russian Literature? Or E-mails From My Boss?</td>
                        <td class="td-actions text-right">
                          <button type="button" rel="tooltip" title="Edit Task" class="btn btn-primary btn-link btn-sm">
                            <i class="material-icons">edit</i>
                          </button>
                          <button type="button" rel="tooltip" title="Remove" class="btn btn-danger btn-link btn-sm">
                            <i class="material-icons">close</i>
                          </button>
                        </td>
                      </tr>
                      <tr>
                        <td>
                          <div class="form-check">
                            <label class="form-check-label">
                              <input class="form-check-input" type="checkbox" value="" checked>
                              <span class="form-check-sign">
                                <span class="check"></span>
                              </span>
                            </label>
                          </div>
                        </td>
                        <td>Flooded: One year later, assessing what was lost and what was found when a ravaging rain swept through metro Detroit
                        </td>
                        <td class="td-actions text-right">
                          <button type="button" rel="tooltip" title="Edit Task" class="btn btn-primary btn-link btn-sm">
                            <i class="material-icons">edit</i>
                          </button>
                          <button type="button" rel="tooltip" title="Remove" class="btn btn-danger btn-link btn-sm">
                            <i class="material-icons">close</i>
                          </button>
                        </td>
                      </tr>
                      <tr>
                        <td>
                          <div class="form-check">
                            <label class="form-check-label">
                              <input class="form-check-input" type="checkbox" value="" checked>
                              <span class="form-check-sign">
                                <span class="check"></span>
                              </span>
                            </label>
                          </div>
                        </td>
                        <td>Sign contract for "What are conference organizers afraid of?"</td>
                        <td class="td-actions text-right">
                          <button type="button" rel="tooltip" title="Edit Task" class="btn btn-primary btn-link btn-sm">
                            <i class="material-icons">edit</i>
                          </button>
                          <button type="button" rel="tooltip" title="Remove" class="btn btn-danger btn-link btn-sm">
                            <i class="material-icons">close</i>
                          </button>
                        </td>
                      </tr>
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-6 col-md-12">
          <div class="card">
            <div class="card-header card-header-warning">
              <h4 class="card-title">Employees Stats</h4>
              <p class="card-category">New employees on 15th September, 2016</p>
            </div>
            <div class="card-body table-responsive">
              <table class="table table-hover">
                <thead class="text-warning">
                  <th>ID</th>
                  <th>Name</th>
                  <th>Salary</th>
                  <th>Country</th>
                </thead>
                <tbody>
                  <tr>
                    <td>1</td>
                    <td>Dakota Rice</td>
                    <td>$36,738</td>
                    <td>Niger</td>
                  </tr>
                  <tr>
                    <td>2</td>
                    <td>Minerva Hooper</td>
                    <td>$23,789</td>
                    <td>Curaçao</td>
                  </tr>
                  <tr>
                    <td>3</td>
                    <td>Sage Rodriguez</td>
                    <td>$56,142</td>
                    <td>Netherlands</td>
                  </tr>
                  <tr>
                    <td>4</td>
                    <td>Philip Chaney</td>
                    <td>$38,735</td>
                    <td>Korea, South</td>
                  </tr>
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
    </div>-->
    <div class="col-md-12">
        <div class="card">
          <div class="card-header card-header-primary">
            <h4 class="card-title ">Selamat Datang</h4>
            <p class="card-category"> {{auth()->user()->name}}</p>
            <p class="text-right">Point</p>
          <p class="text-right"><i class="fas fa-coins"> {{auth()->user()->points}}</i></p>
          </div>
          <div class="card-body">
          <!--Carousel Wrapper-->
<div id="carousel-example-1z" class="carousel slide carousel-fade" data-ride="carousel">
  <!--Indicators-->
  <ol class="carousel-indicators">
    <li data-target="#carousel-example-1z" data-slide-to="0" class="active"></li>
    <li data-target="#carousel-example-1z" data-slide-to="1"></li>
    <li data-target="#carousel-example-1z" data-slide-to="2"></li>
  </ol>
  <!--/.Indicators-->
  <!--Slides-->
  <div class="carousel-inner" role="listbox">
    <!--First slide-->
    <div class="carousel-item active">
    <a href="#"><img class="d-block w-100" src="https://mdbootstrap.com/img/Photos/Slides/img%20(130).jpg"
        alt="First slide">
    </div>
    <!--/First slide-->
    <!--Second slide-->
    <div class="carousel-item">
    <a href="#"><img class="d-block w-100" src="https://mdbootstrap.com/img/Photos/Slides/img%20(129).jpg"
        alt="Second slide">
    </div>
    <!--/Second slide-->
    <!--Third slide-->
    <div class="carousel-item">
    <a href="#"><img class="d-block w-100" src="https://mdbootstrap.com/img/Photos/Slides/img%20(70).jpg"
        alt="Third slide">
    </div>
    <!--/Third slide-->
  </div>
  <!--/.Slides-->
  <!--Controls-->
  <a class="carousel-control-prev" href="#carousel-example-1z" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carousel-example-1z" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
  <!--/.Controls-->
</div>
<!--/.Carousel Wrapper-->
<table class="col-md-12">
    <tr >
        <td  >
        
          
        <a href="{{route('piutang')}}"  target="new"><i class="fas fa-balance-scale text-center card"  style="font-size:36px;"></br><p> Piutang </p></i></a>
        <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <!--<button type="button" class="close" data-dismiss="modal">&times;</button>-->
          <h4 class="modal-title ">Piutang</h4>
        </div>
        <div class="modal-body">
          

        @foreach($wee as $p)
<div class="col-md-12">
        <div class="card"  style="border:2px solid black;color:black;">
    
    	<table class="table" >
        <tr>
        	
        	<td>Order Number</td>
        	<th>{{$p->order_number}}</th>
        </tr>

        <tr>
        	
        	<td>Status</td>
        	<th >{{$p->status}}</th>
        	
        </tr>

        
        	

         <tr>
        	
          <td>Harga</td>
          <th >Rp.{{$p->total}}</th>
        </tr>
    </table>
    
</div>
</div>

    



@endforeach


        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
      
    </div>
  </div>
            
        </td>
        <td >

        
        <a href="{{route('riwayat')}}"  target="new"><i class="fas fa-money-check text-center card"  style="font-size:36px;"></br><p> Riwayat </br>Order </p></i></a>
        <div class="modal fade" id="myModal2" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <h4 class="modal-title ">Riwayat Order</h4>
        </div>
        <div class="modal-body">

        @foreach($history as $p)
<div class="col-md-12">
        <div class="card"  style="border:2px solid black;color:black;">
    
    	<table class="table" >
        <tr>
        	
        	<td>Id</td>
        	<th>{{$p->id}}</th>
        </tr>

        <tr>
        	
        	<td>Quantity</td>
        	<th >{{$p->qty}}</th>
        	
        </tr>

        
        	

         <tr>
        	
          <td>Harga</td>
          <th >Rp.{{$p->total}}</th>
        </tr>
    </table>
    
</div>
</div>

    



@endforeach
        


        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
      
    </div>
  </div>

        </td>
        <td >
        
        <a href="{{route('riwayat')}}"  target="new"><i class="fa fa-shopping-cart text-center card"  style="font-size:36px;"></br><p> Order </br>Sekarang </p></i></a>
        <div class="modal fade" id="myModal3" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <h4 class=" text-center">Order Sekarang</h4>
        </div>
        <div class="modal-body">

        @foreach($history as $p)
<div class="col-md-12">
        <div class="card"  style="border:2px solid black;color:black;">
    
    	<table class="table" >
        <tr>
        	
        	<td>Id</td>
        	<th>{{$p->id}}</th>
        </tr>

        <tr>
        	
        	<td>Quantity</td>
        	<th >{{$p->qty}}</th>
        	
        </tr>

        
        	

         <tr>
        	
          <td>Harga</td>
          <th >Rp.{{$p->total}}</th>
        </tr>
    </table>
    
</div>
</div>

    



@endforeach
        
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
      
    </div>
  </div></td>
    </tr>
</table>



          </div>
          </div>
          </div>
    <html lang="en">

<title>Laravel DataTable - Tuts Make</title>
<link href="https://cdnjs.cloudflare.com/ajax/libs/material-design-lite/1.1.0/material.min.css" rel="stylesheet">  
<link  href="https://cdn.datatables.net/1.10.19/css/dataTables.material.min.css" rel="stylesheet">
<link rel='stylesheet' href='https://use.fontawesome.com/releases/v5.7.0/css/all.css' integrity='sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ' crossorigin='anonymous'>
<script src="https://code.jquery.com/jquery-3.3.1.js"></script>  
<script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.10.19/js/dataTables.material.min.js"></script>



      <body>
         

     
      <div class="col-md-12">
        <div class="card">
          <div class="card-header card-header-primary">
            <h4 class="card-title ">Table Costumer</h4>
            <p class="card-category"> Here is a subtitle for this table</p>
          </div>
          <div class="card-body">


    <table class="table table-hover table-striped" cellspacing="0" width="100%" id="customer">


        <thead>


            <tr>


                <th>No.</th>
                    
                    <th>Created At</th>
                    <th>Update At</th>
                    <th>Nama</th>
                    <th>Email</th>
                    <th>No. HP</th>
                    <th>Gender</th>
                    <th>type</th>
                    <th>refcode</th>
                    <th>Company Type</th>
                    <th>Company Name</th>
                    <th>Company Address</th>
                    <th>Company Email</th>
                    <th>Company Phone</th>
                    <th>Point</th>
                    <th>Deleted At</th>


            </tr>


        </thead>


    </table>







<script>


    $(document).ready( function () {
    


        $('#customer').DataTable({
             processing: true,
              "scrollX": true,
                serverSide: true,
                ajax: "{{ url('json') }}",
                columns: [
                    { data: 'id', name: 'id' },
                    { data: 'created_at', name: 'created_at' },
                    { data: 'updated_at', name: 'updated_at' },
                    { data: 'name', name: 'name' },
                    { data: 'email', name: 'email' },
                    { data: 'phone', name: 'phone' },
                    { data: 'gender', name: 'gender' },
                    { data: 'type', name: 'type' },
                    { data: 'refcode', name: 'refcode' },
                    { data: 'company_type', name: 'company_type' },
                    { data: 'company_name', name: 'company_name' },
                    { data: 'company_address', name: 'company_address' },
                    { data: 'company_email', name: 'company_email' },
                    { data: 'company_phone', name: 'company_phone' },
                    { data: 'points', name: 'points' },
                    { data: 'deleted_at', name: 'deleted_at' }

                ]


        });


    }); 


</script>
</div>
          </div>
          </div>

      <div class="col-md-12">
        <div class="card">
          <div class="card-header card-header-primary">
            <h4 class="card-title ">Table Order</h4>
            <p class="card-category"> Here is a subtitle for this table</p>
          </div>
          <div class="card-body">
<table  id="orderdah" class="table  table-striped table-hover"  width="100%">


        <thead>


            <tr>


                <th>Id</th>
                    <th>Created At</th>
                    <th>Updated At</th>
                    <th>Deleted At</th>
                    <th>Order Number</th>
                    <th>Real Invoice</th>
                    <th>customer ID</th>
                    <th>Refcode</th>
                    <th>VIP</th>
                    <th>Owner</th>
                    <th>website</th>
                    <th>Unique Code</th>
                    <th>Status</th>
                    <th>Total</th>
                    <th>Cashback</th>
                    <th>Inquiry Id</th>
                    <th>Payment Status</th>
                    <th>Invoice Address</th>


            </tr>


        </thead>


    </table>







<script>


    $(document).ready( function () {
    


        $('#orderdah').DataTable({
          
             processing: true,
              "scrollX": true,
                serverSide: true,
                ajax: "{{ url('json1') }}",
                columns: [


                    { data: 'id', name: 'id' },
                    { data: 'created_at', name: 'created_at' },
                    { data: 'updated_at', name: 'updated_at' },
                    { data: 'deleted_at', name: 'deleted_at' },
                    { data: 'order_number', name: 'order_number' },
                    { data: 'real_invoice', name: 'real_invoice' },
                    { data: 'customer_id', name: 'customer_id' },
                    { data: 'refcode', name: 'refcode' },
                    { data: 'vip', name: 'vip' },
                    { data: 'owner', name: 'owner' },
                    { data: 'website', name: 'website' },
                    { data: 'unique_code', name: 'unique_code' },
                    { data: 'status', name: 'status' },
                    { data: 'total', name: 'total' },
                    { data: 'cashback', name: 'cashback' },
                    { data: 'inquiry_id', name: 'inquiry_id' },
                    { data: 'payment_status', name: 'payment_status' },
                    { data: 'invoice_address', name: 'invoice_address' }
                    

                ]


        });


    }); 


</script>
</div>
          </div>
          </div>
        
      <div class="col-md-12">
        <div class="card">
          <div class="card-header card-header-primary">
            <h4 class="card-title ">Table Purchase</h4>
            <p class="card-category"> Here is a subtitle for this table</p>
          </div>
          <div class="card-body">
<table  id="purchase" class="table table-striped table-hover" cellspacing="0" width="100%">


        <thead>


            <tr>


               		<th>Id</th>                    
                    <th>Order Id</th>
                    <th>Pr Id</th>
                    <th>App</th>
                    <th>Aksi</th>
                    
                    


            </tr>


        </thead>


    </table>







<script>


    $(document).ready( function () {
    


        $('#purchase').DataTable({
          
             processing: true,
                serverSide: true,
                "scrollX": true,
                ajax: "{{ url('json2') }}",
                columns: [


                    { data: 'id', name: 'id' },                    
                    { data: 'order_id', name: 'order_id' },
                    { data: 'pr_id', name: 'pr_id' },
                    { data: 'app', name: 'app' },              
                      { data: 'action', name: 'action', orderable: false, searchable: false }

                   
                    

                ]


        });


    }); 


</script>
</div>
          </div>
          </div>
              
          <div class="col-md-12">
        <div class="card">
          <div class="card-header card-header-primary">
            <h4 class="card-title ">Table Purchase</h4>
            <p class="card-category"> Here is a subtitle for this table</p>
          </div>
@foreach($data as $p)
<div class="col-md-12">
        <div class="card"  style="border:2px solid black;color:black;">
    
    	<table class="table" >
        <tr>
        	
        	<td>Id</br></br>{{$p->id}}</td>
        	<th>Pr Id</br></br>{{$p->pr_id}}</th>
        </tr>

        <tr>
        	
        	<td>Order Id</br></br>{{$p->order_id}}</td>
        	<th rowspan="2">Beli Lagi</br></br></br></br><a href="#edit-{{($p->order_number)}}" class="btn btn-xs btn-primary" target="new"><i class="material-icons">date_range</i></a></th>
        	
        </tr>

        
        	

         <tr>
        	
        	<td>App</br></br>{{$p->app}}</td>
        </tr>
    </table>
    <div class="card-footer">
              <div class="stats">
                <i class="material-icons">update</i> {{($p->updated_at)}}
              </div>
            </div>
</div>
</div>

    



@endforeach
</div>
</div>

</body>
</html>
  </div>
@endsection

@push('js')
  <script>
    $(document).ready(function() {
      // Javascript method's body can be found in assets/js/demos.js
      md.initDashboardPageCharts();
    });
  </script>
@endpush