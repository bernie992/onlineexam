@extends('layouts.app')

@section('content')
<title>Online Exam System with PHP & MySQL</title>
<script src="js/jquery.dataTables.min.js"></script>
<script src="js/dataTables.bootstrap.min.js"></script>		
<link rel="stylesheet" href="css/dataTables.bootstrap.min.css" />

<div class="container" style="background-color:#f4f3ef;">  
	<h2>Online Exam System</h2>	
    <ul class="nav nav-tabs">	

		<li id="exam" class="active"><a href="{{url('home')}}">Exam</a></li>
		<li id="user"><a href="{{url('user')}}">Users</a></li>				
    </ul>
	
	<br>	
	<h4>User List</h4>
	<br>	
	<div> 	
		<div class="panel-heading">
			<div class="row">
				<div class="col-md-10">
					<h3 class="panel-title"></h3>
				</div>
				<div class="col-md-2" align="right">
                <button type="button" class="btn btn-success btn-xs" data-bs-toggle="modal" data-bs-target="#exampleModal">
                        Add New
                </button>
				</div>
			</div>
		</div>
		<table id="userListing" class="table table-bordered table-striped">
			<thead>
				<tr>						
					<th>Id</th>					
					<th>Name</th>					
					<th>Email</th>
					<th>Gender</th>						
					<th>Mobile</th>	
					<th>Role</th>
					<th></th>
					<th></th>
					<th></th>									
				</tr>
			</thead>
		</table>
	</div>

   
<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Add </h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
						<!-- <div class="form-group"
							<label for="firstName" class="control-label">First Name*</label>
							<input type="text" class="form-control" id="firstName" name="firstName" placeholder="First name" required>			
						</div> -->
						
						<div class="form-group"
							<label for="lastName" class="control-label">Full Name</label>
							<input type="text" class="form-control" id="lastName" name="lastName" placeholder="Full Name" required>			
						</div>
						
						<div class="form-group"
							<label for="username" class="control-label">Email</label>
							<input type="email" class="form-control" id="email" name="email" placeholder="Email" required>			
						</div>
						
						<div class="form-group"
							<label for="mobile" class="control-label">Mobile</label>
							<input type="text" class="form-control" id="mobile" name="mobile" placeholder="mobile" required>			
						</div>
						
						<div class="form-group"
							<label for="address" class="control-label">Address</label>
							<textarea class="form-control" id="address" name="address" placeholder="address" required></textarea>		
						</div>
						
						<!-- <div class="form-group">
							<label for="status" class="control-label">Role</label>				
							<select id="role" name="role" class="form-control">
							<option value="admin">Admin</option>				
							<option value="user">User</option>	
							</select>						
						</div>	
						 -->
						<div class="form-group">
							<label for="gender" class="control-label">Gender</label>				
							<select id="gender" name="gender" class="form-control">
							<option value="Male">Male</option>				
							<option value="Female">Female</option>	
							</select>						
						</div>

						<div class="form-group"
							<label for="username" class="control-label">New Password</label>
							<input type="password" class="form-control" id="newPassword" name="newPassword" placeholder="Password">			
						</div>											
						
					</div>
					<div class="modal-footer">
						<input type="hidden" name="userId" id="userId" />
						<input type="hidden" name="action" id="action" value="" />
						<input type="submit" name="save" id="save" class="btn btn-info" value="Save" />
						<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
					</div>
				
      
    </div>
  </div>
</div>

@endsection