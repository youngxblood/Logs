<?php $pageTitle = "Home";
include "inc/header.php";

?>

<div class="content">
<div id="wrapper" class="content-inside">
    <h3>
        TESTING WRAPPERS:
    </h3>
    <br/>
    <p>
        Here I am testing my wrappers to make sure they work. I am also testing my 'p' tags and their styling.
    </p>
    <p>
        Here I am testing my wrappers to make sure they work. I am also testing my 'p' tags and their styling.
    </p>
    <p>
        Here I am testing my wrappers to make sure they work. I am also testing my 'p' tags and their styling.
    </p>
    <br/>
    <form action="welcome.php" method="post">
        Name: <input type="text" name="name"><br>
        E-mail: <input type="text" name="email"><br>
        <input type="submit">
    </form>


</div>
</div>


<?php
    include "inc/footer.php"
 ?>
