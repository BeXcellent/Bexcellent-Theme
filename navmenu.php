<!DOCTYPE html>
<html lang="en">
    <head>
        <link rel="stylesheet" type="text/css" href="menu.css">
    </head>
    <body>
        <ul id="navmenu" display="inline">
            <li id="agegroup" display="inline"><a href=<?php echo getenv('HTTP_HOST') + "ageselect";?>>Age Groups</a>
                <ul class="sub">
                    <li><a href=<?php echo getenv('HTTP_HOST') + "5to8"?>>5-8</a></li>
                    <li><a href=<?php echo getenv('HTTP_HOST') + "8to12"?>>8-12</a></li>
                    <li><a href=<?php echo getenv('HTTP_HOST') + "12to18"?>>12-18</a></li>
                </ul>
            </li>
            <li><a href=<?php echo getenv('HTTP_HOST');?>><img src="BeXcellent.jpg" width="150px" height="50px" alt="bexcellent"></a></li>
            <li><a href=<?php echo getenv('HTTP_HOST') + "news"?>>News</a></li>
            <li><a href=<?php echo getenv('HTTP_HOST') + "gallery"?>>Gallery</a>
                <ul class="sub">
                    <li><a href=<?php echo getenv('HTTP_HOST') + "photos"?>>Photos</a></li>
                    <li><a href=<?php echo getenv('HTTP_HOST') + "videos"?>>Videos</a></li>
                </ul>
            </li>
            <li><a href=<?php echo getenv('HTTP_HOST') + "articles"?>>Articles</a></li>
            <li><a href=<?php echo getenv('HTTP_HOST') + "games"?>>Games</a></li>
            <li><a href=<?php echo getenv('HTTP_HOST') + "parents"?>>Parents</a></li>
 <li><a href=<?php echo getenv('HTTP_HOST') + "about"?>About BeXcellent</a></li>
        </ul>
    </body>
</html>
