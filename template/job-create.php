<?php include 'inc/header.php';?>
	<h2 class="page-header">Create Job Listing</h2>
	<form action="create.php" method="post">
		<div class="form-group">
			<label>Company</label>
			<input type="text" class="form-control" name="company" require>
		</div>
		<div class="form-group">
			<label>Category</label>
			<select class="form-control" name="category_id">
				<option value="0">Choose Category</option>
                <?php foreach ($categories as $category): ?>
                    <option value="<?php echo $category->id; ?>"><?php echo $category->name; ?></option>
                <?php endforeach;?>
			</select>
		</div>
		<div class="form-group">
			<label>Job Title</label>
			<input type="text" class="form-control" name="job_title" require>
		</div>
		<div class="form-group">
			<label>Description</label>
			<textarea class="form-control" name="job_description" ></textarea>
		</div>
		<div class="form-group">
			<label>Location</label>
			<input type="text" class="form-control" name="job_location" require>
		</div>
		<div class="form-group">
			<label>Salary</label>
			<input type="text" class="form-control" name="salary" require>
		</div>
		<div class="form-group">
			<label>Contact User</label>
			<input type="text" class="form-control" name="contact_user" require>
		</div>
		<div class="form-group">
			<label>Contact Email</label>
			<input type="text" class="form-control" name="contact_email" require>
		</div>
		<input type="submit" class="btn btn-dark" value="Submit" name="submit">
	</form>
    <br>
<?php include 'inc/footer.php';?>