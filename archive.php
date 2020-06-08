<?php

session_start();

if(!isset($_SESSION["un"]))
{
	header("Location:login.html");
}

if(isset($_SESSION['un']))
{
	$username=$_SESSION['un'];
}

?>




<!DOCTYPE html>
<html>
<head>


        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>Archive</title>
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
        <script src="js/jquery.nivo.slider.js" type="text/javascript"></script>




				<frameset cols="50%,*">
					<frame src="page1.php" name="page1">
					<frame name="page2">
				</frameset>



</head>
<body>
<div class="main">
<?php

include("header.php");
?>


<?php


require_once("config.php");


?>

</div>

	<div class="col-sm-2">



	</div>
	</div>
<?php

require_once("footer.php");

?>
</div>


</body>
</html>
