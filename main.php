<?php include "browserdetect.php"; ?>

<html>
<head>

<?php if ($iphone == '1'): ?>
<meta name="viewport" content="width=320" />
<link rel="stylesheet" href="css/safari-mobile.css" title="default" type="text/css">
<?php elseif ($iphone == '2'): ?>
<meta name="viewport" content="width=980" />
<link rel="stylesheet" href="css/safari-mobile.css" title="default" type="text/css">
<?php else: ?>
<meta name="viewport" content="width=1024" />
<link rel="stylesheet" href="css/desktop.css" title="default" type="text/css">
<?php endif; ?>

</head>
<body>
<div id="container">
 <div id="header">
  <div id="utility">
   <ul>
   <li><a href="getalbumsgeneric.php" target="main">Music Albums</a></li>
   <li><a href="getartists.php" target="main">Music Artists</a></li>
   <li><a href="getmusicsources.php" target="main">Music Sources</a></li>
   <li><a href="getmovies.php" target="main">Movies</a></li>
   <li><a href="gettvshows.php" target="main">TV Shows</a></li>
   <li><a href="getmoviesources.php" target="main">Video Sources</a></li>
   <li><a href="remote.php" target="main">Remote Control</a></li>
   <li><a href="getplaylist.php" target="main">Show Playlist</a></li>
   </ul>
  </div>
 </div>
</div>
</body>
</html>

