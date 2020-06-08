<?php

require_once("header1.php");

?>


<html>
 <head>
 </head>
 <body>
   <h1 style= "color:white;"> Week Programs <h1>
  <form action="page2.php" method="POST" name="form1" onsubmit="document.form1.target='side2'; return true;">
  <input type="submit" name="" value="week1 program 1"  >
</form>
<br>

 <form action="page3.php" method="POST" name="form2" onsubmit="document.form2.target='side2'; return true;">
 <input type="submit" name="" value="week 1 program 2"  >
</form>
<br>

<form action="page4.php" method="POST" name="form3" onsubmit="document.form3.target='side2'; return true;">
<input type="submit" name="" value="week 1 program 3"  >
</form>
<br>


<h2 style= "color:white;"> Back to Home page <h2>

   <form action='home.php' method="POST" name="Back to Home" target="_parent" >
    <input type="submit" name="" value="Back to Portal" >

</body>
</html>
