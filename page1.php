


<html>
 <head>
 </head>
 <body>
   <h1>Hello World this is page 1<h1>
  <form action="page2.php" method="POST" name="form1" onsubmit="document.form1.target='side2'; return true;">
  <input type="submit" name="" value="week1 program 1"  >
</form>

 <form action="page3.php" method="POST" name="form2" onsubmit="document.form2.target='side2'; return true;">
 <input type="submit" name="" value="week 1 program 2"  >
</form>

<form action="page4.php" method="POST" name="form3" onsubmit="document.form3.target='side2'; return true;">
<input type="submit" name="" value="week 1 program 3"  >
</form>


<h2> Back to Home page <h2>

   <form action='home.php' method="POST" name="Back to Home" target="_parent" >
    <input type="submit" name="" value="Back to Portal" >

</body>
</html>
