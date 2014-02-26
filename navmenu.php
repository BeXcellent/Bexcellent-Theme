<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <title>Navigation Menu</title>
        <link href="menu.css" rel="stylesheet" type="text/css">
    </head>
    <body>
        <ul id="navmenu">
            <li><a href=<?php echo $_SERVER['PHP_SELF'] + "articles"?>><img src="BeXcellent.jpg" width="150px" height="50px" alt="bexcellent"></a></li>
            <li id="agegroup"><a href=<?php echo $_SERVER['PHP_SELF'] + "ageselect"?>>Age Groups</a>
                <ul class="sub">
                    <li><a href=<?php echo $_SERVER['PHP_SELF'] + "5to8"?>>5-8</a></li>
                    <li><a href=<?php echo $_SERVER['PHP_SELF'] + "8to12"?>>8-12</a></li>
                    <li><a href=<?php echo $_SERVER['PHP_SELF'] + "12to18"?>>12-18</a></li>
                </ul>
            </li>
            <li><a href=<?php echo $_SERVER['PHP_SELF'] + "about"?>About BeXcellent</a></li>
            <li><a href=<?php echo $_SERVER['PHP_SELF'] + "news"?>>News</a></li>
            <li><a href=<?php echo $_SERVER['PHP_SELF'] + "gallery"?>>Gallery</a>
                <ul class="sub">
                    <li><a href=<?php echo $_SERVER['PHP_SELF'] + "photos"?>>Photos</a></li>
                    <li><a href=<?php echo $_SERVER['PHP_SELF'] + "videos"?>>Videos</a></li>
                </ul>
            </li>
            <li><a href=<?php echo $_SERVER['PHP_SELF'] + "articles"?>>Articles</a></li>
            <li><a href=<?php echo $_SERVER['PHP_SELF'] + "games"?>>Games</a></li>
            <li><a href=<?php echo $_SERVER['PHP_SELF'] + "parents"?>>Parents</a></li>
        </ul>
    </body>
</html>
