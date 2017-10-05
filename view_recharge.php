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
                    <h1 class="page-header">Recharge History</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
<div class="panel panel-default">
                        <div class="panel-heading">
                            Recharge List
                        </div>
							<?php
								
								include 'dbConfig.php';
								
								$sql = "SELECT * FROM recharge";
								$result = $db->query($sql);
								
							?>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover">
                                    <thead>
                                        <tr>
                                            <th>ID</th>
                                            <th>Phone Number</th>
											<th>Item</th>
                                            <th>Amount</th>
                                        </tr>
                                    </thead>
                                    <tbody>
										  <?php     
										  // output data of each row
										   while($row = $result->fetch_assoc()) {
										  ?>
											<tr  class="danger">
											 <td><?php echo $row["id"] ?></td>
											 <td><strong><?php echo $row["phone_no"] ?></strong></td>
											 <td> <?php echo $row["item"]?></td>
											 <td> <?php echo $row["amount"]?></td>
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