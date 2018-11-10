<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8" name="viewport" content="width=device-width, initial-scale=1"/>
		<link rel="stylesheet" type="text/css" href="css/bootstrap.css"/>
	</head>
<body>
	<nav class="navbar navbar-default">
		<div class="container-fluid">
			<a class="navbar-brand" href="https://sourcecodester.com">Sourcecodester</a>
		</div>
	</nav>
	<div class="col-md-3"></div>
	<div class="col-md-6 well">
		<h3 class="text-primary">PHP - Submit Multiple Checkbox Data</h3>
		<hr style="border-top:1px dotted #ccc;"/>
		<button type="button" class="btn btn-success" data-toggle="modal" data-target="#form_modal"><span class="glyphicon glyphicon-plus"></span> Add Member</button>
		<br /><br />
		<table class="table table-bordered">
			<thead class="alert-info">
				<tr>
					<th>Firstname</th>
					<th>Lastname</th>
					<th>Address</th>
					<th>Skill</th>
				</tr>
			</thead>
			<tbody style="background-color:#fff;">
				<?php
					require 'conn.php';
					$stmt = mysqli_stmt_init($conn);
					if(mysqli_stmt_prepare($stmt, "SELECT * FROM `member`")){
						mysqli_stmt_execute($stmt);
						mysqli_stmt_bind_result($stmt, $mem_id, $firstname, $lastname, $address, $skill);
						while(mysqli_stmt_fetch($stmt)){
				?>
				<tr>
					<td><?php echo $firstname?></td>
					<td><?php echo $lastname?></td>
					<td><?php echo $address?></td>
					<td><?php echo $skill?></td>
				</tr>
				<?php
						}
						mysqli_stmt_close($stmt);
					}
				?>
			</tbody>
		</table>
	</div>
	<div class="modal fade" id="form_modal" tabindex="-1" role="dialog" aria-hidden="true">
		<div class="modal-dialog" role="document">
			<form action="save_data.php" method="POST">
				<div class="modal-content">
					<div class="modal-body">
						<div class="col-md-3"></div>
						<div class="col-md-6">
							<div class="form-group">
								<label>Firstname:</label>
								<input type="text" class="form-control" name="firstname" required="required"/>
							</div>
							<div class="form-group">
								<label>Lastname:</label>
								<input type="text" class="form-control" name="lastname" required="required"/>
							</div>
							<div class="form-group">
								<label>Address:</label>
								<input type="text" class="form-control" name="address" required="required"/>
							</div>
							<div>
								<label>Skill:</label>
								<br style="clear:both;"/>
								<div class="col-md-6">
									<div class="checkbox">
										<label><input type="checkbox" name="skill[]" value="C" >C</label>
									</div>
									<div class="checkbox">
										<label><input type="checkbox" name="skill[]" value="C++">C++</label>
									</div>
									<div class="checkbox">
										<label><input type="checkbox" name="skill[]" value="C#">C#</label>
									</div>
									<div class="checkbox">
										<label><input type="checkbox" name="skill[]" value="PHP">PHP</label>
									</div>
									<div class="checkbox">
										<label><input type="checkbox" name="skill[]" value="PASCAL">PASCAL</label>
									</div>
								</div>
								<div class="col-md-6">
									<div class="checkbox">
										<label><input type="checkbox" name="skill[]" value="Visual Basic">Visual Basic</label>
									</div>
									<div class="checkbox">
										<label><input type="checkbox" name="skill[]" value="Python">Python</label>
									</div>
									<div class="checkbox">
										<label><input type="checkbox" name="skill[]" value="Java">Java</label>
									</div>
									<div class="checkbox">
										<label><input type="checkbox" name="skill[]" value="Ruby">Ruby</label>
									</div>
									<div class="checkbox">
										<label><input type="checkbox" name="skill[]" value="Swift">Swift</label>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div style="clear:both;"></div>
					<div class="modal-footer">
						<button type="button" class="btn btn-danger" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Close</button>
						<button name="save" class="btn btn-primary"><span class="glyphicon glyphicon-save"></span> Save</button>
					</div>
				</div>
			</form>
		</div>
	</div>
</body>
<script src="js/jquery-3.2.1.min.js"></script>
<script src="js/bootstrap.js"></script>
</html>