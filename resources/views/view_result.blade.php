@extends('layouts.app')

@section('content')
<title>Online Exam System with PHP & MySQL</title>
<script src="js/jquery.dataTables.min.js"></script>
<script src="js/dataTables.bootstrap.min.js"></script>		
<link rel="stylesheet" href="css/dataTables.bootstrap.min.css" />
<link rel="stylesheet" href="css/TimeCircles.css" />

<div class="container" style="background-color:#f4f3ef;">  
	<h2>Online Exam System</h2>	
	
	<br>		

	<div class="card">
		<div class="card-header">
			<div class="row">
				<div class="col-md-8">Online Exam Result</div>				
			</div>
		</div>
		<div class="card-body">
			<div class="table-responsive">
				<table class="table table-bordered table-hover">
					<tr>
						<th>Question</th>
						<th>Option 1</th>
						<th>Option 2</th>
						<th>Option 3</th>
						<th>Option 4</th>
						<th>Your Answer</th>
						<th>Answer</th>
						<th>Result</th>
						<th>Marks</th>
					</tr>
					
				</table>
			</div>
		</div>
	</div>

</div>

@endsection