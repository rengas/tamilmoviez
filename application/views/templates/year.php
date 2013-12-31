
<div id="list">
<table>
<?php 
	 $item=0;
	 //check whether the number of movies 
	while($item!=$numberofyear) {	?>
<tr>
	
<?php //loop for every for cells
	for($cell=0;$cell<5;$cell++)
		 { 	if($item==$numberofyear){break;} ?>
		 <td><a href= "<?php echo site_url("viewers/year/choosen/".$movies[$item]['Released'] ) ;?> "> 
		     <?php echo $movies[$item]['Released'].'('.$movies[$item]['counter'].')'; $item++; } }?>
		     </a>
	     </td>
</tr>
</table>
</div>

</div>
</body>
</html>

