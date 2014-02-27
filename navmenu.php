<!DOCTYPE html>
<html lang="en">
    <head>
        <link rel="stylesheet" type="text/css" href="menu.css">
    </head>
    <body>
        <ul id="navmenu" display="inline">
            <li><a href=<?php echo site_url();?>><img src="BeXcellent.jpg" width="150px" height="50px" alt="BeXcellent"></a></li>
            <li id="agegroup" display="inline"><a href=<?php echo site_url() + "ageselect";?>>Age Groups</a>
                <ul class="sub">
                    <li><a href=<?php echo site_url() + "5to8"?>>5-8</a></li>
                    <li><a href=<?php echo site_url() + "8to12"?>>8-12</a></li>
                    <li><a href=<?php echo site_url() + "12to18"?>>12-18</a></li>
                </ul>
            </li>
            <li><a href=<?php echo site_url() + "news"?>>News</a></li>
            <li><a href=<?php echo site_url() + "gallery"?>>Gallery</a>
                <ul class="sub">
                    <li><a href=<?php echo site_url() + "photos"?>>Photos</a></li>
                    <li><a href=<?php echo site_url() + "videos"?>>Videos</a></li>
                </ul>
            </li>
            <li><a href=<?php echo site_url() + "articles"?>>Articles</a></li>
            <li><a href=<?php echo site_url() + "games"?>>Games</a></li>
            <li><a href=<?php echo site_url() + "parents"?>>Parents</a></li>
 <li><a href=<?php echo site_url() + "/about"?>About</a></li>
        </ul>
    </body>
</html>
