<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap-theme.css">
    <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.css">
    <link href="https://fonts.googleapis.com/css?family=Nunito+Sans" rel="stylesheet">
    <link rel="stylesheet" href="css/styles.css">
    <title><?php echo $pageTitle; ?></title> <!-- VARIABLE $pageTitle DECLARED AT THE TOP OF EACH PAGE -->

</head>
<body>
<header>
    <a href="index.php"><h1>Loggy: For You</h1></a>
    <br/>       <!--     |Below is the date function that grabs the date real-time|     -->
    <span class="date"> <?php echo date("l, j, F") ?> </span>

    <nav class="headerNAV"> <!--     |PHP to enable link styling, $section = page|     -->
        <a href="about.php?cat=about" class="<?php if ($section == "about") {
            echo "on";
        } ?>">ABOUT</a>
        <a href="logs.php?cat=logs" class="<?php if ($section == "logs") {
            echo "on";
        } ?>">LOGS</a>
        <a href="userfeedback.php?cat=feedback" class="<?php if ($section == "feedback") {
            echo "on";
        } ?>">FEEDBACK</a>
                <a href="bootstrap.php?cat=bootstrap" class="<?php if ($section == "bootstrap") {
            echo "on";
        } ?>">BOOTSTRAP</a>
    </nav>

</header>