
<html>
<head>
<title>Custom Form</title>
</head>
<body>
  <h2>Custom Form</h2>
  <form action="./mail.php" method="post">
  <fieldset>
  <legend>Custom Form:</legend>
  First Name:
  <input type="text" name="fname"><br><br>
 Last Name:
  <input type="text" name="lname"><br><br>
  Subject:
  <input type="text" name="Subject"><br><br>
   Message:
  <textarea rows="10" cols="45" name="message"></textarea><br><br>
  E-mail:
  <input type="text" name="email"><br><br>

  <input type="submit" value="Send mail">
  </fieldset>
  </form>
</body>
</html>