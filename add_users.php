<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <title>Add Record Form</title>
  </head>
  <body>
    <form action="insert.php" method="post">
      <p>
        <label for="firstName">First Name:</label>
        <input type="text" name="first_name" id="firstName">
      </p>
      <p>
        <label for="lastName">Last Name:</label>
        <input type="text" name="last_name" id="lastName">
      </p>
      <input type="submit" value="Submit" name="submit">
    </form>
  </body>
</html>
