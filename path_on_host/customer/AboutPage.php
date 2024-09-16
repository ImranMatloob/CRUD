<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="mystyle.css">
    <title>This is my About Page</title>
</head>
<body>

<div id="mainBody">
    <div id="con1">
        <h1>About Page</h1>

        <div id="info-list">
            <?php
            include ('read.php');
            getPersonalinfo();
            ?>
        </div>
        <div id="ASL">
            <div id="ASL">
                <p>ASL:</p>
                <?php
                getASL();
                ?>
            </div>
            <div id="ASL">
                <p>Hobbies:</p>
                <div id="Hobbies">
                    <?php
                    getHobbies();
                    ?>
                </div>

            </div>