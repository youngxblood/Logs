<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="css/normalize.css">
    <link href="https://fonts.googleapis.com/css?family=Nunito+Sans" rel="stylesheet">
    <link rel="stylesheet" href="css/styles.css">
    <title><?php echo $pageTitle; ?></title>

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
    </nav>

</header>