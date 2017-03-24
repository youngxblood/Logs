<?php $pageTitle = "Request Page";
include "inc/header.php";
include "inc/linkstyler.php";
?>

<p>

    <?php
    if (isset ($_POST["name"])) {
        echo $_POST ['name'] . "<br>";
    } else {
        echo "Post 'test' is empty!<br>";
      }
      echo $_POST ['email'];
    ?>
</p>
</body>
</html>

<?php
    include "inc/footer.php"
 ?>
