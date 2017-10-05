<?php

include("auth.php"); //include auth.php file on all secure pages ?>

<!DOCTYPE html>
<html>

<?php include 'head.php';?>

<body>

    <div id="wrapper">

              <?php include 'nav.php'; ?>

        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Tables</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
<div class="panel panel-default">
                        <div class="panel-heading">
                            Employee List
                        </div>
							<?php
								
								include 'dbConfig.php';
								
								$sql = "SELECT * FROM employee";
								$result = $db->query($sql);
								
							?>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover">
                                    <thead>
                                        <tr>
                                            <th>ID</th>
                                            <th>Name</th>
											<th>Email</th>
                                            <th>Password</th>
                                            <th>Join Date</th>
                                            <th>Designation</th>
                                            <th>Salary</th>
											<th>Address</th>
                                            <th>Phone No</th>
                                            <th>Extra information</th>
											
                                        </tr>
                                    </thead>
                                    <tbody>
										  <?php     
										  // output data of each row
										   while($row = $result->fetch_assoc()) {
										  ?>
											<tr  class="danger">
											 <td><?php echo $row["id"] ?></td>
											 <td><strong><?php echo $row["name"] ?></strong></td>
											 <td> <?php echo $row["email"]?></td>
											 <td> <?php echo $row["password"]?></td>
											 <td> <?php echo $row["join_date"] ?></td>
											 <td> <?php echo $row["designation"]?></td>
											 <td> <?php echo $row["salary"]?></td>
											 <td> <?php echo $row["address"]?></td>
											 <td> <?php echo $row["phone"]?></td>
											 <td> <?php echo $row["extra_info"]?></td>
											 
										   </tr>
										  <?php
											}
										  ?>
                                    </tbody>
                                </table>
                            </div>
                            <!-- /.table-responsive -->
                        </div>
                        <!-- /.panel-body -->
                    </div>
                <!-- /.col-lg-6 -->
                </div>
            <!-- /.row -->
            </div>
        <!-- /#page-wrapper -->

        </div>
    </div>
    <!-- /#wrapper -->
</body>
    <!-- Core Scripts - Include with every page -->
<?php include 'footer.php'; ?>

</html>