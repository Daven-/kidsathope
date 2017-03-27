@extends('layouts.index')
@section('content')
<h1 class="display-3">View & Edit Aces</h1>
<h3>Alexander Hamilton Elementary</h3>
<h4>Angelica Schyuler</h4>
<!-- Example row of columns -->
<div class="csv-boxes-row row">
    <div class="csv-button-box col-md-4 col-md-offset-1">
        Click here to upload your student CSV file
        <a href="#" class="btn btn-primary">Upload</a>
    </div>
    <div class="csv-button-box col-md-4 col-md-offset-2">
        Click here to upload your staff CSV file
        <a href="#" class="btn btn-primary">Upload</a>
    </div>
</div>
<div class="admin-table-row row">
	<div class="col-md-12">
		<ul class="nav nav-tabs">
			<li class="active"><a href="#students" data-toggle="tab" aria-expanded="true">Students</a></li>
			<li class=""><a href="#staff" data-toggle="tab" aria-expanded="false">Staff</a></li>
		</ul>
	<div id="myTabContent" class="tab-content">
		<div class="tab-pane fade active in" id="students">
			<table class="table table-striped table-hover ">
					<thead>
							<tr>
							<th>#</th>
							<th>Student Name</th>
							<th>Grade</th>
							<th>Aces</th>
							</tr>
					</thead>
					<tbody>
							<tr>
									<td>1</td>
									<td>Jerry Riggs</td>
									<td>3</td>
									<td>2</td>
							</tr>
							<tr>
									<td>2</td>
									<td>Bing Crosby</td>
									<td>4</td>
									<td>6</td>
							</tr>
					</tbody>
			</table> 
		</div>
		<div class="tab-pane fade" id="staff">
			<table class="table table-striped table-hover ">
				<thead>
						<tr>
						<th>#</th>
						<th>Staff Name</th>
						<th>Teaches Grade</th>
						<th># of children Aces</th>
						</tr>
				</thead>
				<tbody>
						<tr>
							<td>1</td>
							<td>Arnold Schwarzenegger</td>
							<td>3</td>
							<td>22</td>
						</tr>
						<tr>
							<td>2</td>
							<td>The Rock</td>
							<td>2</td>
							<td>16</td>
						</tr>
						<tr>
							<td>3</td>
							<td>Billy Bob Thornton</td>
							<td>5</td>
							<td>-1</td>
						</tr>
				</tbody>
			</table> 
		</div>
	</div>
</div>
@endsection