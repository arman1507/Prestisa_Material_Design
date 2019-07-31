@extends('layouts.app', ['activePage' => 'table', 'titlePage' => __('Table List')])

@section('content')
<div class="content">
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-12">
        <div class="card">
          <div class="card-header card-header-primary">
            <h4 class="card-title ">Simple Table</h4>
            <p class="card-category"> Here is a subtitle for this table</p>
          </div>
          <div class="card-body">
            <div class="table-responsive">
              <table class="table">
                <thead class=" text-primary">
                  <th>
                    ID
                  </th>
                  <th>
                    Name
                  </th>
                  <th>
                    Country
                  </th>
                  <th>
                    City
                  </th>
                  <th>
                    Salary
                  </th>
                </thead>
                <tbody>
                  <tr>
                    <td>
                      1
                    </td>
                    <td>
                      Dakota Rice
                    </td>
                    <td>
                      Niger
                    </td>
                    <td>
                      Oud-Turnhout
                    </td>
                    <td class="text-primary">
                      $36,738
                    </td>
                  </tr>
                  <tr>
                    <td>
                      2
                    </td>
                    <td>
                      Minerva Hooper
                    </td>
                    <td>
                      Curaçao
                    </td>
                    <td>
                      Sinaai-Waas
                    </td>
                    <td class="text-primary">
                      $23,789
                    </td>
                  </tr>
                  <tr>
                    <td>
                      3
                    </td>
                    <td>
                      Sage Rodriguez
                    </td>
                    <td>
                      Netherlands
                    </td>
                    <td>
                      Baileux
                    </td>
                    <td class="text-primary">
                      $56,142
                    </td>
                  </tr>
                  <tr>
                    <td>
                      4
                    </td>
                    <td>
                      Philip Chaney
                    </td>
                    <td>
                      Korea, South
                    </td>
                    <td>
                      Overland Park
                    </td>
                    <td class="text-primary">
                      $38,735
                    </td>
                  </tr>
                  <tr>
                    <td>
                      5
                    </td>
                    <td>
                      Doris Greene
                    </td>
                    <td>
                      Malawi
                    </td>
                    <td>
                      Feldkirchen in Kärnten
                    </td>
                    <td class="text-primary">
                      $63,542
                    </td>
                  </tr>
                  <tr>
                    <td>
                      6
                    </td>
                    <td>
                      Mason Porter
                    </td>
                    <td>
                      Chile
                    </td>
                    <td>
                      Gloucester
                    </td>
                    <td class="text-primary">
                      $78,615
                    </td>
                  </tr>
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
      <div class="col-md-12">
        <div class="card card-plain">
          <div class="card-header card-header-primary">
            <h4 class="card-title mt-0"> Table on Plain Background</h4>
            <p class="card-category"> Here is a subtitle for this table</p>
          </div>
          <div class="card-body">
            <div class="table-responsive">
              <table class="table table-hover">
                <thead class="">
                  <th>
                    ID
                  </th>
                  <th>
                    Name
                  </th>
                  <th>
                    Country
                  </th>
                  <th>
                    City
                  </th>
                  <th>
                    Salary
                  </th>
                </thead>
                <tbody>
                  <tr>
                    <td>
                      1
                    </td>
                    <td>
                      Dakota Rice
                    </td>
                    <td>
                      Niger
                    </td>
                    <td>
                      Oud-Turnhout
                    </td>
                    <td>
                      $36,738
                    </td>
                  </tr>
                  <tr>
                    <td>
                      2
                    </td>
                    <td>
                      Minerva Hooper
                    </td>
                    <td>
                      Curaçao
                    </td>
                    <td>
                      Sinaai-Waas
                    </td>
                    <td>
                      $23,789
                    </td>
                  </tr>
                  <tr>
                    <td>
                      3
                    </td>
                    <td>
                      Sage Rodriguez
                    </td>
                    <td>
                      Netherlands
                    </td>
                    <td>
                      Baileux
                    </td>
                    <td>
                      $56,142
                    </td>
                  </tr>
                  <tr>
                    <td>
                      4
                    </td>
                    <td>
                      Philip Chaney
                    </td>
                    <td>
                      Korea, South
                    </td>
                    <td>
                      Overland Park
                    </td>
                    <td>
                      $38,735
                    </td>
                  </tr>
                  <tr>
                    <td>
                      5
                    </td>
                    <td>
                      Doris Greene
                    </td>
                    <td>
                      Malawi
                    </td>
                    <td>
                      Feldkirchen in Kärnten
                    </td>
                    <td>
                      $63,542
                    </td>
                  </tr>
                  <tr>
                    <td>
                      6
                    </td>
                    <td>
                      Mason Porter
                    </td>
                    <td>
                      Chile
                    </td>
                    <td>
                      Gloucester
                    </td>
                    <td>
                      $78,615
                    </td>
                  </tr>
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<html lang="en">
<head>
<title>Laravel DataTable - Tuts Make</title>
<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet">  
<link  href="https://cdn.datatables.net/1.10.16/css/jquery.dataTables.min.css" rel="stylesheet">
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>  
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
<script src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>
</head>
      <body>
         




    <table class="table" id="customer">


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
<table class="table" id="orderdah">


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

<table class="table" id="purchase">


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

@foreach($data as $p)
    
    <div class="row">
    <div class="col-md-6">
    	<table class="table" border="5">
        <tr>
        	
        	<td>Id</br></br>{{$p->id}}</td>
        	<th>Pr Id</br></br>{{$p->pr_id}}</th>
        </tr>

        <tr>
        	
        	<td>Order Id</br></br>{{$p->order_id}}</td>
        	<th rowspan="2">Beli Lagi</br></br></br></br><a href="#edit-{{($p->order_number)}}" class="btn btn-xs btn-primary" target="new"><i class="glyphicon glyphicon-edit"></i> Edit</a></th>
        	
        </tr>

        
        	

         <tr>
        	
        	<td>App</br></br>{{$p->app}}</td>
        </tr>
    </table>
    </div>
</div>

@endforeach

   </body>
</html>
@endsection