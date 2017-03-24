<?php $pageTitle = "Feedback";
$section = "feedback";
include "inc/header.php";
include "inc/linkstyler.php";
?>

<div class="content">
<div class="content-inside" id="wrapper">

<h2>HERE THE USER CAN SUBMIT FEEDBACK TICKETS</h2>

<form action="acceptfeedback.php" method="post">

  <label for="fname">First Name:</label>  <input type="text" id="fname" name="feed-fname"><br>

  <label for="lname">Last Name:</label><input type="text" id="lname" name="feed-lname"><br>

  <label for="email">Email:</label><input type="text" id="email" name="feed-email"><br>

  <label for="comm">Comment:</label><textarea rows="15" cols="80" name="comment" placeholder="Enter text here..."></textarea><br>

  <input type="submit" value="Submit">
 </form>

</div>
</div>



<div>









<?php
    include "inc/footer.php";
 ?>
