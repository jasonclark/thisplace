<?php
//assign value for title of page
$pageTitle = 're: This Place - Location Matters';
$subTitle = 'MSU Libraries';
//declare filename for additional stylesheet variable - default is "none"
$customCSS = 'global.css';
//create an array with filepaths for multiple page scripts - default is meta/scripts/global.js
$customScript[0] = './meta/scripts/global.js';
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">
<head>
<title><?php echo($pageTitle); ?> : Montana State University Libraries</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="alternate" type="application/rss+xml" title="MSU Libraries: Tools" href="http://feeds.feedburner.com/msulibrarySpotlightTools" />
<?php
if ($customCSS != 'none') {
?>
<link href="<?php echo dirname($_SERVER['PHP_SELF']); ?>/meta/styles/<?php echo $customCSS; ?>" rel="stylesheet"/>
<?php
}
?>
</head>
<body class="<?php if(!isset($_GET['view'])) { echo 'code'; } else { echo $_GET['view']; } ?>">
<h1><?php echo $pageTitle; ?><span>: <?php echo $subTitle; ?></span><small>(working code and proof of concepts)</small></h1>
<div class="container">
    <ul id="tabs">
        <li id="tab1"><a href="./index.php">Demo App</a></li>
        <li id="tab2"><a href="./what.php">What is this?</a></li>
        <li id="tab3"><a href="./code.php">View Code</a></li>
    </ul><!-- end tabs unordered list -->
	<div class="main">
		<h2 class="mainHeading">CODE: "this place" search app using Open Library API for thumbnails, Google Maps Search API for Geolocation, and Worldcat Basic Search API for Item Results</h2>
		<p>Source code is available at <a href="http://www.jasonclark.info">jasonclark.info</a> and on <a href="https://github.com/jasonclark/this-place">GitHub</a></a></p>
	</div><!-- end div main -->
</div><!-- end container div -->
<?php
if ($customScript) {
  $counted = count($customScript);
  for ($i = 0; $i < $counted; $i++) {
?>
<script type="text/javascript" src="<?php echo $customScript[$i]; ?>" defer></script>
<?php
  }
}
?>
</body>
</html>
