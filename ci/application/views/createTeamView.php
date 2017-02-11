

	<div class="row">
		<div class="col-md-4 col-md-offset-4">
			<div class="form-container add-new-team-form-container">
			<span>Add a new team</span>
				<form action="createTeam/addteam" method="POST">
				<input type="text" class="form-control add-new-team-form" placeholder="Name of the team" name="teamName" required/>
				<input type="password" class="form-control add-new-team-form" placeholder="Answer" name="answer" required/>
				<input type="text" class="form-control add-new-team-form" placeholder="Question" name="question" required />
				<input type="text" class="form-control add-new-team-form" placeholder="Next Level" name="nextLevel" required>
				<div class="row">
				<div class="col-md-2 col-md-offset-3">
				<button type="submit" class="btn-primary submit-btn">Submit</button>
				</div>
				</div>
				</form>
			</div>
		</div>
	</div>

