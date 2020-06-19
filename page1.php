<?php

require_once("header1.php");

?>


<html>
 <head>
 </head>
 <body>
   <h1 style= "color:white;"><b><ul> Week Programs</ul></b></h1>

    <h3 style= "color:white;"><b> Week-1</b></h3>
    <table >
      <tr>
        <td>
<h4>

  <form action="page2.php" method="POST" name="form1" onsubmit="document.form1.target='side2'; return true;">
  &emsp;
  <input type="submit" name="" value="program-1"  >
  &emsp;&emsp;&emsp;
 </form>

 <br>
</h4>
</td>
 <td>
   <h4>
 <form action="page3.php" method="POST" name="form2" onsubmit="document.form2.target='side2'; return true;">
 <input type="submit" name="" value="program-2"  >
</form>
<br>
</h4>
<td>
  </tr>
  <tr>
<td>
  <h4>
<form action="page4.php" method="POST" name="form3" onsubmit="document.form3.target='side2'; return true;">
&emsp;
<input type="submit" name="" value="program-3"  >
</form>
<br>
</h4>
</td>
<td>
  <h4>
<form action="page4.php" method="POST" name="form3" onsubmit="document.form3.target='side2'; return true;">
<input type="submit" name="" value="program-4"  >
</form>
<br>
</h4>
</td>
</table>
</h4>
</tr>
<br><br><br>
<h3 style= "color:white;"> Back to Home page </h3>
<h4>
   <form action='home.php' method="POST" name="Back to Home" target="_parent" >
    <input type="submit" name="" value="Back to Portal" >
</h4>
</body>
</html>
