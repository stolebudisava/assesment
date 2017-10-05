<html>
<body>
  <?php

  require "backend_3_Validator.php";
  $validate = new Validator();

  ?>
<form action="validateForm()" method="post">

<table border="0">

<tr>
	<td>Full name</td>
	<td align="center"><input type="text" name="fullName" /></td>
</tr>

<tr>
	<td>Password</td>
	<td align="center"><input type="password" name="password" /></td>
</tr>

<tr>
	<td>Confirm password</td>
	<td align="center"><input type="password" name="cpassword" /></td>
</tr>

<tr>
<td colspan="2" align="center"><input type="submit" value="Submit"/></td>
</tr>

<?php
  echo $passwordErr;
 ?>

</table>
</form>


</body>
</html>
