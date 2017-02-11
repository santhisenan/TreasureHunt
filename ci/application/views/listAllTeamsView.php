

	<div class="table-responsive">
    <table class="table table-bordered listall-table">
    <tr>
    	<th>id</th>
    	<th>Name</th>
    	<th>Password</th>
    	<th>Clue</th>
    	<th>Next Level</th>
    </tr>
    <?php foreach ($rows as $row) { ?>
		<tr>
			<td><?php echo $row['id'];?></td>
			<td><?php echo $row['team'];?></td>
			<td><<?php echo $row['password'];?>/td>
			<td><?php echo $row['clue'];?></td>
			<td><?php echo $row['nextlevel'];?></td>
		</tr>
	<?php } 
	?>    
    </table>
    </div>
















