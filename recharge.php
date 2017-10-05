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
                    <h1 class="page-header">Recharge</h1>
                </div>
                <!-- /.col-lg-12 -->
				<div class="col-lg-6">
				<?php
					
					require('dbConfig.php');
					if (isset($_POST['submit'])){
                        
                        $phone_no   =   $_POST['phone_no'];
						$item       =   $_POST['item'];
						$amount     =   $_POST['amount'];
						$a     =   10;
						//$join_date  =   date("Y-m-d H:i:s") ;
						
						$query      =   "INSERT into recharge (phone_no, item, amount) 
						                        VALUES ('$phone_no', '$item', '$amount')" ;
						$result     =   mysqli_query($db, $query);
						if ($result){
							echo '<div class="form"><h3>You have recharged ' . $amount . ' tk to ' . $phone_no . ' successfully.</h3></div>' ;
						
					}
					}else{ echo 'Please give your phone number'; } 
				?>

					    <form action="" method="post" name="registration">
                            <fieldset>
                                <div class="form-group">
                                    <input class="form-control" type="text" name="phone_no" placeholder="Phone Number" minlength="11" maxlength="11" required />
                                </div>
                                <div class="form-group">
                                    <label class="radio-inline"><input type="radio" name="item" value="Pre-paid" required>Pre-paid</label>
                                    <label class="radio-inline"><input type="radio" name="item" value="Post-paid" required>Post-paid</label>
                                </div>
                                <div class="form-group">
                                    <input class="form-control" type="number" name="amount" placeholder="Amount" required />
                                </div>

                                 <!-- Change this to a button or input when using this as a form -->
                                <input class="form-control" name="submit" type="submit" value="submit" />
                            </fieldset>

                        </form>
                    <!-- /.panel -->
                </div>
            </div>
            <!-- /.row -->
        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->

    <!-- Core Scripts - Include with every page -->


    <!-- Page-Level Demo Scripts - Blank - Use for reference -->

</body>

<?php include 'footer.php'; ?>
</html>
