<!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title><?php echo $pageTitle; ?></title>

    <link href='http://fonts.googleapis.com/css?family=Ubuntu:700|Merriweather' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" type="text/css" href="styles/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="styles/indexStyle.css">
</head>
<body>
<header>
    <div class="container">
        <div class="masthead">
            <h1><a href="./">Mirza Sulman Baig</a></h1>
            <nav>
                <ul class="nav nav-justified">
                    <li class="<?php if($section == "home"){echo "active";} else {echo "";} ?>"><a href="./">Home</a></li>
                    <li class="<?php if($section == "myCv"){echo "active";} else {echo "";} ?>"><a href="myCv/cv.html">My CV</a></li>
                    <li class="<?php if($section == "testPages"){echo "active";} else {echo "";} ?>"><a href="#">Test Pages</a></li>
                    <li class="<?php if($section == "contactMe"){echo "active";} else {echo "";} ?>"><a href="#">Contact Me</a></li>
                </ul>
            </nav>
        </div>
    </div>
</header>