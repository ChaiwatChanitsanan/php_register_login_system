<?php
    session_start();

    if(!isset($_SESSION['username'])){
        $_SESSION['msg'] = "You must login first";
        header('location: login.php');
    }

    if(isset($_GET['logout'])){
        session_destroy();
        unset($_SESSION['username']);
        header('location: login.php');
    }

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home Page</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="homeheader">
        <h2>Home Page</h2>
    </div>
    <div class="homecontent">
        <!-- notification message-->
        <?php if (isset($_SESSION['success'])) :?>
            <div class="success">
                <h3>
                    <?php 
                        echo $_SESSION['success'];
                        unset($_SESSION['success']);
                    ?>
                </h3>
            </div>
        <?php endif ?>
        <!-- logged in user information-->
        <?php if (isset($_SESSION['username'])): ?>
            <p>Welcome <strong><?php echo $_SESSION['username']; ?></strong></p>
            <p><a href="index.php?logout=1" style="color: red;">Logout</a></p>
        <?php endif ?>
    </div>
    
        <div id="introduction">
            <h1>The Brown Bear</h1>
            <h2>About Brown Bears</h2>
            <p>The brown bear (<em>Ursus arctos</em>) is native to parts of northern Eurasia and North America. Its conservation status is currently <strong>Least Concern</strong>.<br /><br /> There are many subspecies within the brown bear species, including the Atlas bear and the Himalayan brown bear.</p>
            <h3>Species</h3>
            <ul>
                <li>Arctos</li>
                <li>Collarus</li>
                <li>Horribilis</li>
                <li>Nelsoni (extinct)</li>
            </ul>
            <h3>Features</h3>
            <p>Brown bears are not always completely brown. Some can be reddish or yellowish. They have very large, curved claws and huge paws. Male brown bears are often 30% larger than female brown bears. They can range from 5 feet to 9 feet from head to toe.</p>
        </div>
        <div id="habitat">
            <h2>Habitat</h2>
            <h3>Countries with Large Brown Bear Populations</h3>
            <ol>
                <li>Russia</li>
                <li>United States</li>
                <li>Canada</li>
            </ol>
            <h3>Countries with Small Brown Bear Populations</h3>
            <p>Some countries with smaller brown bear populations include Armenia, Belarus, Bulgaria, China, Finland, France, Greece, India, Japan, Nepal, Poland, Romania, Slovenia, Turkmenistan, and Uzbekistan.</p>
        </div>
        <div id="media">
            <h2>Media</h2>
            <img src="https://content.codecademy.com/courses/web-101/web101-image_brownbear.jpg" alt="A Brown Bear"/>
            <video src="https://content.codecademy.com/courses/freelance-1/unit-1/lesson-2/htmlcss1-vid_brown-bear.mp4" width="320" height="240"  controls>
            Video not supported
            </video>
        </div>
</body>
</html>