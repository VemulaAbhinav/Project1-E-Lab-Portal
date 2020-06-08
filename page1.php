<html>
 <head>
 </head>
 <body>
   <h1>Hello World this is page 1<h1>
  <form action="page2.php" method="POST" name="form1" onsubmit="document.form1.target='side2'; return true;">
  <input type="submit" name="" value="simulate1"  >
</form>

<form action="page3.php" method="POST" name="form2" onsubmit="document.form2.target='side2'; return true;">
<input type="submit" name="" value="simulate2"  >
</form>

 </body>
</html>
