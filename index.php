<!DOCTYPE html>
<html>
<head>
<script type="text/javascript">
	function getback(){window.history.forward()};
	setTimeout("getback()",0);
	window.onunload=function(){null;}
</script></head>
<body>

<form action="connect.php" Method="POST">
<h2>LOGIN</h2>


<Label for="test_name">test_name :</label><br />
<input type="text" name="tname"  required><br /><br />

<Label for="password">test_password :</label><br />
<input type="password" name="tpassword" required> <br />

<input type="submit" value="submit">
<input type="reset" value="cancel">
</form>


</body>
</html>