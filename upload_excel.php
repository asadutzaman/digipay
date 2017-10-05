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
            

<?php include ('dbConfig.php');?>
<?php
	if(isset($_POST['uploadBtn'])){
		$fileName	=	$_FILES['myFile']['name'];
		$fileTempName	=$_FILES['myFile']['tmp_name'];

		$fileExtention	=	pathinfo($fileName, PATHINFO_EXTENSION);


		$allowedType	=	array('csv');
		if(!in_array($fileExtension, $allowedType)){?>	
			<div class="alert alert-danger">
				Invalid File Extension
			</div>
		<?php } else{

			$handle = fopen($fileTmpName, 'r');
			while	(($myData=fgetcsv($handle,1000, ',')) !==FALSE){
				$phone_no	=	$myData[0];
				$item		=	$myData[1];
				$amount		=	$myData[2];

				$query	=	"insert into recharge(phone_no, item, amount) values('".$phone_no."','".$item."', '".amount."')"; 
				$run	=	mysql_query($query);				
			}
			if(!$run){
				die("error in uploading file".mysql_error());			
			}else {?>
				<div class="alert alert-success">
					File upload Succesfully
				</div>
			<?php }		
			}
		}			
?>
            <div class="row">
                <div class="col-lg-12">

                    <form action="" method="post" enctype="multipart/form-data" >
                    	<h3 class="text-center">
                    		upload file
                    	</h3></hr>
                    	
                    	<span class="control-fileupload">
                          <label for="file">Choose a file :</label>
                            <input type="file" id="file" name="myFile" class="form-control">
                        </span>

                    				    <input class="btn btn-info" name="uploadBtn" type="submit" value="submit" />
                    			
                    </form>


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
