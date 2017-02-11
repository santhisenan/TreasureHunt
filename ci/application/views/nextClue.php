<div class="jumbotron section-one">
	<span class="section-head">Clue for this level</span>
	<br/>
	<span>
		Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
	</span>
</div>

<div class="row">
	<div class="col-md-6 col-md-offset-3">
	<div class="dest-container jumbotron">
		
		<span class="dest-head">
			Next Destination - <?php echo $row->nextlevel; ?>
	</div>	
	</div>
<form action="<?php echo base_url("loginController/logout") ?>">
<div class = "form-group row">
<div class="col-md-4 col-md-offset-4 col-xs-6 col-xs-offset-3 submit-btn-div">						
<button class="btn-primary submit-btn" type="submit" name="submit" value="Login">Logout</button>
</div>
</div>
</form>

