@extends('layouts.app')

@section('content')
<title>Online Exam System with PHP & MySQL</title>
<script src="js/jquery.dataTables.min.js"></script>
<script src="js/dataTables.bootstrap.min.js"></script>		
<link rel="stylesheet" href="css/dataTables.bootstrap.min.css" />

<div class="container" style="background-color:#f4f3ef;">  
	<h2>Online Exam System</h2>	
	
	<br>	
	<div> 	
		<div class="panel-heading">
			<div class="row">
				<div class="col-md-10">
					<h3 class="panel-title"></h3>
				</div>
				<div class="col-md-2" align="right">
					<button type="button" id="addQuestions" class="btn btn-info" title="Add Questions"data-bs-toggle="modal" data-bs-target="#exampleModal">
                        <span class="glyphicon glyphicon-plus"></span>
                        <i class="fa fa-plus"></i>
                    </button>
				</div>
			</div>
		</div>
		<table id="questionsListing" class="table table-bordered table-striped">
			<thead>
				<tr>						
					<th>Id</th>					
					<th>Question</th>					
					<th>Right Option</th>					
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
        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
						
						<div class="form-group">
							<div class="row">
								<label class="col-md-4 text-right">Question Title <span class="text-danger">*</span></label>
								<div class="col-md-8">
									<input type="text" name="question_title" id="question_title" autocomplete="off" class="form-control" />
								</div>
							</div>
						</div>
						
						<div class="form-group">
							<div class="row">
								<label class="col-md-4 text-right">Option 1 <span class="text-danger">*</span></label>
								<div class="col-md-8">
									<input type="text" name="option_title_1" id="option_title_1" autocomplete="off" class="form-control" />
								</div>
							</div>
						</div>
						<div class="form-group">
							<div class="row">
								<label class="col-md-4 text-right">Option 2 <span class="text-danger">*</span></label>
								<div class="col-md-8">
									<input type="text" name="option_title_2" id="option_title_2" autocomplete="off" class="form-control" />
								</div>
							</div>
						</div>
						<div class="form-group">
							<div class="row">
								<label class="col-md-4 text-right">Option 3 <span class="text-danger">*</span></label>
								<div class="col-md-8">
									<input type="text" name="option_title_3" id="option_title_3" autocomplete="off" class="form-control" />
								</div>
							</div>
						</div>
						<div class="form-group">
							<div class="row">
								<label class="col-md-4 text-right">Option 4 <span class="text-danger">*</span></label>
								<div class="col-md-8">
									<input type="text" name="option_title_4" id="option_title_4" autocomplete="off" class="form-control" />
								</div>
							</div>
						</div>
						<div class="form-group">
							<div class="row">
								<label class="col-md-4 text-right">Answer <span class="text-danger">*</span></label>
								<div class="col-md-8">
									<select name="answer_option" id="answer_option" class="form-control">
										<option value="">Select</option>
										<option value="1">1 Option</option>
										<option value="2">2 Option</option>
										<option value="3">3 Option</option>
										<option value="4">4 Option</option>
									</select>
								</div>
							</div>
						</div>					
								
					</div>
					<div class="modal-footer">
						<input type="hidden" name="id" id="id" />
						<input type="hidden" name="exam_id" id="exam_id" />
						<input type="hidden" name="action" id="action" value="" />
						<input type="submit" name="save" id="save" class="btn btn-info" value="Save" />
						<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
					</div>
     
    </div>
  </div>
</div>
@endsection