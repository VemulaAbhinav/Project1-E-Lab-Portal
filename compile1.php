<?php
require_once("config.php");
session_start();
if(!isset($_SESSION["un"]))
{
  header("Location:login.php");
}

if(isset($_SESSION['un']))
{
  $username=$_SESSION['un'];
  $progid=$_SESSION["weekid"];
}


?>


<!DOCTYPE html>
<html>
<head>


        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>Home</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <link rel="stylesheet" href="css/font-awesome.min.css">
        <link rel="stylesheet" href="css/normalize.css">
        <link rel="stylesheet" href="css/main.css">
        <link rel="stylesheet" href="css/style.css">
        <script src="js/vendor/modernizr-2.8.3.min.js"></script>
        <script src="js/vendor/jquery-1.12.0.min.js"></script>
        <script src="bootstrap-3.3.7/js/bootstrap.min.js" </script>
        <script src="bootstrap-3.3.7/js/bootstrap.js" </script>


</head>
<body>
<div class="main">
<?php

require_once("header1.php");

?>

<div class="row log">
<div class="col-sm-10">
<div class=""><h3 style="text-align:center; color:white">Output</h3></div>
</div>

<div class="col-sm-1">

</div>

<div class="col-sm-1">

</div>

</div>


<div class="row cspace">
<div class="col-sm-1">
</div>
<div class="col-sm-8">


<?php
if(isset($_POST['code']))
{

$code=$_POST['code'];
$query ="SELECT  source_code from code where id='".$progid."' And submited='".$username."'";
$result = mysqli_query($con,$query);

if($result->num_rows >0 )
{
    $q1="UPDATE code SET source_code='".$code."',id='".$progid."' where submited='".$username."'";
    $result = mysqli_query($con,$q1);
}
else
{
  $q2="INSERT INTO code (source_code, id, submited) VALUES ('$code','$progid','$username')";
  $result = mysqli_query($con,$q2);
}
}


	$languageID=$_POST["language"];
        error_reporting(0);
	if($_FILES["file"]["name"]!="")
	{
		include "compilers/make.php";
	}
	else
	{
		switch($languageID)
			{
				case "c":
				{
					include("compilers/c.php");
					break;
				}
				case "cpp":
				{
					include("compilers/cpp.php");
					break;
				}


				case "java":
				{
					include("compilers/java.php");
					break;
				}

			}
	}
?>

</div>

<div class="col-sm-3">

</div>
</div>
<br><br><br>

<?php

require_once("footer.php");

?>
</div>


</body>
</html>
