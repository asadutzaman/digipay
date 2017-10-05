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
                    <h1 class="page-header">Add Your Employee</h1>
                </div>
                <!-- /.col-lg-12 -->
				<div class="col-lg-6">
				<?php
					
					require('dbConfig.php');
					if (isset($_POST['submit'])){
                        
                        $name       = $_POST['name'];
						$email      = $_POST['email'];
						$password   = $_POST['password']; 
						$join_date  = date("Y-m-d H:i:s") ;
						$designation=$_POST['designation'];
						$salary     =$_POST['salary'];
						$address    =$_POST['address'];
						$phone      =$_POST['phone'];
						$extra_info =$_POST['extra_info'];


						
						$query = "INSERT into employee (name, email, password, join_date, designation, salary, address, phone, extra_info) 
						                        VALUES ('$name', '$email', '$password', '$join_date', '$designation', '$salary', '$address', '$phone', '$extra_info')" ;
						$result = mysqli_query($con, $query);
						if ($result){
							echo '<div class="form"><h3>You have created an Employee successfully.</h3></div>' ;
						
					}
					}else{ echo 'Problem :/'; } 
				?>

					    <form action="" method="post" name="registration">
                            <fieldset>
                                <div class="form-group">
                                    <input class="form-control" type="text" name="name" placeholder="Employee Name" required />
                                </div>
                                <div class="form-group">
                                    <input class="form-control" type="text" name="email" placeholder="Email address" required />
                                </div>
                                <div class="form-group">
                                    <input class="form-control" type="password" name="password" placeholder="Password" required />
                                </div>
                                <div class="form-group">
                                    <input class="form-control" type="text" name="designation" placeholder="designation" required />
                                </div>
                                <div class="form-group">
                                    <input class="form-control" type="number" name="salary" placeholder="salary" required />
                                </div>
                                <div class="form-group">
                                    <input class="form-control" type="text" name="address" placeholder="address" required />
                                </div>
                                <div class="form-group">
                                    <input class="form-control" type="text" name="phone" placeholder="phone" required />
                                </div>
                                <div class="form-group">
                                    <input class="form-control" type="text" name="extra_info" placeholder="Extra information" required />
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
