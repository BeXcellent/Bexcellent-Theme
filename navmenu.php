<!DOCTYPE html>
<html lang="en">
    <head>
        <link rel="stylesheet" type="text/css" href="menu.css">
    </head>
    <body>
        <ul id="navmenu" display="inline">
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
        </ul>
    </body>
</html>
