@extends('layouts.index')
@section('content')
<h1 class="display-3">View & Edit Aces</h1>
<h3>School name goes here</h3>
<h4>Admin name goes here</h4>
<!-- Example row of columns -->
<div class="row">
    <div class="csv-button-box col-md-4 col-md-offset-1">
        Click here to upload your student CSV file
        <a href="#" class="btn btn-primary">Upload</a>
    </div>
    <div class="csv-button-box col-md-4 col-md-offset-2">
        Click here to upload your staff CSV file
        <a href="#" class="btn btn-primary">Upload</a>
    </div>
</div>

<!--<ul class="nav nav-tabs">
  <li class="active"><a href="#students" data-toggle="tab">Students</a></li>
  <li class=""><a href="#staff" data-toggle="tab">Staff</a></li>
</ul>
<div id="myTabContent" class="tab-content">
  <div class="tab-pane fade active in" id="students">
  students
  </div>
  <div class="tab-pane fade active in" id="staff">
  staff
  </div>
</div>-->
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
            <th>Column heading</th>
            <th>Column heading</th>
            <th>Column heading</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>1</td>
                <td>Column content</td>
                <td>Column content</td>
                <td>Column content</td>
            </tr>
            <tr>
                <td>2</td>
                <td>Column content</td>
                <td>Column content</td>
                <td>Column content</td>
            </tr>
            <tr class="info">
                <td>3</td>
                <td>Column content</td>
                <td>Column content</td>
                <td>Column content</td>
            </tr>
            <tr class="success">
                <td>4</td>
                <td>Column content</td>
                <td>Column content</td>
                <td>Column content</td>
            </tr>
            <tr class="danger">
                <td>5</td>
                <td>Column content</td>
                <td>Column content</td>
                <td>Column content</td>
            </tr>
            <tr class="warning">
                <td>6</td>
                <td>Column content</td>
                <td>Column content</td>
                <td>Column content</td>
            </tr>
            <tr class="active">
                <td>7</td>
                <td>Column content</td>
                <td>Column content</td>
                <td>Column content</td>
            </tr>
        </tbody>
    </table> 

  </div>
  <div class="tab-pane fade" id="staff">
        <table class="table table-striped table-hover ">
        <thead>
            <tr>
            <th>#</th>
            <th>Column heading</th>
            <th>Column heading</th>
            <th>Column heading</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>1</td>
                <td>Column content</td>
                <td>Column content</td>
                <td>Column content</td>
            </tr>
            <tr>
                <td>2</td>
                <td>Column content</td>
                <td>Column content</td>
                <td>Column content</td>
            </tr>
            <tr class="info">
                <td>3</td>
                <td>Column content</td>
                <td>Column content</td>
                <td>Column content</td>
            </tr>
            <tr class="success">
                <td>4</td>
                <td>Column content</td>
                <td>Column content</td>
                <td>Column content</td>
            </tr>
            <tr class="danger">
                <td>5</td>
                <td>Column content</td>
                <td>Column content</td>
                <td>Column content</td>
            </tr>
            <tr class="warning">
                <td>6</td>
                <td>Column content</td>
                <td>Column content</td>
                <td>Column content</td>
            </tr>
            <tr class="active">
                <td>7</td>
                <td>Column content</td>
                <td>Column content</td>
                <td>Column content</td>
            </tr>
        </tbody>
    </table> 
  </div>
</div>
@endsection