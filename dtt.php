
<!DOCTYPE html>
<html>
<head>
    <title></title>
    <link href="css/bootstrap.min.css" rel="stylesheet">

        <!-- MetisMenu CSS -->
        <link href="../css/metisMenu.min.css" rel="stylesheet">

        <!-- DataTables CSS -->
        <link href="dataTables/dataTables.bootstrap.css" rel="stylesheet">

        <!-- DataTables Responsive CSS -->
        <link href="dataTables/dataTables.responsive.css" rel="stylesheet">

        <!-- Custom CSS -->
        <link href="../css/startmin3.css" rel="stylesheet">

        <!-- Custom Fonts -->
        <link href="css/font-awesome.min.css" rel="stylesheet" type="text/css">

</head>

<body>

<div id="departmentlist" class="tab-pane active">







 <div class="row">
                    <div class="col-lg-12">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                DataTables Advanced Tables
                            </div>
                            <!-- /.panel-heading -->
                            <div class="panel-body">
                                <div class="dataTable_wrapper">
                                    <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                        <thead>
                                            <tr>
                                                <th>Name</th>
                                                <th>Description </th>
                                               <th>datecreated</th>
                                                <th>addedby</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
   
<?php 
$sql37="SELECT* FROM  departments ";

if($result37=mysqli_query($con,$sql37)){

if(mysqli_num_rows($result37)==Null){

    $noloan="You have no loan applications";
  }

  while($row37=mysqli_fetch_assoc($result37)){
    
    $receiptNum=$row37['Name'];
      $paymentof=$row37['Description'];
        $Amount=$row37['datecreated'];
          $by_name=$row37['addedby'];
           
?>


<tr>
<td><?php echo $receiptNum;?></td>
<td><?php echo $paymentof;?></td>
<td><?php echo $Amount;?></td>
<td><?php echo $by_name;?></td>
<td>
<label>Edit</label>
<br>
<button  type="button"  class="btn  btn-warning  edt" ></button>
<label>Service</label>
<br>
<button type="button"  class="btn  btn-warning   profession4"  id="btnaddpr4" ></button>
<br>
<label>profession</label>
<br>
<button type="button"  class="btn  btn-warning   professionb"  id="btnaddpr" ></button>
<label>Delete</label>
<br>
<button type="button"  class="btn  btn-warning   depdel11"  id="depdl" ></input>
</td>
</tr>

<?php

}}else{

    $noloan=mysqli_error($con);
}

?>



                                           
                                            
                                            
                                          
                                            
                                        </tbody>
                                    </table>
                                </div>
                                <!-- /.table-responsive -->
                               
                            </div>
                            <!-- /.panel-body -->
                        </div>
                        <!-- /.panel -->
                    </div>
                    <!-- /.col-lg-12 -->
                </div>
                <!-- /.row -->


                </div><!--departmentlist-->
</body>

 <!-- DataTables JavaScript -->
        <script src="js/dataTables/jquery.dataTables.min.js"></script>
        <script src="js/dataTables/dataTables.bootstrap.min.js"></script>

  <script>
            $(document).ready(function() {
                $('#dataTables-example').DataTable({
                        responsive: true
                });
            });    



        </script>
</html>