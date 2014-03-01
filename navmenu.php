<!DOCTYPE html>
<html lang="en">
    <head>
        <link rel="stylesheet" type="text/css" target="_parent" href="css/menu.css">
    </head>
    <body>
	<div id="navdiv">
        <ul id="navmenu" display="inline">
            <li><a target="_parent" href="/"><img src="BeXcellent.jpg" width="150px" height="50px" alt="BeXcellent"></a></li>
            <li display="inline"><a target="_parent" href="<?php echo 'http://' . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URL']; ?>/ageselect">Age Selection</a>
            </li>
            <li><a target="_parent" href="<?php echo 'http://' . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URL']; ?>/news">News</a></li>
            <li><a target="_parent" href="<?php echo 'http://' . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URL']; ?>/gallery">Gallery</a>
            </li>
            <li><a target="_parent" href="<?php echo 'http://' . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URL']; ?>/articles">Articles</a></li>
            <li><a target="_parent" href="<?php echo 'http://' . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URL']; ?>/games">Games</a></li>
            <li><a target="_parent" href="<?php echo 'http://' . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URL']; ?>/parents">Parents</a></li>
 <li><a target="_parent" href="<?php echo 'http://' . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URL']; ?>/about"?>About</a></li>
        </ul>
	</div
    </body>
</html>
