<?php $pageTitle = "Request Page";
include "inc/header.php";
include "inc/linkstyler.php";
?>

    <?php

      $con = mysql_connect("localhost", "root", "") or
      die("Could not connect: " . mysql_error());
      mysql_select_db("testdb");

      $fname = $_POST['fname'];
      $lname = $_POST['lname'];
      $email = $_POST['email'];


      $sql =  mysql_query("INSERT INTO MyGuests (firstname, lastname, email)
              VALUES ('$fname', '$lname', '$email')");



    ?>
    <div id="wrapper">
      <h3>Thank you for loggin in, <?php echo $_POST['fname']?>.</h3>
    </div>
</body>
</html>

<?php
    include "inc/connection.php";
    // $sql = "SELECT * FROM MyGuests";
    $conn->query($sql);
    include "inc/footer.php"
 ?>
