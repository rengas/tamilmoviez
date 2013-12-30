
<div id="list">
<table>
<?php 
	 $item=0;
	 //check whether the number of movies 
	while($item!=$numberofmovies) {	?>
<tr>
	
<?php //loop for every for cells
	for($cell=0;$cell<3;$cell++)
		 { 	if($item==$numberofmovies){break;} ?>
		 <td><a href= "<?php echo site_url("viewers/movies/details_id/".$movies[$item]['Movie_Id'] ) ;?> "> 
		     <?php echo $movies[$item]['Title']; $item++; } }?>
		     </a>
	     </td>
</tr>
</table>
</div>

</div>
</body>
</html>

