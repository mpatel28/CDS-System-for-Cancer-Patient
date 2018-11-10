<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8" name="viewport" content="width=device-width, initial-scale=1"/>
		<link rel="stylesheet" type="text/css" href="css/bootstrap.css"/>
	</head>
<body>
	<nav class="navbar navbar-default">
		<div class="container-fluid">
			<a class="navbar-brand" href="#"</a>
		</div>
	</nav>
	<div class="col-md-3"></div>
	<div class="col-md-8 well">
		<h3 class="text-primary">Allergies</h3>
		<hr style="border-top:1px dotted #ccc;"/>
		<button type="button" class="btn btn-success" data-toggle="modal" data-target="#form_modal"><span class="glyphicon glyphicon-plus"></span> Patient Name</button>
		<br /><br />
		<table class="table table-bordered">
			<thead class="alert-info">
				<tr>
					<th>Firstname</th>
					<th>Lastname</th>
					<th>Address</th>
					<th>Skin Allergies</th>
	<th>Food Allergies</th>

	<th>Drugs Allergies</th>

				</tr>
			</thead>
			<tbody style="background-color:#fff;">
				<?php
					require 'conn.php';
					$stmt = mysqli_stmt_init($conn);
					if(mysqli_stmt_prepare($stmt, "SELECT * FROM `member`")){
						mysqli_stmt_execute($stmt);
						mysqli_stmt_bind_result($stmt, $mem_id, $firstname, $lastname, $address, $skinallergies, $foodallergies, $drugallergies);
						while(mysqli_stmt_fetch($stmt)){
				?>
				<tr>
					<td><?php echo $firstname?></td>
					<td><?php echo $lastname?></td>
					<td><?php echo $address?></td>
					<td><?php echo $skinallergies?></td>
<td><?php echo $foodallergies?></td>

<td><?php echo $drugallergies?></td>

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
						<div class="col-md-8">
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
								<label>Skin Allergies:</label>
								<br style="clear:none;"/>
								<div class="col-md-8">
									
<div class="checkbox">
										<label><input type="checkbox" name="skinallergies[]" value="Eczema" >Eczema</label>
									</div>
									<div class="checkbox">
										<label><input type="checkbox" name="skinallergies[]" value="Hives">Hives</label>
									</div>
									<div class="checkbox">
										<label><input type="checkbox" name="skinallergies[]" value="Warts">Warts</label>
									</div>


<label>Food Allergies:</label>
								<br style="clear:none;"/>
								<div class="col-md-8">
									<div class="checkbox">
										<label><input type="checkbox" name="foodallergies[]" value="Egg" >Egg</label>
									</div>
									<div class="checkbox">
										<label><input type="checkbox" name="foodallergies[]" value="Milk">Milk</label>
									</div>
									<div class="checkbox">
										<label><input type="checkbox" name="foodallergies[]" value="Peanut">Peanut</label>
									</div>

<div class="checkbox">
										<label><input type="checkbox" name="foodallergies[]" value="Treenut">Treenut</label>
									</div>
<div class="checkbox">
										<label><input type="checkbox" name="foodallergies[]" value="Fish">Fish</label>
									</div>
<div class="checkbox">
										<label><input type="checkbox" name="foodallergies[]" value="Wheat">Wheat</label>
									</div>
<div class="checkbox">
										<label><input type="checkbox" name="foodallergies[]" value="Soya">Soya</label>
									</div>


<label>Drug Allergies:</label>
								<br style="clear:none;"/>
								<div class="col-md-8">
									<div class="checkbox">
										<label><input type="checkbox" name="drugallergies[]" value="penicillin" >penicillin</label>
									</div>
									<div class="checkbox">
										<label><input type="checkbox" name="drugallergies[]" value="Antibiotics(Sulphur drugs)">Antibiotics(Sulphur drugs)"</label>
									</div>
									<div class="checkbox">
										<label><input type="checkbox" name="drugallergies[]" value="AntiInflammartory drugs">AntiInflammartory drugs</label>
									</div>

<div class="checkbox">
										<label><input type="checkbox" name="drugallergies[]" value="ChemoTherapy">ChemoTherapy</label>
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