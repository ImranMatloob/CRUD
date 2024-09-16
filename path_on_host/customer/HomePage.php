<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="mystyle.css">
    <title>This is my HomePage</title>
</head>
<body>

<div id="mainBody">
    <div id="con1">
        <h1>Imran Matloob</h1>
        <h1>Personal Information</h1>

        <div id="info-list">
            <?php
            include ('read.php');
            getPersonalinfo();
            ?>
        </div>

    </div>

    <div id="profilePicture">
        <img src="avatar-man-icon-cartoon-male-profile-mascot-illustration-head-face-business-user-logo-free-vector.jpg" alt="Profile Picture" width="300" height="300">
    </div>

    <div id="description">
        <h2>About Me</h2>
        <p> <?php
            getDescritption()
            ?></p>
    </div>
    <div id="secondBody">
        <h2>Projects</h2>
        <p> <?php
            getTheProject()
            ?></p>
    </div>
    <div id="thirdBody">
        <h2>Skills</h2>
        <p> <?php
            getTheSkills()
            ?></p>
    </div>
    <div id="forthBody">
        <p> <?php
            getTheImage()
            ?></p>
    </div>
</div>





</body>
</html>
