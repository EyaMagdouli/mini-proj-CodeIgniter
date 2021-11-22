<!DOCTYPE html>
<html>
<head>
<title>Registration form</title>
</head>

<body>
	<form method="post">
		<table width="600" align="center" border="1" cellspacing="5" cellpadding="5">
	<tr>
		<td colspan="2"><?php echo @$error; ?></td>
	</tr>	
  <tr>
    <td width="230">Username: </td>
    <td width="329"><input type="text" name="username"/></td>
  </tr>
  
  <tr>
    <td>Email: </td>
    <td><input type="text" name="email"/></td>
  </tr>
  
  <tr>
    <td>Password: </td>
    <td><input type="password" name="password"/></td>
  </tr>
  
  <tr>
    <td colspan="2" align="center">
	<input type="submit" name="register" value="Register Me"/></td>
  </tr>
</table>

	</form>
</body>
</html>
