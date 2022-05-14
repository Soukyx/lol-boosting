<?php
  session_start();

  include("connection.php");
  include("functions.php");

  $user_data = check_login($con);
include 'backend/database.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">

	<title>ShinobiBoosting - Boosters</title>
  <link rel="stylesheet" href="css/boosters.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto|Varela+Round">
	<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<script src="ajax/ajax.js"></script>
</head>
<body id="myPage" data-spy="scroll" data-target=".navbar" data-offset="50" style="background-image: url(gwen.jpg);
    background-position: center center;
    background-repeat: no-repeat;
    background-attachment: fixed;
    background-size: cover;"
    >
<div style="background-color:rgba(0, 0, 0, 0.7);">
    <nav class="navbar navbar-expand-md navbar-dark">
      <!--logo stranky=odkaz na homepage-->
      <a class="navbar-brand navbar-nav" href="adminindex.php">
        <img id="logo" src="logo.png" alt="logo" style="width:32px;">Shinobi | Boosting
      </a>
            <!--navbar a collapse pri zmenseni stranky-->
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse justify-content-xl-end" id="collapsibleNavbar">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link" href="adminboosters.php">Our Boosters</a>
        </li>
        <li class="nav-item" id="review">
          <a class="nav-link" href="adminreview.php">Review</a>
        </li>
        <li class="nav-item " id="login">
          <a class="nav-link" href="adminindex.php">Profile</a>
        </li>
      </ul>
    </nav>
    
</div>
<div class="container">
    <div id="card" class="card card-container">
	<p id="success"></p>
        <div class="table-wrapper">
            <div class="table-title">
                <div class="row">
                    <div class="col-sm-6">
						<h2>Manage Employees</h2>
					</div>
					<div class="col-sm-6">
						<a href="#addEmployeeModal" class="btn btn-success " data-toggle="modal"> <span>Add New Employee</span></a>
						<a href="JavaScript:void(0);" class="btn btn-danger" id="delete_multiple"><span>Delete</span></a>						
					</div>
                </div>
            </div>
            <table class="table table-striped table-hover">
                    <tr>
						<th>
							<span class="custom-checkbox">
								<input type="checkbox" id="selectAll">
								<label for="selectAll"></label>
							</span>
						</th>
						<th>ID</th>
                        <th>NAME</th>
                        <th>DESCRIPTION</th>
                    </tr>
				<tbody>
				
				<?php
				$result = mysqli_query($conn,"SELECT * FROM staff");
					$i=1;
					while($row = mysqli_fetch_array($result)) {
				?>
				<tr id="<?php echo $row["staff_id"]; ?>">
				<td>
							<span class="custom-checkbox">
								<input type="checkbox" class="user_checkbox" data-user-id="<?php echo $row["staff_id"]; ?>">
								<label for="checkbox2"></label>
							</span>
						</td>
					<td><?php echo $i; ?></td>
					<td><?php echo $row["staff_name"]; ?></td>
					<td><?php echo $row["descr"]; ?></td>

					<td>
						<a href="#editEmployeeModal" class="edit" data-toggle="modal">
							
							<i class="material-icons update" data-toggle="tooltip" 
							
							data-id="<?php echo $row["staff_id"]; ?>"
							data-name="<?php echo $row["staff_name"]; ?>"
							data-email="<?php echo $row["descr"]; ?>"
							
							title="Edit">&#xE254;</i>
						</a>
						<a href="#deleteEmployeeModal" class="delete" data-id="<?php echo $row["staff_id"]; ?>" data-toggle="modal"><i class="material-icons" data-toggle="tooltip" 
						 title="Delete">&#xE872;</i></a>		   
                    </td>
				</tr>
					</form>
				<?php
				$i++;
				}
				?>
				</tbody>
			</table>
			
        </div>
    </div>
	<!-- Add Modal HTML -->
	<div id="addEmployeeModal" class="modal fade">
		<div class="modal-dialog">
			<div class="modal-content"  style="background-color: rgb(22, 22, 22);">
				<form id="user_form">
					<div class="modal-header">						
						<h4 class="modal-title" style="color: #d5d5d5;">Add User</h4>
						<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
					</div>
					<div class="modal-body">					
						<div class="form-group">
							<label  style="color: #d5d5d5;">NAME</label>
							<input type="text" id="name" name="staff_name" class="form-control" required>
						</div>
						<div class="form-group">
							<label  style="color: #d5d5d5;">DESCRIPTION</label>
							<input type="text" id="email" name="descr" class="form-control" required>
						</div>				
						
					</div>
					<div class="modal-footer">
					    <input type="hidden" value="1" name="type">
						<input type="button" class="btn btn-danger btn-lg btn-block" data-dismiss="modal" value="Cancel">
						<button type="button" class="btn btn-lg btn-primary btn-block btn-signin" id="btn-add">Add</button>
					</div>
				</form>
			</div>
		</div>
	</div>
	<!-- Edit Modal HTML -->
	<div id="editEmployeeModal" class="modal fade">
		<div class="modal-dialog">
			<div class="modal-content"  style="background-color: rgb(22, 22, 22);">
				<form id="update_form">
					<div class="modal-header">						
						<h4 class="modal-title"  style="color: #d5d5d5;">Edit User</h4>
						<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
					</div>
					<div class="modal-body">
						<input type="hidden" id="id_u" name="staff_id" class="form-control" required>					
						<div class="form-group">
							<label  style="color: #d5d5d5;">Name</label>
							<input type="text" id="name_u" name="staff_name" class="form-control" required>
						</div>
						<div class="form-group">
							<label style="color: #d5d5d5;">DESCRIPTION</label>
							<input type="text" id="email_u" name="descr" class="form-control" required>
						</div>				
					</div>
					<div class="modal-footer">
					<input type="hidden" value="2" name="type">
						<input type="button" class="btn btn-default" data-dismiss="modal" value="Cancel">
						<button type="button" class="btn btn-info" id="update">Update</button>
					</div>
				</form>
			</div>
		</div>
	</div>
	<!-- Delete Modal HTML -->
	<div id="deleteEmployeeModal" class="modal fade">
		<div class="modal-dialog">
			<div class="modal-content"  style="background-color: rgb(22, 22, 22);">
				<form>
						
					<div class="modal-header">						
						<h4 class="modal-title" style="color: #d5d5d5;">Delete Employee</h4>
						<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
					</div>
					<div class="modal-body">
						<input type="hidden" id="id_d" name="staff_id" class="form-control">					
						<p>Are you sure you want to delete these Records?</p>
						<p class="text-warning"><small>This action cannot be undone.</small></p>
					</div>
					<div class="modal-footer">
						<input type="button" class="btn btn-default" style="color: #d5d5d5;" data-dismiss="modal" value="Cancel">
						<button type="button" class="btn btn-danger" id="delete">Delete</button>
					</div>
				</form>
			</div>
		</div>
	</div>
			</div>
			</div>
</body>
</html>                                		                            