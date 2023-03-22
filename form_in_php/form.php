<!DOCTYPE HTML>
<html>  
<body>

<form action="log-in-response.php" method="get">
Name: <input type="text" name="first_name"><br>
Cognome: <input type="text" name="last_name"><br>
E-mail: <input type="text" name="email"><br>
Password: <input type="password" value="segretissimo" name="pasword"><br>

<input type="submit">
</form>

</body>
</html>

<!-- curl http://localhost/corso_php_mysql_tss/form_in_php/log-in-response.php?email=sbagliata -->