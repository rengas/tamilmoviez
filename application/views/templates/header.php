<!DOCTYPE html>
<html>
<title><?php echo $tab; ?></title>
<head>
	<link rel="stylesheet" href="<?php echo(CSS.'button.css'); ?>">
	<link rel="stylesheet" href="<?php echo(CSS.'movie_description.css'); ?>">
</head>
<body>
<div id="container">
  <h1>TamilMoviez.info</h1>  
  <input type="button" value="Movies" id="btns" class="btn" onclick="location.href='<?php echo site_url("movies"); ?>';" />
  <input type="button" value="Actor" id="btns" class="btn"  onclick="location.href='<?php echo site_url("Actor"); ?>';"/>
  <input type="button" value="Director" id="btns" class="btn" onclick="location.href='<?php echo site_url("Director"); ?>';" />
  <input type="button" value="Music Director" id="btns" class="btn"  onclick="location.href='<?php echo site_url("MusicDirector");?>';"/>
  <input type="button" value="Year" id="btns" class="btn" onclick="location.href='<?php echo site_url("year"); ?>';" />