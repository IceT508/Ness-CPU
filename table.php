<?php
include 'init.php';
$sql = "SELECT * FROM users";
$results = $link->query($sql);
?>
<html>
  <head>
    <title>Retrieving From Database</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  </head>
  <body>
    <br>

    <div class="container">
      <h4>The table below shows an example of Displaying database data inside a table</h4>
    <table class="table">
      <thead class="thead-dark">
        <tr>
          <th scope="col">First</th>
          <th scope="col">Last</th>
          <th scope="col">Username</th>
            <th scope="col">Email</th>
        </tr>
      </thead>
      <tbody>
        <?php
        while($userInfo = mysqli_fetch_assoc($results)):
        ?>
        <tr>
          <td><?php echo $userInfo['first_name'] ;?></td>
          <td><?php echo $userInfo['last_name'] ;?></td>
          <td><?php echo $userInfo['username'] ;?></td>
          <td><?php echo $userInfo['email'] ;?></td>
        </tr>
      <?php endwhile ;?>
      </tbody>
    </table>
  </div>
  </body>
</html>
