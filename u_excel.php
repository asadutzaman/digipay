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
<?php  
require('dbConfig.php');
if(isset($_POST["submit"]))
{
 if($_FILES['file']['name'])
 {
  $filename = explode(".", $_FILES['file']['name']);
  if($filename[1] == 'csv')
  {
   $handle = fopen($_FILES['file']['tmp_name'], "r");
   while($data = fgetcsv($handle))
   {
    $item1 = mysqli_real_escape_string($db, $data[0]);  
                $item2 = mysqli_real_escape_string($db, $data[1]);
                $item3 = mysqli_real_escape_string($db, $data[2]);
                $query = "INSERT into recharge(phone_no, item, amount) values('$item1','$item2','$item3')";
                mysqli_query($db, $query);
   }
   fclose($handle);
   echo "<script>alert('Import done');</script>";
  }
 }
}
?>            
            <div class="row">
                <div class="col-lg-12">
                    <form method="post" enctype="multipart/form-data">
                       <div align="center">  
                        <label>Select CSV File:</label>
                        <input type="file" name="file" />
                        <br />
                        <input type="submit" name="submit" value="Import" class="btn btn-info" />
                       </div>
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
